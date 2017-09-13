<?php
include __DIR__ . '/src/init.php';

$pageid = 'qrcode';
$params = [
    'pageid'       => $pageid,
    'filemtime'    => getLastUpdateTime($pageid),
    'heatmapRooms' => [],
];

$params['qrcodes'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
    getJson($params);
}
render('qrcode.twig', $params);
