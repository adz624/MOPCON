<?php
include __DIR__ . '/src/init.php';

$pageid = 'speakerDetail';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid), 
    'speakerDetail' => [],
];

$params['speakerDetail'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
	getJson($params);
}
render('speakerDetail.twig', $params);
