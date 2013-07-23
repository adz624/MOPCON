<?php
  $page = "activity";
?>
<html lang="zh-TW" class="">
  <head><?php include_once("header.php");?></head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <div class="container" id="all">
      <div class="space"></div>
      <div class="article">
        <div id="sponsorList">
          <div class="offset1 span11 second well-large">
            <h3>Day 2</h3>
<p class='phone'>
--- Log opened Sun Oct 28 00:00:24 2012
</p>

<p class='phone'>
00: 14 -!- Yuhsien [~yuhsienle@111-254-138-246.dynamic.hinet.net] has joined #mopcon <br>
... 29 -!- Yuhsien [~yuhsienle@111-254-138-246.dynamic.hinet.net] has quit [Ping timeout: 272 seconds]
</p>

<p class='phone'>
01: 02 -!- softcup [~softcup@114-35-206-151.HINET-IP.hinet.net] has quit [Quit: 暫離]
</p>

<p class='phone'>
04: 36 -!- jserv-- [~jserv@122-117-174-134.HINET-IP.hinet.net] has joined #mopcon
</p>

<p class='phone'>
06: 06 -!- test_ [722a4b57@gateway/web/freenode/ip.114.42.75.87] has joined #mopcon <br>
... 08 -!- test_ [722a4b57@gateway/web/freenode/ip.114.42.75.87] has quit [Client Quit] <br>
... 10 -!- FrankWu [722a4b57@gateway/web/freenode/ip.114.42.75.87] has joined #mopcon
</p>

<p class='phone'>
07: 13 -!- thschee [~thschee@1-172-96-146.dynamic.hinet.net] has joined #mopcon <br>
... 17 -!- thschee [~thschee@1-172-96-146.dynamic.hinet.net] has quit [Ping timeout: 245 seconds] <br>
... 48 -!- FrankWu [722a4b57@gateway/web/freenode/ip.114.42.75.87] has quit [Ping timeout: 245 seconds]
</p>

