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
    <div class="mobile-banner">
        <div class="mobile-banner-img">
            <img src="images/index-banner-retina" class="mobile-banner-img" alt="">
        </div>
        <time>2014/10/25~2014/10/26</time>
    </div>

    <section class="section bg-rotate row">

        <div class="col-6">         
            <div class="ipad"><div class="iphone"></div></div>

        </div>
        <div class="col-6">
            <h2>方向</h2>
            <article class="article">
                
                <p>今年議程以營運、開發、數位內容等三大行動應用實務議題為主軸，邀請到Ptt創辦人/Microsoft Research的杜奕瑾、iKala執行長程世嘉、遠傳電信投資子公司Hiiir副總Neil Lee等台灣業界中堅擔任講師，更有 AWS Markku Lepisto 及 Joe Ziegler 兩位外籍講者參與盛會。</p>
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
                <p>行動應用近年成為媒體追逐之寵兒，從電子商務、數位內容、商業服務、消費應用無不積極行動相關領域發展。MOPCON 專注於行動軟體開發 / 應用技術之專業研討會，也是南部最大社群研討會，希望藉由軟體技術社群的力量，推動南北業界技術實務經驗交流，關注行動應用趨勢，並以軟體科技從業人員出發，定調本年度精神意涵為 "I code, I spread, I connect"。</p>
                <p>
                MOPCON 2013開放報名後，四百五十張張門票在四個半小時被掠奪殆盡，刷新南台灣科技研討會報名最快紀錄！2013 年 10 月 26 ~ 27 日活動期間，現場參與人數高達近五百名，樹立南台灣科技研討會之新里程碑；同時 App便利屋、APPGuru、Punapp等媒體報導給予本屆活動正面評價，亦獲得聯合報、經濟日報、自立晚報、聯合新聞網主流媒體報導</p>
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
                    <p>• 時間：2013/10/26-27（六日兩天）</p>
                    <p>• 地點：高雄國際會議中心</p>
                    <p>• 主題：MOPCON (Mobile Open Platform Conference)2013 以 "I code, I spread, I connect" 作為主要精神意涵，議程從行動開發技術議程出發，引申到行動服務營運，更將涵蓋數位內容之行動應用發展。議程規劃以「開發、營運、數位內容」做為主軸，以真實運作的應用案例，向與會者做第一手的探討</p>
                </article>
                <a href="http://mopcon.kktix.cc/events/mopcon2014-cfp" class="btn btn-green mtm" target="_blank">徵稿連結</a>
            </div>
        </div>   
    </section>




</div>
RAW_HTML;

// 輸出畫面
$tpl->display('main.tpl.php');
