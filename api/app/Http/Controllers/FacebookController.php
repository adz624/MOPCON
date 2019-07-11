<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacebookController extends Controller
{
    use ApiTrait;
    private $url = 'https://graph.facebook.com/mopcon/';
    /**
     * get newest post from mopcon facebook fanspage.
     *
     * @return json
     */
    public function getPosts(Request $request)
    {
        $limit = $request->get('limit', 20);
        if ($limit > 100) {
            return $this->returnError('can not access over than 100 posts');
        }
        $baseUrl = $this->url;
        $token = env('FACEBOOK_TOKEN');
        $fields = ['full_picture', 'message', 'id', 'created_time'];
        $baseUrl .= 'feed?fields=';
        $baseUrl .= implode(',', $fields);
        $baseUrl .= '&limit='.$limit;
        $baseUrl .= '&access_token='.$token;

        // request facebook api
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);

        // convert response
        $dataJson = json_decode($data, true);

        // handle error; error output
        if (curl_getinfo($ch, CURLINFO_HTTP_CODE) !== 200) {
            return $this->returnError('Token invalid');
        }
        curl_close($ch);
        if (!isset($dataJson['data'])) {
            return $this->returnNotFoundError();
        }
        return $this->returnSuccess('Success get posts', $dataJson['data']);
    }
}
