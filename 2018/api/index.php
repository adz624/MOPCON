<?php
require __DIR__ . '/../../vendor/autoload.php';

$app = new Slim\App();

$app->get('/hello', function ($request, $response) {
    return $response->getBody()->write('Hello, World!');
});

$app->run();
