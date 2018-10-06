<?php
namespace MopConApi2018\App\Http;

use MopCon2018\Utils\GoogleDocsSpreadsheet;
use MopConApi2018\App\Models\MopConResource;

class ApiController extends Controller
{
    private $sourceFrom;
    private $resource;
    private $jsonOptions;
    private $fullUrlToAssets;
    public $errMsg = [
        4001 => '此請求方法錯誤',
        4002 => '此請求缺乏必要的參數',
    ];

    public function __invoke($request, $response, $args)
    {
        $this->sourceFrom = $request->getAttribute('sourceFrom');
        $this->resource = $request->getAttribute('resource');
        $this->resourceName = $request->getAttribute('routesParsed')[0];
        $this->jsonOptions = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT;
        $this->fullUrlToAssets = $request->getUri()->getScheme() . '://' . $request->getUri()->getHost() . '/2018/assets';

        $prefixWithAction = true;
        if (in_array($this->sourceFrom, ['fieldGame'])) {
            $prefixWithAction = false;
        }
        $apiMethodName = $this->transform2Method($this->resourceName, $prefixWithAction);

        return $this->{$apiMethodName}($request, $response, $args);
    }

    public function getErrorInfo($errCode)
    {
        return array_filter($this->errMsg, function ($key) use ($errCode) {
            return $key == $errCode;
        }, ARRAY_FILTER_USE_KEY);
    }

    private function transform2Method($str, $prefixWithAction = true, $action = 'access')
    {
        $array = explode('-', $str);

        if (!$prefixWithAction) {
            // 如果 api resource 自帶行為修飾
            $action = array_shift($array);
        }

        array_walk($array, function (&$value) {
            $value = ucfirst($value);
        });
        array_unshift($array, $action);

        return implode('', $array);
    }

    /**
     * Output Available Resource List
     *
     * @param [type] $request
     * @param [type] $response
     * @param [type] $args
     * @return $response
     */
    private function accessPublic($request, $response, $args)
    {
        return $response->withJson($this->resource, 200, $this->jsonOptions);
    }

    private function accessCodeOfConduct($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        # custom processing codes...

        return $response = $response->withHeader('Content-Type: application/json')
            ->getBody()->write($apiData->toJson($this->jsonOptions));
    }

    private function accessSchedule($request, $response, $args)
    {
        $schedule = MopConResource::getSchedule($this->fullUrlToAssets);
        $scheduleUnconf = MopConResource::getScheduleUnconf();

        $agenda = [];
        foreach (array_unique(array_column($schedule, 'date')) as $date) {
            $items = [];

            $scheduleByDate = array_values(
                array_filter($schedule, function ($row) use ($date) {
                    return $row['date'] == $date;
                })
            );

            $durations = array_unique(array_column($scheduleByDate, 'duration'));
            sort($durations);

            foreach ($durations as $duration) {
                $items[] = [
                    'duration' => $duration,
                    'agendas' => array_values(
                        array_filter($scheduleByDate, function ($row) use ($duration) {
                            return $row['duration'] == $duration;
                        })
                    )
                ];
            }

            $agenda[] = compact('date', 'items');
        }

        return $response = $response->withJSON(
            [
                'payload' => [
                    'agenda' => $agenda,
                    'talk' => $scheduleUnconf
                ]
            ],
            200,
            $this->jsonOptions
        );
    }

    private function accessScheduleUnconf($request, $response, $args)
    {
        $scheduleUnconfData = MopConResource::getScheduleUnconf();

        return $response = $response->withJson(['payload' => $scheduleUnconfData], 200, $this->jsonOptions);
    }

    private function accessSpeaker($request, $response, $args)
    {
        $apiDataArray = MopConResource::getSpeaker($this->fullUrlToAssets);
        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);

