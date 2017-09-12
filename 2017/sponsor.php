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

if (isset($_GET['api'])) {
    getJson($params);
}

$template = isset($templates[$lang]) ? $templates[$lang] : $templates['zh'];
render($template, $params);
