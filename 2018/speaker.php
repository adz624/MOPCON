<?php
require_once __DIR__ . '/../vendor/autoload.php';

$apiData = json_decode(file_get_contents('https://mopcon.org/2018/api/speaker'), true);
$apiData = $apiData['payload'];

// var_dump($apiData->toArray()[0]);
$lang = \MopCon2018\Utils\Base::getLang();

$params = [
    'pageid' => 'speaker',
    'speakers' => $apiData
];
\MopCon2018\Utils\Base::render('components/speaker.twig', $params);
