<?php
function getSponsors()
{
    $google_data = json_decode(file_get_contents("https://spreadsheets.google.com/feeds/list/1MXWK7N8NAUFaoHiaOuDK2E3Llev5buhHnUAW86nDdAc/1/public/values?alt=json"), true);
    $google_data = $google_data['feed']['entry'];
    $lang_zh = [];
    $lang_en = [];
    foreach ($google_data as $item) {
        $lang_zh[$item['gsx$贊助商編號']['$t']] = [
            'id'             => $item['gsx$贊助商編號']['$t'],
            'type'           => $item['gsx$贊助商等級']['$t'],
            'name'           => $item['gsx$名稱']['$t'],
            'info'           => $item['gsx$介紹']['$t'],
            'logo'           => $item['gsx$照片']['$t'],
            'website'        => $item['gsx$網址']['$t'],
        ];

        $lang_en[$item['gsx$贊助商編號']['$t']] = [
            'id'             => $item['gsx$贊助商編號']['$t'],
            'type'           => $item['gsx$贊助商等級']['$t'],
            'name'           => $item['gsx$名稱en']['$t'],
            'info'           => $item['gsx$介紹en']['$t'],
            'logo'           => $item['gsx$照片']['$t'],
            'website'        => $item['gsx$網址']['$t'],
        ];
    }
    $main = [
        'zh' => $lang_zh,
        'en' => $lang_en,
    ];

    return getI18n($main);
}
