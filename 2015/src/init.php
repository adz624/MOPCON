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
            'pic' => 'xdite.jpg',
            'title' => '',
            'bio' => "xdite 是軟體開發者、創業者以及職業講師，曾創立 Logdown 技術部落格平台。目前主力經營 GrowthSchool 線上教育機構，且經營部落格暢談軟體開發、精實創業等議題。專長 Ruby on Rails 敏捷開發，專案管理，Growth Hack 。",
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
        'jeremy' => [
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

function getSchedule()
{
    return [
        '2015/10/31' => [
            [
                'times' => ['08:00', '09:00'],
                'events' => [
                    [
                        'title' => '報到',
                    ]
                ],
            ],
            [
                'times' => ['09:00', '09:15'],
                'events' => [
                    [
                        'title' => '開幕式',
                        'room' => 'all',
                    ]
                ],
            ],
            [
                'times' => ['09:15', '10:00'],
                'events' => [
                    [
                        'title' => '開放資料平台',
                        'desc' => '政府開放資料供民間使用，是一種負責任的態度，也是一個不可避免的趨勢。民間使用政府資料時最重視的因素包括了正確性、適宜授權、易用程度、即時性、可追索性、適當格式等等。妥善解決這些問題，是開放資料推廣過程中一個重要的步驟。我們推出一個開放資料平台，讓以上因素都能順利解決。',
                        'room' => 'all',
                        'speaker' => 'benjai',
                    ]
                ],
            ],
            [
                'times' => ['10:00', '10:15'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['10:15', '11:00'],
                'events' => [
                    [
                        'title' => '使用者要的不是功能！',
                        'desc' => '做了功能就會有人來用的思考方式無法留下使用者，使用者真正想要的完全不是功能。透過簡單的使用者經驗研究方法，抓住使用者的渴望與情緒變化，就能推出令人愛不釋手的好產品。',
                        'room' => '1',
                        'speaker' => 'akane',
                    ],
                    [
                        'title' => 'Gradle 不只自動化而且更敏捷',
                        'desc' => '探討 build script as code 的觀念，以及如何善用 Gradle 工具幫助 Android App 的開發。',
                        'room' => '2',
                        'speaker' => 'sam',
                    ],
                    [
                        'title' => '晚點告訴你 :P',
                        'room' => '3',
                    ],
                ],
            ],
            [
                'times' => ['11:00', '11:15'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['11:15', '12:00'],
                'events' => [
                    [
                        'title' => 'Intro to Growth Hacking for developers',
                        'desc' => 'Growth Hack 是一門在矽谷熱門的行銷技術。但這個名詞對於台灣軟體業的人來說，是一門蒙著神秘面紗的高不可攀的行銷與技術學。傳說產品使用了 Growth Hack 技巧調整體質後，產品就會猛爆性的成長。

Growth Hack 的本質是 行銷 + 技術 + 心理學。因為學門牽涉廣泛，入門門檻並不低。所以國內很少人在討論。

此次演講就是希望能把這項非常棒的技術引入台灣，並大幅降低門檻。',
                        'room' => '1',
                        'speaker' => 'xdite',
                    ],
                    [
                        'title' => '如何用 reactjs + web 標準降低大眾進入硬體門檻',
                        'desc' => '相較於 Internet of Things (IoT)，近來最紅的另一個名詞 Web of Things (WoT)，就是所有東西 (Things) 都可以透過 Web 標準協議彼此存取與結合。

本次主題，講者會以橫跨前端和硬體的背景跟大家分享，以及講者在硬體 IC 設計廠如何利用最潮的語言 (JavaScript) 和框架 (reactjs) 搭配現行的 WoT 標準打造豐富應用的開發版，降低大眾進入硬體的門檻。',
                        'room' => '2',
                        'speaker' => 'blue',
                    ],
                    [
                        'title' => '軟體、測試、程式設計家',
                        'desc' => '軟體設計是世界上最複雜的工作，我們彷彿就像在鋼索上敲擊鍵盤的小丑，搖搖欲墜。踏實地開發系統與掌握軟體開發節奏是一件重要的事。本議程將分享建構持續整合系統所遭遇的困難與經驗，藉由自動化測試探討軟體品質的重要性，進而實現產品持續交付。希望透過這個機會影響更多開發者對軟體品質的重視。',
                        'room' => '3',
                        'speaker' => 'sj',
                    ],
                ],
            ],
            [
                'times' => ['12:00', '13:00'],
                'events' => [
                    [
                        'title' => '午餐時間',
                    ],
                ],
            ],
            [
                'times' => ['13:00', '13:45'],
                'events' => [
                    [
                        'title' => '行動測試與發布的秘訣 [Tips of Mobile Continuous Delivery]',
                        'desc' => '一個成功的產品除了『良好的使用者體驗』與『優秀的程式架構』外，另一個關鍵因素就在於『高度可信賴的服務品質』，要能讓使用者隨時都能夠享受到正確的運作結果，繁複的測試流程是免不了。在這場分享中，Anistar 將分享 Yahoo! 的行動開發團隊是如何規劃行動測試的策略，怎麼確保用最短的時間卻能不停的將最新的功能提供給使用者，還有更多有趣的 Yahoo! 開發秘辛。',
                        'room' => 'all',
                        'speaker' => 'anistar',
                    ],
                ],
            ],
            [
                'times' => ['13:45', '14:00'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['14:00', '14:45'],
                'events' => [
                    [
                        'title' => '晚點告訴你 :P',
                        'room' => '1',
                    ],
                    [
                        'title' => '雲端影像辨識？算了吧！',
                        'desc' => '影像辨識被視為較沉重的演算法程式，行動裝置是被視為較簡陋的電腦設備，要將沉重的程式放進簡陋的電腦好像很難？所以很多人會寄望於偉大的雲端！但是有很多原因，我們絕對不能這麼做！但是要將影像辨識程式在行動裝置上實作出來也不容易，就讓我在這個演講中慢慢告訴你吧！',
                        'room' => '2',
                        'speaker' => 'yccsonar',
                    ],
                    [
                        'title' => '晚點告訴你 :P',
                        'room' => '3',
                    ],
                ],
            ],
            [
                'times' => ['14:45', '15:15'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['15:15', '16:00'],
                'events' => [
                    [
                        'title' => 'Job Fair',
                    ],
                ],
            ],
            [
                'times' => ['16:00', '16:15'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['16:15', '17:00'],
                'events' => [
                    [
                        'title' => '晚點告訴你 :P',
                        'room' => '1',
                    ],
                    [
                        'title' => 'Hacking with the ARM Mobile devices on Linux',
                        'desc' => '手把手玩 Linux 行動裝置。

凝聚志同道合伙伴一起重新架構 Andriod, Chromebook 以及 ARM 等行動裝置。

討論終止支援 (End of life) 的行動裝置。',
                        'room' => '2',
                        'speaker' => '下野健二 (Kenji Shimono)', // XXX
                    ],
                    [
                        'title' => '想像力讓技術極致',
                        'desc' => '1. 我是不是一個技術背景的人。
1. 廣告科技演進史。
1. 從客戶需求，讓產品為王。
1. 解決最有價值的客戶需求。
1. 想像力讓技術極致。',
                        'room' => '3',
                        'speaker' => 'tk',
                    ],
                ],
            ],
            [
                'times' => ['17:00', ''],
                'time_note' => 'END',
            ],
            [
                'times' => ['18:00', ''],
                'events' => [
                    [
                        'title' => 'Devel Night',
                        'desc' => '想與大神們共進晚餐嗎? 想和台上講者有更進一步的交流嗎? 開發者之夜將實現你的夢想! 為了讓大家能近距離接觸星光閃閃的講師群，我們特別在 2015/10/31 晚間舉辦 Developer Night，把大神講者群集中起來讓大家一次朝聖個夠喔！趕快[報名參加](http://mopcon.kktix.cc/events/2015-devel-night)吧！',
                    ],
                ],
            ],
        ],
        '2015/11/01' => [
            [
                'times' => ['08:00', '09:00'],
                'events' => [
                    [
                        'title' => '報到',
                    ]
                ],
            ],
            [
                'times' => ['09:00', '09:15'],
                'events' => [
                    [
                        'title' => 'Announcement',
                        'room' => 'all',
                    ]
                ],
            ],
            [
                'times' => ['09:15', '10:00'],
                'events' => [
                    [
                        'title' => '運用 QNAP Docker 輕鬆打造持續整合開發環境',
                        'desc' => 'Docker 的出現改變了 NAS 軟體生態，過去將軟體移殖到 NAS 上高不可攀的學習曲線已不在在，因應 Docker 和 LXC 的出現，QNAP 推出了 Container Station 來輔助 Container 在 NAS 的使用，如今 NAS 不在只是單純的儲存設備而已，它在運算上也能扮演著不錯的角色。在這場議題中，將分享 QNAP 如何運用 Docker 及 Container Station 在軟體專案上達成持續整合。',
                        'room' => 'all',
                        'speaker' => 'Doro Wu',
                    ]
                ],
            ],
            [
                'times' => ['10:00', '10:15'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['10:15', '11:00'],
                'events' => [
                    [
                        'title' => 'Apple Watch 開發 - 與 Apple 間的愛恨情仇',
                        'desc' => '1. 在 Apple Watch 開賣之前如何順利的完成 Apple Watch App 的開發以及上架到 App Store。
1. 關於 Apple Watch 開發所需要注意的大小事。
1. 如何吸引 Apple Marketing team 的注意, 並且成功在 Watch Store 登上 featured list and banner。
1. 從 Apple Watch App 的開發來看穿戴式裝置 App 的未來。',
                        'room' => '1',
                        'speaker' => '黃元亨 (Howard Huang)',
                    ],
                    [
                        'title' => '晚點告訴你 :P ',
                        'room' => '2',
                    ],
                    [
                        'title' => 'Agile x API x Documentation @ NGO',
                        'desc' => '可汗學院 (KhanAcademy) 是世界上對小朋友最具影響力的線上學習平台，且已在去年年底達到累積達題數 30 億次的驚人數據。而目前國內的均一教育平台則是從數年前從可汗學院 fork 出來的專案開始成長茁壯。本演講將介紹在非營利組織內的小型技術團隊，是如何在一片程式碼汪洋中進行修改、導入敏捷與幫 API 寫上活文件。',
                        'room' => '3',
                        'speaker' => 'joe',
                    ],
                ],
            ],
            [
                'times' => ['11:00', '11:15'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['11:15', '12:00'],
                'events' => [
                    [
                        'title' => 'Deliver Beta App with ChatOps',
                        'desc' => 'Typetalk 是 Nulab Inc 所推出的第一款行動 APP，我們將分享其 iOS App 開發過程、架構和如何使用ChatOps 工具將 beta 版提供給公司成員做測試。',
                        'room' => '1',
                        'speaker' => '吉田太一郎 (Taichiro Yoshida)', // XXX
                    ],
                    [
                        'title' => '跨界的優雅：多平台的 QML 應用程式架構設計',
                        'desc' => '“Write once, run anywhere.” 是許多程式開發者的夢想，各種應用程式架構也似雨後春筍般仆繼亮相。然而各平台間的操作方式迴異，程式設計師們又該如何在跨平台應用程式的紅海裏同中求異、維繫使用者的良好體驗呢？在這場演講中，我們將簡介基於 Qt 的 QML 應用程式如何跨平台進行編譯開發，並同時分享維護多平台應用軟體的心得與所需注意的眉角。',
                        'room' => '2',
                        'speaker' => '姜柏任 (RSChiang)', // XXX
                    ],
                    [
                        'title' => '晚點告訴你 :P ',
                        'room' => '3',
                    ],
                ],
            ],
            [
                'times' => ['12:00', '13:00'],
                'events' => [
                    [
                        'title' => '午餐時間',
                    ],
                ],
            ],
            [
                'times' => ['13:00', '13:45'],
                'events' => [
                    [
                        'title' => '強震即時警報 EEW',
                        'desc' => '政府提供的公共服務，傳統以來幾乎都是以標案的方式提供，但由於社會的開放與科技的演進，獨立開發者也能有機會直接與官方合作，提供更良善的公共服務，與正向的公私夥伴關係。

以 KNY台灣天氣 App 接入氣象局的強震即時警報為例，分享其中的經驗與心得。',
                        'room' => 'all',
                        'speaker' => 'kny',
                    ],
                ],
            ],
            [
                'times' => ['13:45', '14:00'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['14:00', '14:45'],
                'events' => [
                    [
                        'title' => 'IoT 就是要結合 Mobile 啊，不然要幹嘛?',
                        'desc' => '當東西都連上網，Mobile 就成了最方便的管理控制器。

此議程將從技術角度分享些實例，說明 Mobile 是如何串接 IoT 裝置、使用 Raspberry、Arduino 做為 IoT 的優缺點及完整的通訊方式介紹。

想要了解 IoT 怎麼結合 Mobile？怎麼自己動手打造 IoT？千萬別錯過本次議程。',
                        'room' => '1',
                        'speaker' => '許益祥 (Marty)', // XXX
                    ],
                    [
                        'title' => '功能完整 && 操作便利 = null?',
                        'desc' => '對 APP 開發方而言，提供的功能越是完整就越能顯現出其產品的核心和優於他人產品的價值，但對手機使用者來說，其對 APP 的訴求幾乎都是操作方便性遠大於功能完整性，如何在兩者之間取得平衡一直都是 APP 開發者的難題。 透過比較市場上 APP 其功能完整性與操作便利性，加上使用者經驗測試結果，歸納出幾項設計原則，提供 APP 開發者作為介面與功能設計時的參考。',
                        'room' => '2',
                        'speaker' => 'Lancelot Wu', // XXX
                    ],
                    [
                        'title' => '手機自動化測試和持續整合',
                        'desc' => '1. 手動測試曠日廢時，原始碼變化太快。
1. 前天測試沒有問題，現場操作就炸了！

本主題試圖提供通用的解決方案，無論您的平台是 iOS, Android 還是 Firefox OS，都能透過自動化測試工具和 CI/CD，驗證產品可靠度，降低開發和測試成本，提升軟體品質。',
                        'room' => '3',
                        'speaker' => 'carl',
                    ],
                ],
            ],
            [
                'times' => ['14:45', '15:15'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['15:15', '16:00'],
                'events' => [
                    [
                        'title' => 'React Native 帶來的跨平台 mobile app 開發典範轉移',
                        'desc' => 'Mobile app 曠日費時、成本高昂且人才難尋，長久以來一直是業界無解的難題，Facebook 於 2015 年推出的 React Native 將從根本解決此問題，本場將為聽眾深入淺出的介紹它帶來的創新技術與手法如何從根本上點燃了 mobile app 開發的典範轉移。',
                        'room' => '1',
                        'speaker' => 'jeremy',
                    ],
                    [
                        'title' => '打造行動裝置網站的經驗談',
                        'desc' => '響應式設計？手機網站設計？揪竟要如何做出，讓低頭族也愛瀏覽的網站呢？今天咱們不碰程式碼，只聊設計，志在與大家分享我的低頭族網站設計經驗。',
                        'room' => '2',
                        'speaker' => 'muki',
                    ],
                    [
                        'title' => '晚點告訴你 :P ',
                        'room' => '3',
                    ],

                ],
            ],
            [
                'times' => ['16:00', '16:15'],
                'time_note' => '休息時間',
            ],
            [
                'times' => ['16:15', '17:00'],
                'events' => [
                    [
                        'title' => 'Hack & Go 2',
                        'desc' => '- API 正在吞噬軟體。
- API 大調查—現有服務商調查分析。
- 大家一起 Hack。',
                        'room' => '1',
                        'speaker' => 'Ben Lue', // XXX
                    ],
                    [
                        'title' => '全天下男人都會犯的錯：密碼學',
                        'desc' => '那些年，我們一起修過的密碼學，我相信每個程式開發者心中，都有一個 RSA。然而有些太年輕犯下的錯誤，長大了才瞭解，回味起來卻是無限懷念。

本次演講分析一些歷史上著名的密碼系統漏洞原理，並介 紹一些加密實作上常見的錯誤（包括講者本人誠心懺悔告解）。',
                        'room' => '2',
                        'speaker' => '藍永倫 (yllan)', // XXX
                    ],
                    [
                        'title' => 'Windows 10 UWP + Azure 創造開發APP的新思維',
                        'desc' => 'Windows 10 UWP (Universal Windows Platform) 基於 common Windows Core 概念，提出建置單一 App，便能在 Windows 10 的各種裝置上使用，從以往針對 PC、平版、手機的 App，擴展至 Xbox, IoT, HoloLens 等裝置。基於 UWP 設計的 App 將不再挶限於手機及平版。

本次議題將涵蓋 UWP 概念、UWP + Azure for Raspberry Pi Demo。',
                        'room' => '3',
                        'speaker' => 'Ian', // XXX
                    ],
                ],
            ],
            [
                'times' => ['17:00', '17:30'],
                'events' => [
                    [
                        'title' => '⚡ Lighting Talk ⚡',
                        'desc' => '來跟大家分享任何事情吧！給你一隻麥克風！只要你敢上台，MOPCON 的會眾就是你的聽眾！沒有投影片也沒關係，Lighting Talk 只考驗你的時間掌控力，限時兩分鐘，時間一到音控妹妹不留情的唷！',
                    ],
                ],
            ],
            [
                'times' => ['17:30', '18:00'],
                'events' => [
                    [
                        'title' => '閉幕式',
                    ],
                ],
            ],
            [
                'times' => ['18:00', ''],
                'time_note' => 'END',
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
    $twig->addExtension(new Jralph\Twig\Markdown\Extension(new Jralph\Twig\Markdown\Parsedown\ParsedownExtraMarkdown));
    echo $twig->render($template_name, $params);
}
