<?php
include __DIR__ . '/src/init.php';


$lang = getLang();
$pageid = '';
$params = [
];
render('ticket.twig', $params);
