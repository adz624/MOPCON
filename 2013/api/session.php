<?php

define('LAST_UPDATE', '2013-08-19');


/////////////////////////////////////
header("Content-type: application/json");
date_default_timezone_set("Asia/Taipei");

$data['last_update'] = strtotime(LAST_UPDATE);


$data['sessions'][] = array(
        "id"          => 100,
        "name"        => "致詞 + 議程導覽",
        "content"     => "致詞 + 議程導覽",
        "speaker"     => "主辦單位",
        "speaker_bio" => "",
        "keyword"     => "",
        "loc"         => "三廳聯播",
        "catalog"     => "1",
        "start_time"  => strtotime("2013-10-26 09:05:00"),
        "end_time"    => strtotime("2013-10-26 09:25:00")
        );


$data['sessions'][] = array(
        "id"          => 110,
        "name"        => "Keynote 三廳聯播: Rethinking the Mobile Universe with Amazon Web Services (Markku Lepisto) - Amazon Web Service",
        "content"     => "Learn how you can develop and run a multi-tiered Mobile App without a single server, leveraging the power of Amazon Web Services.",
        "speaker"     => "Markku Lepisto",
        "speaker_bio" => "Markku is the APAC Technology Evangelist at Amazon Web Services. He has been in the IT industry for 14 years, and has held various technical and management positions, covering R&D, technical support and architecture. For the past couple of years, Markku was responsible for the cloud computing architecture and technology transformation of Nokia Siemens Networks' global business units. Markku has worked out of Finland, China and Singapore.",
        "keyword"     => "",
        "loc"         => "三廳聯播",
        "catalog"     => "1",
        "start_time"  => strtotime("2013-10-26 09:25:00"),
        "end_time"    => strtotime("2013-10-26 10:15:00")
        );

$data['sessions'][] = array(
        "id"          => 120,
        "name"        => "KKBOX 在 Android 實作串流音樂的挑戰",
        "content"     => "",
        "speaker"     => "Rogery",
        "speaker_bio" => "熱愛音樂創作的工程師，從 Android 1.0 開始研發 KKBOX Android，開發經驗至今已四年以上，目前在 KKBOX 擔任 Android Team Leader。",
        "keyword"     => "",
        "loc"         => "一廳 (議程 A)",
        "catalog"     => "1",
        "start_time"  => strtotime("2013-10-26 10:30:00"),
        "end_time"    => strtotime("2013-10-26 11:10:00")
        );

$data['sessions'][] = array(
        "id"          => 121,
        "name"        => "遊戲 App 開發營運實務：那些成功者沒說的事",
        "content"     => "摘要：這世界往往是成功者說了算，但如果你剛好有那麼一點反骨，請來聽聽「不成功者」如何在遊戲App獨立開發這條路上，於理想與現實的之間擺盪，奮力掙扎的真實故事。",
        "speaker"     => "鄭暐橋/半路 Monkey Potion",
        "speaker_bio" => "一半的腦袋是理性邏輯的工程師，另一半是感性的文字寫作者；一半的靈魂是藝術工作者，另一半是商人。 在找到工作之前，是個獨立遊戲開發者，曾參與製作的遊戲App包括《邦妮早午餐》系列和《勾玉忍者》，並著有《半路叛逃》一書。",
        "keyword"     => "",
        "loc"         => "二廳 (議程 B)",
        "catalog"     => "1",
        "start_time"  => strtotime("2013-10-26 10:30:00"),
        "end_time"    => strtotime("2013-10-26 11:10:00")
        );

$data['sessions'][] = array(
        "id"          => 122,
        "name"        => "議題確認中 - Nokia/Microsoft",
        "content"     => "",
        "speaker"     => "",
        "speaker_bio" => "",
        "keyword"     => "",
        "loc"         => "三廳 (議程 C)",
        "catalog"     => "1",
        "start_time"  => strtotime("2013-10-26 10:30:00"),
        "end_time"    => strtotime("2013-10-26 11:10:00")
        );

$data['sessions'][] = array(
        "id"          => 130,
        "name"        => "深入淺出桌椅組裝器材",
        "content"     => "傳授 gradle，genymotion...等工具的使用心法，歡迎喜愛桌椅組裝的朋友切磋交流。",
        "speaker"     => "Shakalaca",
        "speaker_bio" => "身兼數職：尿布管理員, 搖籃推進器, 嘴砲攻城獅, 鈔票劊子手。目前與朋友創業打怪中，最愛 Android (App) 開發，常出沒於 Taipei GTUG 聽取各路好手分享技術，也樂於跟大家分享程序員有興趣的小技巧或小工具",
        "keyword"     => "",
        "loc"         => "一廳 (議程 A)",
        "catalog"     => "1",
        "start_time"  => strtotime("2013-10-26 11:20:00"),
        "end_time"    => strtotime("2013-10-26 12:00:00")
        );

