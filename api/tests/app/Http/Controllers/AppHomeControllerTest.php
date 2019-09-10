<?php

namespace Tests\App\Http\Controllers;

use TestCase;

class AppHomeController extends TestCase
{
    private $banner;
    private $news;
    public function setUp() :void
    {
        parent::setUp();
        putenv('APP_ENV=develop');

        $path = __DIR__ . '/../../../../resource/assets/json/';
        if (env('APP_ENV') === 'production') {
            $bannerFileName = 'banner.json';
        } else {
            $bannerFileName = 'banner-dev.json';
        }
        $this->banner = json_decode(file_get_contents($path . $bannerFileName), true);
        $newsRequest = $this->get('api/2019/news')->response->getContent();
        $newsResponse = json_decode($newsRequest, true);
        $this->news = $newsResponse['data'] ?? [];
    }

    public function testGetAppHomeInfo()
    {
        $response = $this->get('/api/2019/home/');
        $compared = [];
        $compared['banner'] = array_map(function ($value) {
            $value['img'] = url($value['img']);
            return $value;
        }, $this->banner);

        $compared['news'] = $this->news;

        $this->assertEquals(200, $this->response->status());

        $response->seeJsonEquals([
            'success' => true,
            'message' => 'success',
            'data' => $compared
        ]);
    }
}
