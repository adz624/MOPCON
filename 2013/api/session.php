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
        "name"        => "Keynote 三廳聯播: 議題確認中 (Ptt, PTT創辦人) - Microsoft",
        "content"     => "",
        "speaker"     => "Ptt, PTT創辦人",
        "speaker_bio" => "",
        "keyword"     => "",
        "loc"         => "Keynote 三廳聯播",
        "catalog"     => "9",
        "start_time"  => strtotime("2013-10-27 09:00:00"),
        "end_time"    => strtotime("2013-10-27 09:50:00")
        );

$data['sessions'][] = array(
        "id"          => 210,
        "name"        => "一廳 (議程 A): Fingers Party: 從一代至二代經驗分享",
        "content"     => "我們是高雄的小型遊戲開發團隊，成員多半是學生及剛畢業的新鮮人，因為平常會在幾間不同的Cafe作業，團隊才以Nomads命名，游牧民族的意思。Fingers Party是團隊成立後第一個成功完成並且順利在App Store上架的作品，從開發到營運都是由團隊成員自己來做。作品上市累積一些市場經驗之後，我們就擬定了二代作品的更新方向，但一直到今年暑假新的實習學生加入後，我們才有足夠的人力來開發二代。本次演講主要分享我們的團隊、開發，和營運經驗，同時比較(驗收)一代及二代的差異。",
        "speaker"     => "炎羅",
        "speaker_bio" => "- 奧爾資訊工程師【作品: Oh! Cube】\n- 先進量子工程師【專案: Arcalet遊戲平台的API及Unity lib】\n- 與Garena Taiwan合作：魔獸爭霸-信長野望（2007~2008）\n- 大宇資訊客服專員（2005~2007）\n- 業界講師\n-- 明道大學數位設計學系（Unity3D遊戲開發）\n-- 樹德科大資工系（遊戲設計概論、Scirra Construct 2）\n-- 樹德科大動遊系（Unity3D遊戲開發）\n-- 南台科大畢業製作評審委員\n-- 樹德科大校外課程委員\n-- 樹德科大教師專業成長社群講師（遊戲開發與教學）",
        "keyword"     => "",
        "loc"         => "一廳 (議程 A)",
        "catalog"     => "5",
        "start_time"  => strtotime("2013-10-27 10:00:00"),
        "end_time"    => strtotime("2013-10-27 10:40:00")
        );

$data['sessions'][] = array(
        "id"          => 211,
        "name"        => "二廳 (議程 B): Industry Hacking: 聊，傳統產業健身器材，玩，軟硬體整合",
        "content"     => "台灣經濟體與外匯結構的組成除了高科技產業、電子業之外，傳統產業也是不可或缺的一環。傳統產業升級所面臨的挑戰，也許遇上了這一波軟硬體整合、軟硬體開放，會碰撞出一些新的火花？有的傳統產業不大不小，但規模未到調研機構願意為之出市場研究報告，一切摸黑前進。在 PAFERS Tech 這兒有一群認真但不願認輸的跨領域挑戰者，正在挑戰從台灣迎向全球健身器材產業之神鬼迷航。（你認真了！但不一定會輸:）聊 www.pafers.com 的創業歷程。結合科技、商業模型、行動應用、軟硬體整合、法務的神奇航道。",
        "speaker"     => "Ernest Chiang",
        "speaker_bio" => "Ernest。這小孩一路在玩，挑了個英文名字假裝練習寫小說，後來才知道跟海明威撞名。小時候玩 MS-DOS, OS/2, Windows 3.1, Slackware，玩著玩著玩到大學申請少了零點多分沒法進資工系玩，改玩半導體製程和微小機電，幸運地進入台積研究所玩製程整合從研發、試產玩到量產。熱愛開放與不務正業的精神，曾經玩網路創業，現在上班在玩傳統產業 + 軟硬體整合，試著把無線通訊塞進健身器材中。下班參與 Mozilla 台灣社群 MozTW SUMO 專案，以及支援朋友們玩各種創業。夢想與大家玩出各種可能性。愛台灣，不解釋 XD",
        "keyword"     => "",
        "loc"         => "二廳 (議程 B)",
        "catalog"     => "10",
        "start_time"  => strtotime("2013-10-27 10:00:00"),
        "end_time"    => strtotime("2013-10-27 10:40:00")
        );