<p class='phone'>
08: 17 -!- FrankWu [722a4b57@gateway/web/freenode/ip.114.42.75.87] has joined #mopcon <br>
... 52 -!- FrankWu [722a4b57@gateway/web/freenode/ip.114.42.75.87] has quit [Quit: Page closed] <br>
... 52 -!- funnycat [~chatzilla@114-137-36-175.dynamic.hinet.net] has joined #mopcon <br>
... 57 -!- BeataLin [~BeataLin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 57 &lt; mikimoto&gt; 大家早 ^^
</p>

<p class='phone'>
09: 02 -!- softcup [~softcup@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 02 &lt;@Aminzai&gt; 早安！ <br>
... 03 &lt; softcup&gt; 早安～ <br>
... 03 &lt; softcup&gt; pjax <br>
... 03 &lt; hechien&gt; 早安 <br>
... 04 &lt; hechien&gt; 哦哦，這車爬坡的能力好像很讚@@ <br>
... 05 &lt; softcup&gt; problem of ajax <br>
... 05 &lt; softcup&gt; 不刷新頁面改變內容，蛋無法改變頁面網址 <br>
... 06 &lt; softcup&gt; another issue <br>
... 07 &lt; softcup&gt; 講者好快，來不及打 <br>
... 07 &lt; hechien&gt; pjax = ajax + pushState <br>
... 07 &lt; hechien&gt; <a href="http://pjax.heroku.com">http://pjax.heroku.com</a> <br>
... 11 &lt; mikimoto&gt; pjax 真不錯 <br>
... 11 &lt; softcup&gt; xhr.setRequestHeader('X-PJAX', 'true') <br>
... 11 &lt; hechien&gt; 與Rails綁定的時候如果 request.headers['X-PJAX'] 有東西的話就 render layout: false 回去 <br>
... 12 &lt; softcup&gt; TurboLinks <br>
... 12 &lt; softcup&gt; pjax 對 container 斤斤計較 <br>
... 13 &lt; softcup&gt; TurboLinks 放大絕招：換掉整個 body <br>
... 13 &lt; mikimoto&gt; 換掉整個 &lt;body&gt;, 放大絕了 <br>
... 13 &lt; softcup&gt; Benefit <br>
... 13 &lt; softcup&gt; 不需要 jQuery <br>
... 13 &lt; softcup&gt; 不對每個 Page 重新 compile JS/CSS <br>
... 14 &lt; softcup&gt; 對 heavy asset, light content 有非常強的提速效果 <br>
... 15 &lt; hechien&gt; <a href="https://github.com/steveklabnik/turbolinks_test">https://github.com/steveklabnik/turbolinks_test</a> <br>
... 15 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 16 &lt; softcup&gt; 可排除不需要 turbolinks 的頁面 <br>
... 16 &lt; softcup&gt; assets change detection: full reload <br>
... 17 &lt; softcup&gt; data-method, data-remote, data-confirm <br>
... 17 &lt; softcup&gt; 延生問題 <br>
... 17 &lt; softcup&gt; 衍生問題 <br>
... 18 -!- ChuSiang_s3 [~ChuSiang_@42-78-136-198.dynamic-ip.hinet.net] has joined #mopcon <br>
... 18 &lt; softcup&gt; 多數JS 不假設有 Turbolinks 這東西 <br>
... 18 &lt; softcup&gt; 多數熱門的 plugin 可以配合 turbolinks <br>
... 18 &lt; ChuSiang_s3&gt; morning ... :) <br>
... 18 &lt; hechien&gt; D.H.H. 這次大概是拿散彈槍，開一槍，一堆JS libs中彈 Orz <br>
... 18 &lt; softcup&gt; ChuSiang_s3: 早 <br>
... 19 &lt; softcup&gt; 真的 <br>
... 19 &lt; Derekhsu&gt; Ie8有實作嗎 <br>
... 19 &lt; softcup&gt; Suggestion == <br>
... 19 &lt; softcup&gt; designed to be long-lived across many different HTML pages without a refresh <br>
... 20 &lt; Derekhsu&gt; 我完全忘記把昨天的文件袋帶來了 <br>
... 20 &lt; hechien&gt; Derekhsu: 我則是昨天忘記把文件袋帶回去 ... 然後就被保管了XDDD <br>
... 20 &lt; softcup&gt; 事件處理不要綁定在 refresh handler <br>
... 20 &lt; softcup&gt; 使用第三方 code 時，確定不會綁定在 DOM 上 <br>
... 21 &lt; softcup&gt; DOM Ready events 上 <br>
... 21 &lt; Derekhsu&gt; 我的文件袋裝了一堆吃的，怎麼能不帶回去啊 <br>
... 21 &lt; hechien&gt; Derekhsu: ........ 那一定要帶回去了XD <br>
... 21 &lt; Derekhsu&gt; Coffeescript <br>
... 22 &lt; softcup&gt; 好快～ <br>
... 22 &lt; Derekhsu&gt; 我真的不太熟 <br>
... 22 &lt; hechien&gt; 外面還有一些資料袋看可不可以要好了XD <br>
... 22 &lt; Derekhsu&gt; 好短 <br>
... 22 &lt; hechien&gt; 現在還沒九點半囧 ... <br>
... 22 &lt; hechien&gt; 拱她Live demo一下好了XDDDD <br>
... 22 &lt; softcup&gt; 誰要幫忙問問題...:P <br>
... 24 &lt; Derekhsu&gt; 阿，他把時間當成coscup在講了 <br>
... 24 &lt;@Aminzai&gt; 冏....麥克風沒電了 <br>
... 24 &lt;@Aminzai&gt; IE出現了 <br>
... 24 &lt; mikimoto&gt; IE MUST Die <br>
... 24 &lt; Derekhsu&gt; 我本來也想問這個問題 <br>
... 25 &lt; softcup&gt; Aminzai, 衝啊！幫忙問問題 <br>
... 25 &lt; hechien&gt; IE MUST DIE ++ <br>
... 25 &lt; Derekhsu&gt; 沒辦法 <br>
... 25 -!- D-eye [~d-eye2@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 25 &lt;@Aminzai&gt; softcup: 沒跟這不熟阿..(聳肩 <br>
... 25 &lt; Derekhsu&gt; 作製造業就知道了 <br>
... 25 -!- RJ_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 26 &lt; RJ_&gt; 人有點少... <br>
... 26 &lt; Derekhsu&gt; 對啊 <br>
... 26 &lt; Derekhsu&gt; 又有一堆吃的了 <br>
... 26 &lt;@Aminzai&gt; RJ_: Conf通常都是第二天人會少XDDD <br>
... 26 &lt; RJ_&gt; XDDDD <br>
... 26 &lt; softcup&gt; Aminzai: 有這種慣例？ <br>
... 27 &lt; Derekhsu&gt; 會爛掉，這樣麻煩 <br>
... 27 &lt;@Aminzai&gt; softcup: COSCUP每年都這樣＠＠ <br>
... 27 &lt; softcup&gt; xddd <br>
... 27 &lt; Derekhsu&gt; 因為我們都這樣做 <br>
... 27 &lt;@Aminzai&gt; 軟杯杯衝了！！ <br>
... 28 -!- Marcus [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 28 &lt; Derekhsu&gt; 我在軟伯伯旁邊 <br>
... 28 &lt; softcup&gt; 別這樣，讓講者多待一會兒 <br>
... 28 &lt; Marcus&gt; XDite這場發問人比較多 <br>
... 31 -!- Marcus_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 32 &lt; Marcus_&gt; XDite這場比較多人發問 <br>
... 34 &lt; mikimoto&gt; 剛好可以繼續寫下一場的 source code <br>
... 34 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 35 &lt; mikimoto&gt; Lightning talk 大家快衝吧 <br>
... 37 &lt; softcup&gt; <a href="https://parse.com/">https://parse.com/</a>  &lt;-- BobChao <br>
... 42 &lt; hechien&gt; 記得Dofi剛說：只要有第三個lightning talk講者，他就要把第一個消掉 XDDDD <br>
... 43 &lt; xdite&gt; XD <br>
... 46 -!- FrankWu [722a4b57@gateway/web/freenode/ip.114.42.75.87] has joined #mopcon <br>
... 49 -!- chusiang [~jonny@host-219-69-115-205.static.kbtelecom.net] has joined #mopcon <br>
... 50 &lt; chusiang&gt; MOPCON 2012 Day1 IRC log - <a href="http://goo.gl/KIBw9">http://goo.gl/KIBw9</a> <br>
... 51 -!- chusiang- changed the topic of #mopcon to: 非官方 MOPCON 2012 IRC | 官方網站 - <a href="http://mopcon.org/">http://mopcon.org/</a> |  座位表 - <a href="http://imcheck.in/mopcon2012.html">http://imcheck.in/mopcon2012.html</a> | freenode Web IRC -  <a href="http://webchat.freenode.net/">http://webchat.freenode.net/</a> <br>
... 52 &lt;@chusiang-&gt; 非官方 MOPCON 2012 IRC | 官方網站 - <a href="http://mopcon.org/">http://mopcon.org/</a> | 座位表 - <a href="http://imcheck.in/mopcon2012.html">http://imcheck.in/mopcon2012.html</a> | freenode Web IRC - <a href="http://webchat.freenode.net/">http://webchat.freenode.net/</a> | Day1 log - <a href="http://goo.gl/KIBw9">http://goo.gl/KIBw9</a> <br>
... 54 &lt; mikimoto&gt; hechien: 請阻止 Dofi 這麼作 <br>
... 54 &lt; softcup&gt; 可以幫 Dofi 多加一場 <br>
... 54 &lt; mikimoto&gt; 多加一場 ++ <br>
... 54 -!- mode/#mopcon [+o mikimoto] by chusiang- <br>
... 55 [Users #mopcon] <br>
... 55 [@Aminzai  ] [ BeataLin   ] [ D-eye     ] [ funnycat] [ Marcus ] [ xdite] <br>
... 55 [@chusiang-] [ BlueT_     ] [ DennyHuang] [ hechien ] [ Marcus_] <br>
... 55 [@mikimoto ] [ chusiang   ] [ ericpi    ] [ hlb     ] [ RJ_    ] <br>
... 55 [ afu      ] [ ChuSiang_s3] [ FrankWu   ] [ jserv-- ] [ softcup] <br>
... 55 -!- Irssi: #mopcon: Total of 21 nicks [3 ops, 0 halfops, 0 voices, 18 normal] <br>
... 55 &lt;@mikimoto&gt; Lightning talk 需要大家幫忙集氣~~ <br>
... 55 -!- chusiang [~jonny@host-219-69-115-205.static.kbtelecom.net] has quit [Quit: leaving] <br>
... 55 &lt;@chusiang-&gt; 今日有事，大家要好好玩啊！！ <br>
... 56 &lt;@mikimoto&gt; chusiang-: Q_Q <br>
... 57 &lt; hlb&gt; lightning talk 還有名額嗎 <br>
... 58 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon
</p>

<p class='phone'>
10: 00 &lt; RJ_&gt; 話說BlueT勒~ <br>
... 00 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 00 &lt; ChuSiang_s3&gt; 應該還是有五個以上!? <br>
... 01 &lt; bobchao&gt; 這頻道有人有 log 嗎？剛都連不上想回顧一下 <br>
... 01 -!- D-eye [~d-eye2@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 260 seconds] <br>
... 01 &lt; RJ_&gt; 交通上... <br>
... 01 &lt; bobchao&gt; (正在 mikimoto) <br>
... 01 &lt; ChuSiang_s3&gt; bobchao 今日的!? <br>
... 02 &lt; bobchao&gt; ChuSiang_s3: 嗯對啊 <br>
... 02 &lt; softcup&gt; 有 <br>
... 02 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Client Quit] <br>
... 02 &lt; bobchao&gt; softcup: (伸） <br>
... 03 -!- D-eye [~d-eye2@42-76-36-138.dynamic-ip.hinet.net] has joined #mopcon <br>
... 04 &lt; softcup&gt; <a href="http://paste.plurk.com/show/2KRWWh2rby3bU2zUpG1l/">http://paste.plurk.com/show/2KRWWh2rby3bU2zUpG1l/</a> <br>
... 04 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 05 &lt; bobchao&gt; softcup: thanks! <br>
... 06 &lt; softcup&gt; bobchao: ^_^ <br>
... 07 &lt; softcup&gt; 很多沒記錄到，等簡報檔吧 <br>
... 07 &lt; bobchao&gt; softcup: 大部分的研討會都是第二天比較少人耶，這可能跟「免費」有點關係就是 <br>
... 07 -!- chusiang [~jonny@180.217.20.20] has joined #mopcon <br>
... 07 &lt; chusiang&gt; bobchao: <a href="https://raw.github.com/chusaing/irc_log/master/mopcon/irc-mopcon-20121028.log">https://raw.github.com/chusaing/irc_log/master/mopcon/irc-mopcon-20121028.log</a> <br>
... 08 &lt; chusiang&gt; 不過這個 LOG 只有到 10:00 的 XDD <br>
... 08 -!- chusiang [~jonny@180.217.20.20] has quit [Client Quit] <br>
... 09 &lt; bobchao&gt; passbook - geolocation awareness, time alert, 動態換資訊 （接近機場 - show 資訊 - 改登機門資訊時自動更新資料等) <br>
... 09 &lt; bobchao&gt; chusiang: thanks! <br>
... 09 &lt; ChuSiang_s3&gt; 慘，得收心了。 <br>
... 09 &lt; softcup&gt; bobchao: 免費也不能這樣，覺得浪費主辦者的心血 <br>
... 09 &lt; bobchao&gt; softcup: 嗯 不過這真的是常見的狀況就是了 <br>
... 09 &lt; ChuSiang_s3&gt; shawn 有去嘛!? <br>
... 10 &lt; softcup&gt; bobchao: 了解 <br>
... 10 &lt; bobchao&gt; 也會有很多人報名不到的 所以我們一般都估 7-8 成，也就是會「超賣」 <br>
... 10 &lt; ChuSiang_s3&gt; 怎麼了!? 今日去的人變少了 <br>
... 10 &lt; bobchao&gt; （所以像今年 coscup 報到率上升的後果就是座位炸開... 雖然也是因為少一個交誼廳換人數比較少的 workshop） <br>
... 11 &lt; softcup&gt; 不曉得小會議室的狀況，就海景來說少了許多 <br>
... 11 &lt; ChuSiang_s3&gt; 嗯嗯 <br>
... 11 &lt; bobchao&gt; softcup: 小會議室 21 人，大概坐 3/5 <br>
... 11 &lt; softcup&gt; 家後，小三。攜手並進，擁抱未來 <br>
... 12 &lt; softcup&gt; 海景大約坐了 1/2 <br>
... 12 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 12 &lt; Marcus_&gt; 開始了！ <br>
... 12 &lt; Marcus_&gt; 開始了 <br>
... 12 &lt; softcup&gt; Demo..... <br>
... 13 &lt; RJ_&gt; XDDDDD <br>
... 13 &lt; softcup&gt; 七秒...Orz <br>
... 13 &lt; softcup&gt; Single Server <br>
... 13 &lt; softcup&gt; All-in-one <br>
... 13 &lt; bobchao&gt; mikimoto 這場目前是在講實作，我想我後面的設計師聽起來應該有點苦手 <br>
... 13 &lt; softcup&gt; 伺服器農場 <br>
... 14 &lt; softcup&gt; 網路拓樸 - 馬甲 <br>
... 14 &lt; softcup&gt; Backup <br>
... 14 &lt; softcup&gt; tar zcvf ..... <br>
... 14 &lt; softcup&gt; DAS <br>
... 14 &lt; softcup&gt; NAS <br>
... 15 &lt; Derekhsu&gt; 看到馬甲就想要拉開 <br>
... 15 &lt; bobchao&gt; 有趣的想法：如果研討會會場有很多小圓桌 讓有興趣詳談的合作夥伴可以坐下來談 <br>
... 15 &lt; softcup&gt; Remote backup <br>
... 15 &lt;@Aminzai&gt; Over18....XDDD <br>
... 15 &lt; bobchao&gt; 不曉得能不能更促成什麼 <br>
... 15 &lt; hlb&gt; bobchao: 有設計師來參加？ <br>
... 15 &lt; softcup&gt; redundent network <br>
... 15 &lt; softcup&gt; 看來要去聽小會議室的 <br>
... 15 &lt; bobchao&gt; hlb: yup <br>
... 15 &lt; softcup&gt; DR site <br>
... 16 &lt; softcup&gt; Disaster Recovery <br>
... 16 &lt; softcup&gt; == New Age == <br>
... 16 &lt; softcup&gt; 雲 <br>
... 16 &lt; bobchao&gt; hlb: 因為她剛剛問我 IRC 是什麼 才知道的 <br>
... 16 &lt; hlb&gt; 那來報 fire.app lightning talk <br>
... 16 &lt; softcup&gt; 像核彈雲 <br>
... 16 &lt; softcup&gt; Server site 轉換苦哈哈 <br>
... 17 &lt; bobchao&gt; hlb: 我想她應該不是你想的那種設計師，可能還是偏視覺跟體驗設計 <br>
... 17 &lt; softcup&gt; Tier 1-4 <br>
... 17 &lt; bobchao&gt; 不過沒什麼不好 <br>
... 17 &lt; bobchao&gt; mikimoto 講蠻細的，現在是 passbook 的 layout <br>
... 17 &lt; softcup&gt; 除此之外，還要把服務移來移去 <br>
... 18 &lt; hlb&gt; 視覺設計師好阿 <br>
... 18 &lt; bobchao&gt; hlb: then that would be nice :) <br>
... 18 &lt; softcup&gt; 轉換 VMs <br>
... 19 &lt; softcup&gt; == 服務/軟體開發 == <br>
... 19 -!- CQD [~cqd@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 19 &lt; softcup&gt; 以前 2 tier <br>
... 19 &lt; softcup&gt; 現在 3 .. N tier <br>
... 20 &lt; softcup&gt; CQD: 早啊！ <br>
... 20 &lt; CQD&gt; 睡過頭了 XD <br>
... 20 &lt; softcup&gt; 以前 Modulize <br>
... 20 &lt; Derekhsu&gt; 我昨天吃太多，早上狂拉肚子 <br>
... 21 &lt; softcup&gt; 現在...還是看圖吧～ <br>
... 21 &lt; xdite&gt; 我今天有帶 burn rate 在身上 有誰想要中午休息時間一起玩? XD <br>
... 21 &lt; softcup&gt; 以前 pass/share 資料 <br>
... 22 &lt; Derekhsu&gt; 有分工程師，經理那個？ <br>
... 22 &lt; softcup&gt; return, unix-socket <br>
... 22 &lt; softcup&gt; 現在 pub/sub <br>
... 22 &lt; CQD&gt; burn rate 好玩，雖然上次玩是好幾年前了.... <br>
... 23 &lt; softcup&gt; 起前 wile <br>
... 23 &lt; softcup&gt; while <br>
... 23 &lt; softcup&gt; 現在 event base <br>
... 23 &lt; bobchao&gt; passbook 要加簽（想當然），有版本制。簽完以後用任何檔案傳輸方式進手機就行，更新上則是設定檔內看 token 跟 webservice url <br>
... 24 &lt; bobchao&gt; xdite: 我前幾天在辦公室裡看到中文版耶 才知道有中文版 <br>
... 24 &lt; bobchao&gt; 翻譯還 ok <br>
... 24 &lt; Derekhsu&gt; 那個英文也很少啊 <br>
... 25 &lt; softcup&gt; == 救贖 == <br>
... 25 &lt; bobchao&gt; Derekhsu: 對 所以我覺得有中文版還挺神奇... <br>
... 25 &lt; softcup&gt; db 抽象層 <br>
... 26 &lt; xdite&gt; bobchao: 嗯。因為英文版全球賣斷貨了。（拜我當年勸敗所賜，全球存貨在當年一口氣賣光...） <br>
... 26 &lt; softcup&gt; 不用擔心機器多開 <br>
... 26 &lt; softcup&gt; 自動多開機器 <br>
... 26 &lt; softcup&gt; 線上編輯 <br>
... 26 &lt; ericpi&gt; aaa <br>
... 26 &lt; bobchao&gt; xdite: 賀, 可惜沒有談抽成 <br>
... 26 &lt; softcup&gt; 存檔立即 apply <br>
... 26 &lt; bobchao&gt; XD <br>
... 26 &lt; xdite&gt; 所以台灣自己去談版權自己印.... <br>
... 26 -!- ChuSiang_s3 [~ChuSiang_@42-78-136-198.dynamic-ip.hinet.net] has quit [Quit: Bye] <br>
... 26 &lt; xdite&gt; bobchao: 有啊。我自己跟廠商批了兩百套來賣 XDDDDD <br>
... 26 &lt; softcup&gt; ImonCloud --自己看圖 <br>
... 27 &lt; xdite&gt; 所以我現在也是桌遊經銷商了 XD <br>
... 27 &lt; bobchao&gt; xdite: XDDDDDDDDD <br>
... 27 &lt; softcup&gt; xdd <br>
... 27 &lt; Derekhsu&gt; Burn rate對工程師來說還滿有趣的 <br>
... 27 &lt; bobchao&gt; mikimoto 這場真的是教學 XD 其實還是講蠻細的 <br>
... 28 &lt; softcup&gt; 我後悔了，我對小會議室的內容比較感興趣 <br>
... 28 &lt; bobchao&gt; softcup: you still have chance :P <br>
... 28 &lt; bobchao&gt; softcup: also 我有看到他們錄影 <br>
... 28 &lt; softcup&gt; 嗯嗯 <br>
... 29 &lt;@Aminzai&gt; BlueT好像變瘦了= =a <br>
... 29 &lt;@Aminzai&gt; 傳說中的肚子不見了@@ <br>
... 30 &lt; bobchao&gt; PKPass 的東西直接看文件就好 <br>
... 30 &lt; softcup&gt; == Problem == <br>
... 30 &lt; softcup&gt; API <br>
... 31  * bobchao 突然發現這是第一次跟軟杯同場參加一個研討會耶！ <br>
... 32 &lt; hlb&gt; 其實可以用 passbook 玩大逃殺 <br>
... 32 &lt; softcup&gt; bobchao: 是嗎？？ (不會丟私人訊息) <br>
... 33 &lt; hlb&gt; 每人一個 pass 定時更新位置 <br>
... 33 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 33 &lt; softcup&gt; Query String <br>
... 33 &lt; softcup&gt; RESTful <br>
... 33 &lt; softcup&gt; all in GET url <br>
... 33 &lt; hlb&gt; 接近5m會告訴你被盯上了 <br>
... 33 &lt; softcup&gt; HTTP Method <br>
... 35 &lt; bobchao&gt; hlb: 這似乎是很不利於 snipper 的設計 XDDD <br>
... 35 &lt; bobchao&gt; sniper <br>
... 36 -!- FrankWu [722a4b57@gateway/web/freenode/ip.114.42.75.87] has quit [Quit: Page closed] <br>
... 36 &lt; softcup&gt; Protocol <br>
... 36 &lt; softcup&gt; HTTP <br>
... 36 &lt; softcup&gt; Comet <br>
... 36 &lt; Derekhsu&gt; 做成刺客教條多人對戰版的那種 <br>
... 36 &lt; softcup&gt; Speedy <br>
... 36 &lt; softcup&gt; WebSocket <br>
... 36 &lt; softcup&gt; Socket <br>
... 36 &lt; softcup&gt; Scalibility <br>
... 36 &lt; softcup&gt; Simgle Server <br>
... 37 &lt; softcup&gt; Global <br>
... 37 &lt; softcup&gt; DNS, CDN <br>
... 37 &lt; Derekhsu&gt; 病毒碼就是透過CDN delivery <br>
... 38 &lt; bobchao&gt; 會場拿 ?Pad 的人也太. 多. 了. 吧? <br>
... 38 &lt; softcup&gt; Data sharding/partitioning/segment <br>
... 39 &lt; Derekhsu&gt; 我剛剛看到一個可以用筆的pad <br>
... 39 &lt; CQD&gt; 講到這個，不知道有沒有辦法透過 wifi 統計 device 分佈？ <br>
... 39 &lt; Derekhsu&gt; 看不出來是哪一家的，可以跑desktop的chrome <br>
... 39 &lt; softcup&gt; CQD: 靠你了 <br>
... 40 &lt; ericpi&gt; CQD: 加油! <br>
... 40 &lt; bobchao&gt; CQD 似乎可行? <br>
... 40 &lt; bobchao&gt; Derekhsu: 我剛有看到 不過以為他是開 VNC 那類的東西 <br>
... 40 &lt; bobchao&gt; 因為選單太小了 <br>
... 40 &lt; bobchao&gt; （但不確定） <br>
... 41 &lt; Derekhsu&gt; 是嗎，我覺得好神 <br>
... 41 &lt; ericpi&gt; 有 live demo 時間就一定夠啊 <br>
... 41 &lt; ericpi&gt; XD <br>
... 41 -!- locy69 [~ubuntu@ec2-175-41-249-217.ap-northeast-1.compute.amazonaws.com] has joined #mopcon <br>
... 41 &lt; softcup&gt; xPad 有所謂的遠端桌面 <br>
... 41 &lt; Derekhsu&gt; 話說，老虎好像又要被完封了 <br>
... 41 &lt; CQD&gt; 正道大概是弄個網頁跪求大家去連然後做統計... <br>
... 41 &lt; softcup&gt; 我有用過還不錯 <br>
... 41 &lt; Derekhsu&gt; 那不是iPad <br>
... 42 &lt; CQD&gt; 在 gateway 用 sniffer 聽的話大概會被打吧[默] <br>
... 42 &lt; bobchao&gt; softcup: 我 iPad 上是有裝一些遠端桌面軟體，Android 手機上也有裝，應該是都有類似 VNC 的東西這樣 <br>
... 43 &lt; bobchao&gt; passbook 是不是只有 iPhone 有啊 <br>
... 43 &lt; softcup&gt; bobchao: iPad 我有用過的是使用微軟的遠端桌面協定 <br>
... 43 &lt; bobchao&gt; iPad 好像沒有 <br>
... 43 &lt; Derekhsu&gt; iPad <br>
... 43 &lt; Derekhsu&gt; 有很多這種東西 <br>
... 43 &lt; softcup&gt; 在區網用還蠻順的 <br>
... 43 &lt; softcup&gt; VNC 我就沒用了，我覺得效能比較差 <br>
... 43 &lt; bobchao&gt; 我錯了我應該兩句連在一起打： <br>
... 44 &lt; bobchao&gt; passbook 是不是只有 iPhone 有啊？iPad 好像沒有 <br>
... 44 &lt; Marcus_&gt; 我旁邊那位拿的是跑純 Windows 的 平板電腦 <br>
... 44 &lt; Derekhsu&gt; RDP好多了 <br>
... 44 &lt; Derekhsu&gt; 但是那個CHROME <br>
... 44 &lt; bobchao&gt; 我要去隔壁囉！ <br>
... 44 &lt; bobchao&gt; 這邊結束了 <br>
... 44 &lt; Derekhsu&gt; 很順還能用手推 <br>
... 45 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 45 &lt; CQD&gt; Win8 RT? <br>
... 45 -!- CQD [~cqd@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 45 &lt; Derekhsu&gt; 那也太快拿到了 <br>
... 47 &lt; Marcus_&gt; 不是，跑 windows 7的 <br>
... 48 &lt; softcup&gt; Win7 有這麼好的效能嗎？ <br>
... 49 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 255 seconds] <br>
... 49 -!- D-eye [~d-eye2@42-76-36-138.dynamic-ip.hinet.net] has quit [Ping timeout: 276 seconds] <br>
... 50 -!- D-eye [~d-eye2@117.19.22.184] has joined #mopcon <br>
... 54 -!- CQD [~cqd@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 54 -!- RJ_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Quit: Page closed] <br>
... 55 -!- RJ_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 57 -!- Marcus_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 58 -!- Marcus [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Quit: Page closed]
</p>

<p class='phone'>
11: 01 -!- Marcus [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 02 -!- Derek_ [~derekhsu@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 02 &lt; softcup&gt; 會議開始 <br>
... 02 &lt; softcup&gt; KKBOX <br>
... 03 &lt; softcup&gt; == Mobile Platform == <br>
... 03 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Quit: Page closed] <br>
... 03 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 04 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 05 &lt; softcup&gt; Reliability <br>
... 05 &lt; softcup&gt; Speed <br>
... 05 &lt; softcup&gt; Latency <br>
... 05 &lt; xdite&gt; DK 叫我不要聽他演講。然後塞了一套十萬塊的音響設備強迫我聽...... <br>
... 06 &lt; ericpi&gt; 行動網路有可能到 500~600ms Latency <br>
... 06 &lt; softcup&gt; Device Part <br>
... 06 &lt; softcup&gt; It's much slower <br>
... 06 &lt; ericpi&gt; xdite: 那是他最近勸敗的神器吧 XD <br>
... 06 &lt; softcup&gt; 以續航力為主 <br>
... 06 &lt; hlb&gt; xdite: 啥東西一套 10 萬 :p <br>
... 06 &lt; xdite&gt; 他一直跟我說十萬塊很便宜 =_= <br>
... 07 &lt; softcup&gt; 十萬塊....Orz <br>
... 07 &lt; xdite&gt; 耳機 64000 輸出設備 40000 多 <br>
... 07 &lt; Derekhsu&gt; 高級音響有到百萬級的 <br>
... 07 &lt; ericpi&gt; 聆聽爽度無價 (誤 <br>
... 07 &lt; hechien&gt; .... 好貴 <br>
... 07 &lt; Derekhsu&gt; 所以會說10萬便宜吧 <br>
... 07 &lt; bobchao&gt; xdite: 原來你那耳機要 64000!!! <br>
... 07 &lt; softcup&gt; Client 的修改... <br>
... 07 &lt; bobchao&gt; （我在你斜後方 :P） <br>
... 08 &lt; xdite&gt; 他剛警告我千萬不要刮到..... <br>
... 08 &lt; ericpi&gt; Derekhsu: 耳機系統到十萬已經可以巴死幾十萬的音響了 <br>
... 08 &lt; softcup&gt; Server 的配合 <br>
... 08 &lt; bobchao&gt; 括一下便宜算你 2000 <br>
... 08 &lt; xdite&gt; 我忘記檢查上面有沒有預載刮痕 =_= <br>
... 08 &lt; softcup&gt; 預載..XDD <br>
... 08 &lt; ericpi&gt; xdite: 使用前先拍照存證 XD <br>
... 09 &lt; softcup&gt; 1 POST, 4 GET <br>
... 11 &lt; softcup&gt; Merge , 髒，但有效率 <br>
... 11 -!- Marcus [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Quit: Page closed] <br>
... 12 -!- Derek_ [~derekhsu@111-254-36-239.dynamic.hinet.net] has quit [Quit: Colloquy for iPad - <a href="http://colloquy.mobi">http://colloquy.mobi</a>] <br>
... 13 &lt; Derekhsu&gt; 每次API call要帶一個序號 <br>
... 13 &lt; softcup&gt; Operation with Strict-Increasing Serial <br>
... 14 -!- DOFI [~DOFI@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 15 &lt; softcup&gt; Client Post 後，網路中斷，Server 成功，但 Client 失敗 <br>
... 15 &lt; softcup&gt; Use databse to store the serial of each Device <br>
... 15 &lt; softcup&gt; Third Multiple Objects Design <br>
... 15 &lt; softcup&gt; Third, <br>
... 17 &lt; softcup&gt; 減少連線數量 <br>
... 17 &lt; softcup&gt; GET /song/1,2,.....20 <br>
... 17 -!- DOFI [~DOFI@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 18 &lt; softcup&gt; 設計 API，一開始就設計成支援取得多筆資料 <br>
... 18 &lt; hechien&gt; 剛抬起頭來看右前方發現xdite的耳機好大 .... Orz <br>
... 19 &lt; softcup&gt; 取得多筆與取單筆資料 API 並存時，最後大家只會用取得多筆的 API <br>
... 19 &lt; softcup&gt; Fourth, Filter Results <br>
... 19 -!- DOFI [~DOFI@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 20 &lt; hechien&gt; @dofi 你成功進來了？ <br>
... 20 &lt; hechien&gt; DOFI: 你成功進來了？ <br>
... 20 &lt; DOFI&gt; 怎看之前內容？ <br>
... 21 &lt; softcup&gt; Then.... <br>
... 21 &lt; hechien&gt; mikimoto: 有log可以看嗎這邊 <br>
... 21 &lt; DOFI&gt; IRC 超新手....Orz <br>
... 22 &lt; hechien&gt; mikimoto: 還有我轉不到Starbucks $ 3000 的pass ... QQ <br>
... 22 &lt; softcup&gt; GET /song/1,2,3....20/name ---&gt; Fourth <br>
... 22 &lt; softcup&gt; Fifth, Compression <br>
... 23 &lt; softcup&gt; JSON 的壓縮率超高 <br>
... 23 &lt; softcup&gt; 減少流量 <br>
... 23 &lt; softcup&gt; 減少用電量 <br>
... 24 &lt; softcup&gt; Sixth, Use Port 80 &amp; 443 <br>
... 24 &lt; softcup&gt; 防火牆擋很兇 <br>
... 25 &lt; hlb&gt; T_T <br>
... 27 &lt; softcup&gt; Server 支援 Byte Range <br>
... 27 -!- DOFI [~DOFI@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 27 &lt; softcup&gt; 好像記錯了，是 Client 支援 Byte Range <br>
... 27 -!- DOFI [~DOFI@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 28 &lt; softcup&gt; 盡量每個 API 做完一個整個事 <br>
... 29 &lt; softcup&gt; 專輯代碼，歌手，歌曲長度，歌曲名稱 <br>
... 29 &lt; BlueT_&gt; xdite: burn rate!! <br>
... 30 -!- DOFI_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 31 -!- nulll [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 31 &lt; BlueT_&gt; CQD: 有 # 10:39 &lt; CQD&gt; 講到這個，不知道有沒有辦法透過 wifi 統計 device 分佈？ <br>
... 31 &lt; CQD&gt; 乾淨的方法？ <br>
... 32 -!- DOFI_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has left #mopcon [] <br>
... 32 &lt; BlueT_&gt; CQD: wifi 韌體改一點點，然後一台 server 統計做三角定位，可以知道位置。（目前有個朋友在做） <br>
... 33 &lt; softcup&gt; Response Code <br>
... 33 &lt; softcup&gt; 在 Mobile 的環境上，會有奇奇怪怪的 Proxy <br>
... 33 &lt; BlueT_&gt; Aminzai: 我有瘦？ <br>
... 34 &lt; softcup&gt; 理論上 Server 傳什麼 Response Code, Client 應該就會收到 <br>
... 34 &lt; ericpi&gt; "xdite 你不要亂問問題啦" XD <br>
... 34 &lt;@Aminzai&gt; BlueT_: 感覺上是XDD <br>
... 35 &lt; hechien&gt; BlueT_: 你好壞，一看到我就說我變胖了Q_Q ... <br>
... 35 -!- jserv-- [~jserv@122-117-174-134.HINET-IP.hinet.net] has quit [Ping timeout: 264 seconds] <br>
... 35 &lt; RJ_&gt; XDDDDDDDD <br>
... 36 &lt; softcup&gt; Device uid <br>
... 36 &lt; softcup&gt; mac address <br>
... 37 &lt; softcup&gt; 勉勉強強可以用 mac address 來識別 Device <br>
... 37 -!- DOFI [~DOFI@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 240 seconds] <br>
... 37 &lt; BlueT_&gt; CQD: 要多乾淨？@@ 這沒有啥 hack 呀 XD 不然 AP 上可以看 mac <br>
... 37 &lt; CQD&gt; 啊，我想的是數量統計之類的 XD <br>
... 37 &lt; BlueT_&gt; Aminzai: 大謝 XDD *挺* （縮肚子） <br>
... 38 &lt;@Aminzai&gt; BlueT_: 你應該是酒喝比較少XDD <br>
... 38 &lt; CQD&gt; 用 sniffer 應該也是可以，不過這樣就比較髒一點....XD <br>
... 38 &lt; BlueT_&gt; CQD: sniffer 更髒吧 XDDDD <br>
... 38 &lt; CQD&gt; 是啊 <br>
... 39 &lt; xdite&gt; 這隻耳機真的好厲害 Q_Q <br>
... 39 &lt; CQD&gt; 我想到的乾淨做法是弄個網頁讓後跪求大家來連來讀 <br>
... 39 &lt; BlueT_&gt; CQD: 看你是 ap 擁有者，還是你是 wifi 使用者的角色 <br>
... 39 &lt; CQD&gt; 不過感覺有點麻煩，又想不到更好的做法 <br>
... 39 &lt; bobchao&gt; 目前 R1 的連續三個問題都是講者提的 XD <br>
... 40 &lt; bobchao&gt; xdite -&gt; hlb -&gt; cervantes <br>
... 41 &lt; bobchao&gt; DOFI: 要找別人要 log 喔 <br>
... 41 &lt; CQD&gt; 就算拿得到 AP ，好像也不能不聽資料來取得 device data？ <br>
... 41 &lt; CQD&gt; 啊，弄個「按一下以使用無線網路」好像可以混過去.....XD <br>
... 42 &lt; bobchao&gt; 「還有問題嗎？看起來沒有，那我們可以放飯了...」 <br>
... 42 &lt; BlueT_&gt; CQD: 你是 AP owner 的話，可以直接看 DHCP client 數呀 <br>
... 43 &lt;@Aminzai&gt; 放飯拉～～～～ <br>
... 43 &lt; CQD&gt; DHCP 可以看到「我是 iPad」「我是 Sensation」之類的裝置資訊嗎？ <br>
... 44 &lt; BlueT_&gt; CQD: 要看 client 有沒有丟出來 <br>
... 44 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 50 -!- nulll [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 57 -!- softcup_ [~softcup@111-254-36-239.dynamic.hinet.net] has joined #mopcon
</p>

<p class='phone'>
12: 01 &lt; hlb&gt; 寫好 lightning talk 投影片了 :p <br>
... 01 -!- softcup [~softcup@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 256 seconds] <br>
... 01 -!- ChuSiang_s3 [~ChuSiang_@42-78-136-198.dynamic-ip.hinet.net] has joined #mopcon <br>
... 03 &lt; ChuSiang_s3&gt; 午餐時間!? XDD <br>
... 05 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 05 -!- ChuSiang_s3 [~ChuSiang_@42-78-136-198.dynamic-ip.hinet.net] has quit [Quit: Bye] <br>
... 06 &lt; BlueT_&gt; hlb: 剛剛跟大大打招呼，大大沒認出我齁 XD <br>
... 12 -!- D-eye [~d-eye2@117.19.22.184] has quit [Ping timeout: 260 seconds] <br>
... 17 &lt; xdite&gt; BlueT_: 你變得跟當年很不一樣 XDDDD <br>
... 18 &lt; BlueT_&gt; xdite: 你說身材嗎.....（淚） <br>
... 24 -!- zeroplex [72219715@gateway/web/freenode/ip.114.33.151.21] has joined #mopcon <br>
... 31 &lt; hlb&gt; <a href="http://www.hpx-party.com/hpx-events/hp42">http://www.hpx-party.com/hpx-events/hp42</a> 也在高軟耶 O_O <br>
... 32 &lt; hlb&gt; BlueT_: @@ <br>
... 41 -!- zeroplex [72219715@gateway/web/freenode/ip.114.33.151.21] has quit [Quit: Page closed]
</p>

<p class='phone'>
13: 01 &lt; hlb&gt; 隔壁棟有游泳池！ <br>
... 08 &lt; hechien&gt; @O@ <br>
... 08 &lt; hechien&gt; 要錢的嗎 <br>
... 08 &lt; CQD&gt; 隔壁好像是痞子家... <br>
... 08 -!- funnycat [~chatzilla@114-137-36-175.dynamic.hinet.net] has quit [Read error: Connection reset by peer] <br>
... 17 -!- D-eye [~d-eye2@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 26 -!- funnycat [~chatzilla@114-137-36-175.dynamic.hinet.net] has joined #mopcon <br>
... 30 &lt; hlb&gt; 1F 的活動聲音可以傳到 12F :D <br>
... 30 -!- kewang [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 32 &lt; softcup_&gt; Orz <br>
... 32 &lt; softcup_&gt; HPX <br>
... 32 &lt; D-eye&gt; 到底是哪來的啦XD <br>
... 33 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 34 -!- softcup_ is now known as softcup <br>
... 34 &lt; hlb&gt; jserv 同時又是杏昕科技的研發掌 <br>
... 34 &lt; hlb&gt; 長 <br>
... 34 -!- irvin_ [~irvin@1.200.18.194] has joined #mopcon <br>
... 34 &lt; hlb&gt; jserv 同時到底有多少身分 XD <br>
... 34 &lt; Derekhsu&gt; 所以是兼差 <br>
... 35 &lt; Derekhsu&gt; 哪天當了總統我也不會太意外了 <br>
... 36 &lt; softcup&gt; 看到馬尾妹想去抓，也產生一堆生理訊號 <br>
... 36 &lt; Derekhsu&gt; 可以用來分析色狼 <br>
... 36 &lt;@Aminzai&gt; HRV耶！！ <br>
... 37 &lt;@mikimoto&gt; bobchao: PassBook 目前 iPad 還沒有，只有掌上型機種 iPhone, iPod Touch 有 <br>
... 37 &lt;@mikimoto&gt; 如果有 iOS6 的朋友，想玩早上 Demo 的 網址，網址在這裡： <a href="http://kaohsiung.cocoaheads.tw/PassBook/">http://kaohsiung.cocoaheads.tw/PassBook/</a> <br>
... 38 &lt; softcup&gt; Baby HRV monitor <br>
... 38 &lt;@Aminzai&gt; 1導程可以做這麼多嘛?@@a <br>
... 38 &lt;@mikimoto&gt; 轉到 3000 元的第一個朋友，我請喝咖啡一杯 XD <br>
... 39 &lt; Derekhsu&gt; 可以拿來當成關014的電子腳暸 <br>
... 39 &lt; softcup&gt; 壓力... <br>
... 39 &lt;@mikimoto&gt; xdite: 剛剛說的桌遊，之前看大大的 Blog 寫過，我有興趣耶，等一下找大大買 <br>
... 40 &lt;@mikimoto&gt; 過勞死 @_@ (抖) <br>
... 40 &lt; hlb&gt; mikimoto: 打開來改數值再存回去 :p <br>
... 40 &lt; Derekhsu&gt; 戰鬥力偵測器！！ <br>
... 41 &lt; xdite&gt; mikimoto: <a href="http://www.boardgamer.org/product_info.php?products_id=4025">http://www.boardgamer.org/product_info.php?products_id=4025</a> <br>
... 41 &lt; xdite&gt; 直接從這裡下吧。之前進的都賣光了 XD <br>
... 41 -!- jserv-- [~jserv@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 42 &lt; softcup&gt; 人快不行時，心跳越規律... <br>
... 42 &lt; Derekhsu&gt; 這樣就可以榨乾員工又不會把員工操死！太好了 <br>
... 44 &lt;@mikimoto&gt; hlb: 抓 source code 回來，自己改一改，要多少錢有多少錢 :p <br>
... 45 &lt; Derekhsu&gt; 這是NBA 2k真人版嗎 <br>
... 45 &lt;@mikimoto&gt; Cool, 電玩真人版耶 <br>
... 45 &lt; Derekhsu&gt; 這樣我們就能當鍵盤教練了 <br>
... 46 &lt;@mikimoto&gt; 可以透過鍵盤打指導球了 XD <br>
... 46 &lt; Derekhsu&gt; 我要拿去裝在正妹身上 <br>
... 46 &lt; softcup&gt; 不能打假球 <br>
... 46 &lt;@mikimoto&gt; 以後會不會被老婆強制裝上這個啊 (抖抖...) <br>
... 47 &lt; softcup&gt; 做在衣服上，以後被追蹤都不曉得了...Orz <br>
... 48 &lt;@mikimoto&gt; 這對上班還要監控在睡覺的女兒有沒有摔到床下，很好用耶，不過穩定度很重要 <br>
... 48 &lt; Derekhsu&gt; 這樣可以測試性侵犯 <br>
... 48  * jserv-- 正在 live debug &gt;_&lt; <br>
... 49 &lt;@mikimoto&gt; jserv--: ++, 加油加油 (搖旗吶喊) <br>
... 50 &lt; irvin_&gt; 腦波貓耳， <br>
... 50 &lt; Derekhsu&gt; 等一下會找人試驗偵測興奮嗎？ <br>
... 50 &lt; jserv--&gt; Derekhsu, 可以到 Acomo 的攤位試試看 <br>
... 51 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 51 &lt; xdite&gt; 被 DK 綁架只能一直聽音樂，不能聽 talk =_= <br>
... 52 &lt;@mikimoto&gt; 老婆生氣了... (驚), 可能不是趕快回家，而是去找朋友尋求庇護 <br>
... 53 &lt;@mikimoto&gt; Derekhsu: 怎麼偵測興奮，要跳鋼管嗎？ <br>
... 54 &lt; hechien&gt; xdite: 這是幸福還是 ... <br>
... 58 &lt; softcup&gt; 先生？ <br>
... 58 -!- irvin_ [~irvin@1.200.18.194] has quit [Remote host closed the connection]
</p>

<p class='phone'>
14: 00 &lt; softcup&gt; EKG <br>
... 01 &lt; softcup&gt; 三點即可偵測... <br>
... 02 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Quit: Page closed] <br>
... 02 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 02 &lt;@mikimoto&gt; 我比較想問的不是技術問題，而是怎麼 Do not do evil ? <br>
... 03 -!- Netsplit *.net &lt;-&gt; *.split quits: bobchao, CQD, @Aminzai <br>
... 03 -!- Netsplit *.net &lt;-&gt; *.split quits: BeataLin, ericpi <br>
... 04 &lt; Derekhsu&gt; 但我想問how to do evil <br>
... 05 &lt;@mikimoto&gt; Derekhsu: 你好壞 <br>
... 08 &lt; Derekhsu&gt; 時間應該撐夠了嗎？要demo了！ <br>
... 09 &lt;@mikimoto&gt; jserv--: 大神 live demo 開始 <br>
... 09 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 09 -!- Netsplit over, joins: BeataLin, ericpi <br>
... 10 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 11 &lt;@mikimoto&gt; 我想要買一套來 hack BlueT 兩週瘦 20 kg 的 source code :p <br>
... 11 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 12 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 13 &lt; softcup&gt; 塞尿布，用過即丟？ <br>
... 14 &lt; hlb&gt; 有尿布即時監控濕度 device 好像不賴 <br>
... 14 &lt;@mikimoto&gt; 有趣最重要 :p <br>
... 16 &lt; Derekhsu&gt; 原來是覺得高處不勝寒了 <br>
... 18 &lt;@mikimoto&gt; Mic 又被 hack 了 .... Q_Q <br>
... 19 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 19 &lt; irvin_&gt; Yeah <br>
... 20 -!- funnycat [~chatzilla@114-137-36-175.dynamic.hinet.net] has left #mopcon [] <br>
... 20 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 21 -!- jserv-- [~jserv@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 244 seconds] <br>
... 21 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Client Quit] <br>
... 21 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 22 -!- CQD [~cqd@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 23 &lt; irvin_&gt; @@ <br>
... 24 &lt; hechien&gt; irvin_: 一樓的XD <br>
... 30 -!- ccn [~ccn@staff.kkbox.com.tw] has joined #mopcon <br>
... 33 -!- jserv-- [~jserv@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 33 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 34 &lt; bobchao&gt; 我又跳出去啦 我又跳回來啦 打我啊 CQD <br>
... 34 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 34 &lt; Derekhsu&gt; 有人在隔壁嗎 <br>
... 34 -!- poying [~poying@114-32-168-136.HINET-IP.hinet.net] has joined #mopcon <br>
... 35 &lt; bobchao&gt; 我在 sleepnova <br>
... 35 &lt;@mikimoto&gt; 沒想到我昨天打趣說要把 HPX 搬到樓上，結果居然 Mic 被 hack 了 <br>
... 36 &lt; jserv--&gt; 頑皮豹 CEO 上台 <br>
... 36 &lt;@mikimoto&gt; 看來不能隨便向宇宙下訂單 <br>
... 36 -!- funnycat [~chatzilla@114-137-36-175.dynamic.hinet.net] has joined #mopcon <br>
... 37 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 37 &lt; softcup&gt; 麥克風沒聲音 <br>
... 37 &lt; softcup&gt; 2012 東森大選即時開票 <br>
... 38 &lt; softcup&gt; Windows Mobile 使用者佔不到 0.5% <br>
... 38 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Client Quit] <br>
... 38 &lt; softcup&gt; 忽略不管 <br>
... 38 &lt;@mikimoto&gt; 忽略不管++ <br>
... 38 &lt; jserv--&gt; 只用一天的服務！ <br>
... 39 -!- Derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 39 &lt; softcup&gt; 壓力測試...XD <br>
... 40 &lt;@mikimoto&gt; 你永遠不知道那天會有多少人，所以我們以後的雲端服務要直接估算 2000 萬人嗎？ :p <br>
... 40 &lt; bobchao&gt; XD <br>
... 40 &lt; softcup&gt; 2200 萬次讀取 <br>
... 41 &lt; softcup&gt; &gt; 100 萬造訪 <br>
... 41 &lt; softcup&gt; 流量 60GB <br>
... 41 -!- Marcus [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 41 &lt; softcup&gt; 平均回應時間 100ms <br>
... 41 &lt;@mikimoto&gt; 2200 萬，全台差不多就這個人數 XDDD <br>
... 42 &lt; Derekhsu&gt; 沒看到人打字 <br>
... 42 &lt; softcup&gt; 平均 30000/5min <br>
... 42 &lt; softcup&gt; 實價登錄 <br>
... 43 &lt;@mikimoto&gt; 3000/5 min <br>
... 43 &lt; softcup&gt; 查詢量大暫時關閉...Xd <br>
... 43 &lt; softcup&gt; 3000 / 5min <br>
... 43 -!- Netsplit *.net &lt;-&gt; *.split quits: Marcus, BeataLin, Derekhsu, kewang, RJ_, ericpi, xdite, jimmy_, CQD <br>
... 44 &lt;@mikimoto&gt; 有很大的進步空間，真客氣 <br>
... 44 &lt; jserv--&gt; 「我就知道」好威 <br>
... 44 &lt; jserv--&gt; 請講者說話不要太含蓄 @_@ <br>
... 45 &lt; softcup&gt; 雲深不知處 <br>
... 46 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 47 &lt; softcup&gt; 目標：開發高品質的 App <br>
... 47 &lt; softcup&gt; 麥克風有噪音 <br>
... 47 &lt; bobchao&gt; freenode 好像出了什麼問題... 大家現在連線有可能連到「不同的 #mopcon」 <br>
... 47 -!- CQD [~cqd@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 47 &lt; jserv--&gt; 不讓你上 <br>
... 48 &lt; CQD&gt; 人家要上嘛... <br>
... 48 &lt; bobchao&gt; 三不五時會進入異空間這樣 <br>
... 48 &lt; jserv--&gt; 「客戶通常不知道自己在幹嘛」 <br>
... 48 &lt; irvin_&gt; 上了不同的雲了 <br>
... 48 &lt; CQD&gt; 好像有不止一個平行世界，最少三個. <br>
... 48 -!- carrl [~carl@61-64-164-206-adsl-tai.STATIC.so-net.net.tw] has joined #mopcon <br>
... 48 -!- ericpi [~eric@staff.kkbox.com.tw] has joined #mopcon <br>
... 48 -!- BeataLin [~BeataLin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 48 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 48 -!- kewang [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 48 -!- RJ_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 48 -!- xdite [~Kydd@60.199.208.208] has joined #mopcon <br>
... 48 &lt;@mikimoto&gt; 所以 MOPCON 現場是時空交錯點，有平行空間想 hack 我們嗎？ <br>
... 49 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 49 -!- 19WAAE9B2 [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 49 &lt; hechien&gt; 隔壁怎麼了@@ <br>
... 49 &lt; jserv--&gt; 跟智商有關 <br>
... 49 &lt; softcup&gt; 講者說，這個智商一定有問題 <br>
... 50 -!- 19WAAE9B2 [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Client Quit] <br>
... 50 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 50 &lt;@mikimoto&gt; 講者終於放開來了？ <br>
... 50 &lt; softcup&gt; App  做得 perfect <br>
... 50 &lt; hechien&gt; Orz <br>
... 50 &lt; softcup&gt; Google 不准上架 <br>
... 50 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 50 &lt; softcup&gt; 東西給了約都還沒簽 <br>
... 50 &lt;@mikimoto&gt; 東西都給了約還沒簽，我怎麼覺得這畫面很寫實？ <br>
... 51 -!- Derek_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 51 &lt; xdite&gt; 為什麼不先簽約呢...? <br>
... 51 &lt; Derek_&gt; 終於進來了 <br>
... 51 &lt; softcup&gt; 顧問費 VS 實作費的差異 <br>
... 51 -!- zeroplex [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 51 &lt; Derek_&gt; 隔壁在說甚麼 <br>
... 51 &lt;@mikimoto&gt; xdite: 台灣的工程師太有人情味？ <br>
... 51 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 51 &lt; bobchao&gt; mikimoto: 原來麥克風的雜音就是徵兆 <br>
... 51 &lt; hechien&gt; Derek_: 小廳在講雲端 <br>
... 52 &lt; softcup&gt; 兩個禮拜要送審 <br>
... 52 &lt; softcup&gt; 裝置問題 <br>
... 52 &lt; softcup&gt; 記得一堆裝置給你.. <br>
... 52 &lt;@mikimoto&gt; bobchao: 原來如此，發現徵兆了，下一個是帝國大反攻 XDDD <br>
... 52 &lt; softcup&gt; s/記得/寄了 <br>
... 53 &lt; jserv--&gt; 又是智商有問題 <br>
... 53 &lt;@mikimoto&gt; 又是智商有問題++ <br>
... 53 &lt; hechien&gt; micloud <br>
... 53 &lt; softcup&gt; 第三方 store issue <br>
... 53 &lt; Derek_&gt; 應該是三星或某isp吧 <br>
... 53 &lt; softcup&gt; 案例三....密 <br>
... 53 &lt; bobchao&gt; RJ_: 幫我問一下強哥要不要報 lightning talk <br>
... 53 &lt; softcup&gt; 為什麼你們比別人貴？ <br>
... 54 &lt; bobchao&gt; RJ_: 報他的 COSCO XD <br>
... 54 &lt; softcup&gt; Web app in a Webview <br>
... 54 &lt; softcup&gt; ? vs 雞腿 <br>
... 55 &lt; softcup&gt; Android 多版本 <br>
... 55 &lt;@mikimoto&gt; Andorid 開發者超級辛苦 <br>
... 56 &lt; softcup&gt; 螢幕 size 非常多 <br>
... 56 -!- jimmy_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 56 &lt; softcup&gt; 又一個打十個 <br>
... 56 -!- legist [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 56 &lt; softcup&gt; 你是被打的那個 <br>
... 57 &lt; softcup&gt; 你以為你在創新，其實是在代工 <br>
... 58 &lt; bobchao&gt; 一天一App <br>
... 58 &lt; bobchao&gt; 這好炫 XD <br>
... 58 &lt; softcup&gt; 做 app -&gt; 做網頁 <br>
... 58 &lt; softcup&gt; 雲端 -&gt; 末端 <br>
... 59 &lt; Derek_&gt; 對Ezo的評價真高 <br>
... 59 &lt; BlueT_&gt; hlb: 外面風景真的很好 :D <br>
... 59 &lt; softcup&gt; 藍海 -&gt; 紅海 <br>
... 59 &lt; softcup&gt; 解決問題 -&gt; 瓜分預算 <br>
... 59 &lt; Derek_&gt; 時空重疊了
</p>

<p class='phone'>
15: 00 &lt; Derek_&gt; 雲端也有很多主題 <br>
... 00 &lt; softcup&gt; 回歸產品價值 <br>
... 00 &lt; jserv--&gt; 「我現在可能先回去作 Web」 <br>
... 01 &lt; jserv--&gt; 本日最經典 <br>
... 01 &lt; BlueT_&gt; xdite: 中午有開團嗎？怎麼沒看到 @@  # burn rate <br>
... 01 &lt; softcup&gt; 什麼？結束了？ <br>
... 01 &lt; Derek_&gt; 沒人在隔壁哦 <br>
... 02 &lt; hechien&gt; Derek_: 呃，有 <br>
... 03 &lt; Derek_&gt; 有什麼keyword嗎 <br>
... 03 &lt; BlueT_&gt; mikimoto: 兩週瘦快 10kg 啦 XD 只要天天睡在潮濕的床、枕頭、棉被上，發燒 41 度連續一週，就可以完成了！ # 14:11 &lt;@mikimoto&gt; 我想要買一套來 hack BlueT 兩週瘦 20 kg 的 source code :p <br>
... 03 &lt; xdite&gt; BlueT_: 我被抓著聽耳機無法跑.... <br>
... 03 &lt; hechien&gt; Derek_: micloud &amp; nodejs可以算是嗎XD <br>
... 03 &lt; bobchao&gt; BlueT_: 真好，還提供 source code <br>
... 03 &lt; Derek_&gt; 我用半年才瘦17kg <br>
... 03 &lt; hechien&gt; 準備進行demo了 ... <br>
... 04 &lt; bobchao&gt; #天天睡在潮溼的床... etc. <br>
... 04 &lt; Derek_&gt; Micloud我沒聽過 <br>
... 04 &lt; hechien&gt; Derek_: <a href="http://portal.micloud.tw/">http://portal.micloud.tw/</a> <br>
... 04 &lt; BlueT_&gt; mikimoto: 應該至少要 c10k # 14:39 &lt;@mikimoto&gt; 你永遠不知道那天會有多少人，所以我們以後的雲端服務要直接估算 2000 萬人嗎？ :p <br>
... 05 &lt; hechien&gt; Derek_: 主要是在說服務跑在雲端上的好處 <br>
... 05 &lt; Derek_&gt; 我跑來了 <br>
... 05 &lt; BlueT_&gt; softcup: 你在 Caesar 的場？ <br>
... 05 &lt; softcup&gt; 沒... <br>
... 06 &lt; softcup&gt; 在 sleepnova <br>
... 06 &lt; BlueT_&gt; # 14:42 &lt; softcup&gt; 3000 / 5min <br>
... 08 &lt; softcup&gt; BlueT_: 這個是實價登錄系統的 <br>
... 08 &lt; hlb&gt; BlueT_: 有報 lightning talk 了嗎 <br>
... 08 &lt; Derek_&gt; 政府做的東西，不用太期待 <br>
... 09 &lt; hechien&gt; <a href="http://211.78.255.47/">http://211.78.255.47/</a> <br>
... 09 &lt; hechien&gt; 請隔壁廳一起連看看 (誤 <br>
... 10 &lt; BlueT_&gt; hechien: Caesar 在講 micloud? <br>
... 11 &lt; hechien&gt; BlueT_: 有看到 <br>
... 11 &lt; BlueT_&gt; bobchao: 我還提供客製化 solution 喔！ XD <br>
... 11 -!- zeroplex [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Quit: Page closed] <br>
... 11 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 11 &lt; bobchao&gt; BlueT_: 真開心 但 Bug 要解一下... XD <br>
... 11 &lt; jserv--&gt; 布丁長輩！ <br>
... 11 -!- funnycat [~chatzilla@114-137-36-175.dynamic.hinet.net] has quit [Ping timeout: 248 seconds] <br>
... 11 -!- zeroplex [72219715@gateway/web/freenode/ip.114.33.151.21] has joined #mopcon <br>
... 12 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 12 &lt; bobchao&gt; BlueT_: "發燒 41 度連續一週" 這邊可能要依個人體質不同寫成設定檔比較好 （炸飛） <br>
... 12 -!- funnycat [~chatzilla@223-138-53-195.dynamic.hinet.net] has joined #mopcon <br>
... 13 &lt; hechien&gt; bobchao++ <br>
... 13 -!- zeroplex [72219715@gateway/web/freenode/ip.114.33.151.21] has quit [Client Quit] <br>
... 13 &lt; BlueT_&gt; softcup: 實價登錄系統？抱歉剛才沒在會議廳內 Orz <br>
... 13 -!- Derek_ [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Quit: Page closed] <br>
... 14 &lt; BlueT_&gt; hlb: 演講不做廣告，改成 LT 打廣告嗎？XDDD <br>
... 15 &lt; BlueT_&gt; bobchao: 我相信我現在智商變低一定是那時燒壞的 <br>
... 18 -!- RoyLee [df8da79a@gateway/web/freenode/ip.223.141.167.154] has joined #mopcon <br>
... 19 -!- funnycat_ [~chatzilla@114-136-114-201.dynamic.hinet.net] has joined #mopcon <br>
... 20 -!- funnycat [~chatzilla@223-138-53-195.dynamic.hinet.net] has quit [Ping timeout: 265 seconds] <br>
... 20 -!- funnycat_ is now known as funnycat <br>
... 22 -!- carrl [~carl@61-64-164-206-adsl-tai.STATIC.so-net.net.tw] has left #mopcon [] <br>
... 27 -!- Marcus [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 27 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 28 -!- funnycat [~chatzilla@114-136-114-201.dynamic.hinet.net] has quit [Ping timeout: 244 seconds] <br>
... 28 -!- Marcus [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Client Quit] <br>
... 29 -!- funnycat [~chatzilla@114-137-32-29.dynamic.hinet.net] has joined #mopcon <br>
... 30 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 31 &lt; softcup&gt; Lightening Talk 開始.... <br>
... 31 &lt; hlb&gt; BlueT_: 報了沒啊... <br>
... 32 &lt; softcup&gt; 時間一樣是五分鐘 <br>
... 32 &lt; softcup&gt; 一分鐘時有人形立牌 <br>
... 33 &lt; softcup&gt; 時間到有語音提醒 <br>
... 33 -!- Aminzai [~Aminzai@li414-152.members.linode.com] has joined #mopcon <br>
... 33 &lt; softcup&gt; DOFI <br>
... 33 &lt; softcup&gt; App 1.0 文字 <br>
... 33 &lt; softcup&gt; app 2.0 windows <br>
... 33 &lt; softcup&gt; App 3.0 web base <br>
... 34 &lt; softcup&gt; Client <br>
... 34 &lt; softcup&gt; server <br>
... 34 &lt; softcup&gt; 3.0 重點分 client - server <br>
... 34 &lt; softcup&gt; 新一代架構 MVC <br>
... 35 &lt; hlb&gt; mvc 四十年了... 沒有很新啊 *_* <br>
... 35 &lt; BlueT_&gt; hlb: 你說今天早上沒成的 FPS 嗎？那不是我做的東西，我只是 3rd Party Service Provider XDDDD <br>
... 35 &lt; softcup&gt; XD <br>
... 35 &lt; softcup&gt; App 3.0 實力 <br>
... 35 &lt; softcup&gt; 實例 <br>
... 35 &lt; softcup&gt; Gmail <br>
... 36 &lt; softcup&gt; Web 2.0 <br>
... 36 &lt; softcup&gt; POS <br>
... 36 -!- derekhsu [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 36 &lt; softcup&gt; 點餐系統 <br>
... 36 &lt; softcup&gt; Demo <br>
... 36 &lt; hechien&gt; irvin_: 快上去寫題目 <br>
... 37 &lt; derekhsu&gt; 結果我又看不到了 <br>
... 37 &lt; Aminzai&gt; irvin_: 衝吧！ <br>
... 37 &lt; BlueT_&gt; hlb: and 他有報，不過現在還在趕工的樣子 @@ <br>
... 38 &lt; softcup&gt; 第二位... <br>
... 38 &lt; softcup&gt; RJ <br>
... 39 &lt; softcup&gt; 打廣告 <br>
... 39 &lt; softcup&gt; 半年一度 <br>
... 39 &lt; softcup&gt; Ubutu Release party <br>
... 40 &lt; softcup&gt; 北中南高各半一場  (打算) <br>
... 40 &lt; hlb&gt; 顧著聊天! <br>
... 40 &lt; BlueT_&gt; Ubuntu QQ!! <br>
... 41 &lt; softcup&gt; s/Ubutu/Ubuntu <br>
... 42 &lt; softcup&gt; 第三位... <br>
... 42 &lt; Aminzai&gt; 研討會==聊天會 <br>
... 42 &lt; BlueT_&gt; Ubuntu Release Party 分享者 我招待那餐 <br>
... 43 &lt; BlueT_&gt; 請大家踴躍來分享 XD <br>
... 43 -!- Netsplit *.net &lt;-&gt; *.split quits: bobchao, BeataLin, derekhsu, legist, kewang, RJ_, RoyLee, funnycat, ericpi, xdite <br>
... 43 &lt; softcup&gt; 大眼 <br>
... 43 &lt; BlueT_&gt; 又 net split 哭哭 <br>
... 43 &lt; softcup&gt; 結合手寫與注音 <br>
... 44 &lt; Aminzai&gt; 剛剛我就被split掉了（無言 <br>
... 44 &lt; softcup&gt; Zinnia Android 與 Google 注音倉頡輸入法 <br>
... 45 &lt; softcup&gt; 東撥一點西撥一點結合在一起 <br>
... 45 &lt; BlueT_&gt; 所以不只是要有多 server / datacenter 在世界各地，還要能讓所有資訊即時同步/轉送 <br>
... 45 &lt; softcup&gt; Demo <br>
... 46 -!- irvin__ [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 46 -!- irvin__ [~Thunderbi@111-254-36-239.dynamic.hinet.net] has left #mopcon [] <br>
... 47 &lt; softcup&gt; 全部有效的注音序列組合只有 1473  種 <br>
... 48 &lt; softcup&gt; 第四位 <br>
... 49 &lt; softcup&gt; 連轉接頭都準備好了 <br>
... 49 &lt; softcup&gt; App 行銷經驗談 <br>
... 49 &lt; hechien&gt; 結果 irvin_ 還在測試，最後的名額就被搶走了XD <br>
... 49 &lt; softcup&gt; XD <br>
... 49 &lt; BlueT_&gt; irvin_: 要講啥？ <br>
... 50 &lt; BlueT_&gt; hechien: irvin_ 要講啥？ <br>
... 50 &lt; hechien&gt; BlueT_: ThunderBird <br>
... 50 &lt; irvin_&gt; hechien: BlueT_ 等下一場XD <br>
... 50 &lt; softcup&gt; 製作網頁 <br>
... 50 &lt; softcup&gt; 製作影片 <br>
... 51 &lt; Aminzai&gt; <a href="https://github.com/babogoos/WritingZhuYin-IME-alpha">https://github.com/babogoos/WritingZhuYin-IME-alpha</a> <br>
... 51 &lt; softcup&gt; 社群網頁 <br>
... 51 &lt; softcup&gt; App 置入廣告 <br>
... 52 &lt; BlueT_&gt; hechien: 幫忙轉達一下 <br>
... 52 &lt; hechien&gt; BlueT_: 嗯？ <br>
... 52 &lt; BlueT_&gt; hechien: rsghost 要把時間讓給他 <br>
... 52 &lt; softcup&gt; 製作免費版 <br>
... 52 &lt; BlueT_&gt; hechien: 第七位 <br>
... 52 &lt; hechien&gt; BlueT_: ... 我把軟體刪掉了XDDDDDDDD <br>
... 52 &lt; irvin_&gt; BlueT_: @@ <br>
... 52 &lt; hechien&gt; irvin_: 你要衝嗎？ <br>
... 53 &lt; softcup&gt; 多國語言 <br>
... 53 &lt; BlueT_&gt; hechien: irvin_ : 還有 20  分鐘可以重裝，夠了 XD <br>
... 53 &lt; hechien&gt; irvin_: 要衝的話我就重新下載給你 <br>
... 53 &lt; softcup&gt; 買廣告 <br>
... 53 &lt; BlueT_&gt; hechien: 先下載吧 XD <br>
... 53 &lt; hlb&gt; 奇妙的心得分享 O_O <br>
... 53 &lt; softcup&gt; 媒體 <br>
... 53 &lt; BlueT_&gt; irvin_: 衝吧衝吧 XD <br>
... 53 &lt; irvin_&gt; hechien: BlueT_ 有時間就好啊 <br>
... 54 &lt; BlueT_&gt; irvin_: 現在第四位，你是第七位 <br>
... 54 &lt; hechien&gt; irvin_ 緊張得像是個 *待嫁的小姑娘* <br>
... 54 &lt; softcup&gt; irvin_: 衝啊～～ <br>
... 54 &lt; softcup&gt; 第五位 <br>
... 55 &lt; softcup&gt; Fire App <br>
... 55 &lt; softcup&gt; HTML Prototype <br>
... 56 &lt; BlueT_&gt; hechien: irvin_ : 我去跟主持人講囉 <br>
... 56 -!- irvin [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 56 -!- irvin [~Thunderbi@111-254-36-239.dynamic.hinet.net] has left #mopcon [] <br>
... 57 &lt; irvin_&gt; BlueT_: Okok <br>
... 57 &lt; irvin_&gt; Tks <br>
... 57 &lt; BlueT_&gt; hechien , irvin_ : 講了， Topic 是啥？要找人去改一下牆上那張紙 <br>
... 58 &lt; jserv--&gt; Conference-Driven Development <br>
... 58 &lt; BlueT_&gt; hlb: CDD *握* <br>
... 58 -!- D-eye [~d-eye2@111-254-36-239.dynamic.hinet.net] has quit [Read error: Connection reset by peer] <br>
... 59 &lt; BlueT_&gt; hlb: 我也是 OSDC / COSCUP / MOPCON 上新版 XD <br>
... 59 &lt; irvin_&gt; BlueT_: 等下我改吧XD <br>
... 59 &lt; softcup&gt; 第六位
</p>

<p class='phone'>
16: 00 &lt; irvin_&gt; 勞駕BlueTㄉㄉ幫我報名，惶恐惶恐 <br>
... 04 &lt; hlb&gt; 出現馬尾 <br>
... 04 -!- D-eye [~d-eye2@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 05 &lt; D-eye&gt; 為什麼Lighting Talk玩之後Ubuntu就Crush了 <br>
... 06 &lt; BlueT_&gt; irvin_: 有機會能幫大大報名，我都快閃尿了 <br>
... 06 &lt; hlb&gt; 之後還有什麼研討會呢 &gt;.&lt; <br>
... 06 &lt; BlueT_&gt; hlb: 我也想知道 <br>
... 07 &lt; BlueT_&gt; hlb: Ubuntu Release Party 要來分享嗎？ XD <br>
... 07 &lt; hlb&gt; BlueT_: 雖然 Fire.app 可以在 Ubuntu 底下跑，但是...... <br>
... 07 &lt; D-eye&gt; 所以為什麼RsGGG沒上台XDD <br>
... 07 &lt; jserv--&gt; 異次元 <br>
... 08 -!- irvinchen [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 08 &lt; Aminzai&gt; HI <br>
... 08 &lt; irvinchen&gt; yeah <br>
... 08 &lt; BlueT_&gt; hlb: 有任何過程式在 Ubuntu 上嗎？ <br>
... 08 &lt; jserv--&gt; irvinchen, 賀！ <br>
... 08 &lt; BlueT_&gt; yeah <br>
... 08 &lt; D-eye&gt; 媽我在這！ <br>
... 08 &lt; Aminzai&gt; 媽！我在這！0.0/ <br>
... 08 -!- cervantes [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 08 &lt; hlb&gt; YO! <br>
... 08 &lt; BlueT_&gt; 我是紅的我比較明顯 <br>
... 08 &lt; jserv--&gt; D-eye, 文件交出來 XD <br>
... 08 &lt; D-eye&gt; RedT <br>
... 08 &lt; BlueT_&gt; ThunderBird Rules!~ <br>
... 08 &lt; hlb&gt; BlueT_: 有啊，Fire.app/Compass.app XD <br>
... 08 -!- kewang [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 09 &lt; jserv--&gt; 原來是 Thunder IRC <br>
... 09 -!- kewang [~Thunderbi@111-254-36-239.dynamic.hinet.net] has left #mopcon [] <br>
... 09 &lt; hlb&gt; BlueT_: 還有專門給 Ubuntu 的 FAQ XD <a href="https://github.com/handlino/CompassApp/wiki/FAQ">https://github.com/handlino/CompassApp/wiki/FAQ</a> <br>
... 09 &lt; jserv--&gt; Otakun <br>
... 09 &lt; BlueT_&gt; hlb: anything related to ubuntu! XD <br>
... 10 &lt; hechien&gt; 媽我在這 (來不及了) <br>
... 10 -!- irvinchen [~Thunderbi@111-254-36-239.dynamic.hinet.net] has quit [Client Quit] <br>
... 10 -!- kewang [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 10 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 11 -!- kewang [~Thunderbi@111-254-36-239.dynamic.hinet.net] has left #mopcon [] <br>
... 11 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 11 &lt; BlueT_&gt; irvin_: welcome back! <br>
... 11 &lt; softcup&gt; 第八位 <br>
... 11 &lt; softcup&gt; App Store 統計  &gt; 50% 的遊戲 <br>
... 12 &lt; jserv--&gt; 人參啊 <br>
... 13 -!- RoyLee [~Thunderbi@223-141-167-154.dynamic.hinet.net] has joined #mopcon <br>
... 13 &lt; softcup&gt; 三比八法則 <br>
... 14 &lt; BlueT_&gt; hlb: 2012/12/01 <br>
... 14 &lt; softcup&gt; 第九位 <br>
... 14 &lt; Aminzai&gt; <a href="https://www.facebook.com/groups/kimugroup/">https://www.facebook.com/groups/kimugroup/</a> <br>
... 14 &lt; irvin_&gt; Thunderbird 輔助說明: 即時通訊與聊天  <a href="https://support.mozillamessaging.com/zh-TW/kb/instant-messaging-and-chat">https://support.mozillamessaging.com/zh-TW/kb/instant-messaging-and-chat</a> <br>
... 15 &lt; irvin_&gt; 都一個人講完了我才按到發送CD <br>
... 15 &lt; hlb&gt; BlueT_: XD <br>
... 15 &lt; irvin_&gt; 發送按鈕 <br>
... 15 &lt; softcup&gt; Evernote 的衣服 <br>
... 15 &lt; irvin_&gt; Startup Digest? <br>
... 16 &lt; Aminzai&gt; <a href="http://startupdigest.com/">http://startupdigest.com/</a> <br>
... 16 &lt; softcup&gt; 第十位 <br>
... 16 -!- Chu [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 17 &lt; hechien&gt; 這場是相聲吧 ... <br>
... 17 &lt; softcup&gt; 今年有 13 場 conf <br>
... 18 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 18 &lt; BlueT_&gt; 我之前就想找伴講兩人演講 XD <br>
... 18 &lt; hechien&gt; BlueT_: 這真的很有趣 <br>
... 19 -!- Netsplit over, joins: BeataLin <br>
... 19 &lt; jserv--&gt; 2013/02/03 <br>
... 19 &lt; jserv--&gt; Conference of Conference <br>
... 19 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 19 &lt;@mikimoto&gt; COSCO ^^ <br>
... 19 &lt; hlb&gt; 非程式碼貢獻者是什麼 @@ <br>
... 20 &lt; Aminzai&gt; <a href="https://docs.google.com/spreadsheet/viewform?formkey=dHFrd1ktbS1DZjhqTFdUMWRnbzdFTUE6MQ">https://docs.google.com/spreadsheet/viewform?formkey=dHFrd1ktbS1DZjhqTFdUMWRnbzdFTUE6MQ</a> <br>
... 20 &lt; softcup&gt; 第十一位 <br>
... 20 &lt; BlueT_&gt; hlb: pro motor (TM) <br>
... 20 &lt; jserv--&gt; hlb, contributor of non-code ? <br>
... 21 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 21 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has quit [Client Quit] <br>
... 21 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 22 &lt; jserv--&gt; Doom !!! <br>
... 22 &lt; irvin_&gt; &lt;- 不會寫程式的貢獻者 <br>
... 22  * jserv-- &lt;- 抓馬尾的貢獻者 <br>
... 22 &lt; softcup&gt; 程式註解...XD <br>
... 23 &lt;@mikimoto&gt; jserv--: 馬尾++ <br>
... 23 &lt; bobchao&gt; 我跟強哥的 slide: <a href="http://bit.ly/coscco_slides">http://bit.ly/coscco_slides</a> <br>
... 23 &lt; bobchao&gt; 有興趣可以看一下登記一下 <br>
... 23 &lt;@mikimoto&gt; bobchao: ++ <br>
... 25 &lt; softcup&gt; 我覺得 CQD 會被拔...XD <br>
... 25 &lt; hechien&gt; bobchao++ <br>
... 25 &lt; irvin_&gt; 期待期待！ <br>
... 25 &lt; hechien&gt; XD <br>
... 25 &lt; hlb&gt; 這兩天常常在投影片上看到 typo @@ <br>
... 26 -!- RoyLee [~Thunderbi@223-141-167-154.dynamic.hinet.net] has quit [Quit: RoyLee] <br>
... 26 &lt; softcup&gt; 這麼剛好... <br>
... 26 &lt; hechien&gt; 真的被拔了XD <br>
... 26 &lt; softcup&gt; 第十二位... <br>
... 27 -!- Chu [~Thunderbi@111-254-36-239.dynamic.hinet.net] has quit [Quit: Chu] <br>
... 27 &lt; softcup&gt; 台語場...XD <br>
... 27 &lt; D-eye&gt; 超強XDDDDD <br>
... 28 &lt; hechien&gt; 好奇妙的感覺XDDD <br>
... 28 &lt; CQD&gt; 台語超強 XDDDD <br>
... 29 &lt; Aminzai&gt; 台語好順XDD <br>
... 30 -!- ericpi [~eric@staff.kkbox.com.tw] has joined #mopcon <br>
... 30 -!- sleepnova [~wanpeebaw@111-254-36-239.dynamic.hinet.net] has joined #mopcon <br>
... 30 -!- 19WAAE9LC [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 30 -!- legist [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has joined #mopcon <br>
... 31 &lt; irvin_&gt; MOPCON繼掛耳包只挑後又破紀錄了 <br>
... 31 -!- bobchao [~Thunderbi@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 272 seconds] <br>
... 31 -!- xdite [~Kydd@60.199.208.208] has joined #mopcon <br>
... 31 -!- hechien [~hechien@120-114-142-2.ksu.edu.tw] has quit [Quit: Changing server] <br>
... 32 &lt; hlb&gt; T_T <br>
... 32 &lt; hlb&gt; 這個配樂... <br>
... 32 &lt; jserv--&gt; 穿得比較少的就是媒體記者啦 :P <br>
... 32 &lt; jserv--&gt; Touch me now! <br>
... 32 &lt; softcup&gt; 超多點心 <br>
... 33 &lt; hlb&gt; 真的超多點心 @@" <br>
... 33 &lt; D-eye&gt; 午餐很好吃XD <br>
... 33 -!- hechien [~hechien@120-114-142-2.ksu.edu.tw] has joined #mopcon <br>
... 34 -!- BeataLin [~BeataLin@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 34 -!- 19WAAE9LC [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Quit: Page closed] <br>
... 36 -!- CQD [~cqd@111-254-36-239.dynamic.hinet.net] has quit [Remote host closed the connection] <br>
... 37 -!- cervantes [~Thunderbi@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 255 seconds] <br>
... 38 -!- sleepnova [~wanpeebaw@111-254-36-239.dynamic.hinet.net] has quit [Quit: sleepnova] <br>
... 39 -!- D-eye [~d-eye2@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 260 seconds] <br>
... 39 -!- legist [6ffe24ef@gateway/web/freenode/ip.111.254.36.239] has quit [Ping timeout: 245 seconds] <br>
... 40 -!- softcup [~softcup@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 246 seconds] <br>
... 44 -!- Irvin [~irvin@1.200.18.194] has joined #mopcon <br>
... 45 -!- Irvin [~irvin@1.200.18.194] has quit [Client Quit] <br>
... 47 -!- jserv-- [~jserv@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 255 seconds] <br>
... 47 -!- irvin_ [~irvin@111-254-36-239.dynamic.hinet.net] has quit [Ping timeout: 252 seconds]
</p>

<p class='phone'>
17: 13 -!- poying [~poying@114-32-168-136.HINET-IP.hinet.net] has left #mopcon [] <br>
... 34 -!- Netsplit *.net &lt;-&gt; *.split quits: xdite, hechien, ericpi <br>
... 39 -!- Netsplit over, joins: hechien, xdite, ericpi <br>
... 45 -!- Netsplit *.net &lt;-&gt; *.split quits: ericpi <br>
... 45 -!- Netsplit *.net &lt;-&gt; *.split quits: xdite <br>
... 56 -!- Netsplit over, joins: ericpi <br>
... 56 -!- Netsplit over, joins: xdite
</p>

<p class='phone'>
18: 36 -!- softcup [~softcup@114-35-206-151.HINET-IP.hinet.net] has joined #mopcon <br>
... 51 -!- softcup [~softcup@114-35-206-151.HINET-IP.hinet.net] has quit [Ping timeout: 245 seconds]
</p>

<p class='phone'>
19: 09 -!- softcup [~softcup@114-35-206-151.HINET-IP.hinet.net] has joined #mopcon <br>
... 22 -!- softcup [~softcup@114-35-206-151.HINET-IP.hinet.net] has quit [Quit: 暫離] <br>
... 30 -!- bobchao [~Thunderbi@223-142-240-37.dynamic.hinet.net] has joined #mopcon
</p>

<p class='phone'>
20: 53 -!- bobchao1 [~Thunderbi@42-79-157-254.dynamic-ip.hinet.net] has joined #mopcon <br>
... 54 -!- bobchao [~Thunderbi@223-142-240-37.dynamic.hinet.net] has quit [Ping timeout: 245 seconds]
</p>

<p class='phone'>
21: 07 -!- bobchao1 [~Thunderbi@42-79-157-254.dynamic-ip.hinet.net] has quit [Ping timeout: 245 seconds]
</p>

<p class='phone'>
22: 07 -!- keitheis [~keitheis@109.169.57.176] has joined #mopcon <br>
... 16 -!- keitheis [~keitheis@109.169.57.176] has left #mopcon ["WeeChat 0.3.6"] <br>
... 43 -!- Aminzai [~Aminzai@li414-152.members.linode.com] has quit [Ping timeout: 246 seconds] <br>
... 45 -!- Aminzai [~Aminzai@li414-152.members.linode.com] has joined #mopcon
</p>

<p class='phone'>
23: 10 -!- sleepnova [~wanpeebaw@host-91.219-235-182.cable.dynamic.kbtelecom.net] has joined #mopcon <br>
... 11 -!- sleepnova [~wanpeebaw@host-91.219-235-182.cable.dynamic.kbtelecom.net] has left #mopcon []
</p>

<p class='phone'>
--- Log closed Mon Oct 29 00:00:24 2012
</p>
          </div>
        </div>
      </div>
    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
