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
        'name' => 'Amazon Web Service',
        'img'  => 'aws.png',
        'url'  => 'http://aws.amazon.com/',
        'desc' => 'Amazon Web Services 於2006年推出，開始將主要的IT基礎設施以網路服務的形式，公開讓企業使用 – 此形式也是目前大家耳熟能詳的雲端運算。Amazon Web Services現今在雲端提供高可靠性、高擴充性，以及低成本的基礎架構平台。Amazon Web Services 提供超過40種的不同服務，包括 Amazon Elastic Compute Cloud (Amazon EC2)、Amazon Simple Storage Service (Amazon S3) 及 Amazon Relational Database Service (Amazon RDS)。',
    ],
    [
        'name' => 'COIMOTION',
        'img'  => 'coimotion.png',
        'url'  => 'http://www.coimotion.com/',
        'desc' => '跨入行動應用的時代，COIMOTION 以先進的概念打造對開發者更友善、更好用的 API 服務。經由豐富的內容服務、完整的功能模組，COIMOTION 協助開發者打造以往無法想像的網路應用，讓開發者開創新的風潮！',
    ],
    [
        'name' => '群暉科技',
        'img'  => 'synology_dark_bg.png',
        'url'  => 'http://www.synology.com',
        'desc' => '群暉科技致力於整合最新科技並充分發揮其優勢，提供企業與家庭用戶可靠、經濟實惠的解決方案來集中資料儲存、簡化資料備份、跨平台分享和同步檔案，以及隨時隨地存取資料。群暉科技的目標是提供具前瞻性功能的產品與優質的客戶服務。',
        //'desc' => 'Synology is dedicated to taking full advantage of the latest technologies to bring businesses and home users reliable and affordable ways to centralize data storage, simplify data backup, share and sync files across different platforms, and access data on-the-go. Synology aims to deliver products with forward-thinking features and the best in class customer services.';
    ],
];

$tpl->other = [
    [
        //其實是 developer
        'name' => 'Etu',
        'img'  => 'etu.png',
        'url'  => 'http://www.etusolution.com/index.php/tw/',
        'desc' => 'Etu 以亞洲為舞臺，是專為企業提供 Big Data End-to-End 解決方案的領導品牌。Etu 致力為產業客戶發展完整的軟、硬體，以及整合後的資料處理、分析，與未來擴充時所需的整體解決方案。協助客戶探勘企業內部的巨量多結構資料價值，使其能簡易地擷取潛藏在其中的商業價值。',
    ],
    [
        //其實是 developer
        'name' => '摩鉅科技',
        'img'  => 'moregeek1.png',
        'url'  => 'http://www.moregeek.com/tw/',
        'desc' => '摩鉅科技股份有限公司，核心業務為遊戲技術平台研發及遊戲產品開發。我們擁有優秀的經營團隊與開發成員。創新＝觀察新的趨勢，提供新的體驗。群聚＝以人群為本，打造科技社交新生活。多元＝高度技術整合能力，充分客製化的思維能力。摩鉅科技希望能走在台灣開發商的更前端來看全世界。',
    ],
    [
        // 其實是 coder
        'name' => '凌誠科技',
        'img'  => 'linkchain2.png',
        'url'  => 'http://www.lingcheng.com.tw/',
        'desc' => '凌誠科技成立於2006年4月，主要從事應用軟體相關技術的研發及服務，專注於「精緻農業」、「資訊平台」及「自動控制」等領域發展，不斷深化軟體開發與專業服務能量，持續貫徹CMMI國際軟體品質政策，為客戶提供最佳的顧問諮詢、完善的解決方案以及快速的技術支援。',
    ],
    [
        // 其實是 coder
        'name' => '找狗網',
        'img'  => 'finddog.png',
        'url'  => 'http://www.finddog.net/zh-tw/index.html',
        'desc' => '找狗網透過手機拍照影像辨識、文字搜尋、地理時間資訊，運用雲端模糊類神經智慧型辨識綜合搜尋系統，結合軟硬整合穿戴式裝置及網路分享機制，達成走失狗狗協尋和流浪狗地圖建立、寵物急難互助社群交流，建置出寵物健康數位化管理的創新服務。',
    ],
];
// 輸出畫面
$tpl->content = $tpl->getOutput('sponsor.tpl.php');
$tpl->display('main.tpl.php');



