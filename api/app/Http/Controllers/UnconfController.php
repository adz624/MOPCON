<?php

namespace App\Http\Controllers;

class UnconfController extends Controller
{
    use ApiTrait;

    protected $function = 'unconf';

    public function index()
    {
        $result = [];
        array_walk($this->jsonAry, function ($subset, $key) use (&$result) {
            $date = $subset['date'];
            if(!isset($result[$date])){
                $result[$date] = [];
            }
            array_push($result[$date], $subset);
        });
        return $this->returnSuccess('success', $result);
    }
}
