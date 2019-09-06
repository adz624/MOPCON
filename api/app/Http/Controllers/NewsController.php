<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    use ApiTrait;

    protected $function = 'news';

    /**
     * 取得 APP news API data
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->returnSuccess('Success.', $this->jsonAry);
    }
    public function show($id)
    {
        if (!is_numeric($id)) {
            return $this->returnError('Bad request');
        }
        foreach($this->jsonAry as $key => $subset){
            if($id == $subset['id']){
              return $this->returnSuccess('Success.', $subset);
            }
        }
        return $this->returnNotFoundError();
    }
}
