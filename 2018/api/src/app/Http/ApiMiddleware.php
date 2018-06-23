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
                    '講者編號' => '講者編號',
                    '姓名' => '姓名',
                    '姓名EN' => '姓名EN',
                    '類別' => '類別',
                    '職稱' => '職稱',
                    '個人介紹' => '個人介紹',
                    '個人介紹EN' => '個人介紹EN',
                    '照片' => '照片',
                    '檔名' => '檔名',
                    'facebook' => 'facebook',
                    'github' => 'github',
                    'blog' => 'blog',
                    'website' => 'website',
                    'linkedin' => 'linkedin',
                    '演講主題' => '演講主題',
                    '演講主題 EN' => '演講主題 EN',
                    '演講摘要' => '演講摘要',
                    '演講摘要 EN' => '演講摘要 EN',
                    '字數' => '字數',
                    '議程編號' => '議程編號',
                    'slide' => 'slide',
                    '合併講者照片' => '合併講者照片',
                    '禁止錄影' => '禁止錄影',
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
                'columns' => [],
                'description' => '贊助商',
                'status' => 0,
            ],
        ];
    }

    public function __invoke($request, $response, $next)
    {
        $this->init();
        $routes = preg_replace('/^.*\/api\/(.*)/', '$1', $request->getUri()->getPath());
        $routesParsed = explode('/', $routes);
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
                    ->withAttribute('routesParsed', $routesParsed)
                    ->withAttribute('sourceFrom', $source)
                    ->withAttribute('resource', $definition);
                return $next($request, $response);
            }
        }

        return parent::__invoke($request, $response, $next);
    }
}
