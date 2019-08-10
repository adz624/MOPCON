<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    use ApiTrait;

    private $dataset;

    public function __construct()
    {
        if (env('APP_ENV') === 'production') {
            $this->dataset = json_decode(file_get_contents(__DIR__ . '/../../../resource/assets/json/volunteers.json'), true);
        } else {
            $this->dataset = json_decode(file_get_contents(__DIR__ . '/../../../resource/assets/json/volunteers-dev.json'), true);
        }
    }

    public function index()
    {
        $result = [];
        $result['volunteer'] = array_map(function ($value) {
            $value['photo'] = url($value['photo']);
            unset($value['introducion'], $value['members']);
            return $value;
        }, $this->dataset);

        return $this->returnSuccess('success', $result);
    }

    /**
     * 志工團隊
     *
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!is_numeric($id)) {
            return $this->returnError('Bad request');
        }
        $volunteers = $this->dataset;
        $result = $this->searchTargetById($volunteers, $id);
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
