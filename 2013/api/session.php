<?php

define('LAST_UPDATE', '2013-10-10 18:42:00');


/////////////////////////////////////
header("Content-type: application/json");
date_default_timezone_set("Asia/Taipei");

$output['last_update'] = strtotime(LAST_UPDATE);


// 讀入資料來源 JSON
$json_str = file_get_contents('session_raw.json');
// $curl = curl_init('http://test.mopcon.net/2013/api/session_raw.json');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// $json_str = curl_exec($curl);
// curl_close($curl);
$session_raw_data = json_decode($json_str, true);
echo $session_raw_data;

$catalog_def = array();
$catalog_def['雲端服務'] = "1";
$catalog_def['技術'] = "2";
$catalog_def['營運'] = "3";

$loc_def = array();
$loc_def["1"] = "一廳";
$loc_def["2"] = "二廳";
$loc_def["3"] = "三廳";

$time_def = array();
$time_def['10'] = array('start'=>strtotime("2013-10-26 09:05:00"), 'end'=>strtotime("2013-10-26 09:25:00"));
$time_def['11'] = array('start'=>strtotime("2013-10-26 09:25:00"), 'end'=>strtotime("2013-10-26 10:15:00"));
$time_def['12'] = array('start'=>strtotime("2013-10-26 10:30:00"), 'end'=>strtotime("2013-10-26 11:10:00"));
$time_def['13'] = array('start'=>strtotime("2013-10-26 11:20:00"), 'end'=>strtotime("2013-10-26 12:00:00"));
$time_def['14'] = array('start'=>strtotime("2013-10-26 13:20:00"), 'end'=>strtotime("2013-10-26 14:10:00"));
$time_def['15'] = array('start'=>strtotime("2013-10-26 14:20:00"), 'end'=>strtotime("2013-10-26 15:00:00"));
$time_def['16'] = array('start'=>strtotime("2013-10-26 15:20:00"), 'end'=>strtotime("2013-10-26 16:00:00"));
$time_def['17'] = array('start'=>strtotime("2013-10-26 16:10:00"), 'end'=>strtotime("2013-10-26 16:50:00"));
$time_def['21'] = array('start'=>strtotime("2013-10-27 09:00:00"), 'end'=>strtotime("2013-10-27 09:50:00"));
$time_def['22'] = array('start'=>strtotime("2013-10-27 10:00:00"), 'end'=>strtotime("2013-10-27 10:40:00"));
$time_def['23'] = array('start'=>strtotime("2013-10-27 10:50:00"), 'end'=>strtotime("2013-10-27 11:30:00"));
$time_def['24'] = array('start'=>strtotime("2013-10-27 13:30:00"), 'end'=>strtotime("2013-10-27 14:20:00"));
$time_def['25'] = array('start'=>strtotime("2013-10-27 14:30:00"), 'end'=>strtotime("2013-10-27 15:10:00"));
$time_def['26'] = array('start'=>strtotime("2013-10-27 15:30:00"), 'end'=>strtotime("2013-10-27 16:10:00"));
$time_def['27'] = array('start'=>strtotime("2013-10-27 16:20:00"), 'end'=>strtotime("2013-10-27 17:30:00"));

// 把 session 資料塞入$data 中
foreach ($session_raw_data as $session) {
    // class -> catalog
    $class = $session['class'];
    $class = explode(';', $class);
    $class = trim($class[0]);

    if (array_key_exists($class, $catalog_def)) {
        $session['catalog'] = $catalog_def[$class];
    } else {
        $session['catalog'] = "9";
    }

    // loc 顯示文字轉換
    $loc = $session['loc'];
    if (array_key_exists($loc, $loc_def)) {
        $session['loc'] = $loc_def[$loc];
    }

    // 時間轉換
    $id12 = substr($session['id'], 0, 2);
    if (array_key_exists($id12, $time_def)) {
        $session['start_time'] = $time_def[$id12]['start'];
        $session['end_time'] = $time_def[$id12]['end'];
    }

    // 去頭尾空白
    $session['content'] = trim($session['content']);

    // 資料整理完成
    $output['sessions'][] = $session;
    echo $session;
    echo "<br>=====================================<br>";
    echo json_encode($output);
}


echo json_encode($output);

