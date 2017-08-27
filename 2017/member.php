<?php
include __DIR__ . '/src/init.php';


$lang = getLang();
$pageid = 'member';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'member' => getAllMembers()
];
$params['og_url'] = 'member.php';
$text = [
    'zh' => [
        'first' => '組員名單',
        'sceond' => '名單'
    ],
    'en' => [
        'first' => 'Member List',
        'sceond' => ' List'
    ]
  ];
$params['text'] = isset($text[$lang]) ? $text[$lang] : $text['zh'];
render('member.twig', $params);
