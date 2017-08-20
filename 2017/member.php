<?php
include __DIR__ . '/src/init.php';


$lang = getLang();
$pageid = 'member';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'member' => getAllMembers()
];

render('member.twig', $params);