        return $response;
    }

    private function accessSponsor($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['logo'])) {
                $value['logo'] = $this->fullUrlToAssets . '/images/sponsor/' . $value['logo'];
            }
        }

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    private function accessCommunity($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['logo'])) {
                $value['logo'] = $this->fullUrlToAssets . '/images/community/' . $value['logo'];
            }
        }

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    private function accessVolunteer($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    private function accessCarousel($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['banner'])) {
                $value['banner'] = $this->fullUrlToAssets . '/images/carousel/' . $value['banner'];
            }
        }

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    private function accessNews($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    /**
     * 以下為大地遊戲的 api 資源，sourceFrom 表類型
     * 這一類的資源命名為 行為-名詞(1 to N with dash)
     */

    //// A. blockchain
    // 建立錢包 (POST)
    private function newUser($request, $response, $args)
    {
        $params = $request->getParsedBody();
        $requirementParams = $this->resource['requirement'];

        // 判斷請求方法
        if (!$request->isPost()) {
            $errMsg = $this->getErrorInfo(4001);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        // 檢查請求中是否帶有必要參數
        if ($requirementParams != array_intersect($requirementParams, array_keys($params))) {
            $errMsg = $this->getErrorInfo(4002);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        $is_success = false;
        // 測試環境 testing/development
        if (!$this->container->isProduction) {
            $user = new \MopConApi2018\App\Models\User;
            $user->uuid = (!empty($params['UUID'])) ? $params['UUID'] : uniqid('test_');
            $user->public_key = $params['public_key'];
            $user->device_type = 'undefined';
            $user->fcm_push_token = (isset($params['fcm_push_token'])) ? $params['fcm_push_token'] : '';

            /**
             * 串接 biilabs api 去建立錢包
             *
             * 如果曾經上傳過 uuid, 只檢查是否有 biilabs 錢包
             * 沒有才做建立 and store address
             */
            $user->save();
            $is_success = true;
        }

        $result = [
            'is_success' => $is_success
        ];
        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }

    // 餘額查詢 (POST)
    private function getBalance($request, $response, $args)
    {
        $params = $request->getParsedBody();
        $requirementParams = $this->resource['requirement'];

        // 判斷請求方法
        if (!$request->isPost()) {
            $errMsg = $this->getErrorInfo(4001);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        // 檢查請求中是否帶有必要參數
        if ($requirementParams != array_intersect($requirementParams, array_keys($params))) {
            $errMsg = $this->getErrorInfo(4002);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        $result = [
            'balance' => 100
        ];
        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }

    // 消費行為：轉蛋 (POST)
    private function buyGachapon($request, $response, $args)
    {
        $params = $request->getParsedBody();
        $requirementParams = $this->resource['requirement'];

        // 判斷請求方法
        if (!$request->isPost()) {
            $errMsg = $this->getErrorInfo(4001);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        // 檢查請求中是否帶有必要參數
        if ($requirementParams != array_intersect($requirementParams, array_keys($params))) {
            $errMsg = $this->getErrorInfo(4002);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        $result = [
            'is_success' => true
        ];
        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }

    //// B. 答題/攤位任務
    // 取得題目 (GET)
    // format: https://jsoneditoronline.org/?id=b2bbffff664242fdaa4ff5e4470a700d
    private function getQuiz($request, $response, $args)
    {
        $params = $request->getQueryParams();
        $requirementParams = $this->resource['requirement'];

        // 判斷請求方法
        if (!$request->isGet()) {
            $errMsg = $this->getErrorInfo(4001);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        // 檢查請求中是否帶有必要參數
        if ($requirementParams != array_intersect($requirementParams, array_keys($params))) {
            $errMsg = $this->getErrorInfo(4002);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        $result = json_decode('[
            {
              "date": "2018-01-01",
              "items": [
                {
                  "id": "001",
                  "type": "quiz",
                  "title": "什麼是區塊鏈",
                  "description": null,
                  "banner_url": null,
                  "quiz": "What is blockchain?",
                  "options": [
                    "a",
                    "b",
                    "c",
                    "d"
                  ],
                  "answer": "1",
                  "status": "-1",
                  "unlock_time": "10013133"
                },
                {
                  "id": "002",
                  "type": "task",
                  "title": "什麼是大數據",
                  "description": null,
                  "options": null,
                  "banner_url": null,
                  "status": "0",
                  "answer": null,
                  "unlock_time": "10013133"
                },
                {
                  "id": "003",
                  "type": "task",
                  "title": "找到黃色小鴨",
                  "description": "必須和別人結伴完成",
                  "options": null,
                  "banner_url": null,
                  "status": "1",
                  "answer": null,
                  "unlock_time": "10013133"
                }
              ]
            },
            {}
          ]');
        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }

    // 答題 (POST)
    private function solveQuiz($request, $response, $args)
    {
        $params = $request->getParsedBody();
        $requirementParams = $this->resource['requirement'];

        // 判斷請求方法
        if (!$request->isPost()) {
            $errMsg = $this->getErrorInfo(4001);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        // 檢查請求中是否帶有必要參數
        if ($requirementParams != array_intersect($requirementParams, array_keys($params))) {
            $errMsg = $this->getErrorInfo(4002);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        $result = [
            'is_success' => true,
            'reward' => 30
        ];
        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }

    // 取得攤位 Qrcode (POST)
    private function getHawkerQrcode($request, $response, $args)
    {
        $params = $request->getParsedBody();
        $requirementParams = $this->resource['requirement'];

        // 判斷請求方法
        if (!$request->isPost()) {
            $errMsg = $this->getErrorInfo(4001);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        // 檢查請求中是否帶有必要參數
        if ($requirementParams != array_intersect($requirementParams, array_keys($params))) {
            $errMsg = $this->getErrorInfo(4002);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        $result = [
            'id' => 1,
            'token' => 'mopcon:123-456-789_' . md5(time())
        ];
        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }

    // 攤位挑戰 (POST)
    private function getHawkerMission($request, $response, $args)
    {
        $params = $request->getParsedBody();
        $requirementParams = $this->resource['requirement'];

        // 判斷請求方法
        if (!$request->isPost()) {
            $errMsg = $this->getErrorInfo(4001);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        // 檢查請求中是否帶有必要參數
        if ($requirementParams != array_intersect($requirementParams, array_keys($params))) {
            $errMsg = $this->getErrorInfo(4002);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        $result = [
            'is_success' => true,
            'reward' => 30
        ];
        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }
}