$data['sessions'][] = array(
        "id"          => 212,
        "name"        => "三廳 (議程 C): 在行動裝置的即時影像辨識開發經驗分享: 以 FindDog.net 尋狗網為例",
        "content"     => "分享一個創新服務-FindDog.net APP的開發過程。這是一項可以使用行動裝置隨時拍照、即時比對、社群分享、軟硬整合晶片掃描的尋狗服務。將介紹其開發緣由、在行動裝置前端的低階影像處理、AWS後端平台的辨識整合架構、資料處理及型別比對技術等。",
        "speaker"     => "Jamesyeh",
        "speaker_bio" => "James原是舒適圈的大學助理教授，主攻情意計算，資工出身卻常在設計、心理及行銷系打混，做過無人載具、禪修、颱風預測、情緒分析、語音處理、消費者行為分析、訊號軟硬整合...等多元的案子。近兩年已經歷四家獲利的新創公司，去年成立了一間「想要顛覆舊思維」的公司，主要專注於多媒體處理、行為分析、軟硬整合，並結合手持裝置應用的創新服務。",
        "keyword"     => "",
        "loc"         => "三廳 (議程 C)",
        "catalog"     => "4",
        "start_time"  => strtotime("2013-10-27 10:00:00"),
        "end_time"    => strtotime("2013-10-27 10:40:00")
        );

$data['sessions'][] = array(
        "id"          => 220,
        "name"        => "一廳 (議程 A): Mobile Web Application 甘苦談",
        "content"     => "在 Web Standard 成為網路主流後，開發人員沒想到的是，後面還有更艱苦的 Mobile Web 在等著他們，雖然各家手機的瀏覽器都照著標準走，不過接著而來的是各種靈異現象、不同的標準實作以及更不友善的除錯環境。本議程將分享講者在開發 Mobile Web Application 時，所遇到的各種疑難雜症。",
        "speaker"     => "othree",
        "speaker_bio" => "othree，十年前為了製作個人網頁而自學起 HTML、CSS 和 JavaScript，接著便一頭栽進網路標準的世界，並持續關注網路前端技術的發展，不時在部落格及各活動分享新知，近期關注 HTML5、CSS3、Web API、語意網等議題，被認為專長於 JavaScript，其實最喜歡寫的是漂亮的 HTML Markup，現職為 HTC 前端工程師（F2E）兼博士生。",
        "keyword"     => "",
        "loc"         => "一廳 (議程 A)",
        "catalog"     => "5",
        "start_time"  => strtotime("2013-10-27 10:50:00"),
        "end_time"    => strtotime("2013-10-27 11:30:00")
        );

$data['sessions'][] = array(
        "id"          => 221,
        "name"        => "二廳 (議程 B): 為了環遊世界而誕生的世界迷霧",
        "content"     => "有一個不接case的兩人團隊，有一個想要環遊世界的大大夢想，而為了紀錄這一輩子的旅程，做了一個結合真實人生的小小遊戲，就叫作世界迷霧，歡迎來聽聽世界迷霧的成長故事。",
        "speaker"     => "Olli",
        "speaker_bio" => "獨立開發者，Ollix創辦人，只做只自已想要的app，夢想是要和老婆帶兩台小折去環遊世界。",
        "keyword"     => "",
        "loc"         => "二廳 (議程 B)",
        "catalog"     => "6",
        "start_time"  => strtotime("2013-10-27 10:50:00"),
        "end_time"    => strtotime("2013-10-27 11:30:00")
        );

