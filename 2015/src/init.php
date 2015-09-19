<?php
include __DIR__ . "/../../vendor/autoload.php";

//////////////////////////////////////////////////////////////////////////////
function getSpeakerById($id)
{
    static $speakers = null;
    if (null === $speakers) {
        $speakers = getAllSpeakers();
    }
    return isset($speakers[$id]) ? $speakers[$id] : null;
}

function getAllSpeakers()
{
    return [
        'anistar' => [
            'name' => '宋志峰 (Anistar)',
            'pic' => 'anistar.jpg',
            'title' => 'Yahoo Mobile Tech Lead, Yahoo Mobile Engineer Manager',
            'bio' => "目前現職服務於雅虎奇摩，負責帶領超級商城與拍賣 APP 開發，專注在專案軟體架構規劃與開發，熱愛分享自己的經驗。具備 10 年以上的專案開發經驗，7 年的專業講師資歷，開發的 Magic Shutter 曾獲得 NewYork Times 推薦最佳前十大攝影軟體推薦。",
            'links' => [
                'Facebook' => 'https://www.facebook.com/anistarsung',
            ],
        ],
        'sj' => [
            'name' => '周家弘 (SJ)',
            'pic' => 'sj.jpg',
            'title' => 'Foxconn 工程師',
            'bio' => "目前於鴻海擔任工程師，負責開發雲端服務，平常喜歡聽點音樂與寫點部落格 (Soul & Shell Blog)。幾年前曾與日本富士康合作開發系統，從此奠定對軟體品質的堅持。熱愛開發新產品，近年來熱衷於 Web 技術，流連往返於程式設計與軟體架構。",
            'links' => [
                'Facebook' => 'https://www.facebook.com/samejack',
                'Website' => 'http://blog.toright.com',
            ],
        ],
        'carl' => [
            'name' => 'Carl Su',
            'pic' => 'carl.jpg',
            'title' => 'DevOps Engineer',
            'bio' => '具有軟體測試和 CI/CD 導入經驗，熟悉自動化工具和雲端平台。認同開源理念，平時亦參與開源專案 (Mozilla, Google, Docker)。樂於分享知識和經驗。除了公開演講，也會舉辦讀書會和工作坊。',
            'links' => [
                'Facebook' => 'https://www.facebook.com/carl.su.9',
            ],
        ],
        'benjai' => [
            'name' => '翟本喬 (Ben Jai)',
            'pic' => 'benjai.jpg',
            'title' => '和沛科技創辦人暨總經理',
            'bio' => "翟本喬為台灣第一位跳級生，1999 年赴美取得紐約大學電腦科學博士，2003 年進入Google，成功研發高效率單電壓電源供應器。2010 年回到台灣加入台達電子創立雲端技術中心。2013 年 6 月率原團隊成立和沛科技，積極開發符合雲端運算精神的新產品及服務，並對於台灣創新創業環境多有建言。",
            'links' => [
                'Facebook' => 'https://www.facebook.com/ben.jai',
            ],
        ],
        'xdite' => [
            'name' => '鄭伊廷 (XDite)',
            'title' => '',
            'bio' => "I'm Yi-Ting Cheng a.k.a xdite, living in Taipei, Taiwan. I'm a software developer also an entrepreneur.",
            'links' => [
                'Facebook' => 'https://zh-tw.facebook.com/xdite',
            ],
        ],
        'muki' => [
            'name' => '吳姿穎 (Muki)',
            'pic' => 'muki.jpg',
            'title' => '拾木空間總兼',
            'bio' => "拾木空間總兼，經營文具社群與文具銷售，同時也是網站設計師與講師。著作包含 2 本 WordPress 書、1 本手帳整理術，以及譯作 2 本 WordPress 書。喜愛推廣與學習 HTML, CSS, 與 jQuery，興趣是在跨界與自我挑戰中成長，從事過設計、前端、行銷與專案管理等工作。",
            'links' => [
                'Facebook' => 'https://www.facebook.com/muki.wu',
            ],
        ],
        'blue' => [
            'name' => '陳柏儒 (Blue)',
            'pic' => 'blue.jpg',
            'title' => '聯發科技前端工程師',
            'bio' => "目前在聯發科擔任前端工程師，長期專注網頁前端標準技術。現行工作主要參與物聯網議題，致力於降低讓大眾進入硬體門檻的各種可能性。",
            'links' => [
                'Facebook' => 'https://www.facebook.com/IamBlueChen',
            ],
        ],
        'kny' => [
            'name' => '陳坤助 (KNY)',
            'pic' => 'kny.jpg',
            'title' => '中華民國 App 跨界交流協會理事長',
            'bio' => "中華民國 App 跨界交流協會理事長，台灣 Open Data 聯盟 副會長 / App 組召集人。長期關注與推動台灣 App 與 Open Data 的發展。希望能透過科技與開放的力量，改善社會問題與建構更美好的未來。",
            'links' => [
            ],
        ],
        'id' => [
            'name' => 'Jeremy Lu',
            'pic' => 'jeremy.jpg',
            'title' => 'Fullstackrocks.com 創辦人',
            'bio' => "現於美國擔任技術顧問，協助客戶組建開發團隊、教育訓練、導入現代化開發流程與確保程式品質，主要服務對象為企業與新創公司。同時在台灣主持 FullStackRocks.com 提供專業教育訓練，持續將北美最新技術訊息帶回與本地開發者共享。目前也是 Facebook Reactjs.tw 社團共同管理員。",
            'links' => [
                'Facebook' => 'https://www.facebook.com/norika1207',
                'Github' => 'https://github.com/coodoo',
            ],
        ],
        'tk' => [
            'name' => '林毅祥 (TK)',
            'pic' => 'tk.jpg',
            'title' => 'ADPartner 執行長',
            'bio' => "數位廣告界新銳、創新數位廣告專家。現任 ADPartner 執行長，於 2012 年引進 Facebook sPMD 服務，於 2013 年與國外廠商合作開發需求方廣告平台 (DSP)。目前是唯一可以同時下台灣、大陸廣告的 DSP，覆蓋率達九成五以上。2015 更跨足新加坡、馬來西亞，成為亞太數位跨國廣告企業。",
            'links' => [
                'Facebook' => 'https://www.facebook.com/stklen',
            ],
        ],
        'sam' => [
            'name' => '邱炫儒 (Sam)',
            'pic' => 'sam.jpg',
            'title' => 'HTC 工程師',
            'bio' => "專注於 Android App 開發的持續整合流程並經常接觸開發維運相關的系統設計，目前服務於 HTC。",
            'links' => [
                'Facebook' => 'https://zh-tw.facebook.com/iamsamchiu',
            ],
        ],
        'akane' => [
            'name' => 'Akane Lee',
            'pic' => 'akane.jpg',
            'title' => 'Madders 創辦人',
            'bio' => "嫁給 RD 的UI Designer",
            'links' => [
                'Facebook' => 'https://www.facebook.com/uiux.akane',
                'Blog' => 'http://blog.akanelee.me/'
            ],
        ],
        'yccsonar' => [
            'name' => '張逸中',
            'pic' => 'yccsonar.jpg',
            'title' => '逸中軟體設計有限公司執行長',
            'bio' => "大學畢業才開始寫程式的玩家，因為研究海底地形辨識開始接觸影像辨識，同時鑽研聲納科技，是目前國內唯一可以製作各式聲納軟體的怪咖！40 歲開始教程式設計，52 歲辭去大學教職投入業界，53 歲創業開設公司，主攻影像辨識技術，以在行動裝置中實現各種影像辨識技術為目標。",
            'links' => [
                'Blog' => 'http://blog.udn.com/yccsonar/article',
            ],
        ],
        'joe' => [
            'name' => '曾君宇 (Joe)',
            'pic' => 'joe.jpg',
            'title' => '均一教育平台軟體工程師',
            'bio' => "魯蛇喬，不知道為什麼一直在寫 javascript 的 Tainan.py (Python) 社群聚會發起人。在告別了創業連續失敗家以及放假半年的魯蛇人生以後，目前在誠致教育基金會內擔任軟體工程師，希望讓國內的小朋友透過均一教育平台能夠有另一種學習的可能性。",
            'links' => [
            ],
        ],
    ];
}
//////////////////////////////////////////////////////////////////////////////
function getLang()
{
    static $lang = null;
    if ($lang) {
        return $lang;
    }

    $supported_langs = [
        'zh',
        'en'
    ];

    if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_langs)) {
        $lang = $_GET['lang'];
    } elseif(isset($_COOKIE['lang'])) {
        $lang = $_COOKIE['lang'];
    } else {
        if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
            $browser_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
        } else {
            $browser_lang = 'zh';
        }
        $lang = in_array($browser_lang, $supported_langs) ? $browser_lang : 'en';
    }
    setcookie('lang', $lang);

    return $lang;
}

