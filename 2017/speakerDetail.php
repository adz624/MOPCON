<?php
include __DIR__ . '/src/init.php';

$lang = getLang();
$pageid = 'speakerDetail';
$speaker = isset($_GET['speaker']) ? $_GET['speaker'] : '';
$params = [
    'pageid'        => $pageid,
    'filemtime'     => getLastUpdateTime($pageid),
    'speakerDetail' => getAllSpeakerDetail($speaker),
    'index'         => getIndex(),
];

if (isset($_GET['api'])) {
    getJson($params);
}

render('speakerDetail.twig', $params);
