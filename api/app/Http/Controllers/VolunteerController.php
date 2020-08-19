<?php
namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiTrait;

Class VolunteerController extends Controller {

	use ApiTrait;

    /**
     * 志工團隊
     *
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!is_numeric($id)) {
            return $this->returnError('Bad request');
        }
        $result = $this->searchTargetById($this->jsonAry, $id);
        if (is_null($result)) {
            return $this->returnNotFoundError();
        }
        return $this->returnSuccess('success', $result);
    }

    public function imagesView($name)
    {
        $dir = $this->imgPath . 'volunteers/' . $name . '.*';
        $path = glob($dir);
        $path = end($path);
        if (empty($path)) {
        	return $this->returnNotFoundError();
        }
        $type = mime_content_type($path);
        return (new Response(file_get_contents($path), 200))->header('Content-Type', $type);
    }

    /**
     * 由 id 取出特定社群
     *
     * @param array $dataset
     * @param integer $targetId
     * @return array
     */
    private function searchTargetById($dataset, $targetId)
    {
        $result = array_filter($dataset, function ($subset) use ($targetId) {
            if ((int)$subset['id'] === (int)$targetId) {
                return true;
            }
        });
        $result = array_pop($result);
        if (isset($result['photo']) && $result['photo'] !== '') {
            $result['photo'] = url($result['photo']);
        }
        if (isset($result['introduction_en']) && $result['introduction_en'] === '') {
            $result['introduction_en'] = $result['introduction'];
        }
        unset($result['id']);
        return $result;
    }
}
