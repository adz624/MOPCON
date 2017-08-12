<?php
include __DIR__ . '/src/init.php';

$pageid = 'profile';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid), 
    'heatmapRooms' => [],
];

$params['profiles'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
	getJson($params);
}
render('profile.twig', $params);
