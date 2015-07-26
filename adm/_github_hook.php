<?php

$release_branch= ('dev.mopcon.org' === $_SERVER['HTTP_HOST']) ? 'develop' : 'deploy'; // 這個變數應該寫死，不可以從外部參數帶進來，否則會有安全問題！！
$release_ref = "refs/heads/{$release_branch}";

//////////////////////////////////////////////////////////////////////////////////

// 處理送來的資料，如果無法正常解析就不處理
$payload = json_decode($_POST['payload'], true);
if (!is_array($payload)) {
    echo "Webhook 資料解讀失敗，不 deploy\n";
    exit;
}


// 只處理 release branch 的 push
if ($release_ref != $payload['ref']) {
    echo "ref={$payload['ref']}，不 deploy\n";
    exit;
}


// pull 最新的 code 下來
echo "deploy....";
exec("git reset --hard");
exec("git pull origin {$release_branch} -f");
echo "OK\n";

// 如果有 composer.lock，跑 composer install
if (is_file(__DIR__ . '/../composer.json')) {
    echo "composer install....";
    exec(sprintf("cd '%s' && composer install -o -n", __DIR__ . '/../'));
    echo "done\n";
}


// 如果有 memcache，把最新的 deploy 狀況寫入 memcache
$memcache_ok = function_exists("memcache_connect");
if ($memcache_ok) {
    $current_commit_id = $payload['after'];
    $date = date('Y-m-d H:i:s');
    $deploy_status = [
        'commit_id'    => $current_commit_id,
        'deploy_time'  => $date
    ];

    $mc = memcache_connect('localhost', 11211);

    memcache_set($mc, 'deploy_status', $deploy_status);
}

