<?php

$release_branch= 'deploy';                 // 這個變數應該寫死，不可以從外部參數帶進來，否則會有安全問題！！
$release_ref = "refs/heads/{$release_branch}";

//////////////////////////////////////////////////////////////////////////////////

// 處理送來的資料，如果無法正常解析就不處理
$payload = json_decode($_POST['payload'], true);
if (!is_array($payload)) {
    return;
}


// 只處理 release branch 的 push
if (!$release_ref == $payload['ref']) {
    return;
}


// pull 最新的 code 下來
exec("git reset --hard");
exec("git checkout {$release_branch}");
exec("git pull origin {$release_branch}");

