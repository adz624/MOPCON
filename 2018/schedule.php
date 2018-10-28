<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MopCon2018\Utils\Base;

$url = Base::getBaseUri() . '/2018/api/schedule';
$apiData = json_decode(Base::getUriContents($url), true);
$apiData = $apiData['payload'];
$lang = \MopCon2018\Utils\Base::getLang();

$params = [
    'lang' => $lang,
    'pageid' => 'schedule',
    'og_url' => 'schedule.php',
    'schedules_day1' => $apiData['agenda'][0]['items'],
    'schedules_day2' => $apiData['agenda'][1]['items'],
];
Base::render('components/schedule.twig', $params);
