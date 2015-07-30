<?php
include __DIR__ . '/src/init.php';

$main = [
    'zh' => [
        'pagetitle' => '地圖',
        'icck' => '高雄國際會議中心',
        'header1' => '高鐵/火車/捷運',
        'desc1' => [
            '左營高鐵站/高雄火車站搭捷運紅線',
            '至捷運美麗島站換乘橘線往西子灣方向',
            '捷運鹽埕埔站下車，二號出口步行約 250 公尺可至會場',
        ],
        'header2' => '公車',
        'desc2' => '歷史博物館0南(單邊停靠)、0北(單邊停靠)、11、25、33、56、60、76、77、82、建國幹線、91、214、219、248',
    ],
    'en' => [
        'pagetitle' => 'Location',
        'icck' => 'International Convention Center Kaohsiung',
        'header1' => 'High Speed Railway/Train/Metro',
        'desc1' => [
            'Take Metro Red Line from THSR Zuoying Station or TRA Kaohsiung Station',
            'Transfer to Orange Line at Formosa Boulevard Station',
            'Get off at Yanchengpu Station, the ICCK is 250 meters away from Exit 2',
        ],
        'header2' => 'Bus',
        'desc2' => '0S(one way only), 0N(one way only), 11, 25, 33, 56, 60, 76, 77, 82, Jianguo Main Line, 91, 214, 219, 248',
    ],
];

$main = getI18n($main);

render('location.twig', [
    'pageid' => 'location',
    'main' => $main,
]);
