<?php
function getAllSchedule()
{
    $google_data = json_decode(file_get_contents("https://spreadsheets.google.com/feeds/list/1KrS_FkyR12dKG9apshDo-Ba0HoR6rO_EJ41hxy-0EZk/2/public/values?alt=json"), true);
    $google_data = $google_data['feed']['entry'];
    $speakerDetail = getAllSpeakerDetail();
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

function getSpeakerDetail($speakers, $speakerDetail)
{
    foreach ($speakers as $key => $item) {
        if (is_numeric($item)) {
            if (isset($speakerDetail[$item])) {
                $result[] = [
                    'schedule'       => true,
                    'schedule_topic' => $speakerDetail[$item]['schedule_topic'],
                    'name'           => $speakerDetail[$item]['name'],
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