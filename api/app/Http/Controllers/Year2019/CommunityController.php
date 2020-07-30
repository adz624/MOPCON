<?php

namespace App\Http\Controllers\Year2019;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
                unset($value['introduction'], $value['introduction_e'], $value['facebook'], $value['twitter'], $value['instagram'], $value['telegram'], $value['event']);
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

    public function imagesView($name)
    {
        $dir = $this->imgPath . 'community/' . $name . '.*';
        $path = glob($dir);
        $path = end($path);
        $type = mime_content_type($path);
        return (new Response(file_get_contents($path), 200))->header('Content-Type', $type);
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
        if (isset($result['introduction_e']) && $result['introduction_e'] === '') {
            $result['introduction_e'] = $result['introduction'];
        }
        unset($result['id']);
        return $result;
    }
}
