<?php

namespace App\Http\Controllers;

use App\Service\SpeakerService;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    use ApiTrait;

    private $sponsorTypes = ['tony_stark', 'bruce_wayne', 'hacker', 'geek', 'developer', 'education', 'special_thanks', 'co-organizer', 'ksg_support'];
    private $displayName = [
        ['name' => 'Tony Stark'],
        ['name' => 'Bruce Wayne'],
        ['name' => 'Hacker'],
        ['name' => 'Geek'],
        ['name' => 'Developer'],
        ['name' => '教育贊助', 'name_e' => 'Education Sponsor'],
        ['name' => '特別感謝', 'name_e' => 'Special Thanks'],
        ['name' => '協辦單位', 'name_e' => 'Co Organizer'],
        ['name' => '高雄市經濟發展局獎勵會議展覽活動計畫贊助']
    ];
    private $speakerAry = [];
    protected $function = 'sponsor';
    private $speakerService;

    /**
     * Get all or specific Sponsors information.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $sponsorIds = $request->get('sponsor_id', '');
        $sponsorIdArr = $sponsorIds == '' ? [] : explode(",", $sponsorIds);
        $speakerFilePath = env('APP_ENV') === 'production' ? 'speaker.json' : 'speaker-dev.json';
        $this->speakerAry = json_decode(file_get_contents($this->path . $speakerFilePath), true);
        $sessionFileName = env('APP_ENV') === 'production' ? '/session.json' : '/session-dev.json';
        $sessionAry = json_decode(file_get_contents($this->path . $sessionFileName), true);
        $this->speakerService = new SpeakerService($sessionAry);

        return count($sponsorIdArr) ? $this->getSpecificSponsors($this->jsonAry, $sponsorIdArr) : $this->getAllSponsors($this->jsonAry);
    }

    private function getAllSponsors($sponsorJson)
    {
        $data = [];
        foreach ($sponsorJson as $sponsor) {
            $index = array_search($sponsor['sponsor_type'], $this->sponsorTypes);
            if (!array_key_exists($index, $data)) {
                $data[$index] = [
                    'name' => $this->displayName[$index]['name'],
                    'name_e' => $this->displayName[$index]['name_e'] ?? $this->displayName[$index]['name'],
                    'data' => [],
                ];
            }
            array_push($data[$index]['data'], $this->extractor($sponsor));
        }

        return $this->returnSuccess('success', array_values($data));
    }

    private function getSpecificSponsors($sponsorJson, $sponsorIdArr)
    {
        $data = [];
        foreach ($sponsorJson as $index => $sponsor) {
            if (in_array($sponsor['sponsor_id'], $sponsorIdArr)) {
                array_push($data, $this->extractor($sponsor));
            }
        }
        if (count($data) == 0) {
            return $this->returnNotFoundError();
        }
        return $this->returnSuccess('success', $data);
    }

    private function extractor($sponsor)
    {
        $sponsor['speaker_information'] = [];
        foreach ($this->speakerAry as $speaker) {
            if ((int) $speaker['sponsor_id'] === (int) $sponsor['sponsor_id']) {
                $tags = $this->speakerService->parseTags($speaker['tags']);
                $sponsor['speaker_information'][] = [
                    'img' => [
                        'mobile' => $speaker['photo_for_sponsor_mobile'],
                        'web' => $speaker['photo_for_sponsor_web'], // extra
                    ],
                    'name' => $speaker['name'],
                    'name_e' => $speaker['name_e'],
                    'title' => $speaker['job_title'],
                    'title_e' => $speaker['job_title_e'], // extra
                    'started_at' => $speaker['started_at'],
                    'endeded_at' => $speaker['ended_at'],
                    'room' => $speaker['room'],
                    'tags' => $tags,
                ];
            }
        }

        return $sponsor;
    }
}
