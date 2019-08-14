<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    use ApiTrait;

    private $dataset;

    public function __construct()
    {
        if (env('APP_ENV') === 'production') {
            $this->dataset = json_decode(file_get_contents(__DIR__ . '/../../../resource/assets/json/communties.json'), true);
        } else {
            $this->dataset = json_decode(file_get_contents(__DIR__ . '/../../../resource/assets/json/communties-dev.json'), true);
        }
    }

    public function index()
    {
        $result = [];
        array_walk($this->dataset, function ($subset, $key) use (&$result) {
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
        $communities = $this->dataset['community'];
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
        $participants = $this->dataset['participant'];
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
