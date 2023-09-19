<?php

namespace App\Http\Controllers\Year2022;

use App\Http\Controllers\BaseSpeakerController;
use Illuminate\Http\Response;

class SpeakerController extends BaseSpeakerController
{
    protected $year = 2022;
    protected $imgPath = __DIR__ . '/../../../../resource/assets/images/';
    /**
     * @param string $name
     * @return Illuminate\Http\Response
     */
    public function singleImageView($name)
    {

        $dir =  $this->imgPath . 'speaker/' . $name . '.*';
        $path = glob($dir);
        if (empty($path)) {
            $dir = $this->imgPath . 'volunteers/program.*';
            $path = glob($dir);
        }
        $path = end($path);
        $type = mime_content_type($path);
        return (new Response(file_get_contents($path), 200))->header('Content-Type', $type);
    }
}
