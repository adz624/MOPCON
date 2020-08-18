<?php
namespace  App\Http\Controllers; // @todo: 这里是要生成类的命名空间

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiTrait;

Class VolunteerController extends Controller {  // @todo VolunteerController 这里是要生成的类名字
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
}