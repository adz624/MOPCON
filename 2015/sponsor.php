<?php
include __DIR__ . '/src/init.php';


$params = [
    'pageid' => 'sponsor',
    'sponsors' => getSponsors(),
];


render('sponsor.twig', $params);
