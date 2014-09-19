<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];
$tpl = new Savant3($config);

$tpl->title = "徵求贊助商";
$tpl->mainClass = ' ⃠-black-box';
// TonyStark
//  - ASUSCloud
//  - Microsoft

// Hacker
//  - Yahoo
//  - KKBOX
//  - IBM

// Geek
//  - 新蛋
//  - GitCafe

// Developer

// Coder
//   - 乃師
//   - UserXper 悠識
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

$tpl->developer = [
    [
        // shawn
        //其實是 developer
        'name' => 'Mobilogic',
        'img'  => 'mobilogics.jpg',
        'url'  => 'http://www.mobilogic.com/',
        'desc' => '一群同樣受到Apple產品創新理念而組成的團隊，Mobilogics希望能盡自身棉薄之力，為台灣科技產業挖掘出新的方向。
台灣第一家持有蘋果MFi授權的條碼產品開發公司，Mobilogics團隊秉持這份放眼未來的精神，希望實踐科技＝生活的理想。
',
    ],
    [
        // shawn
        //其實是 developer
        'name' => '春水堂 Hami軟體商店',
        'img'  => 'hamiapps.png',
        'url'  => 'http://hamiweb.emome.net/pages/content/1/5',
        'desc' => 'Hami 軟體商店
– 最獨特:精選獨家APP(快打旋風IV、Cytus 、Deemo)。
– 最優惠:眾多熱門遊戲用戶獨享優惠與儲值禮包、特價/限免優惠。
– 最好康:指定活動下載送Groupon購物金或便利商店購物金等。
– 最方便:支援門號、FB帳號(免註冊),付款選擇多元。
– 最貼心:APP管家功能、同時支援5台裝置。
– 最安心:綠色安全標章認證機制,遠離病毒威脅。',
//        'desc' => 'Hami Apps
//– Exclusiveness:Most exclusive Apps in Hami Apps (e.g. Street Fighter IV, Cytus, Deemo).
//– Discount:Lots of discounts, top-up gifts, and free gifts of popular games for Hami Apps users only.
//– Promotions:Free coupon, holy gems, and points for downloading or top-up every month. 
//– Convenience:Supports directly login through CHT mobile phone number and FB account. Multiple payment methods. 
//– Thoughtful service:APP Housekeeper function, Supports 5 devices simultaneously.
//– Safety:Green safety identification stamp, keeping away from virus threatens.'
    ],
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
        //其實是 developer
        'name' => 'Mozilla',
        'img'  => 'mozilla.png',
        'url'  => 'http://mozilla.com.tw/',
        'desc' => 'Mozilla 是一個全球化的非營利組織，其願景是打造一個更開放自由的網路未來，提升人們的網路經驗，並支持開放源碼的資源共享精神。Mozilla 同時也是全球性的社群，由來自各地的軟體開發工程師、測試人員、廣告創意人員共同組成，一致的目標是支持網路資源的完全開放共享。',
    ],
];

$tpl->coder = [
    [
        // 其實是 coder
        'name' => '凌誠科技',
        'img'  => 'linkchain2.png',
        'url'  => 'http://www.lingcheng.com.tw/',
        'desc' => '凌誠科技成立於2006年4月，主要從事應用軟體相關技術的研發及服務，專注於「精緻農業」、「資訊平台」及「自動控制」等領域發展，不斷深化軟體開發與專業服務能量，持續貫徹CMMI國際軟體品質政策，為客戶提供最佳的顧問諮詢、完善的解決方案以及快速的技術支援。',
    ],
    [
        // shawn
        // 其實是 coder
        'name' => 'Mokoversity',
        'img'  => 'mokoversity.jpg',
        'url'  => 'https://www.mokoversity.com/',
        'desc' => 'Mokoversity，最早是 Moko365 所開發的開放式線上課程平臺（MOOC），後與 Taipei Angels（台安傑天使投資）合作，目標是打造一個追求開放創新精神及引導創業的新型態學校。Mokoversity 來自 Mobile Communication University 的概念。University 源自 universitas（拉丁文），原意是：community of teachers and scholars。Mokoversity 認為，在這個創意經濟的網路時代，「每個人都要學程式設計」，目前推出多門程式設計課程。',
    ],
    [
        // 其實是 coder
        'name' => '找狗網',
        'img'  => 'finddog.png',
        'url'  => 'http://www.finddog.net/zh-tw/index.html',
        'desc' => '找狗網透過手機拍照影像辨識、文字搜尋、地理時間資訊，運用雲端模糊類神經智慧型辨識綜合搜尋系統，結合軟硬整合穿戴式裝置及網路分享機制，達成走失狗狗協尋和流浪狗地圖建立、寵物急難互助社群交流，建置出寵物健康數位化管理的創新服務。',
    ],
];

$tpl->special = [
    [
        // shawn
        // 其實是 特別贊助
        'name' => 'OSSF',
        'img'  => 'ossf.jpg',
        'url'  => 'http://www.openfoundry.org/',
        'desc' => '順應國內外自由軟體應用日益普及的潮流，中 央研究院資訊科學研究所於民國92年接受經濟部工業局「自由軟體產業推動計畫」的補助，成立自由軟體鑄造場 (Open Source Software Foundry，以下簡稱 OSSF )，以擴大自由軟體在臺灣的應用幅度與研發能量。目前經費的來源，部分來自行政院國家科學委員會的補助，部分則來自於中央研究院資訊科技創新研究中心。
OSSF 重點任務為培植本土自由軟體社群與人才，實際工作有：
(一)推廣自由軟體概念
(二)集結國內自由軟體社群
(三)促進臺灣人才培育與產業合作
(四)與國際趨勢交流接軌
',
//The Open Source Software Foundry (OSSF) project was launched by the Institute of Information Science at Academia Sinica in 2003. Initially, it was sponsored by the Industrial Development Bureau of the Ministry of Economic Affairs as a part of the “Open Source Software Initiative” to promote the use and development of open source software in Taiwan. Since 2007, the project has been funded by the National Science Council as well as the Research Center for Information Technology Innovation (CITI) at Academia Sinica.
//To promote the development and use of open source software, OSSF provides a forum that facilitates interaction and collaboration between open source software developers, and serves as a bridge to link developers with industry and academia.

    ],
];
// 輸出畫面
$tpl->content = $tpl->getOutput('sponsor.tpl.php');
$tpl->display('main.tpl.php');



