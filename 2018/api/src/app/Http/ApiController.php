<?php
namespace MopConApi2018\App\Http;

use MopCon2018\Utils\GoogleDocsSpreadsheet;
use MopConApi2018\App\Models\FieldgameBoothMission;
use MopConApi2018\App\Models\MopConResource;
use MopConApi2018\App\Models\User;
use MopConApi2018\App\Models\UserPassbook;

class ApiController extends Controller
{
    private $sourceFrom;
    private $resource;
    private $resourceName;
    private $jsonOptions;
    private $fullUrlToAssets;
    public $errMsg = [
        4001 => '此請求方法錯誤',
        4002 => '此請求缺乏必要的參數',
        4003 => '此請求已經過期',
        4004 => '此請求的資源不存在',
        4005 => '此請求夾帶的參數內容不正確'
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
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
            $apiData = new GoogleDocsSpreadsheet(
                $this->resource['sheetKey'],
                $this->resource['columns'],
                $this->resource['sheetGridId']
            );
            return $apiData;
        }, 600);

        # custom processing codes...

        return $response = $response->withHeader('Content-Type: application/json')
            ->getBody()->write($apiData->toJson($this->jsonOptions));
    }

    private function accessSchedule($request, $response, $args)
    {
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
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
                        ),
                    ];
                }

                $agenda[] = compact('date', 'items');
            }

            $data = [
                'payload' => [
                    'agenda' => $agenda,
                    'talk' => $scheduleUnconf,
                ],
            ];
            return $data;
        }, 600);

        return $response = $response->withJSON($apiData, 200, $this->jsonOptions);
    }

    private function accessScheduleUnconf($request, $response, $args)
    {
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
            $scheduleUnconfData = MopConResource::getScheduleUnconf();
            return ['payload' => $scheduleUnconfData];
        }, 600);

        return $response = $response->withJson($apiData, 200, $this->jsonOptions);
    }

    private function accessSpeaker($request, $response, $args)
    {
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
            $apiDataArray = MopConResource::getSpeaker($this->fullUrlToAssets);
            return ['payload' => $apiDataArray];
        }, 600);

        return $response = $response->withJson($apiData, 200, $this->jsonOptions);
    }

    private function accessSponsor($request, $response, $args)
    {
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
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

            return ['payload' => $apiDataArray];
        }, 600);

        return $response = $response->withJson($apiData, 200, $this->jsonOptions);
    }

    private function accessCommunity($request, $response, $args)
    {
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
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

            return ['payload' => $apiDataArray];
        }, 600);

        return $response = $response->withJson($apiData, 200, $this->jsonOptions);
    }

    private function accessVolunteer($request, $response, $args)
    {
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
            $apiData = new GoogleDocsSpreadsheet(
                $this->resource['sheetKey'],
                $this->resource['columns'],
                $this->resource['sheetGridId']
            );

            $apiDataArray = $apiData->toArray();

            return ['payload' => $apiDataArray];
        }, 600);

        return $response = $response->withJson($apiData, 200, $this->jsonOptions);
    }

    private function accessCarousel($request, $response, $args)
    {
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
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

            return ['payload' => $apiDataArray];
        }, 600);

        return $response = $response->withJson($apiData, 200, $this->jsonOptions);
    }

    private function accessNews($request, $response, $args)
    {
        $apiData = $this->cache->refreshIfExpired($this->resourceName, function () {
            $apiData = new GoogleDocsSpreadsheet(
                $this->resource['sheetKey'],
                $this->resource['columns'],
                $this->resource['sheetGridId']
            );

            $apiDataArray = $apiData->toArray();

            return ['payload' => $apiDataArray];
        }, 600);

        return $response = $response->withJson($apiData, 200, $this->jsonOptions);
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

        try {
            $msg = 'update user';
            $user = User::find($params['UUID']);
            if (!$user) {
                $msg = 'create user';
                $user = new User;
                // 測試環境 testing/development 且沒給 UUID
                $user->uuid = (empty($params['UUID']) && !$this->container->isProduction) ? uniqid('test_') : $params['UUID'];
            }
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
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $is_success = false;
        }

        $result = [
            'is_success' => $is_success,
            'msg' => $msg,
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

        try {
            $msg = 'get balance success';
            $user = User::findOrFail($params['UUID']);
            $balance = $user->biilabs_balance;
        } catch (\Exception $e) {
            $msg = $e->getMessage();
        }

        $result = compact('balance', 'msg');
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

        // 不允許數量小於 0; 必須是整數
        if ($params['quantity'] <= 0 || !is_int($params['quantity'] + 0)) {
            $errMsg = $this->getErrorInfo(4005);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        ///// 轉蛋價格暫時 hardcode, 30 代幣
        $gochaPrice = 30;

        try {
            $msg = 'buy gachapon caculating...';
            $user = User::findOrFail($params['UUID']);
            $orderAmount = $params['quantity'] * $gochaPrice;
            $is_success = $user->biilabs_balance >= $orderAmount;
            $msg = 'buy gachapon fail; your balance is not enough';
            if ($is_success) {
                // 如果代幣夠多
                $user->biilabs_balance -= $orderAmount;
                $user->save();
                /// 交易紀錄
                $passbook_record = new UserPassbook([
                    'uuid' => $user->uuid,
                    'summary' => sprintf('購買 %s 個扭蛋，消耗代幣共 %s', $params['quantity'], $orderAmount),
                    'withdrawal' => $orderAmount,
                ]);

                $user->passbook()->save($passbook_record);
                $msg = 'buy gachapon success';
            }
            $balance = $user->biilabs_balance;
            $exchMax = floor($balance / $gochaPrice);
        } catch (\Exception $e) {
            $is_success = false;
            $msg = $e->getMessage();
        }

        $result = compact('is_success', 'balance', 'exchMax', 'msg');
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
            'reward' => 30,
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

        $fieldgameBoothMission = FieldgameBoothMission::find($params['id']);
        if (!$fieldgameBoothMission) {
            $errMsg = $this->getErrorInfo(4004);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        $token = base64_encode(http_build_query([
            'id' => $fieldgameBoothMission->mission_id,
            'rQtime' => time(),
        ]));

        $result = [
            'id' => $params['id'],
            // token 是讓 server 辨認攤位，取得對應的任務獎勵並發送
            'token' => $token,
        ];

        $result['qrcode'] = 'http://chart.apis.google.com/chart?cht=qr&chl=' . urlencode(json_encode($result)) . '&chs=150x150';

        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }

    // 攤位挑戰獲取獎勵 (POST)
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

        parse_str(base64_decode($params['token']), $token_parsed);
        // 檢查 token 中的時間
        if (time() > $token_parsed['rQtime'] + 30 && false) {
            $errMsg = $this->getErrorInfo(4003);
            return $response = $response->withJson($errMsg, 200, $this->jsonOptions);
        }

        // 發錢邏輯
        // 檢查 user 是否領過
        // 沒有才發錢，加入 balance, passbook, 更新任務進度
        // transaction table 就先跳過不理
        try {
            $user = User::findOrFail($params['public_key']);
            $mission_id = filter_var($params['id'], FILTER_SANITIZE_NUMBER_INT);
            $mission = FieldgameBoothMission::findOrFail($mission_id) ;
            if (!$user->isMissionComplete($params['id'])) {
                $mission_progress = [
                    $mission->mission_id => [
                        'state' => true,
                        'reward' => $mission->reward,
                    ],
                ] + $user->mission_progress;
                $user->mission_progress = $mission_progress;
                $user->biilabs_balance += $mission->reward;
                $user->save();

                $passbook_record = new UserPassbook([
                    'uuid' => $user->uuid,
                    'summary' => sprintf('獲取任務 id (%s) 的獎勵 (%s)', $mission->mission_id, $mission->reward),
                    'depoist' => $mission->reward,
                ]);

                $user->passbook()->save($passbook_record);
            }
            $is_success = true;
            $reward = $mission->reward;
        } catch (\Exception $e) {
            $is_success = false;
            $msg = $e->getMessage();
        }

        $result = compact('is_success', 'reward', 'msg');
        return $response = $response->withJson($result, 200, $this->jsonOptions);
    }
}
