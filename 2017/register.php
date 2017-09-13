<?php
include __DIR__ . '/src/init.php';

$pageid = 'register';
$params = [
    'pageid'       => $pageid,
    'filemtime'    => getLastUpdateTime($pageid),
    'heatmapRooms' => [],
];

$params['registers'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
    getJson($params);
}
render('register.twig', $params);
