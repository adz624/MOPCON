<?php

namespace App\Http\Controllers\Year2022;

use App\Http\Controllers\BaseCommunityController;
use Illuminate\Http\Response;
class CommunityController extends BaseCommunityController
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
        $dir = $this->imgPath . 'community/' . $platform . '/' . $name . '.*';
        $path = glob($dir);
        if (empty($path)) {
            $dir = $this->imgPath . 'community/sponsor.*';
            $path = glob($dir);
        }
        $path = end($path);
        $type = mime_content_type($path);
        return (new Response(file_get_contents($path), 200))->header('Content-Type', $type);
    }
}
