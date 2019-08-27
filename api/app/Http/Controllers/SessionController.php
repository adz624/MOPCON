<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    use ApiTrait;

    protected $function = 'session';
    protected $session_keys = [
        'speaker_id',
        'name',
        'name_e',
        'company',
        'company_e',
        'job_title',
        'job_title_e',
        'summary',
        'summary_e',
        'photo_for_session_web',
        'photo_for_session_mobile',
        'topic',
        'topic_e',
        'started_at',
        'ended_at',
        'tags',
        'is_keynote',
        'recordable',
        'level',
    ];
    protected $tags_design = [
        'UI/UX',
    ];
    protected $tags_other = [
        'Startup',
    ];
    protected $locations = [
        'R1' => '3F一廳',
        'R2' => '4F二廳',
        'R3' => '4F三廳',
    ];
    private $sessions;

    public function __construct()
    {
        parent::__construct();
        if (env('APP_ENV') === 'production') {
            $speakers = json_decode(file_get_contents($this->path . 'speaker.json'), true);
        } else {
            $speakers = json_decode(file_get_contents($this->path . 'speaker-dev.json'), true);
        }

        $this->sessions = $this->transSpeakerToSession($speakers);
    }

    /**
     * 取得議程表
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        foreach ($this->jsonAry as &$schedule) {
            foreach ($schedule['period'] as &$period) {
                if (empty($period['room'])) {
                    continue;
                }
                foreach ($period['room'] as $room => &$speaker_id) {
                    $speaker_id = $this->sessions[$speaker_id];
                }
            }
        }
        return $this->returnSuccess('success', $this->jsonAry);
    }

    /**
     * 議程資訊
     *
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!is_numeric($id)) {
            return $this->returnError('Bad request');
        }
        if (isset($this->sessions[$id])) {
            return $this->returnSuccess('success', $this->sessions[$id]);
        }
        return $this->returnNotFoundError();
    }

    /**
     * 取得議程清單
     *
     * @return \Illuminate\Http\Response
     */
    public function getSessionList(Request $request)
    {
        $tags = $request->input('tags', '');
        if ($tags === '') {
            return $this->returnSuccess('success', array_values($this->sessions));
        }
        $tags = explode(',', $tags);
        $output = array_filter($this->sessions, function ($session) use ($tags) {
            $filters = array_merge($session['tags_tech'], $session['tags_design'], $session['tags_other']);
            $intersect = array_intersect($tags, $filters);
            return $tags === $intersect;
        });

        return $this->returnSuccess('success', array_values($output));
    }

    /**
     * 由講者資訊取得議程資訊
     *
     * @param array $speaker
     * @return array
     */
    private function transSpeakerToSession(array $speakers)
    {
        $index = 1;
        $sessions = [];
        foreach ($speakers as $speaker) {
            $session = [];
            $session['session_id'] = $index;
            $session['room'] = $speaker['room'];
            $session['location'] = $this->locations[$speaker['room']];
            foreach ($this->session_keys as $key) {
                if ($key === 'tags') {
                    $session['tags_design'] = $session['tags_other'] = $session['tags_tech'] = [];
                    continue;
                }
                $session[$key] = $speaker[$key];
            }
            foreach ($speaker['tags'] as $tag) {
                if (in_array($tag, $this->tags_design)) {
                    $session['tags_design'][] = $tag;
                    continue;
                }
                if (in_array($tag, $this->tags_other)) {
                    $session['tags_other'][] = $tag;
                    continue;
                }
                $session['tags_tech'][] = $tag;
            }
    
            $session['is_sponsor_session'] = (bool)$speaker['sponsor_id'];
            $sessions[$index++] = $session;
        }
        return $sessions;
    }
}
