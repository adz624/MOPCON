<?php

namespace App\Http\Controllers;

use App\Service\SpeakerService;

class SpeakerController extends Controller
{
    use ApiTrait;

    protected $function = 'speaker';

    public function __construct()
    {
        parent::__construct();
        $service = new SpeakerService();
        foreach ($this->jsonAry as &$row) {
            $row = $service->parse($row);
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