$data['sessions'][] = array(
        "id"          => 222,
        "name"        => "三廳 (議程 C): Hands-on: Mobile Push Notifications to Android, iOS and Kindle Fire with AWS (Joe Ziegler) - Amazon Web Service",
        "content"     => "Synopsis: Push notifications are alerts you can send to users even when they are not actively using your app. Join us to see a Live Demo of how you can easily send push notifications to Apple, Google and Amazon devices through a simple, Unified API, using Amazon Simple Notification Service.",
        "speaker"     => "Joe Ziegler",
        "speaker_bio" => "Joe works across Asia Pacific as the AWS Start-Up Business Development Manager, enabling the ecosystem and working with amazing start-up companies. Originally from Texas, he began his career in Silicon Valley. In 1995, he worked on some of the first e-commerce applications at Netscape, and worked at NetGravity during the time of its IPO, as a technical executive responsible for the company IP, and managing engineering groups. After that, Joe built several startups from the ground up as the Director of Technical Services in his recent venture, Iris Data Services, which was listed as one of the “Forbes 500 Fastest Growing Companies in the US”. Joe has lived on five continents and has studied Mandarin Chinese, Japanese and Korean.",
        "keyword"     => "",
        "loc"         => "三廳 (議程 C)",
        "catalog"     => "7",
        "start_time"  => strtotime("2013-10-27 10:50:00"),
        "end_time"    => strtotime("2013-10-27 11:30:00")
        );

$data['sessions'][] = array(
        "id"          => 230,
        "name"        => "一廳 (議程 A): 為視障朋友打造行動應用",
        "content"     => "觸控介面以及語音合成（TTS）技術的普及，現在的智慧型手機與平板電腦，可說是自電腦問世以來，對視障朋友最為方便的資訊應用工具。然而，要讓視障朋友可以方便地使用各項服務，除了作業系統本身所提供的能力外，更需要的是所有應用程式開發者對於無障礙議題的關心與努力。\n\n本講題以 iOS 平台為例，說明視障朋友如何操作行動裝置，開發者如何在應用程式中、甚至是複雜操作介面中加入無障礙支援，以及其他需要注意之處。",
        "speaker"     => "zonble",
        "speaker_bio" => "網路代號 zonble。Mac OS X 應用程式開發經驗八年、iOS 應用程式開發經驗五年，一個身上有 Objective-C 程式碼刺青的軟體工程師。曾參與 OpenVanilla、Yahoo! 輸入法、嘸蝦米輸入法 X1、教育部閩南語漢字輸入法等軟體開發專案，目前任職於 KKBOX，負責 Mac OS X 與 iOS 平台各項產品開發。",
        "keyword"     => "",
        "loc"         => "一廳 (議程 A)",
        "catalog"     => "8",
        "start_time"  => strtotime("2013-10-27 11:30:00"),
        "end_time"    => strtotime("2013-10-27 12:20:00")
        );

$data['sessions'][] = array(
        "id"          => 231,
        "name"        => "二廳 (議程 B): 議題確認中 - 數位無限軟體",
        "content"     => "",
        "speaker"     => "",
        "speaker_bio" => "",
        "keyword"     => "",
        "loc"         => "二廳 (議程 B)",
        "catalog"     => "8",
        "start_time"  => strtotime("2013-10-27 11:30:00"),
        "end_time"    => strtotime("2013-10-27 12:20:00")
        );

$data['sessions'][] = array(
        "id"          => 232,
        "name"        => "三廳 (議程 C): Hands-on: Mobile Push Notifications to Android, iOS and Kindle Fire with AWS (Joe Ziegler) - Amazon Web Service",
        "content"     => "Synopsis: Push notifications are alerts you can send to users even when they are not actively using your app. Join us to see a Live Demo of how you can easily send push notifications to Apple, Google and Amazon devices through a simple, Unified API, using Amazon Simple Notification Service.",
        "speaker"     => "Joe Ziegler",
        "speaker_bio" => "Joe works across Asia Pacific as the AWS Start-Up Business Development Manager, enabling the ecosystem and working with amazing start-up companies. Originally from Texas, he began his career in Silicon Valley. In 1995, he worked on some of the first e-commerce applications at Netscape, and worked at NetGravity during the time of its IPO, as a technical executive responsible for the company IP, and managing engineering groups. After that, Joe built several startups from the ground up as the Director of Technical Services in his recent venture, Iris Data Services, which was listed as one of the “Forbes 500 Fastest Growing Companies in the US”. Joe has lived on five continents and has studied Mandarin Chinese, Japanese and Korean.",
        "keyword"     => "",
        "loc"         => "三廳 (議程 C)",
        "catalog"     => "7",
        "start_time"  => strtotime("2013-10-27 11:30:00"),
        "end_time"    => strtotime("2013-10-27 12:20:00")
        );

echo json_encode($data);

