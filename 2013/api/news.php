<?php

header("Content-type: application/json");
date_default_timezone_set("Asia/Taipei");


$fb_access_token = "166742843389959|rq-8DFKJm8fcIf5BVFaaCTmlIIA"; // CQD: 這個 token 從我手上的測試 FB App 來的，可以換成其他任何有效的 token
$fb_feed_url = "https://graph.facebook.com/219967208129003/?fields=posts.fields%28message,created_time,from.name,link%29&access_token={$fb_access_token}";

/////////////////////////
// read facebook data
/////////////////////////

$result = file_get_contents($fb_feed_url);

// Data validation
if(!is_string($result)){
    echo '{"error":"無法取得 Facebook 資料(1)"}';
    die();
}

$feed_data = @json_decode($result, true);
if (!is_array($feed_data) || !is_array($feed_data['posts'])) {
    echo '{"error":"無法解析 Facebook 回傳資料(2)"}';
    die();
}



/////////////////////////
// 把 FB 河道資訊整理成
// 餵給 APP 用的格式
/////////////////////////
$data = array();
$data['news'] = array();


foreach($feed_data['posts']['data'] as $post){
    // facebook 給的文章 ID 像是219967208129003_394126360713086
    // 要取「_」後面的部份
    // 萬一找不到底線的話，那就是整串數字當作 ID
    $post_id = $post['id'];
    $post_id = explode('_', $post_id);
    $post_id = $post_id[count($post_id)-1];
    $post_id = intval($post_id);

    // 標題的取法
    // - 內文的第一個斷行（\n）前面的部份
    // - 不超過 50 個字
    $title = explode("\n", $post['message']);
    $title = $title[0];
    if (mb_strlen($title, 'UTF-8')>50) {
        $title = mb_substr($title, 0, 50, 'UTF-8').'...';
    }

    // 內文
    $content = $post['message'];

    // 作者名稱
    $publisher = $post['from']['name'];

    // 發布時間
    $pub_time = $post['created_time'];
    $pub_time = strtotime($pub_time);

    // 組合資訊
    $data['news'][] = array(
            "id"       => $post_id,
            "title"    => $title,
            "content"  => $content,
            "publishe" => $publisher,
            "pub_time" => $pub_time,
            );
}


// 抓出新聞的最新發佈時間當作最後更新時間
foreach ($data['news'] as $news) {
    if ($data['last_update'] < $news['pub_time']) {
        $data['last_update'] = $news['pub_time'];
    }
}

echo json_encode($data);

