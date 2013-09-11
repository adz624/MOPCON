<?php

define('LAST_UPDATE', '2013-08-19');


/////////////////////////////////////
header("Content-type: application/json");
date_default_timezone_set("Asia/Taipei");

$data['last_update'] = strtotime(LAST_UPDATE);


$data['sessions'][] = array(
        "id"          => 100,
        "name"        => "小貓咪飼養介紹",
        "speaker"     => "愛貓人士",
        "speaker_bio" => "天真可愛的愛貓人士",
        "keyword"     => "cat",
        "loc"         => "403 會議室",
        "start_time"  => strtotime("2013-10-26 09:00:00"),
        "end_time"    => strtotime("2013-10-26 09:40:00")
        );


$data['sessions'][] = array(
        "id"          => 101,
        "name"        => "小狗狗飼養介紹",
        "speaker"     => "愛狗人士",
        "speaker_bio" => "天真可愛的愛狗人士",
        "keyword"     => "dog",
        "loc"         => "404 會議室",
        "start_time"  => strtotime("2013-10-26 09:50:00"),
        "end_time"    => strtotime("2013-10-26 10:30:00")
        );

$data['sessions'][] = array(
        "id"          => 130,
        "name"        => "Mikimoto假面的告白",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "開發工具",
        "loc"         => "企業號儲藏室",
        "start_time"  => strtotime("2013-10-26 15:10:00"),
        "end_time"    => strtotime("2013-10-26 16:40:00")
        );

$data['sessions'][] = array(
        "id"          => 210,
        "name"        => "進擊的Mikimoto",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "iOS",
        "loc"         => "企業號收發室",
        "start_time"  => strtotime("2013-10-27 10:20:00"),
        "end_time"    => strtotime("2013-10-27 11:20:00")
        );

$data['sessions'][] = array(
        "id"          => 220,
        "name"        => "進擊的Mikimoto PartII",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "Android",
        "loc"         => "企業號魚雷室",
        "start_time"  => strtotime("2013-10-27 13:30:00"),
        "end_time"    => strtotime("2013-10-27 14:40:00")
        );

$data['sessions'][] = array(
        "id"          => 221,
        "name"        => "Mikimotoo與娜美",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "數位內容",
        "loc"         => "企業號艦橋",
        "start_time"  => strtotime("2013-10-27 13:30:00"),
        "end_time"    => strtotime("2013-10-27 14:40:00")
        );

$data['sessions'][] = array(
        "id"          => 222,
        "name"        => "Mikimotoo與涼宮春日的浪漫夏天",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "開發平台",
        "loc"         => "企業號輪機室",
        "start_time"  => strtotime("2013-10-27 13:30:00"),
        "end_time"    => strtotime("2013-10-27 14:40:00")
        );

$data['sessions'][] = array(
        "id"          => 230,
        "name"        => "你所不知道的Mikimotoo",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "數位內容",
        "loc"         => "企業號甲板",
        "start_time"  => strtotime("2013-10-27 15:10:00"),
        "end_time"    => strtotime("2013-10-27 16:40:00")
        );

echo json_encode($data);

