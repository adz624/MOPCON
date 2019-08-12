<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Controller extends BaseController
{
    protected $function = null;
    protected $jsonAry;

    public function __construct()
    {
        $env = getenv('APP_ENV') ? getenv('APP_ENV') : 'production';

        if ($this->function) {
            $filePath = __DIR__ . '/../../../resource/assets/json/' . $this->function;
            if ($env === 'develop') {
                $filePath .= '-dev';
            }
            $filePath .= '.json';
            if (!file_exists($filePath)) {
                throw new NotFoundHttpException('Resource file not found');
            }
            $this->jsonAry = json_decode(file_get_contents($filePath), true);
        }
    }
}
