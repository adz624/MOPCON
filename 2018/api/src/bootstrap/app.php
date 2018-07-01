<?php
require __DIR__ . '/../../../../vendor/autoload.php';

$app = new Slim\App;
$container = $app->getContainer();

$container['ApiController'] = function ($container) {
    return new MopConApi2018\App\Http\ApiController($container);
};

$app->get('/2018/api/__info__', function () {
    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://hackmd.io/s/ByvLG0oWX");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TCP_KEEPALIVE, 1);
        curl_setopt($ch, CURLOPT_TCP_KEEPIDLE, 2);
        $data = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }
        curl_close($ch);
        echo $data;
    } catch (Exception $e) {
        echo '>_____________________<';
    }
});

// 用 group 可以從 global 分離出來
$app->group('/2018/api', function () {
    $this->any('/{routes:.*}', 'ApiController');
})->add(new MopConApi2018\App\Http\ApiMiddleware($container));

$app->run();
