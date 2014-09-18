<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];  
$tpl = new Savant3($config);

$tpl->title = "MOPCON 2014";
$tpl->mainClass = 'index';

$tpl->content =<<<RAW_HTML
<div class="index">
     
  <div class="pc-banner">
        
        <div class="container">
            <div class="sqare"></div>
            <div class="sns">
                <a href="https://www.facebook.com/mopcon/" alt="MOPCON Facebook 粉絲團" title="MOPCON Facebook 粉絲團"><i class="icon-facebook32"></i></a>
                <a href="https://google.com/+MopconOrg" alt="MOPCON @ Google+" title="MOPCON @ Google+"><i class="icon-googleplus32"></i></a>
                <a href="https://twitter.com/mopcon" alt="MOPCON @ Twitter" title="MOPCON @ Twitter"><i class="icon-twitter22"></i></a>
            </div>
            <div class="index-logo"></div>
            <div class="index-logo-line"></div>
            <div class="slogan">
                <span class="l-text">堅持，在濁水溪以南</span>
                <span class="date l-text">2014.10. <i class="date-text">25 / 26</i></span>
            </div>
            <div class="slogan-right">
                <span>Code</span>
                <span>Spread</span>
                <span>Connect</span>
            </div>
        </div>

    </div>

    <section class="section bg-rotate row">

        <div class="col-6">         
            <div class="ipad"><div class="iphone"></div></div>

        </div>
        <div class="col-6">
            <h2>方向</h2>
            <article class="article">
                
                <p>今年議程除了涵蓋以往 App開發、雲端服務、數位內容、創新營運四大主軸外，WWDC、Google I/O 兩大年度盛事聚焦的海量資料、穿戴式裝置、運動健康照護、家庭自動化、TV / 高畫質內容、簡化設計和開發流程等議題也都是重要行動應用的脈絡，豪華的講師陣容是 MOPCON 重要傳統，敬請期待完整議程公布！</p>
            </article>
        </div>

    </section>

    <div class="section-zs-river"> 
        <div class="river-row">
            <span>濁</span>
            <span>水</span>
            <span>溪</span>
        </div>
    </div>

    <section class="section bg-rotate row">

        <div class="col-6">
            <h2>精神</h2>
            <article class="article">
                <p>行動應用近年成為媒體追逐之寵兒，從電子商務、數位內容、商業服務、消費應用無不積極行動相關領域發展。MOPCON 專注於行動軟體開發 / 應用技術之專業研討會，也是南部最大社群研討會，希望藉由軟體技術社群的力量，推動南北業界技術實務經驗交流，關注行動應用趨勢，並以軟體科技從業人員出發，定調本年會精神意涵為 "I code, I spread, I connect"。</p>
                <p>
                MOPCON 2013開放報名後，四百五十張張門票在四個半小時被掠奪殆盡，刷新南台灣科技研討會報名最快紀錄！2013 年 10 月 26 ~ 27 日活動期間，現場參與人數高達近五百名，樹立南台灣科技研討會之新里程碑；同時
                <a href="http://www.appshooting.com.tw/2013/10/mopcon-2013/" target="_blank">App便利屋</a>、
                <a href="http://www.appguru.com.tw/appguru/blog/20507/ltk-south-insisted-on-holding-size-mopcon-developers" target="_blank">APPGuru</a>、  
                <a href="http://punapp.com/news/page/13216" target="_blank">Punapp</a>等媒體報導給予本屆活動正面評價，亦獲得  
                <a href="http://mopcon.org/2013/img/udn.jpg" target="_blank">聯合報</a>、 
                <a href="http://mopcon.org/2013/img/edn.jpg" target="_blank">經濟日報</a>、 
                <a href="http://www.idn.com.tw/news/news_content.php?catid=2&catsid=4&catdid=0&artid=20131027abcd009" target="_blank">自立晚報</a>、
                <a href="http://edn.udn.com/news/print.jsp?aid=674265&cid=47" target="_blank">聯合新聞網</a>       
                 主流媒體報導</p>
            </article>
        </div>
        <div class="col-6">
            <img style="width:100% " src="http://mopcon.org/2013/pic/index/370x245/IMG_8701.jpg" alt="">
        </div>
    </section>
   

    
    <section class="section section-info ">
        <div class="row">
            <div class="col-6">
                <div class="section-info-img-wp">
                    <div class="info-bg"></div>
                    <div class="info-location">
                        <div class="relative">
                            <div class="info-location-bg absolute"></div>
                            <span>MOPCON</span>
                            
                        </div>
                    </div>
                    <div class="index-section-map-text"></div>
                </div>
            </div>

            <div class="col-6">
                <h2>報名資訊</h2>
                <article class="article">
                    <p>• 時間：2014/10/25-26（六日兩天）</p>
                    <p>• 地點：高雄國際會議中心（ICCK）</p>
                    <p>• 主題：App開發、雲端服務、數位內容、創新營運、海量資料、穿戴式裝置、運動健康照護、家庭自動化、TV / 高畫質內容、簡化設計和開發流程等最新行動應用趨勢 & 最夯的行動科技議題盡在 MOPCON，請密切注意<a href='https://www.facebook.com/mopcon' target="_blank">粉絲群</a>及官網的報名資訊！</p>
                </article>
                <a href="http://mopcon.kktix.cc/events/mopcon2014-cfp" class="btn btn-green mtm" target="_blank">目前開放講者投稿</a>
            </div>
        </div>   
    </section>




</div>
RAW_HTML;

// 輸出畫面
$tpl->display('main.tpl.php');
