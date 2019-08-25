<?php

namespace App\Http\Controllers;

use App\Service\SpeakerService;

class SpeakerController extends Controller
{
    use ApiTrait;

    protected $function = 'speaker';
    private $hidden_fields = [
        'photo_for_speaker_web',
        'photo_for_speaker_mobile',
        'photo_for_session_web',
        'photo_for_session_mobile',
        'photo_for_sponsor_web',
        'photo_for_sponsor_mobile',
        'tags',
    ];

    public function __construct()
    {
        parent::__construct();
        foreach ($this->jsonAry as &$row) {
            $tags = (new SpeakerService())->parseTags($row['tags']);
            $row['img'] = [
                'web' => $row['photo_for_speaker_web'],
                'mobile' => $row['photo_for_speaker_mobile'],
            ];
            foreach ($row as $key => $value) {
                if (in_array($key, $this->hidden_fields)) {
                    unset($row[$key]);
                }
            }
            $row['tags'] = $tags;
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->returnSuccess('Success.', $this->jsonAry);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id)
    {
        try {
            foreach ($this->jsonAry as $speaker) {
                if ((int) $speaker['speaker_id'] === $id) {
                    return $this->returnSuccess('Success.', $speaker);
                }
            }

            return $this->returnNotFoundError('Not found');
        } catch (\Exception $e) {
            return $this->returnError($e->getMessage());
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTags()
    {
        try {
            $tags = [];
            foreach ($this->jsonAry as $speaker) {
                $tags = array_merge($tags, array_column($speaker['tags'], 'name'));
            }

            return $this->returnSuccess('Success.', array_values(array_unique($tags)));
        } catch (\Exception $e) {
            $this->returnError($e->getMessage());
        }
    }
}
