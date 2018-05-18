<?php
function getAllSchedule()
{
    // speakerId 為空值，若 title, pic 未設定就會指定 title = "MOPCON", pic = "schedule/mopcon.png"
    // speakerId 找到講者 ID，若 title, pic, speaker 未設定就會自動帶入
    // speakerId 異常，找不到講者 ID 會強制蓋掉 title, pic, speaker 為 晚點告訴你 :P

    return [
       [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "08:30",
            "timeEnd" => "09:00",
            "summary" => "參加者報到",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => "",
        ],
        [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "09:00",
            "timeEnd" => "09:15",
            "summary" => "開幕式",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "活動",
            "issue" => "",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => ""
        ],
        [ 
            "id" => 2,
            "date" => "2015/10/31",
            "timeStart" => "09:15",
            "timeEnd" => "10:00",
            "summary" => "開放資料開放平台",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "技術",
            "issue" => "政府開放資料供民間使用，是一種負責任的態度，也是一個不可避免的趨勢。民間使用政府資料時最重視的因素包括了正確性、適宜授權、易用程度、即時性、可追索性、適當格式等等。妥善解決這些問題，是開放資料推廣過程中一個重要的步驟。我們推出一個開放資料平台，讓以上因素都能順利解決。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-r3kZMQHbcR2",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "benjai"
        ],
        [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "10:00",
            "timeEnd" => "10:15",
            "title" => "Take a Break", //覆蓋講者名稱
            "summary" => "上午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 3,
            "date" => "2015/10/31",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "summary" => "使用者要的不是功能！",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "做了功能就會有人來用的思考方式無法留下使用者，使用者真正想要的完全不是功能。透過簡單的使用者經驗研究方法，抓住使用者的渴望與情緒變化，就能推出令人愛不釋手的好產品。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-jO85QUQsrhR",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "akane"
        ],
        [ 
            "id" => 4,
            "date" => "2015/10/31",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "summary" => "Gradle 不只自動化而且更敏捷",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "探討 build script as code 的觀念以及如何善用 Gradle 工具幫助 Android App 的開發。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-C4fSApWlvQ6",
                "Slideshow" => "http://www.slideshare.net/samchiu0419/android-gradle-mopcon-54589102/",
                "Video" => ""
            ],
            "speakerId" => "sam"
        ],
        [ 
            "id" => 11,
            "date" => "2015/10/31",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "summary" => "雲端影像辨識？算了吧！",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "影像辨識被視為較沉重的演算法程式，行動裝置是被視為較簡陋的電腦設備，要將沉重的程式放進簡陋的電腦好像很難？所以很多人會寄望於偉大的雲端！但是有很多原因，我們絕對不能這麼做！但是要將影像辨識程式在行動裝置上實作出來也不容易，就讓我在這個演講中慢慢告訴你吧！",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-rgmaUihsCNQ",
                "Slideshow" => "https://drive.google.com/file/d/0B2naNVimVDN5cjNvSmlTbEJ2cFk/view?usp=sharing",
                "Video" => ""
            ],
            "speakerId" => "yccsonar"
        ],
        [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "11:00",
            "timeEnd" => "11:15",
            "title" => "Take a Break", //覆寫
            "summary" => "上午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => ""
        ],
        [ 
            "id" => 6,
            "date" => "2015/10/31",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "summary" => "Intro to Growth Hacking for developers",
            "room" => "主廳 (R1)",
            "type" => "營運",
            "issue" => "Growth Hack 是一門在矽谷熱門的行銷技術。但這個名詞對於台灣軟體業的人來說，是一門蒙著神秘面紗的高不可攀的行銷與技術學。傳說產品使用了 Growth Hack 技巧調整體質後，產品就會猛爆性的成長。<br>Growth Hack 的本質是 行銷 + 技術 + 心理學。因為學門牽涉廣泛，入門門檻並不低。所以國內很少人在討論。<br>此次演講就是希望能把這項非常棒的技術引入台灣，並大幅降低門檻。",
            "allowVideo" => false,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-yoqZwxC74jV",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "xdite"
        ],
        [ 
            "id" => 7,
            "date" => "2015/10/31",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "summary" => "如何用 reactjs + WoT 標準降低大眾進入硬體門檻",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "相較於 Internet of Things (IoT)，近來最紅的另一個名詞 Web of Things (WoT)，就是所有東西 (Things) 都可以透過 Web 標準協議彼此存取與結合。<br>本次主題，講者會以橫跨前端和硬體的背景跟大家分享，以及講者在硬體 IC 設計廠如何利用最潮的語言 (JavaScript) 和框架 (reactjs) 搭配現行的 WoT 標準打造豐富應用的開發版，降低大眾進入硬體的門檻。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-udVUi3fzyWS",
                "Slideshow" => "https://speakerdeck.com/iamblue/yong-reactjs-he-wot-biao-zhun-lai-jiang-di-da-zhong-jin-ru-ying-ti-men-jian",
                "Video" => ""
            ],
            "speakerId" => "blue"
        ],
        [ 
            "id" => 40,
            "date" => "2015/10/31",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "summary" => "如何運用 AWS 雲端服務加速開發 Mobile App",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "本議程將介紹如何運用 Amazon Web Services (AWS) 雲端服務來加速開發 Mobile App，對 Mobile App 快速開發有興趣的伙伴請千萬不要錯過！",
            "allowVideo" => false,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-Ol35MMcCYVh",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "kj"
        ],
        [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "12:00",
            "timeEnd" => "13:00",
            "title" => "Lunch time", //覆寫
            "summary" => "午餐時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 9,
            "date" => "2015/10/31",
            "timeStart" => "13:00",
            "timeEnd" => "13:45",
            "summary" => "行動測試與發布的秘訣 [Tips of Mobile Continuous Delivery]",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "技術",
            "issue" => "一個成功的產品除了『良好的使用者體驗』與『優秀的程式架構』外，另一個關鍵因素就在於『高度可信賴的服務品質』，要能讓使用者隨時都能夠享受到正確的運作結果，繁複的測試流程是免不了。在這場分享中，Anistar 將分享 Yahoo! 的行動開發團隊是如何規劃行動測試的策略，怎麼確保用最短的時間卻能不停的將最新的功能提供給使用者，還有更多有趣的 Yahoo! 開發秘辛。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-t4TYggVvi1p",
                "Slideshow" => "http://www.slideshare.net/anistarsung/mopcon-2015-tips-of-mobile-continuous-delivery",
                "Video" => ""
            ],
            "speakerId" => "anistar"
        ],
        [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "13:45",
            "timeEnd" => "14:00",
            "title" => "Take a Break",//覆寫
            "summary" => "下午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 10,
            "date" => "2015/10/31",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "summary" => "用 LINE Platform 打造有趣的行動應用服務",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "LINE 目前全球每月活躍用戶超過 2.11 億，開發者可以透過 LINE Platform 提供的 APIs 及 SDK 開發網路服務及行動應用，為服務及應用創造更多價值。這次的議程會介紹 LINE Platform 開發的案例及讓各位瞭解如何用 LINE Platform 打造有趣的行動應用。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-k9aBgVEnZHa",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "benny"
        ],
        [ 
            "id" => 25,
            "date" => "2015/10/31",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "summary" => "Unleash The Power of Design",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "設計是思考方式、流程與文化。在聚集各路好手的環境中，建立不同背景成員之共同目標，讓每個人發揮不同超能力的同時，激發出團隊火花，共同創造最好的產品與服務，這場 Session 將分享 Yahoo 是如何創造這樣一個環境給團隊成員。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-hbU5R3FDv4k",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "harry-wu"
        ],
        
        [ 
            "id" => 12,
            "date" => "2015/10/31",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "summary" => "NAS 公私混合雲，打造行動數位生活",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "NAS 對許多人來說可能還停留在一種可遠觀的先進資訊產品。然而事實真是如此嗎？讓 QNAP 來引領您進入 NAS 的世界，透過 RAID 保護資料、打造公私混合雲。結合網路、行動影音與生活工作同步，讓 NAS 成為行動數位生活的中心。搭配 QNAP 開發套件，打造自己的專用 NAS。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-z19vMPVNxa4",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "alex-chang"
        ],
        [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "14:45",
            "timeEnd" => "15:15",
            "title" => "點心時間",//覆寫
            "summary" => "休息、聊天、下午茶",
            "pic" => "schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [  
            "id" => 13,
            "date" => "2015/10/31",
            "timeStart" => "15:15",
            "timeEnd" => "16:00",
            "title" => "Sponsor Talk",
            "summary" => "贊助商有話要說",
            "room" => "主廳 (R1)",
            "type" => "活動",
            "issue" => "相較於耳熟能詳的閃電秀 (Lightning Talk)，本次大會特別設計了 Sponsor Talk 來讓贊助商齊聚一堂，我們一起來聽聽贊助商有什麼話想和使用者與開發者說。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-7Yu52n31wNb",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => ""
        ],
        [   
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "16:00",
            "timeEnd" => "16:15",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 14,
            "date" => "2015/10/31",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "summary" => "架構新時代雲端服務和巨量資料的儲存平台",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "行動裝置與雲端服務正在影響人類的生活並重新定義行之有年的 IT 架構，為了應付未來雲端時代的 IT 服務需求，我們將探討如何建構一個有彈性又可靠的儲存架構。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-4n5CNGolNnt",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "jing-de"
        ],
        [ 
            "id" => 15,
            "date" => "2015/10/31",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "summary" => "Hacking with the ARM Mobile devices on Linux",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "<p>Let&apos;s play the Mobile devices as Linux.<br>手把手玩 Linux 行動裝置。</p><p>To gather people want to remodel the Android, Chromebook and ARM mobile devices, and I also discussed the 「End of Life the mobile device」.<br>凝聚志同道合伙伴一起重新架構 Andriod, Chromebook 以及 ARM 等行動裝置，並探討終止支援 (End of life) 的行動裝置。</p>",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-fdJJdYn757o",
                "Slideshow" => "http://www.slideshare.net/kapper1224/hacking-with-arm-mobile-devices-on-linux",
                "Video" => ""
            ],
            "speakerId" => "kenji-shimono"
        ],
        [   
            "id" => 16,
            "date" => "2015/10/31",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "summary" => "想像力讓技術極致",
            "room" => "三廳 (R3)",
            "type" => "營運",
            "issue" => "<ol><li>我是不是一個技術背景的人。</li><li>廣告科技演進史。</li><li>從客戶需求，讓產品為王。</li><li>解決最有價值的客戶需求。</li><li>想像力讓技術極致。</li></ol>",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-62AQHeEjZnQ",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "tk"
        ],
        [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "17:00",
            "timeEnd" => "17:05",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 8,
            "date" => "2015/10/31",
            "timeStart" => "17:05",
            "timeEnd" => "17:50",
            "summary" => "軟體、測試、程式設計家",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "軟體設計是世界上最複雜的工作，我們彷彿就像在鋼索上敲擊鍵盤的小丑，搖搖欲墜。踏實地開發系統與掌握軟體開發節奏是一件重要的事。本議程將分享建構持續整合系統所遭遇的困難與經驗，藉由自動化測試探討軟體品質的重要性，進而實現產品持續交付。希望透過這個機會影響更多開發者對軟體品質的重視。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-FCEBbeg9SDq",
                "Slideshow" => "http://www.slideshare.net/samejack/mopcon-2015",
                "Video" => ""
            ],
            "speakerId" => "sj"
        ],
        [ 
            "id" => 38,
            "date" => "2015/10/31",
            "timeStart" => "17:05",
            "timeEnd" => "17:50",
            "summary" => "從 0 到 1：打開 Android 開發的秘密，發現開源好棒棒",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "許多的 Andorid 初學者總是只能跟著書上或網路上的一些教學慢慢學習，但實際上在開發我們都會運用許多的 open soruce library 來達成更快速及穩定的開發，本議程將簡介在實務經驗上 Andoird 開發方式及經驗以及能夠如何回饋貢獻開源專案。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-ayjsq92uZqv",
                "Slideshow" => "http://denny.one/MOPCON2015/",
                "Video" => ""
            ],
            "speakerId" => "denny"
        ],
        [ 
            "id" => 39,
            "date" => "2015/10/31",
            "timeStart" => "17:05",
            "timeEnd" => "17:50",
            "summary" => "談談行動裝置的 Accessibility",
            "pic" => "schedule/johnny_young.jpg", //覆寫
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "「什麼？這個字『唸』不出來？這到底是什麼功能？」這可能是很多盲人朋友在使用手機時心中的 OS。本議程將藉由簡單的例子 (Android / iOS) 來探討如何使用程式來解決。並從自身實際使用及教學的經驗，透過範例來了解什麼是友善的 APP，讓您的 APP 在絢麗外，也邁向無障礙 (Accessibility)。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-1-yqzPcpc4WgO",
                "Slideshow" => "http://www.slideshare.net/j796160836/mopcon-2015-accessibility/",
                "Video" => ""
            ],
            "speakerId" => [
                "johnny",
                "young"
            ]
        ],
        [ 
            "id" => null,
            "date" => "2015/10/31",
            "timeStart" => "17:50",
            "timeEnd" => "END",
            "title" => "END", //覆寫
            "summary" => "本日議程結束",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 17,
            "date" => "2015/10/31",
            "timeStart" => "18:00",
            "timeEnd" => "",
            "title" => "Devel Night",
            "summary" => "星光講師 x 開發者之夜",
            "room" => "翰品酒店",
            "type" => "活動",
            "issue" => "想與大神們共進晚餐嗎? 想和台上講者有更進一步的交流嗎? 開發者之夜將實現你的夢想! 為了讓大家能近距離接觸星光閃閃的講師群，我們特別在 2015/10/31 晚間舉辦 Devel Night，把大神講者群集中起來讓大家一次朝聖個夠喔！趕快<a href='http://mopcon.kktix.cc/events/2015-devel-night' target='_blank'> 報名參加 </a>吧！",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => ""
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "08:30",
            "timeEnd" => "09:00",
            "summary" => "參加者報到",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "09:00",
            "timeEnd" => "09:15",
            "summary" => "Announcement",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "活動",
            "issue" => "",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => ""
        ],
        [ 
            "id" => 19,
            "date" => "2015/11/01",
            "timeStart" => "09:15",
            "timeEnd" => "10:00",
            "summary" => "運用 QNAP Docker 輕鬆打造持續整合開發環境",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "技術",
            "issue" => "Docker 的出現改變了 NAS 軟體生態，過去將軟體移殖到 NAS 上高不可攀的學習曲線已不在在，因應 Docker 和 LXC 的出現，QNAP 推出了 Container Station 來輔助 Container 在 NAS 的使用，如今 NAS 不在只是單純的儲存設備而已，它在運算上也能扮演著不錯的角色。在這場議題中，將分享 QNAP 如何運用 Docker 及 Container Station 在軟體專案上達成持續整合。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-ffJsYI21dxV",
                "Slideshow" => "http://www.slideshare.net/fcwu.tw/qnap-mopcon-2015-qnap-docker",
                "Video" => ""
            ],
            "speakerId" => "doro"
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "10:00",
            "timeEnd" => "10:15",
            "title" => "Take a Break",
            "summary" => "上午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 20,
            "date" => "2015/11/01",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "summary" => "Apple Watch 開發 - 與 Apple 間的愛恨情仇",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "此演講的大綱如下:<ol><li>在 Apple Watch 開賣之前如何順利的完成 Apple Watch App 的開發以及上架到 App Store。</li><li>關於 Apple Watch 開發所需要注意的大小事。</li><li>如何吸引 Apple Marketing team 的注意，並且成功在 Watch Store 登上 featured list and banner。</li><li>從 Apple Watch App 的開發來看穿戴式裝置 App 的未來。</li></ol>",
            "allowVideo" => false,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-fQOB8b5nHKo",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "howard"
        ],
        [ 
            "id" => 21,
            "date" => "2015/11/01",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "summary" => "我的踩雷時代 - 那些你做遊戲前沒想到的事",
            "pic" => "schedule/allan_sun_pony_chen.jpg", //覆寫
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "這場演講主要是把我們在做遊戲過程中踩過的各種雷分享給大家，希望大家以後在做遊戲這條路上可以一路好走；本講題技術成分較少，但會同時包含前後端。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-WQ4FFuL0KNH",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => [
                "pony",
                "allan"
            ]
        ],
        [ 
            "id" => 22,
            "date" => "2015/11/01",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "summary" => "Agile x API x Documentation @ NGO",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "可汗學院 (KhanAcademy) 是世界上對小朋友最具影響力的線上學習平台，且已在去年年底達到累積達題數 30 億次的驚人數據。而目前國內的均一教育平台則是從數年前從可汗學院 fork 出來的專案開始成長茁壯。本演講將介紹在非營利組織內的小型技術團隊，是如何在一片程式碼汪洋中進行修改、導入敏捷與幫 API 寫上活文件。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-R3--JM5S0nNAvkd",
                "Slideshow" => "http://www.slideshare.net/excusemejoe/agile-x-api-x-documentation-ngo-mopcon2015",
                "Video" => ""
            ],
            "speakerId" => "joe"
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "11:00",
            "timeEnd" => "11:15",
            "title" => "Take a Break",
            "summary" => "上午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 23,
            "date" => "2015/11/01",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "summary" => "Deliver Beta App with ChatOps",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "Typetalk 是 Nulab Inc 所推出的第一款行動 APP，我們將分享其 iOS App 開發過程、架構和如何使用ChatOps 工具將 beta 版提供給公司成員做測試。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-HCXH7fGm7FK",
                "Slideshow" => "https://speakerdeck.com/nulabinc/deliver-beta-app-with-chatops",
                "Video" => ""
            ],
            "speakerId" => "taichiro-yoshida"
        ],
        [ 
            "id" => 24,
            "date" => "2015/11/01",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "summary" => "跨界的優雅：多平台的 QML 應用程式架構設計",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "“Write once, run anywhere.” 是許多程式開發者的夢想，各種應用程式架構也似雨後春筍般仆繼亮相。然而各平台間的操作方式迴異，程式設計師們又該如何在跨平台應用程式的紅海裏同中求異、維繫使用者的良好體驗呢？在這場演講中，我們將簡介基於 Qt 的 QML 應用程式如何跨平台進行編譯開發，並同時分享維護多平台應用軟體的心得與所需注意的眉角。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-rKdOBzR65Ss",
                "Slideshow" => "https://speakerdeck.com/rschiang/crossing-platform-with-elegance",
                "Video" => ""
            ],
            "speakerId" => "rschiang"
        ],
        [
            "id" => 5,
            "date" => "2015/11/01",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "summary" => "如何建立行動生態圈：透過數據分析及行動廣告制定產品成長策略",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "據 Nielsen 2014 年的調查顯示，使用者每天只會打開 9 個 APP，想優化使用者體驗、提升使用黏著度與留存率，需懂得使用工具來分析數據及優化。以行動 APP 為主要產品的公司來說，如何歸納出重要的商業及產品問題、蒐集相關數據、進行分析、快速修正及市場測試絕對都是快速成長的關鍵。希望能透過此分享讓大家對行動數據分析與行動廣告能有初步了解並協助日後的實作。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-3lpiOz5j6Wf",
                "Slideshow" => "https://drive.google.com/file/d/0B5xeDBinWcUXRDVEcVE1cVNENDdYVVNVX1h2SWdVQmxwczRF/view",
                "Video" => ""
            ],
            "speakerId" => "roger"
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "12:00",
            "timeEnd" => "13:00",
            "title" => "Lunch time",
            "summary" => "午餐時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 26,
            "date" => "2015/11/01",
            "timeStart" => "13:00",
            "timeEnd" => "13:45",
            "summary" => "強震即時警報 EEW",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "技術",
            "issue" => "政府提供的公共服務，傳統以來幾乎都是以標案的方式提供，但由於社會的開放與科技的演進，獨立開發者也能有機會直接與官方合作，提供更良善的公共服務，與正向的公私夥伴關係。<br>以 KNY台灣天氣 App 接入氣象局的強震即時警報為例，分享其中的經驗與心得。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-N8BPAD44gdh",
                "Slideshow" => "http://www.slideshare.net/KNYChen/eewmopcon2015",
                "Video" => ""
            ],
            "speakerId" => "kny"
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "13:45",
            "timeEnd" => "14:00",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 27,
            "date" => "2015/11/01",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "summary" => "IoT 就是要結合 Mobile 啊，不然要幹嘛?",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "當東西都連上網，Mobile 就成了最方便的管理控制器。<br>此議程將從技術角度分享些實例，說明 Mobile 是如何串接 IoT 裝置、使用 Raspberry、Arduino 做為 IoT 的優缺點及完整的通訊方式介紹。<br>想要了解 IoT 怎麼結合 Mobile？怎麼自己動手打造 IoT？千萬別錯過本次議程。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-D530y9co9aw",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "marty"
        ],
        [ 
            "id" => 28,
            "date" => "2015/11/01",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "summary" => "功能完整 && 操作便利 = null?",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "對 APP 開發方而言，提供的功能越是完整就越能顯現出其產品的核心和優於他人產品的價值，但對手機使用者來說，其對 APP 的訴求幾乎都是操作方便性遠大於功能完整性，如何在兩者之間取得平衡一直都是 APP 開發者的難題。 透過比較市場上 APP 其功能完整性與操作便利性，加上使用者經驗測試結果，歸納出幾項設計原則，提供 APP 開發者作為介面與功能設計時的參考。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-kLYBO6AfF6r",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "lancelot-wu"
        ],
        [ 
            "id" => 29,
            "date" => "2015/11/01",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "summary" => "手機自動化測試和持續整合",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "<ol><li>手動測試曠日廢時，原始碼變化太快。</li><li>前天測試沒有問題，現場操作就炸了！</li></ol>本主題試圖提供通用的解決方案，無論您的平台是 iOS, Android 還是 Firefox OS，都能透過自動化測試工具和 CI/CD，驗證產品可靠度，降低開發和測試成本，提升軟體品質。",
            "allowVideo" => false,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-XoLSU0QpuPi",
                "Slideshow" => "http://www.slideshare.net/bcbcarl/ss-54609616",
                "Video" => ""
            ],
            "speakerId" => "carl"
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "14:45",
            "timeEnd" => "15:15",
            "title" => "點心時間",
            "summary" => "休息、聊天、下午茶",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 30,
            "date" => "2015/11/01",
            "timeStart" => "15:15",
            "timeEnd" => "16:00",
            "summary" => "React Native 帶來的跨平台 mobile app 開發典範轉移",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "Mobile app 曠日費時、成本高昂且人才難尋，長久以來一直是業界無解的難題，Facebook 於 2015 年推出的 React Native 將從根本解決此問題，本場將為聽眾深入淺出的介紹它帶來的創新技術與手   法如何從根本上點燃了 mobile app 開發的典範轉移。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-7xw9NMsEo6W",
                "Slideshow" => "https://speakerdeck.com/coodoo/react-native-dai-lai-de-kua-ping-tai-mobile-app-kai-fa-dian-fan-zhuan-yi",
                "Video" => ""
            ],
            "speakerId" => "jeremy"
        ],
        [ 
            "id" => 31,
            "date" => "2015/11/01",
            "timeStart" => "15:15",
            "timeEnd" => "16:00",
            "summary" => "打造行動裝置網站的經驗談",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "響應式設計？手機網站設計？揪竟要如何做出，讓低頭族也愛瀏覽的網站呢？今天咱們不碰程式碼，只聊設計，志在與大家分享我的低頭族網站設計經驗。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-h6yc5R94VEz",
                "Slideshow" => "http://slides.com/mukiwu/mopcon2015#/",
                "Video" => ""
            ],
            "speakerId" => "muki"
        ],
        [ 
            "id" => 32,
            "date" => "2015/11/01",
            "timeStart" => "15:15",
            "timeEnd" => "16:00",
            "summary" => "Gandi CLI ─ 助您將基礎設備最佳自動化的開源命令列介面",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "Gandi CLI 是由 Python 撰寫而成的開源命令列介面，使用 Gandi API 作為溝通介面。Gandi CLI 可用於建立與管理 instances (Gandi IaaS 和 PaaS)、生成與管理 SSL 憑證、管理域名和區域檔、以及其他與域名有關的服務 (如 Gandi Mail、Gandi Site)。目前 Gandi CLI 的原始碼放置於 Github，開放給大眾下載使用。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-yyS90Zj8oZF",
                "Slideshow" => "https://drive.google.com/a/seedev.com/file/d/0B5xeDBinWcUXZkhNYVI3NFM2TnhLSmhMVk5DOHVoeWJiYXR3/view?usp=sharing",
                "Video" => ""
            ],
            "speakerId" => "john"
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "16:00",
            "timeEnd" => "16:15",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ],
        [ 
            "id" => 33,
            "date" => "2015/11/01",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "summary" => "Hack & Go 2",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "<ul><li>API 正在吞噬軟體。</li><li>API 大調查 — 現有服務商調查分析。</li><li>大家一起 Hack。</li></ul>",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-DU3BK29T37t",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => "ben"
        ],
        [ 
            "id" => 34,
            "date" => "2015/11/01",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "summary" => "全天下男人都會犯的錯：密碼學",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "那些年，我們一起修過的密碼學，我相信每個程式開發者心中，都有一個 RSA。然而有些太年輕犯下的錯誤，長大了才瞭解，回味起來卻是無限懷念。<br>本次演講分析一些歷史上著名的密碼系統漏洞原理，並介紹一些加密實作上常見的錯誤 (包括講者本人誠心懺悔告解)。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-O2Wb7c7KtIf",
                "Slideshow" => "http://www.slideshare.net/yungluen/cryptography-54609933",
                "Video" => ""
            ],
            "speakerId" => "yllan"
        ],
        [ 
            "id" => 35,
            "date" => "2015/11/01",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "summary" => "Windows 10 UWP + Azure 創造開發 APP 的新思維",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "Windows 10 UWP (Universal Windows Platform) 基於 common Windows Core 概念，提出建置單一 App，便能在 Windows 10 的各種裝置上使用，從以往針對 PC、平版、手機的 App，擴展至 Xbox, IoT, HoloLens 等裝置。基於 UWP 設計的 App 將不再挶限於手機及平版。<br>本次議題將涵蓋 UWP 概念、UWP + Azure for Raspberry Pi Demo。",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-pBr97ZoxrQ4",
                "Slideshow" => "https://drive.google.com/a/seedev.com/file/d/0B5xeDBinWcUXVnZEXzduU0ZlQmthVHAtNFQ1U1BVYmxpVDF3/view?usp=sharing",
                "Video" => ""
            ],
            "speakerId" => "ian"
        ],
        [ 
            "id" => 36,
            "date" => "2015/11/01",
            "timeStart" => "17:00",
            "timeEnd" => "17:30",
            "title" => "Lightning Talk",
            "summary" => "五分鐘限時閃電秀",
            "room" => "主廳 (R1)",
            "type" => "活動",
            "issue" => "來跟大家分享任何事情吧！給你一隻麥克風！只要你敢上台，MOPCON 的會眾就是你的聽眾！沒有投影片也沒關係，Lightning Talk 只考驗你的時間掌控力，限時五分鐘，時間一到音控妹妹不留情的唷！",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "https://mopcon.hackpad.com/MOPCON-2015-Day-2-fqjnl2qR63g",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speaker" => "Is you！當日大會開放報名，名額有限，請密切注意大會消息！", //覆寫
            "speakerId" => ""
        ],
        [ 
            "id" => 37,
            "date" => "2015/11/01",
            "timeStart" => "17:30",
            "timeEnd" => "18:00",
            "summary" => "閉幕式",
            "room" => "主廳 (R1)",
            "type" => "活動",
            "issue" => "",
            "allowVideo" => true,
            "links" => [
                "hackpad" => "",
                "Slideshow" => "",
                "Video" => ""
            ],
            "speakerId" => ""
        ],
        [ 
            "id" => null,
            "date" => "2015/11/01",
            "timeStart" => "18:00",
            "timeEnd" => "END",
            "title" => "END",
            "summary" => "今年議程結束，明年見～",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speakerId" => ""
        ]
    ];
}