$data['sessions'][] = array(
        "id"          => 131,
        "name"        => "我已經不能說自己是程式界的菜鳥了",
        "content"     => "CORONA SDK簡介, 製作遊戲心得分享",
        "speaker"     => "魏巍",
        "speaker_bio" => "曾是 DJ、音樂人，出過一張唱片，後來擔任出版社外文主編，曾寫過一本小說與17本德語法語教學書籍。目前獨立開發 iPhone 與 Android 程式與遊戲，上架 19 個App，從企畫、美術、寫程式全部都一手包辦。",
        "keyword"     => "",
        "loc"         => "二廳 (議程 B)",
        "catalog"     => "1",
        "start_time"  => strtotime("2013-10-26 11:20:00"),
        "end_time"    => strtotime("2013-10-26 12:00:00")
        );

$data['sessions'][] = array(
        "id"          => 132,
        "name"        => "議題確認中 - Nokia/Microsoft",
        "content"     => "",
        "speaker"     => "",
        "speaker_bio" => "",
        "keyword"     => "",
        "loc"         => "三廳 (議程 C)",
        "catalog"     => "1",
        "start_time"  => strtotime("2013-10-26 11:20:00"),
        "end_time"    => strtotime("2013-10-26 12:00:00")
        );

$data['sessions'][] = array(
        "id"          => 140,
        "name"        => "Keynote 三廳聯播: Open is the new norm.",
        "content"     => "Big data, open data, open mobile platform, quantified self, internet of things, 這些進幾年來興起的領域，代表著網際網路和全世界的大趨勢，正快速地把我們推向一個更為開放的世界。「開放已是常態、封閉無法生存」，這一個 session 中將與各位分享，在這樣開放的新世界，我們應該如何應對？",
        "speaker"     => "程世嘉 Sega Cheng",
        "speaker_bio" => "經歷： (前兩者為現職) CEO, iKala CEO, LIVEhouse, Gamania (遊戲橘子), 董事 Google 軟體工程師, 史丹佛大學電腦科學碩士、台大資訊工程系",
        "keyword"     => "",
        "loc"         => "Keynote 三廳聯播",
        "catalog"     => "2",
        "start_time"  => strtotime("2013-10-26 13:20:00"),
        "end_time"    => strtotime("2013-10-26 14:10:00")
        );

$data['sessions'][] = array(
        "id"          => 150,
        "name"        => "利用 CloudBox 開發跨平台行動遊戲",
        "content"     => "CloudBox為基於C/C++的open source project, 目前支援Windows/iOS/Android,為cross-platform engine, 支援xcode, eclipse, visual studio 2008, 目前已用CloudBox開發的產品有Super Baby Pig(超級寶貝豬), 已於App Store/Play Store上架",
        "speaker"     => "Cloudhsu",
        "speaker_bio" => "半導體業混跡的軟體架構師，業餘獨立開發者，於2010年踏入App開發，主要作品有廁所大戰，超級寶貝豬，小品作品為賓果,神樂透...等。曾於2011年由中國三星舉辦的星空大賽獲獎，CSDN博客專家(http://blog.csdn.net/cloudhsu)，Devdiv論壇iOS版主，CodeProject論壇，Gold級Anthor",
        "keyword"     => "",
        "loc"         => "一廳 (議程 A)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 14:20:00"),
        "end_time"    => strtotime("2013-10-26 15:00:00")
        );

$data['sessions'][] = array(
        "id"          => 151,
        "name"        => "如何透過微小的 App，獲得巨大的力量，進而改變世界",
        "content"     => "",
        "speaker"     => "陳坤助 KNY",
        "speaker_bio" => "中華民國 App 跨界交流協會理事長。於2012年11月獲得 Google Play Top Developer 徽章。長期關注與推動台灣 App 產業的發展，並積極倡議台灣 OpenData 的發展。希望能透過科技與開放的力量，建構更美好的未來。",
        "keyword"     => "",
        "loc"         => "二廳 (議程 B)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 14:20:00"),
        "end_time"    => strtotime("2013-10-26 15:00:00")
        );

$data['sessions'][] = array(
        "id"          => 152,
        "name"        => "iOS 上的文字描繪基礎",
        "content"     => "- 現代文字描繪系統的特性\n- iOS 上的排版與文字描繪\n- 小心陷阱\n無論是現行哪種作業系統，「文字的呈現」都佔了使用者界面很大的一環。每天看網頁、回 email 甚至寫程式，都面對大量的文字。此議程旨在介紹文字描繪的基礎原理，以及 iOS 上的實作，到最後分享親身體驗到的陷阱。希望能夠帶領聽眾入門文字描繪，做出更細膩的使用者介面。",
        "speaker"     => "yllan",
        "speaker_bio" => "",
        "keyword"     => "",
        "loc"         => "三廳 (議程 C)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 14:20:00"),
        "end_time"    => strtotime("2013-10-26 15:00:00")
        );

