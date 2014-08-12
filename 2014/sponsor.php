<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];
$tpl = new Savant3($config);

$tpl->title = "徵求贊助商";
$tpl->mainClass = ' ⃠-black-box';

$tpl->hacker = [
    [
        'name' => 'COIMOTION',
        'img'  => 'coimotion.png',
        'url'  => 'http://www.coimotion.com/',
        'desc' => '跨入行動應用的時代，COIMOTION 以先進的概念打造對開發者更友善、更好用的 API 服務。經由豐富的內容服務、完整的功能模組，COIMOTION 協助開發者打造以往無法想像的網路應用，讓開發者開創新的風潮！',
    ],
];

$tpl->developer = [
    [
        'name' => '摩鉅科技',
        'img'  => 'moregeek1.png',
        'url'  => 'http://www.moregeek.com/tw/',
        'desc' => '摩鉅科技股份有限公司，核心業務為遊戲技術平台研發及遊戲產品開發。我們擁有優秀的經營團隊與開發成員。創新＝觀察新的趨勢，提供新的體驗。群聚＝以人群為本，打造科技社交新生活。多元＝高度技術整合能力，充分客製化的思維能力。摩鉅科技希望能走在台灣開發商的更前端來看全世界。',
    ],
];

$tpl->coder = [
    [
        'name' => '凌誠科技',
        'img'  => 'linkchain.png',
        'url'  => 'http://www.linkchain.tw/',
        'desc' => '凌誠科技成立於2006年4月，主要從事應用軟體相關技術的研發及服務，專注於「精緻農業」、「資訊平台」及「自動控制」等領域發展，不斷深化軟體開發與專業服務能量，持續貫徹CMMI國際軟體品質政策，為客戶提供最佳的顧問諮詢、完善的解決方案以及快速的技術支援。',
    ],
];
// 輸出畫面
$tpl->content = $tpl->getOutput('sponsor.tpl.php');
$tpl->display('main.tpl.php');



