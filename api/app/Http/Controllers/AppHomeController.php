<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppHomeController extends Controller
{
    use ApiTrait;

    protected $function = 'banner';
    private $output;

    public function __construct()
    {
        global $app;
        parent::__construct();

        $this->output['banner'] = array_map(function ($value) {
            $value['img'] = url($value['img']);
            return $value;
        }, $this->jsonAry);

        $request = Request::create('/api/2019/news', 'GET');
        $response = json_decode($app->dispatch($request)->getContent(), true);
        $this->output['news'] = $response['data'] ?? [];
    }

    public function index()
    {
        return $this->returnSuccess('success', $this->output);
    }

    public function show($name)
    {
        $dir = $this->imgPath . 'banner/' . $name . '.*';
        $path = glob($dir);
        $path = end($path);
        $type = mime_content_type($path);
        return (new Response(file_get_contents($path), 200))->header('Content-Type', $type);
    }
}