$data['sessions'][] = array(
        "id"          => 160,
        "name"        => "用 KKBOX Android Toolkit 加速 Android Apps 開發",
        "content"     => "Android apps開發團隊人數增加，怎樣才能讓大家統一規範和開發模式？actionbar，bitmap OOM等低版本android問題遇到麻煩？跨activity的背景service要顯示dialog？google提供的UI元件不夠滿足產品需求？",
        "speaker"     => "Peter/Allan",
        "speaker_bio" => "Peter\nKKBOX New Product Team Senior Engineer\nKKBOX Android refactoring lead developer\nKKBOX Android toolkit maintainer\nKKBOX Android tap game developer\n\nAllen\n住天龍國但是常常被誤以為偷渡客，從野狗大學畢業不過還沒得狂犬病；目前在 KKBOX 擔任不站崗的快樂小警衛。",
        "keyword"     => "",
        "loc"         => "一廳 (議程 A)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 15:20:00"),
        "end_time"    => strtotime("2013-10-26 16:00:00")
        );

$data['sessions'][] = array(
        "id"          => 161,
        "name"        => "軟硬整合設計",
        "content"     => "設計是為了解決問題。但軟硬整合的設計實戰中，常因為硬體的前期投資，讓設計團隊為了回收投入，執著於已開發成果，有了「慣性思考」— 最後竟演變成「設計是為了製造問題」。講者以其參與的運動器材「HeartWave 心浪體能配置機」的開發經驗，分享如何避開軟硬整合設計的慣性陷阱。",
        "speaker"     => "程士恒 Scott Cheng",
        "speaker_bio" => "博晶醫電 / 共同創辦人\n講者自 2007 年以來投入需高度軟硬整合的遠距照護計劃。對於電子＋生物的應用有高度興趣與熱忱。並於 2011 年創辦運動感測器設計公司 —— 博晶醫電 (bOMDIC Inc.) —— 發願讓 bOMDIC 結合電子感測、無線通訊技術，和手機 App 等多種元素的整合，成為「高品質運動的代名詞」。",
        "keyword"     => "",
        "loc"         => "二廳 (議程 B)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 15:20:00"),
        "end_time"    => strtotime("2013-10-26 16:00:00")
        );

$data['sessions'][] = array(
        "id"          => 162,
        "name"        => "RubyMotion: Use It & Hack It",
        "content"     => "Ruby 是替代 Objective-C 的最佳程式語言，RubyMotion 的誕生更是讓全球 Rub 愛好者磨拳擦掌想要跳入行動應用的領域。無論您是不是熟悉 Ruby，接觸 RubyMotion 後都一定會醉倒在它那極簡、優雅、迅捷的開發體驗。議程中除了介紹 RubyMotion 的架構，還會分享開發時所經歷的酸甜苦辣，此外，只要再進行小小的 Hack，即可將 RubyMotion 帶到全新的應用上。",
        "speaker"     => "古傑芳 Joseph Ku",
        "speaker_bio" => "themobiapps.com (英商移動應用) / 研發副總\n程式設計師一枚。十歲時開始撰寫 x86 組合語言程式，二十歲寫 C 維生，三十歲愛上 Ruby。曾主導開發多種嵌入式設備產品，並於 2008年投身行動應用開發迄今。",
        "keyword"     => "",
        "loc"         => "三廳 (議程 C)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 15:20:00"),
        "end_time"    => strtotime("2013-10-26 16:00:00")
        );

$data['sessions'][] = array(
        "id"          => 170,
        "name"        => "讓你 App 優雅的 crash 三部曲",
        "content"     => "使用者看到crash，最常做的是直接給一顆星，絕大部分都不會回報開發者。",
        "speaker"     => "hokila",
        "speaker_bio" => "hokila，福氣啦，因為不想取英文名字所以直接把台語發音翻過來。熱愛分享、自我挑戰與台客文化，常去的聚會是Cocoaheads Taipei。http://josihokila.blogspot.tw/",
        "keyword"     => "",
        "loc"         => "一廳 (議程 A)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 16:10:00"),
        "end_time"    => strtotime("2013-10-26 17:00:00")
        );

