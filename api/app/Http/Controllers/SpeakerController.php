<?php

namespace App\Http\Controllers;

class SpeakerController extends Controller
{
    use ApiTrait;

    protected $function = 'speaker';

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

            return $this->returnSuccess('Success.', array_unique($tags));
        } catch (\Exception $e) {
            $this->returnError($e->getMessage());
        }
    }
}
