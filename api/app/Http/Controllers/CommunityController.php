<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    use ApiTrait;

    protected $function = 'community';

    public function index()
    {
        $result = [];
        array_walk($this->jsonAry, function ($subset, $key) use (&$result) {
            $result[$key] = array_map(function ($value) {
                $value['photo'] = url($value['photo']);
                unset($value['introducion']);
                return $value;
            }, $subset);
        });

        return $this->returnSuccess('success', $result);
    }
    /**
     * 主辦社群
     *
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function getOrganizer($id)
    {
        if (!is_numeric($id)) {
            return $this->returnError('Bad request');
        }
        $communities = $this->jsonAry['community'];
        $result = $this->searchTargetById($communities, $id);
        if (is_null($result)) {
            return $this->returnNotFoundError();
        }
        return $this->returnSuccess('success', $result);
    }
    /**
     * 參與社群
     *
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function getParticipant($id)
    {
        if (!is_numeric($id)) {
            return $this->returnError('Bad request');
        }
        $participants = $this->jsonAry['participant'];
        $result = $this->searchTargetById($participants, $id);
        if (is_null($result)) {
            return $this->returnNotFoundError();
        }
        return $this->returnSuccess('success', $result);
    }

    /**
     * 由 id 取出特定社群
     *
     * @param array $dataset
     * @param integer $targetId
     * @return array
     */
    private function searchTargetById($dataset, $targetId)
    {
        $result = array_filter($dataset, function ($subset) use ($targetId) {
            if ((int)$subset['id'] === (int)$targetId) {
                return true;
            }
        });
        $result = array_pop($result);
        if (isset($result['photo']) && $result['photo'] !== '') {
            $result['photo'] = url($result['photo']);
        }
        unset($result['id']);
        return $result;
    }
}
