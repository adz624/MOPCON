<?php
include __DIR__ . '/src/init.php';


$params = [
    'pageid' => 'sponsor',
    'filemtime' => filemtime('src/sponsor.php'),
    'sponsors' => getSponsors(),
];

if (isset($_GET['api'])) {
    getJson($params);
}
render('sponsor.twig', $params);
