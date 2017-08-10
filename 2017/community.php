<?php
include __DIR__ . '/src/init.php';


$lang = getLang();
$pageid = 'community';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'community' => getAllCommunities(),
    'sponsors' => getAllSponsors(),
];
if (isset($_GET['api'])) {
	getJson($params);
}

render('community.twig', $params);
