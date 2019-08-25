<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SponsorController extends Controller
{
    use ApiTrait;

    private $sponsorTypes = ['tony_stark', 'bruce_wayne', 'hacker', 'geek', 'developer', 'special_cooperation', 'special_thanks', 'co-organizer', 'ksg_support'];
    private $speakerAry = [];
    protected $function = 'sponsor';

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

        return count($sponsorIdArr) ? $this->getSpecificSponsors($this->jsonAry, $sponsorIdArr) : $this->getAllSponsors($this->jsonAry);
    }

    private function getAllSponsors($sponsorJson)
    {
        $data = [
            'tony_stark' => [],
            'bruce_wayne' => [],
            'hacker' => [],
            'geek' => [],
            'developer' => [],
            'special_cooperation' => [],
            'special_thanks' => [],
            'education' => [],
            'co-organizer' => [],
            'ksg_support' => [],
        ];
        foreach ($sponsorJson as $index => $sponsor) {
            array_push($data[$sponsor['sponsor_type']], $this->extractor($sponsor));
        }
        return $this->returnSuccess('success', $data);
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
                $start = Carbon::createFromTimestamp($speaker['started_at'], 'Asia/Taipei');
                $end = Carbon::createFromTimestamp($speaker['ended_at'], 'Asia/Taipei');

                $sponsor['speaker_information'][] = [
                    'speaker_img' => $speaker['photo_for_sponsor_web'],
                    'img' => [
                        'mobile' => $speaker['photo_for_sponsor_mobile'],
                        'web' => $speaker['photo_for_sponsor_web'], // extra
                    ],
                    'speaker_name' => $speaker['name'],
                    'name' => $speaker['name'],
                    'speaker_name_en' => $speaker['name_e'],
                    'name_en' => $speaker['name_e'],
                    'speaker_title' => $speaker['job_title'],
                    'title' => $speaker['job_title'],
                    'speaker_title_en' => $speaker['job_title_e'], // extra
                    'title_en' => $speaker['job_title_e'], // extra
                    'speaker_date' => $start->format('m/d'),
                    'speaker_duration' => $start->hour . ':' . $start->minute . ' - ' . $end->hour . ':' . $end->minute,
                    'started_at' => $speaker['started_at'],
                    'endeded_at' => $speaker['ended_at'],
                    'speaker_room' => $speaker['room'],
                    'room' => $speaker['room'],
                    'speaker_keywords' => $speaker['tags'],
                    'tags' => $speaker['tags'],
                ];
            }
        }

        return $sponsor;
    }
}
