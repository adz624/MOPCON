<?php
include __DIR__ . '/src/init.php';

$pageid = 'sponsor';
$params = [
    'pageid'    => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'sponsors'  => [],
];

$params['og_url'] = 'sponsor.php';
$params['sponsors'] = getAllSponsors();

// if (isset($_GET['id'])) {
//     getJson($params);
// }

$template = (isset($_GET['id']) ? 'sponsorDetail.twig' : 'sponsor.twig');
render($template, $params);
