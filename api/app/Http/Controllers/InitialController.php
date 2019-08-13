<?php

namespace App\Http\Controllers;

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
