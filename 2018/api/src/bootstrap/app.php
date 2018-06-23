<?php
require __DIR__ . '/../../../../vendor/autoload.php';

$app = new Slim\App;
$container = $app->getContainer();

$container['ApiController'] = function ($container) {
    return new MopConApi2018\App\Http\Controller($container);
};

$app->get('/2018/api/{routes:.*}', function ($request, $response, $args) {
    $sourceFrom = $request->getAttribute('sourceFrom');
    $resource = $request->getAttribute('resource');
    $jsonOptions = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT | JSON_PRETTY_PRINT;

    switch ($sourceFrom) {
        case 'googleSheet':
            $apiData = new MopCon2018\Utils\GoogleDocsSpreadsheet(
                $resource['sheetKey'],
                $resource['columns'],
                $resource['sheetGridId']
            );
            return $response = $response->withHeader('Content-Type: application/json')
                ->getBody()->write($apiData->toJson($jsonOptions));
        default:
            return $response->withHeader('Content-Type: application/json')
                ->getBody()->write(json_encode($resource, $jsonOptions));
    }
});

$app->add(new MopConApi2018\App\Http\ApiMiddleware($container));
$app->run();
