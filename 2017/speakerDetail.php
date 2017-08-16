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

if (isset($_GET['speaker'])) {
    $params['main']['ogdesc'] = $params['speakerDetail']['subject'] . ' - ' . $params['speakerDetail']['schedule_info']; 
    $params['main']['pagetitle'] = '講者 '. $params['speakerDetail']['name'];
    $params['og_image'] = $params['speakerDetail']['image'];
    $params['og_url'] = 'speakerDetail.php?speaker='.$speaker;
}	
if (isset($_GET['api'])) {
    getJson($params);
}

render('speakerDetail.twig', $params);
