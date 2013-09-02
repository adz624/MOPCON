<?php

header("Content-type: application/json");
date_default_timezone_set("Asia/Taipei");


// 新聞們
$data['news'][] = array(
        "id"        => 2,
        "title"     => "MOPCON 充滿愛狗人士",
        "content"   => 
            "他待我漸漸不同往日，他總仍舊是偷！他深深的倒抽了一口氣。熊是只吃四個掌，對不起。\n".
            "\n".
            "納豆。\n".
            "\n".
            "千字常常寫成十字，一面回轉頭去對著女辛道，我敢相信，他看一眼面前的一大堆木札，姐，我的箭法掌太巧妙了。\n".
            "\n".
            "差不多先生的名字！再也忍不住的你技癢。可愛，天色蒼蒼，真是好空氣。他那裡會有戀愛故事呢。",
        "publisher" => "假文產生器",
        "pub_time"  => strtotime("2013-8-22 23:00:00"),
        );


$data['news'][] = array(
        "id"        => 1,
        "title"     => "MOPCON 充滿愛貓人士",
        "content"   => 
            "她也何嘗有一天接近過快樂與幸福。\n".
            "\n".
            "離別。自己搖頭說？進化為大葛格後，黃袍，不好！倒並沒有壓壞。惟膀子疼痛利害？使女們發一聲喊。\n".
            "\n".
            "代表們認這結果為滿意。\n".
            "\n".
            "放一碗湯罷。",
        "publisher" => "假文產生器",
        "pub_time"  => strtotime("2013-8-22 22:00:00"),
        );


// 抓出新聞的最新發佈時間當作最後更新時間
foreach ($data['news'] as $news) {
    if ($data['lastu_pdate'] < $news['pub_time']) {
        $data['lastu_pdate'] = $news['pub_time'];
    }
}

echo json_encode($data);

