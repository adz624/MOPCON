<?php
$release_branch = ('dev.mopcon.org' === $_SERVER['HTTP_HOST']) ? 'develop' : 'master'; // 這個變數應該寫死，不可以從外部參數帶進來，否則會有安全問題！！
$folder = ('dev.mopcon.org' === $_SERVER['HTTP_HOST']) ? '/home/www/mopcon_2017_back_end' : '/home/www/mopcon_2017_back_end_prod';
$pm2_id = ('dev.mopcon.org' === $_SERVER['HTTP_HOST']) ? '0' : '1';
$pm2_port = ('dev.mopcon.org' === $_SERVER['HTTP_HOST']) ? '3000' : '3001';
//////////////////////////////////////////////////////////////////////////////////

// 處理送來的資料，如果無法正常解析就不處理
$payload = json_decode($_POST['payload'], true);
if (!is_array($payload)) {
    echo "Webhook 資料解讀失敗，不 deploy\n";
    exit;
}

say("Deploy...");
exec('cd ' . $folder . ' && git reset --hard', $output);
exec('cd ' . $folder . ' && git pull origin ' . $release_branch, $output);
say("bower install...");
exec('cd ' . $folder . ' && bower install --allow-root', $output);
say("npm install...");
exec('cd ' . $folder . ' && npm install', $output);
say("Gulp build...");
exec('cd ' . $folder . ' && gulp build', $output);
say("Restart pm2....");
exec('cd ' . $folder . ' && pm2 stop ' . $pm2_id, $output);
exec('cd ' . $folder . ' && PORT=' . $pm2_port . ' pm2 start -l 0 ./bin/www', $output);
say("Deploy done...");

function say($msgs) {
    if (is_array($msgs)) {
        foreach ($msgs as $msg) {
            say($msg);
        }
        echo "\n\n";
    } else {
        echo $msgs . "\n";
    }
}
