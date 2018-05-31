<?php
require_once __DIR__ . '/../vendor/autoload.php';

$params = [
    'pageid' => 'index',
    'pagetitle' => '首頁'
];
MopCon2018\Utils\Base::render('components/index.twig', $params);
