<?php
require __DIR__ . '/../../../../vendor/autoload.php';
$phinx = require __DIR__ . '/../../../../phinx.php';

// 從 hostname 判斷目前運行環境
$version = 'testing';
if ($_SERVER['HTTP_HOST'] == 'dev.mopcon.org') {
    $version = 'development';
} elseif ($_SERVER['HTTP_HOST'] == 'mopcon.org') {
    $version = 'production';
}
$dbEnvFromPhinx = $phinx['environments']['mopcon2018'];

$config = [
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'driver' => $dbEnvFromPhinx['adapter'],
            'host' => $dbEnvFromPhinx['host'],
            'port' => $dbEnvFromPhinx['port'],
            'database' => $dbEnvFromPhinx['name'],
            'username' => $dbEnvFromPhinx['user'],
            'password' => $dbEnvFromPhinx['pass'],
            'charset'   => $dbEnvFromPhinx['charset'],
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        'version' => $version
    ]
];

$app = new Slim\App($config);
$container = $app->getContainer();

$container['ApiController'] = function ($container) {
    return new MopConApi2018\App\Http\ApiController($container);
};

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};

$container['isProduction'] = function () use ($config) {
    return $config['settings']['version'] == 'production';
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
