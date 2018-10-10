<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MopCon2018\Utils\Base;

$url = Base::getBaseUri() . '/2018/api/schedule-unconf';
$apiData = json_decode(file_get_contents($url), true);
$apiData = $apiData['payload'];
$lang = \MopCon2018\Utils\Base::getLang();

$params = [
    'lang' => $lang,
    'pageid' => 'unconf',
    'og_url' => 'unconf.php',
    'schedules_day1' => $apiData[0]['items'],
    'schedules_day2' => $apiData[1]['items'],
];
Base::render('components/unconf.twig', $params);
