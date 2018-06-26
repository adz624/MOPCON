<?php
namespace MopConApi2018\App\Http;

class ApiMiddleware extends Middleware
{
    private $tocName = 'public';
    private $sourceInfo = [];

    private function init()
    {
        $this->sourceInfo['googleSheet'] = [
            'code-of-conduct' => [
                'sheetKey' => '1v2Cdv40jhN7ekWANdSm9Fsv6rsGjN_VGh2qThjlfvp0',
                'sheetGridId' => '',
                'columns' => [
                    'title' => 'title',
                    'content' => 'content',
                    'en_title' => 'en-title',
                    'en_content' => 'en-content',
                ],
                'description' => '行動準則',
                'status' => 1,
            ],
            'schedule' => [
                'sheetKey' => '1v2Cdv40jhN7ekWANdSm9Fsv6rsGjN_VGh2qThjlfvp0',
                'sheetGridId' => 'oaz88cr',
                'columns' => [],
                'description' => '議程',
                'status' => 0,
            ],
            'speaker' => [
                'sheetKey' => '1v2Cdv40jhN7ekWANdSm9Fsv6rsGjN_VGh2qThjlfvp0',
                'sheetGridId' => 'ozg0bjp',
                'columns' => [
                    'speaker_id' => '講者編號',
                    'name' => '姓名',
                    'name_en' => '姓名en',
                    'type' => '類別',
                    'job' => '職稱',
                    'info' => '個人介紹',
                    'info_en' => '個人介紹en',
                    'picture' => '照片',
                    'filename' => '檔名',
                    'facebook' => 'facebook',
                    'github' => 'github',
                    'blog' => 'blog',
                    'website' => 'website',
                    'linkedin' => 'linkedin',
                    'schedule_topic' => '演講主題',
                    'schedule_topic_en' => '演講主題en',
                    'schedule_info' => '演講摘要',
                    'schedule_info_en' => '演講摘要en',
                    'characters' => '字數全形240',
                    'schedule_id' => '議程編號',
                    'slide' => 'slide',
                    'picture_merged' => '合併講者照片',
                    'video_record' => '禁止錄影',
                ],
                'description' => '講者資料',
                'status' => 1,
            ],
            'schedule-unconf' => [
                'sheetKey' => '1v2Cdv40jhN7ekWANdSm9Fsv6rsGjN_VGh2qThjlfvp0',
                'sheetGridId' => 'oxo5gdm',
                'columns' => [
                    '時段' => '時段',
                    '主題' => '主題',
                    '講者' => '講者',
                    '時段_2' => '時段_2',
                    '主題_2' => '主題_2',
                    '講者_2' => '講者_2',
                ],
                'description' => '交流場次',
                'status' => 1,
            ],
            'sponsor' => [
                'sheetKey' => '1v2Cdv40jhN7ekWANdSm9Fsv6rsGjN_VGh2qThjlfvp0',
                'sheetGridId' => 'o6bk8rc',
                'columns' => [
                    '贊助商編號' => '贊助商編號',
                    'ID' => 'ID',
                    '贊助商等級' => '贊助商等級',
                    '名稱' => '名稱',
                    '名稱en' => '名稱en',
                    '介紹' => '介紹',
                    '介紹en' => '介紹en',
                    '網址' => '網址',
                    '照片' => '照片',
                    '窗口' => '窗口',
                    'remarks' => 'remarks',
                ],
                'description' => '贊助商',
                'status' => 1,
            ],
        ];
    }

    public function __invoke($request, $response, $next)
    {
        $this->init();
        $routes = preg_replace('/^.*\/api\/(.*)/', '$1', $request->getUri()->getPath());
        $routesParsed = explode('/', $routes);

        $request = $request->withAttribute('routesParsed', $routesParsed);

        // 訪問 TOC
        if ($routesParsed[0] == $this->tocName) {
            $toc = [];
            foreach ($this->sourceInfo as $source => $resource) {
                foreach ($resource as $resourceName => $definition) {
                    if ($definition['status'] != 1) {
                        continue;
                    }
                    $toc[$source][] = [
                        'resourceName' => $resourceName,
                        'resourceDesc' => $definition['description'],
                    ];
                }
            }

            $request = $request->withAttribute('resource', $toc);
            return $next($request, $response);
        }

        // 訪問 Api 資源
        foreach ($this->sourceInfo as $source => $resource) {
            if (in_array($routesParsed[0], array_keys($resource))) {
                $definition = $resource[$routesParsed[0]];
                if ($definition['status'] !== 1) {
                    continue;
                }
                $request = $request
                    ->withAttribute('sourceInfo', $this->sourceInfo)
                    ->withAttribute('sourceFrom', $source)
                    ->withAttribute('resource', $definition);
                return $next($request, $response);
            }
        }

        return parent::__invoke($request, $response, $next);
    }
}
