<?php
require __DIR__ . '/../../../../vendor/autoload.php';

$app = new Slim\App;
$container = $app->getContainer();

$container['ApiController'] = function ($container) {
    return new MopConApi2018\App\Http\ApiController($container);
};

$app->get('/2018/api/{routes:.*}', 'ApiController');

$app->add(new MopConApi2018\App\Http\ApiMiddleware($container));

$app->run();
