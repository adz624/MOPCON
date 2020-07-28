<?php

namespace App\Http\Controllers\Year2019;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiTrait;

class InitialController extends Controller
{
    use ApiTrait;

    protected $function = 'initial';

    /**
     * 取得 APP initial API data
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->returnSuccess('Success.', $this->jsonAry);
    }
}
