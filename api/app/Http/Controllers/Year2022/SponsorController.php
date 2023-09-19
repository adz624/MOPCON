<?php

namespace App\Http\Controllers\Year2022;

use App\Http\Controllers\BaseSponsorController;
use Illuminate\Http\Response;

class SponsorController extends BaseSponsorController
{
    protected $year = 2022;

    /**
     * 查詢images
     *
     * @param string $name
     * @return object
     */
    public function platformImagesView($platform, $name)
    {
        $dir = $this->imgPath . 'sponsor/' . $platform . '/' . $name . '.*';
        $path = glob($dir);
        if (empty($path)) {
            $dir = $this->imgPath . 'volunteers/sponsor.*';
            $path = glob($dir);
        }
        $path = end($path);
        $type = mime_content_type($path);
        return (new Response(file_get_contents($path), 200))->header('Content-Type', $type);
    }
}
