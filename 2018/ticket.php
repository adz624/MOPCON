<?php
require_once __DIR__ . '/../vendor/autoload.php';




// var_dump($apiData->toArray()[0]);
$lang = \MopCon2018\Utils\Base::getLang();

$params = [
    'pageid' => 'ticket',
    
];
\MopCon2018\Utils\Base::render('components/ticket.twig', $params);
