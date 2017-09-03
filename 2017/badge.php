<?php
include __DIR__ . '/src/init.php';

$pageid = 'badge';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid), 
    'badges' => [],
];

$params['badge'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
	getJson($params);
}
render('badge.twig', $params);