$data['sessions'][] = array(
        "id"          => 171,
        "name"        => "",
        "content"     => "",
        "speaker"     => "Neil Lee",
        "speaker_bio" => "Hiiir 時間軸科技副總經理。專長於技術整合及三網架構，擅於整合市場需求提供最佳技術解決方案，目前擔任Hiiir時間軸科技市場技術總監，帶領30多位網站及行動技術團隊提供源源不絕的技術整合創意，同時也為國內企業行動技術顧問、業界講師及大專院校講師。",
        "keyword"     => "",
        "loc"         => "二廳 (議程 B)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 16:10:00"),
        "end_time"    => strtotime("2013-10-26 17:00:00")
        );

$data['sessions'][] = array(
        "id"          => 172,
        "name"        => "從手機程式到網頁開發",
        "content"     => "隨著眾人對網頁功能的期盼逐日增加，網頁能作的事情愈來愈多，設計也愈來愈複雜，各種工具與架構因應而生。以開發 Android 手機應用程式的經驗，來理解 AngularJS 的設計",
        "speaker"     => "Walkingice",
        "speaker_bio" => "0xlab co-founder, 熟悉 Android Framework/Application。喜歡 Open Source 且聚焦在前端開發的 software developer，希望能用程式碼回饋社會。",
        "keyword"     => "",
        "loc"         => "三廳 (議程 C)",
        "catalog"     => "3",
        "start_time"  => strtotime("2013-10-26 16:10:00"),
        "end_time"    => strtotime("2013-10-26 17:00:00")
        );

$data['sessions'][] = array(
        "id"          => 200,
        "name"        => "進擊的Mikimoto 前傳",
        "content"     => "Mokimoto的一天",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "iOS",
        "loc"         => "企業號輪機室",
        "catalog"     => "9",
        "start_time"  => strtotime("2013-10-27 10:20:00"),
        "end_time"    => strtotime("2013-10-27 11:20:00")
        );

$data['sessions'][] = array(
        "id"          => 201,
        "name"        => "進擊的Mikimoto 今傳",
        "content"     => "Mokimoto的明天",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "iOS",
        "loc"         => "企業號輪機室",
        "catalog"     => "5",
        "start_time"  => strtotime("2013-10-27 10:20:00"),
        "end_time"    => strtotime("2013-10-27 11:20:00")
        );

$data['sessions'][] = array(
        "id"          => 202,
        "name"        => "進擊的Mikimoto 不死傳說",
        "content"     => "Mokimoto的後天",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "iOS",
        "loc"         => "企業號輪機室",
        "catalog"     => "10",
        "start_time"  => strtotime("2013-10-27 10:20:00"),
        "end_time"    => strtotime("2013-10-27 11:20:00")
        );

$data['sessions'][] = array(
        "id"          => 210,
        "name"        => "進擊的Mikimoto",
        "content"     => "Mokimoto的昨天",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "iOS",
        "loc"         => "企業號收發室",
        "catalog"     => "4",
        "start_time"  => strtotime("2013-10-27 10:20:00"),
        "end_time"    => strtotime("2013-10-27 11:20:00")
        );

$data['sessions'][] = array(
        "id"          => 220,
        "name"        => "進擊的Mikimoto PartII",
        "content"     => "轉職的Mokimoto",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "Android",
        "loc"         => "企業號魚雷室",
        "catalog"     => "5",
        "start_time"  => strtotime("2013-10-27 13:30:00"),
        "end_time"    => strtotime("2013-10-27 14:40:00")
        );

$data['sessions'][] = array(
        "id"          => 221,
        "name"        => "Mikimotoo與娜美",
        "content"     => "在偉大航道的Mokimoto",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "數位內容",
        "loc"         => "企業號艦橋",
        "catalog"     => "6",
        "start_time"  => strtotime("2013-10-27 13:30:00"),
        "end_time"    => strtotime("2013-10-27 14:40:00")
        );

$data['sessions'][] = array(
        "id"          => 222,
        "name"        => "Mikimotoo與涼宮春日的浪漫夏天",
        "content"     => "Mokimoto的愛情",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "開發平台",
        "loc"         => "企業號輪機室",
        "catalog"     => "7",
        "start_time"  => strtotime("2013-10-27 13:30:00"),
        "end_time"    => strtotime("2013-10-27 14:40:00")
        );

$data['sessions'][] = array(
        "id"          => 230,
        "name"        => "你所不知道的Mikimotoo",
        "content"     => "Mokimoto演講內容",
        "speaker"     => "Mikimoto",
        "speaker_bio" => "熱血宅宅",
        "keyword"     => "數位內容",
        "loc"         => "企業號甲板",
        "catalog"     => "8",
        "start_time"  => strtotime("2013-10-27 15:10:00"),
        "end_time"    => strtotime("2013-10-27 16:40:00")
        );

echo json_encode($data);

