<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];  
$tpl = new Savant3($config);

// 頁面設定
$tpl->title = "社群";
$tpl->mainClass = 'kh-❤';


// 定義社群資料
// 說明文字是 markdown
$tpl->communities = [
    'ksdg' => [
        'name'    => 'KSDG',
        'sname'   => 'KSDG',
        'img'     => 'images/community/ksdg.png',
        'links'   => [
            ['icon' => 'icon-facebook42', 'url' => 'https://www.facebook.com/groups/KSDGroup']
        ],
        'desc_md' => <<<KSDG_MD
Kaohsiung Software Developer Group 是高雄從事軟體開發、網路技術開發者一起交流的園地，2012/05首度聚會活動。

目前每月舉辦 Meet-up 及 Web Course 各一場，交流主題涵蓋各種軟體技術，歡迎對軟體開發技術有興趣的朋友可以踴躍參與。
KSDG_MD
    ],
    'chk' => [
        'name'    => 'CocoaHeads Kaohsiung',
        'sname'   => 'CHK',
        'img'     => 'images/community/cocoaheads.jpg',
        'links'   => [
            ['icon' => 'icon-earth2', 'url' => 'http://cocoaheads.org:8106/tw/Kaohsiung/index.html'],
            ['icon' => 'icon-facebook42', 'url' => 'https://www.facebook.com/groups/cocoaheads.kaohsiung/'],
        ],
        'desc_md' => <<<CHK_MD
CocoaHeads Kaohsiung 定位為南台灣 Mac/iOS 開發者的固定聚會。聚會不定期邀請各地講者與會員特定主題或經驗分享。

您可能會遇到：開發者在聚會上分享各自的心得與點子。
也可能會遇到：開發者在聚會上與使用者面對面溝通，與其他開發人員面對面分享。

您可能會在此找到新合作夥伴或更有挑戰性的工作、甚至新的商機。
CHK_MD
    ],
    'mosut' => [
        'name'    => 'MOSUT',
        'sname'   => 'MOSUT',
        'img'     => 'images/community/mosut.jpg',
        'links'   => [
            ['icon' => 'icon-earth2', 'url' => 'https://code.google.com/p/mosut/'],
        ],
        'desc_md' => <<<MOSUT_MD
MOSUT (Meet Open Source Users in Tainan) 是一群生活在台南、對資訊科技有熱情的朋友共同發起的聚會。
關注開放標準/開放規格、自由軟體 / 開放原始碼，進而到開放硬體等議題。

每兩周舉辦一次聚會，提供大學院校、公司團體，以及個人作技術討論交流的機會。
MOSUT_MD
    ],
    'kimu' => [
        'name'    => 'KIMU',
        'sname'   => 'KIMU',
        'img'     => 'images/community/kimu.png',
        'links'   => [
            ['icon' => 'icon-facebook42', 'url' => 'https://www.facebook.com/groups/kimugroup'],
        ],
        'desc_md' => <<<KIMU_MD
高雄獨立遊戲開發者聚會(Kaohsiung Indies Meet Up)，簡稱KIMU。2012年由中山大學促進產業發展研究中心協助成立。
是一個以高雄為活動據點，推動南臺灣獨立遊戲開發國際化與相關產業活動的非營利性社群組織。
KIMU_MD
    ],
    'kalug' => [
        'name'    => 'KaLUG',
        'sname'   => 'KaLUG',
        'img'     => 'images/community/kalug.jpg',
        'links'   => [
            ['icon' => 'icon-earth2', 'url' => 'http://kalug.linux.org.tw/'],
            ['icon' => 'icon-googleplus32', 'url' => 'https://plus.google.com/communities/113465528091946960161'],
        ],
        'desc_md' => <<<KALUG_MD
Kaohsiung Linux User Group (KaLUG) 是由一群熱愛 open source / free software 的高雄人所組成的團體。
平日討論的主題有 Linux, Debian, Ubuntu, Vim, Emacs, Git, Python, shell script, Drupal, OpenStreetMap, Security ... 等。
KALUG_MD
    ],
    'kf2e' => [
        'name'    => '高雄前端社群',
        'sname'   => '前端社群',
        'img'     => 'images/community/kf2e.png',
        'links'   => [
            ['icon' => 'icon-facebook42', 'url' => 'https://www.facebook.com/groups/358503154261390/'],
            ['icon' => 'icon-earth2', 'url' => 'http://akdg.kktix.cc/'],
        ],
        'desc_md' => <<<KF2E_MD
高雄前端社群於2013年3月31日創立，
每月固定舉辦前端主題聚會，歡迎網頁設計師們一塊前來交流
KF2E_MD
    ],
    'mgirl' => [
        'name'    => 'Mobile Girls',
        'sname'   => 'Mobile Girls',
        'img'     => 'images/community/mobile_girls.png',
        'links'   => [
            ['icon' => 'icon-facebook42', 'url' => 'https://www.facebook.com/mobilegirlsfans'],
            ['icon' => 'icon-earth2', 'url' => 'http://mobile-girls.kktix.cc/'],
        ],
        'desc_md' => <<<MGIRLS_MD
Mobile Girls 是由一群熱愛 iOS 與 Android 朋友所成立的社群，宗旨是希望能夠推廣 iOS/Android 程式語言給女性初學者，讓想了解 iOS 和 Android 的女性能有一個機會學習。我們歡迎沒有電腦程式設計基礎的女性朋友來參加，如果您對於 iOS/Android 的任何新奇有趣的 App 設計、原理及應用感到興趣，您將可以在這個環境找到同好，並藉由業界專業教練的指導，在小組內共同合作打造它，實現您在 App 世界的專屬夢想！
MGIRLS_MD
    ],
    'akdg' => [
        'name'    => 'Android 高雄開發者社群',
        'sname'   => 'AKDG',
        'img'     => 'images/community/akdg.png',
        'links'   => [
            ['icon' => 'icon-facebook42', 'url' => 'https://www.facebook.com/groups/1416205511963346/'],
            ['icon' => 'icon-earth2', 'url' => 'http://akdg.kktix.cc/'],
        ],
        'desc_md' => <<<AKDG_MD
Android Kaohsiung Developer Group 從事 Android App、Embedded 及 Design 一起交流的園地，2014 首次聚會活動，目前活動活動時間為每月第三週的禮拜四 meet-up，歡迎對 Android 有興趣的朋友可以參與聚會。
AKDG_MD
    ],
];

// 輸出畫面
$tpl->content = $tpl->getOutput('community.tpl.php');
$tpl->display('main.tpl.php');
