<?php
require_once __DIR__ . '/../vendor/autoload.php';

$apiData = json_decode(file_get_contents('https://dev.mopcon.org/2018/api/sponsor'), true);
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
