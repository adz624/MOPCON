<?php

namespace App\Http\Controllers;

class SpeakerController extends Controller
{
    use ApiTrait;

    protected $function = 'speaker';
    private $hidden_fields = [
        'photo_for_session_web',
        'photo_for_session_mobile',
        'photo_for_sponsor_web',
        'photo_for_sponsor_mobile',
    ];

    public function __construct()
    {
        parent::__construct();
        foreach ($this->jsonAry as &$row) {
            foreach ($row as $key => $value) {
                if (in_array($key, $this->hidden_fields)) {
                    unset($row[$key]);
                }
            }
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
                $tags = array_merge($tags, $speaker['tags']);
            }

            return $this->returnSuccess('Success.', array_values(array_unique($tags)));
        } catch (\Exception $e) {
            $this->returnError($e->getMessage());
        }
    }
}
