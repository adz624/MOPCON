<?php

namespace App\Http\Controllers\Year2020;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\CommunityController as BaseCommunityController;

class CommunityController extends BaseCommunityController
{

    protected $year = 2020;
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
}