function getI18n($msg_data)
{
    if (!is_array($msg_data) || 0 === count($msg_data)) {
        return [];
    }

    $lang = getLang();

    if (isset($msg_data[$lang])) {
        return $msg_data[$lang];
    }
    if (isset($msg_data['en'])) {
        return $msg_data['en'];
    }
    return reset($msg_data); // return first group
}

function render($template_name, $params)
{
    $main_msg = [
        'zh' => [
            'sitetitle' => '行動科技年會 | MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogtitle' => '行動科技年會 | MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogsitename' => '行動科技年會 | MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogdesc' => '濁水溪以南最強大行動科技研討會，2015強勢回歸',
            'navcommunity' => '社群',
            'navlocation' => '地圖',
            'navcfp' => '徵稿',
            'navprevious' => '歷年',
            'navspeaker' => '講者',
            'navsession' => '議程',
        ],
        'en' => [
            'sitetitle' => 'MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogtitle' => 'MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogsitename' => 'MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogdesc' => 'Your favoeite conference for mobile technology in southern Taiwan is now back in 2015',
            'navcommunity' => 'Community',
            'navlocation' => 'Location',
            'navcfp' => 'Call for paper',
            'navprevious' => 'Previous Events',
            'navspeaker' => 'Speakers',
            'navsession' => 'Session',
        ],
    ];

    $params = array_replace_recursive(
        [
            'main' => getI18n($main_msg),
            'lang' => getLang(),
            'og_image' => 'snapshot-mid.png',
        ],
        $params
    );
    $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../twig');
    $twig = new \Twig_Environment($loader);
    echo $twig->render($template_name, $params);
}
