<?php
function getAllSchedule()
{
    $google_data = json_decode(file_get_contents("https://spreadsheets.google.com/feeds/list/1uIN3ztZeBYAliu0tq2_GoQT4Ublly7EMPs2BvIjl_Es/4/public/values?alt=json"), true);
    $google_data = $google_data['feed']['entry'];
    $speakerDetail = getAllScheduleDetail();
    $data = [];
    $paintBG = ['休息 Break', '午餐 Lunch', '下午茶 Afternoon tea', 'End'];

    foreach ($google_data as $key => $item) {
        // 跳過議會廳欄位
        if ($key === 0) {
            continue;
        }
        // R1議程
        $content_day1 = [$item['gsx$_cokwr']['$t']];

        // 如果同一時間點，其他廳有議程的話
        if (isset($item['gsx$_cre1l'])) {
            $content_day1[] = $item['gsx$_cpzh4']['$t'];
            $content_day1[] = $item['gsx$_cre1l']['$t'];
        }

        $data['day1'][] = [
            'paintBG' => is_numeric(array_search($item['gsx$_cokwr']['$t'], $paintBG)) ? true : false,
            'colspan' => isset($item['gsx$_cre1l']) ? 1 : 3,
            'time'    => $item['gsx$day1']['$t'],
            'content' => getSpeakerDetail($content_day1, $speakerDetail),
        ];

        if ($item['gsx$day2']['$t'] !== '') {
            $content_day2 = [$item['gsx$_ckd7g']['$t']];
            if (isset($item['gsx$_cyevm'])) {
                $content_day2[] = $item['gsx$_clrrx']['$t'];
                $content_day2[] = $item['gsx$_cyevm']['$t'];
            }

            $data['day2'][] = [
                'paintBG' => is_numeric(array_search($item['gsx$_ckd7g']['$t'], $paintBG)) ? true : false,
                'colspan' => isset($item['gsx$_cyevm']) ? 1 : 3,
                'time'    => $item['gsx$day2']['$t'],
                'content' => getSpeakerDetail($content_day2, $speakerDetail),
            ];
        }
    }

    return $data;
}
function getAllScheduleDetail($speaker = 0)
{
    $google_data = json_decode(file_get_contents("https://spreadsheets.google.com/feeds/list/1uIN3ztZeBYAliu0tq2_GoQT4Ublly7EMPs2BvIjl_Es/1/public/values?alt=json"), true);
    $google_data = $google_data['feed']['entry'];

    foreach ($google_data as $item) {
        
        if( $lang_zh[$item['gsx$議程編號']['$t']] != []) { 
            if ($lang_zh[$item['gsx$議程編號']['$t']]["title"] != '') {
                $lang_zh[$item['gsx$議程編號']['$t']]["title"] .= " 與 ";
                $lang_en[$item['gsx$議程編號']['$t']]["title"] .= " & ";
            }
            $lang_zh[$item['gsx$議程編號']['$t']]["title"] .= $item['gsx$姓名']['$t'];
            $lang_zh[$item['gsx$議程編號']['$t']]["picture"] = $item['gsx$合併講者照片']['$t'];

            $lang_en[$item['gsx$議程編號']['$t']]["title"] .= $item['gsx$姓名en']['$t'];
            $lang_en[$item['gsx$議程編號']['$t']]["picture"] = $item['gsx$合併講者照片']['$t'];
        }
        else {
            $lang_zh[$item['gsx$議程編號']['$t']] = [
                'id'             => $item['gsx$議程編號']['$t'],
                'title'          => $item['gsx$姓名']['$t'],
                'name'           => $item['gsx$姓名']['$t'],
                'type'           => $item['gsx$類別']['$t'],
                'job'            => $item['gsx$職稱']['$t'],
                'info'           => $item['gsx$個人介紹']['$t'],
                'picture'        => $item['gsx$照片']['$t'],
                'facebook'       => $item['gsx$facebook']['$t'],
                'github'         => $item['gsx$github']['$t'],
                'blog'           => $item['gsx$blog']['$t'],
                'website'        => $item['gsx$website']['$t'],
                'linkedin'       => $item['gsx$linkedin']['$t'],
                'schedule_topic' => $item['gsx$演講主題']['$t'],
                'schedule_info'  => $item['gsx$演講摘要']['$t'],
                'slide'          => $item['gsx$slide']['$t'],
            ];
    
            $lang_en[$item['gsx$議程編號']['$t']] = [
                'id'             => $item['gsx$議程編號']['$t'],
                'title'          => $item['gsx$姓名en']['$t'],
                'name'           => $item['gsx$姓名en']['$t'],
                'type'           => $item['gsx$類別']['$t'],
                'job'            => $item['gsx$職稱']['$t'],
                'info'           => $item['gsx$個人介紹en']['$t'],
                'picture'        => $item['gsx$照片']['$t'],
                'facebook'       => $item['gsx$facebook']['$t'],
                'github'         => $item['gsx$github']['$t'],
                'blog'           => $item['gsx$blog']['$t'],
                'website'        => $item['gsx$website']['$t'],
                'linkedin'       => $item['gsx$linkedin']['$t'],
                'schedule_topic' => $item['gsx$演講主題en']['$t'],
                'schedule_info'  => $item['gsx$演講摘要en']['$t'],
                'slide'          => $item['gsx$slide']['$t'],
            ];
        }
       
    }

    $main = [
        'zh' => $speaker !== 0 ? $lang_zh[$speaker] : $lang_zh,
        'en' => $speaker !== 0 ? $lang_en[$speaker] : $lang_en,
    ];

    return getI18n($main);
}
function getSpeakerDetail($speakers, $speakerDetail)
{
    foreach ($speakers as $key => $item) {
        if (is_numeric($item)) {
            if (isset($speakerDetail[$item])) {
                $result[] = [
                    'schedule'       => true,
                    'id'             => $speakerDetail[$item]['id'],
                    'schedule_topic' => $speakerDetail[$item]['schedule_topic'],
                    'schedule_info'  => $speakerDetail[$item]['schedule_info'],
                    'title'          => $speakerDetail[$item]['title'],
                    'picture'        => $speakerDetail[$item]['picture'],
                    'type'           => $speakerDetail[$item]['type'],
                    'slide'          => $speakerDetail[$item]['slide'],
                    'room'           => count($speakers) === 1 ? 'All' : 'R' . ($key + 1),
                    
                ];
            } else {
                $result[] = [
                    'schedule' => false,
                    'content'  => '晚點告訴你 :P',
                ];
            }
        } else {
            $result[] = [
                'schedule' => false,
                'content'  => $item,
            ];
        }
    }

    return $result;
}