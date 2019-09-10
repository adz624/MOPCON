<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacebookController extends Controller
{
    use ApiTrait;
    private $facebookUrl = 'https://www.facebook.com/';
    private $apiUrl = 'https://graph.facebook.com/';
    private $mopconApiUrl = 'https://graph.facebook.com/mopcon/';
    /**
     * get newest post from mopcon facebook fanspage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPosts(Request $request)
    {
        $limit = $request->get('limit', 20);
        // handle error;
        if ($limit > 100) {
            return $this->returnError('can not access over than 100 posts');
        }
        $token = env('FACEBOOK_TOKEN');
        $fields = ['full_picture', 'message', 'id', 'shares', 'created_time', 'likes.summary(true)'];
        $baseUrl = $this->mopconApiUrl;
        $baseUrl .= 'feed?fields=';
        $baseUrl .= implode(',', $fields);
        $baseUrl .= '&limit='.$limit;
        $baseUrl .= '&access_token='.$token;
        $feedsRes = $this->requestFacebookApi($baseUrl);
        $feedsData = json_decode($feedsRes->getContent(), true);
        // handle error;
        if (!$feedsData['success']) {
            return $feedsRes;
        }
        // handle error;
        if (!isset($feedsData['data']['data'])) {
            return $this->returnNotFoundError();
        }
        $postsData = $feedsData['data']['data'];
        foreach ($postsData as $key => $value) {
            $postsData[$key]['shares'] = $postsData[$key]['shares']['count'] ?? 0;
            $postsData[$key]['likes'] = $postsData[$key]['likes']['summary']['total_count'];
            $postsData[$key]['url'] = $this->facebookUrl.$postsData[$key]['id'];
            $postsData[$key]['created_time'] = strtotime($postsData[$key]['created_time']);
        }
        return $this->returnSuccess('Success get posts', $postsData);
    }
    private function requestFacebookApi($url)
    {
        // request facebook api
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);

        // convert response
        $dataJson = json_decode($data, true);

        // handle error; error output
        if (curl_getinfo($ch, CURLINFO_HTTP_CODE) !== 200) {
            return $this->returnError('Token invalid');
        }
        curl_close($ch);
        return $this->returnSuccess('', $dataJson);
    }
}
