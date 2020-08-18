<?php

namespace App\Http\Controllers\Year2019;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\VolunteerController as BaseVolunteerController;

class VolunteerController extends BaseVolunteerController
{

    protected $year = 2019;
    protected $function = 'volunteer';

    public function index()
    {
        $result = [];
        $result['volunteer'] = array_map(function ($value) {
            $value['photo'] = url($value['photo']);
            unset($value['introduction'], $value['introduction_en'], $value['members'], $value['facebook'], $value['twitter'], $value['instagram'], $value['telegram'], $value['event']);
            return $value;
        }, $this->jsonAry);

        return $this->returnSuccess('success', $result);
    }

}
