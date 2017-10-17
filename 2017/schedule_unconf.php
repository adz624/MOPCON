<?php
include __DIR__ . '/src/init.php';

$pageid = 'schedule_unconf';
$params = [
    'pageid'    => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'schedules' => [],
];

$params['schedules'] = getScheduleUnconf();
$params['og_url'] = 'schedule_unconf.php';
$params['main']['ogdesc'] = 'Unconference 是 MOPCON 於正式議程外，提供給參與會眾一個發表平台！每個場次 30 分鐘主題不限。';


if (isset($_GET['api'])) {
    getJson($params);
}
render('schedule_unconf.twig', $params);
