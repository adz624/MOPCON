<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MopCon2018\Utils\Base;

$url = Base::getBaseUri() . '/2018/api/sponsor';
$apiData = json_decode(Base::getUriContents($url), true);
$apiData = $apiData['payload'];
$id = isset($_GET['id']) ? $_GET['id'] : '';

// var_dump($apiData->toArray()[0]);
$lang = \MopCon2018\Utils\Base::getLang();

$params = [
    'pageid' => 'sponsor',
    'og_url' => 'sponsor.php',
    'sponsors' => $apiData,
    'id' => $id
];

\MopCon2018\Utils\Base::render('components/sponsor.twig', $params);
