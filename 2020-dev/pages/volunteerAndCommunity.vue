<template>
  <div id="wrap">
    <!--我們在打造高速資訊交流圈-->
    <div class="md:max-w-screen-lg  slogan">
      <div class="w-1/2 slogan-title">
        <h2 class="slogan-title-en">
          REVOLUTION
        </h2>
        <h1>
          我們在打造
          </br>
          <sapn class="ml-2 text-yellow-main">
            高速資訊交流圈
          </sapn>
        </h1>
        <h5 class="slogan-content">
          MOPCON 為締造人、知識與產業的連結，旨在實現三項目標：
          <br>
          <span>一、帶動南台灣高經濟產業循環</span>
          <br>
          <span>二、培養高知識產值人才</span>
          <br>
          <span>三、匯聚知識、人流、投資，促進創新創業機會。</span>
          <br>為使目標達成，MOPCON 志在打造出一座「高速資訊交流圈」！
        </h5>
      </div>
      <div class="w-1/2 slogan-container">
        <img src="../assets/volunteerAndCommunity/revolution.svg">
      </div>
    </div>
    <!--join us-->
    <div class="md:max-w-screen-lg joinus">
      <div class="logo logo-joinus" />
      <h2 class="joinus-title ">
        有興趣加入我們嗎?
      </h2>
      <div class="flex justify-center">
        <button class="joinus-button" @click="fbLink">
          <span>追蹤我們的FaceBook</span>
          <img src="../assets/volunteerAndCommunity/launch.svg" class="pl-2">
        </button>
      </div>
    </div>
    <!--hr-->
    <div class="container">
      <div class="logo logo-hr" />
    </div>
    <!--志工團隊-->
    <div class="md:max-w-screen-lg volunteer">
      <div class="flex justify-center mb-10">
        <img src="../assets/volunteerAndCommunity/mopcon.svg">
        <h2 class="volunteer-title ">
          志工團隊
        </h2>
      </div>
      <!--團隊-->
      <div class="volunteer-content">
        <!--議程委員會-->
        <div class="volunteer-content-card">
          <a
            href="#"
            class="logo logo-1"
            @click.prevent="toggleMember ('committee')"
          />
          <h5>
            議程委員會
          </h5>
        </div>
        <div v-if="memberActive=='committee'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('committee')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-1 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              議程委員會
            </h5>
            <p class="volunteer-pop-card-content">
              既然你誠心誠意的發問了，MOPCON 就大發慈悲的告訴你。為了讓議程越來越精彩，為了讓 MOPCON 宇宙越來越大。貫徹愛與真實的評斷，犀利又專業的審核把關。 Here, we con. 美好的未來在等著我們。
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>王聖凱</span>
              <span>Terence Huang</span>
              <span>Victor Gau</span>
              <span>Hash</span>
              <span>Hermes</span>
              <span>Ant</span>
              <span>良葛格</span>
              <span>Howard</span>
              <span>李紅豆</span>
              <span>游舒帆</span>
              <span>Jserv</span>
              <span>Eric</span>
              <span>Mikimoto</span>
            </p>
          </div>
        </div>
        <!--議程組-->
        <div class="volunteer-content-card">
          <a href="#" class="logo logo-2" @click.prevent="toggleMember ('meeting')" />
          <h5>
            議程組
          </h5>
        </div>
        <div v-if="memberActive=='meeting'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('meeting')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-2 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              議程組
            </h5>
            <p class="volunteer-pop-card-content">
              各場議程的守護神，致力於尋找各路大神，為的就是打造獨一無二的 MOPCON 宇宙！
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>Brook</span>
              <span>Daisord</span>
              <span>劉容之</span>
              <span>dlspm</span>
              <span>Justin</span>
              <span>Steven</span>
              <span>Sandy</span>
              <span>GE</span>
              <span>Eva</span>
              <span>Zoey</span>
              <span>Hairam</span>
              <span>Tzuting</span>
            </p>
          </div>
        </div>
        <!--財務組-->
        <div class="volunteer-content-card">
          <a href="#" class="logo logo-3" @click.prevent="toggleMember ('cash')" />
          <h5>
            財務組
          </h5>
        </div>
        <div v-if="memberActive=='cash'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('cash')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-3 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              財務組
            </h5>
            <p class="volunteer-pop-card-content">
              錢和收據的來來去去！
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>Chita</span>
            </p>
          </div>
        </div>
        <!--行政組-->
        <div class="volunteer-content-card">
          <a href="#" class="logo logo-4" @click.prevent="toggleMember ('admin')" />
          <h5>
            行政組
          </h5>
        </div>
        <div v-if="memberActive=='admin'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('admi')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-4 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              行政組
            </h5>
            <p class="volunteer-pop-card-content">
              輔導長、喚醒師、撩癒姐、業務哥組成，完成各種推坑於無形的工作，讓混亂中建立優雅，在平實中製造刺激，使停留中促進前進，這就是本組的日常。
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>Ofa</span>
              <span>Tony Lee</span>
              <span>Leo</span>
            </p>
          </div>
        </div>
        <!--贊助組-->
        <div class="volunteer-content-card">
          <a href="#" class="logo logo-5" @click.prevent="toggleMember ('donate')" />
          <h5>
            贊助組
          </h5>
        </div>
        <div v-if="memberActive=='donate'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('donate')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-5 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              贊助組
            </h5>
            <p class="volunteer-pop-card-content">
              謝謝各位的支持！謝謝！謝謝！謝謝！
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>Cassie</span>
              <span>蔡筑涵</span>
              <span>王萬鈞</span>
              <span>莊皓翔</span>
              <span>黃靖涵</span>
              <span>姚尚汶</span>
              <span>鄭宇翔</span>
            </p>
          </div>
        </div>
        <!--資訊組-->
        <div class="volunteer-content-card">
          <a href="#" class="logo logo-6" @click.prevent="toggleMember ('software')" />
          <h5>
            資訊組
          </h5>
        </div>
        <div v-if="memberActive=='software'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('software')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-6 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              資訊組
            </h5>
            <p class="volunteer-pop-card-content">
              寫 code 寫起來！！！串接各個資訊系統，呈現出最好的產品給使用者就是我們的使命，讓大家更 Work Smart
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>Hash</span>
              <span>Hinrick</span>
              <span>Jane Kao</span>
              <span>方威</span>
              <span>葉子</span>
              <span>Keith</span>
              <span>Luke</span>
              <span>Chita</span>
              <span>Hiro</span>
              <span>DADA</span>
              <span>Ralph</span>
              <span>UnciaX</span>
              <span>Edmond</span>
            </p>
          </div>
        </div>
        <!--美術組-->
        <div class="volunteer-content-card">
          <a href="#" class="logo logo-7" @click.prevent="toggleMember ('Art')" />
          <h5>
            美術組
          </h5>
        </div>
        <div v-if="memberActive=='Art'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('Art')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-7 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              美術組
            </h5>
            <p class="volunteer-pop-card-content">
              MOPCON 門面就靠我們了！從網站、 APP 、紀念品等大大小小事情都包辦，組別有來自全台灣各式各樣的人才，一起共創每年新體驗～
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>Scarlett</span>
              <span>Jason</span>
              <span>Karas</span>
              <span>黃尹俞</span>
              <span>小孫</span>
              <span>羽婷</span>
              <span>Zoe</span>
              <span>Jennifer</span>
              <span>Fang</span>
              <span>山石</span>
            </p>
          </div>
        </div>
        <!--公關組-->
        <div class="volunteer-content-card">
          <a href="#" class="logo logo-8" @click.prevent="toggleMember ('public')" />
          <h5>
            公關組
          </h5>
        </div>
        <div v-if="memberActive=='public'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('public')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-8 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              公關組
            </h5>
            <p class="volunteer-pop-card-content">
              可比喻為魔術師！為震撼觀眾的身心靈而努力。我們是一群什麼都要有梗，而且沒有梗，毋寧死的生物！
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>Gobby</span>
              <span>飛飛</span>
              <span>Lucy</span>
              <span>Viola</span>
              <span>郭又宗</span>
              <span>Vina</span>
              <span>廖永森</span>
              <span>陳姸君</span>
              <span>KM</span>
            </p>
          </div>
        </div>
        <!--場務組-->
        <div class="volunteer-content-card">
          <a href="#" class="logo logo-9" @click.prevent="toggleMember ('executive')" />
          <h5>
            場務組
          </h5>
        </div>
        <div v-if="memberActive=='executive'" class="volunteer-pop">
          <div class="volunteer-pop-close" @click.prevent="toggleMember ('executive')">
            <img src="../assets/volunteerAndCommunity/close.svg" class="cursor-pointer" alt="">
          </div>
          <div class="volunteer-pop-card">
            <div class="logo logo-9 mx-auto" />
            <h5 class="volunteer-pop-card-title">
              場務組
            </h5>
            <p class="volunteer-pop-card-content">
              場地之守護神，照料與會者的一切，為工人把屎把尿。場地的一切柴米油鹽醬醋茶都是我們負責。
            </p>
            <div class="volunteer-pop-card-hr" />
            <h5 class="volunteer-pop-card-member">
              看看成員有誰
            </h5>
            <p class="volunteer-pop-card-member-list">
              <span>柯柯</span>
              <span>Pin</span>
              <span>許睿森</span>
              <span>李孟哲</span>
              <span>許婉琪</span>
              <span>凌俊豪</span>
              <span>白羽</span>
              <span>松鼠</span>
              <span>赤貓</span>
              <span>Straw</span>
              <span>黃律銓</span>
              <span>彭璿祐</span>
              <span>紀玥綺</span>
              <span>吳旻諺</span>
              <span>黃冠萱</span>
              <span>YoYo</span>
              <span>廖御鈞</span>
              <span>李亭臻</span>
              <span>吳虹燕</span>
              <span>金妍彣</span>
              <span>連慧均</span>
              <span>嚴健誌</span>
              <span>紀怡秀</span>
              <span>蕭扞丞</span>
              <span>林均安</span>
              <span>小白</span>
              <span>馬文彬</span>
              <span>Titan</span>
              <span>楊麗蓉</span>
              <span>劉芝妤</span>
              <span>劉冠慧</span>
              <span>楊光宇</span>
              <span>JaoJaoLin</span>
              <span>甘城翰</span>
              <span>Mac Taylor</span>
              <span>賀琬茹</span>
              <span>李欣倪</span>
              <span>陳胤宏</span>
              <span>謝曉柔</span>
              <span>陳胤宏</span>
              <span>郭尚蓁</span>
            </p>
          </div>
        </div>
        <!--攝影組-->
        <div class="volunteer-content-card">
          <div class="logo logo-10" />
          <h5>
            攝影組
          </h5>
        </div>
        <!--錄影組-->
        <div class="volunteer-content-card">
          <div class="logo logo-11" />
          <h5>
            錄影組
          </h5>
        </div>
      </div>
      <!--訊息-->
      <div class="volunteer-message">
        <div class="volunteer-message-box">
          <h5 class="volunteer-message-box-title yellow">
            「我想加入志工！」
          </h5>
          <div class="logo logo-volunteer mx-auto" />
          <button class="btn-second" @click="fbLink">
            追蹤 Facebook
          </button>
          <p class="volunteer-message-box">
            想要和我們一起改變南部資訊生態圈嗎？歡迎追蹤我們的 Facebook，我們會在下一屆準備開始前 PO 出徵才資訊！加入我們不僅有機會參與改變的過程，還可以得到寶貴的辦展經驗、認識大神們哦！
          </p>
        </div>
        <div class="volunteer-message-box">
          <h5 class="volunteer-message-box-title purple">
            「我有興趣贊助～」
          </h5>
          <div class="logo logo-donate mx-auto" />
          <button class="btn-third" @click="CFSLink">
            有興趣贊助我們
          </button>
          <p>
            謝謝你願意成為全台最大行動科技領域社群研討會的參與者及貢獻者之一！
          </p>
        </div>
      </div>
    </div>
    <!--社群-->
    <div class="md:max-w-screen-xl community">
      <!-- 參與社群 -->
      <div class="community-title">
        <img src="../assets/volunteerAndCommunity/mopcon.svg">
        <h2 class="volunteer-title ">
          參與社群
        </h2>
      </div>
      <div class="community-grid">
        <!--GDG-->
        <div class="overflow-hidden community-card">
          <a class="community-card-head">
            <a href="#" class="community-card-head-hover" @click.prevent="toggleCommunity ('gdg')">
              - Read more -
            </a>
            <div class="pic pic-community-logo pic-gdg" />
          </a>
          <div class="community-card-text">
            GDG Cloud Kaohsiung
          </div>
        </div>
        <div v-if="communityActive=='gdg'" class="community-pop">
          <div class="community-pop-close" @click.prevent="toggleCommunity ('gdg')">
            <img src="../assets/volunteerAndCommunity/close.svg" alt="">
          </div>
          <div class="community-pop-card">
            <div class="community-pop-card-title">
              <div class="pic pic-community-pop pic-gdg" />
              <div class="community-pop-card-title-content">
                GDG Cloud Kaohsiung
              </div>
            </div>
            <div class="community-pop-card-icon">
              <a href="#" @click.prevent="gdgFbLink"><img src="../assets/volunteerAndCommunity/fb.png" alt=""></a>
              <a href="#" @click.prevent="gdgWebLink"><img src="../assets/volunteerAndCommunity/web.png" alt=""></a>
            </div>
            <div class="community-pop-card-content">
              <h5><span>\\</span>介紹</h5>
              <h6>
                GDG Kaohsiung (Google Developer Group Kaohsiung) GDG Kaohsiung 是以研究 Google 以及 Android App 領域的技術、設計、新創或相關產業為主的開發者群。每個月至少會有一場實體聚會在高雄舉行。 GDG Kaoshiung 前身是 Android 高雄開發者社群，自從2014年三月開始舉辦，每月會有一到兩場的實體會，舉行時間原則上依講者和場地許可時間安排，實際活動時間請持續關注社團，我們會隨時公佈最新的活動訊息歡迎對相關領域有興趣的朋友可以參與聚會，一起交流討論。
              </h6>
            </div>
          </div>
        </div>
        <!--python-->
        <div class="overflow-hidden community-card">
          <a class="community-card-head">
            <a href="#" class="community-card-head-hover" @click.prevent="toggleCommunity ('python')">
              - Read more -
            </a>
            <div class="pic pic-community-logo pic-python" />
          </a>
          <div class="community-card-text">
            Kaohsiung Python User Group
          </div>
        </div>
        <div v-if="communityActive=='python'" class="community-pop">
          <div class="community-pop-close" @click.prevent="toggleCommunity ('python')">
            <img src="../assets/volunteerAndCommunity/close.svg" alt="">
          </div>
          <div class="community-pop-card">
            <div class="community-pop-card-title">
              <div class="pic pic-community-pop pic-python" />
              <div class="community-pop-card-title-content">
                Kaohsiung Python User Group
              </div>
            </div>
            <div class="community-pop-card-icon">
              <a href="#" @click.prevent="pythonFbLink"><img src="../assets/volunteerAndCommunity/fb.png" alt=""></a>
              <a href="#" @click.prevent="pythonWebLink"><img src="../assets/volunteerAndCommunity/web.png" alt=""></a>
            </div>
            <div class="community-pop-card-content">
              <h5><span>\\</span>介紹</h5>
              <h6>
                高雄地區Python使用者的交流園地。</br>
                社團使命(Mission)：</br>
                *營造一個公開促進技術交流的環境，促使團員提升自己的技術能力，進而提升台灣整體的競爭力。</br>
                *鼓勵團員運用Python技術，實現自己的想法。</br>
                *鼓勵異業交流，以提升各產業的競爭力。</br>
                社團價值(Values)：</br>
                *擁有國際觀：以國際市場為目標，而不是侷限眼光，在區域市場廝殺。</br>
                *強烈企圖心：樂於分享技術，努力思考自己的興趣，觀察周圍的問題，思考可能的解決方案。</br>
                *成熟及尊重：開得起玩笑，但尊重別人。</br>
                歡迎對Python有興趣的朋友來參加聚會。
              </h6>
            </div>
          </div>
        </div>
        <!--IxDA Taiwan-->
        <div class="overflow-hidden community-card">
          <a class="community-card-head">
            <a href="#" class="community-card-head-hover" @click.prevent="toggleCommunity ('ixda')">
              - Read more -
            </a>
            <div class="pic pic-community-logo pic-ixda" />
          </a>
          <div class="community-card-text">
            IxDA Taiwan
          </div>
        </div>
        <div v-if="communityActive=='ixda'" class="community-pop">
          <div class="community-pop-close" @click.prevent="toggleCommunity ('ixda')">
            <img src="../assets/volunteerAndCommunity/close.svg" alt="">
          </div>
          <div class="community-pop-card">
            <div class="community-pop-card-title">
              <div class="pic pic-community-pop pic-ixda" />
              <div class="community-pop-card-title-content">
                IxDA Taiwan
              </div>
            </div>
            <div class="community-pop-card-icon">
              <a href="#" @click.prevent="ixdaFbLink"><img src="../assets/volunteerAndCommunity/fb.png" alt=""></a>
              <a href="#" @click.prevent="ixdaWebLink"><img src="../assets/volunteerAndCommunity/web.png" alt=""></a>
            </div>
            <div class="community-pop-card-content">
              <h5><span>\\</span>介紹</h5>
              <h6>
                社團法人台灣互動設計協會 - 我們是充滿熱情活力的開拓者，永遠在前方為設計開闢更寬廣的道路!</br>
                IxDA 每年都會舉辦國際性研討活動，廣泛邀請世界各地從事產品與服務的設計者們與會(包括產品經理，創意總監，互動設計師，人機互動工程師，使用性工程師，使用者經驗與研究員，及學術先進等) 。除了聆聽國際學者、專家最新的互動設計理論或實務發展外，也提供所有與會者直接交流的機會。</br>IxDA Taiwan 於2010年成立，透過實體聚會、線上交流以及大型研討會的方式，專注於將互動設計推廣到台灣的各個角落，截至今日已經舉辦過15次公開活動，超過1000人實際參與，迄今亦有387位來自產官學界的菁英加入IxDA Taiwan的行列，形成一個互動設計的大家庭。去年4月舉行的互動設計大會，更讓台灣能與其他12個協辦國接軌，為台灣的互動設計劃下新的一頁。今年10月舉辦的 Interaction 13 也讓台灣互動設計及與會的專業人士跟國際大師產生更多交流！
              </h6>
            </div>
          </div>
        </div>
        <!--好想-->
        <div class="overflow-hidden community-card">
          <a class="community-card-head">
            <a href="#" class="community-card-head-hover" @click.prevent="toggleCommunity ('goodideas')">
              - Read more -
            </a>
            <div class="pic pic-community-logo pic-goodideas" />
          </a>
          <div class="community-card-text">
            好想工作室
          </div>
        </div>
        <div v-if="communityActive=='goodideas'" class="community-pop">
          <div class="community-pop-close" @click.prevent="toggleCommunity ('goodideas')">
            <img src="../assets/volunteerAndCommunity/close.svg" alt="">
          </div>
          <div class="community-pop-card">
            <div class="community-pop-card-title">
              <div class="pic pic-community-pop pic-goodideas" />
              <div class="community-pop-card-title-content">
                好想工作室
              </div>
            </div>
            <div class="community-pop-card-icon">
              <a href="#" @click.prevent="goodideasFbLink"><img src="../assets/volunteerAndCommunity/fb.png" alt=""></a>
              <a href="#" @click.prevent="goodideasWebLink"><img src="../assets/volunteerAndCommunity/web.png" alt=""></a>
            </div>
            <div class="community-pop-card-content">
              <h5><span>\\</span>介紹</h5>
              <h6>
                共同工作空間 資訊社群聚落 軟體人才培育基地 天瓏資訊圖書實體分店 台南 Google 開發者社群
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--standard-->
    <div class="md:max-w-screen-sm mx-auto standard">
      <h3 class="standard-en">
        STANDARD
      </h3>
      <h3 class="standard-ch">
        我們的<span></br>行為準則</span>
      </h3>
      <h6 class="standard-content">
        <span>所有此次活動的聽眾、演講者、贊助商和志工，都必須同意遵守下列行為準則。而主辦單位也將嚴格地執行這些準則，我們期待所有參加者的合作，以確保大家能有一個安全友善的環境。</span></br>
        <span>騷擾包括有關性別，性別認同、年齡、性向、殘疾、外貌、體型、種族、宗教的攻擊性言語，或是在公共場合散播色情圖片、蓄意恐嚇、跟踪、騷擾性的攝影或錄影、多次打斷活動、不恰當的身體接觸，和讓人感到不舒服的性關注。參與者必須停止任何騷擾行為並且立即遵守行為準則。贊助商也必須遵守行為準則。</span></br>
        <span>贊助商不應該使用帶有性意味的圖像、活動，或其它材料。工作人員（包括志工）不該穿著帶有性意味的衣服/制服/裝扮，或是建立一個具有性意味的環境。</span></br>
        <span>如果參與者從事騷擾行為，工作人員會採取其認為適當的任何手段，包括警告或是請離會場，並且不會退費。如果你被騷擾、看到別人受到騷擾，或有任何其他問題，請立即聯繫會議工作人員，工作人員身上會穿戴可以識別身份的特殊徽章或衣服。</span></br>
        <span>工作人員會很樂意幫助參與者聯繫酒店/場地警衛或當地警察、提供護送，或以其他方式幫助那些遇到騷擾的參與者感到安全。我們非常重視您的參與。</span></br>
        <span>我們希望參與者在各活動場合、會議有關的社群活動都能遵循這些規則。</span></br>
        <span>此行為準則是基於 Conference Code of Conduct ( http://confcodeofconduct.com/ )而訂定。</span>
      </h6>
    </div>
  </div>
  </div>
</template>

<script>

export default {
  name: 'VolunteerAndCommunity',
  data () {
    return {
      memberActive: '',
      communityActive: ''
    }
  },
  methods: {
    fbLink () {
      window.open('https://www.facebook.com/mopcon', '_blank')
    },
    CFSLink () {
      window.open('https://drive.google.com/file/d/1FUuIrfc_zLPdHvVkwQ2-aUYofyvuPHso/view?usp=sharing', '_blank')
    },
    gdgFbLink () {
      window.open('https://www.facebook.com/groups/GCPUG.KH', '_blank')
    },
    gdgWebLink () {
      window.open('https://www.meetup.com/GDGCloud-Kaohsiung/', '_blank')
    },
    pythonFbLink () {
      window.open('https://www.facebook.com/groups/kaohsiungpy', '_blank')
    },
    pythonWebLink () {
      window.open('https://www.meetup.com/Kaohsiung-Python-Meetup/', '_blank')
    },
    ixdaFbLink () {
      window.open('https://www.facebook.com/ixda.tw/', '_blank')
    },
    ixdaWebLink () {
      window.open('http://www.ixda.org.tw/', '_blank')
    },
    goodideasFbLink () {
      window.open('https://www.facebook.com/GoodideasStudio/', '_blank')
    },
    goodideasWebLink () {
      window.open('https://goodideas-studio.com/', '_blank')
    },
    toggleMember (id) {
      const vm = this
      vm.memberActive !== id ? (vm.memberActive = id) : (vm.memberActive = '')
    },
    toggleCommunity (id) {
      const vm = this
      vm.communityActive !== id ? (vm.communityActive = id) : (vm.communityActive = '')
    }
  }
}
</script>

<style lang="scss" scoped>
@import '~@/assets/styles/logo_mix';

$logo_map: (
  png:bg,
  svg: revolution hr mopcon launch joinus 1 2 3 4 5 6 7 8 9 10 11 volunteer donate close,
);
@include logo_map_mix(volunteerAndCommunity);

@mixin btn($color){
  border-radius: 8px;
  background-color:$color;
  transition: all 0.15s;
  outline: none;
  width: 50%;
  @apply px-0 py-3 text-xl text-black-900;
  &:hover {
    transform: translate(3px, 3px);
    box-shadow: none;
  }
  @screen md {
    font-size: 1.75rem;
    width:80%;
    @apply px-32;

  }
  @screen sm {
    @apply px-24 text-2xl w-auto;
  }
}

* {
    // outline: 1px dotted red;
}
#wrap {
  background-image: url('~@/assets/volunteerAndCommunity/bg.png');
  background-size: 115px 100px;
}
.slogan {
  @apply mx-auto text-white flex flex-wrap mb-12;
  @screen lg{
    @apply p-8;
  }
  &-title {
    @apply w-full order-2;
    @screen lg{
      @apply w-1/2 order-1;
    }
    &-en{
      font-family: Poppins;
      font-size:3rem;
      letter-spacing: 0.125rem;
      opacity: 0.24;
      -webkit-text-stroke: 1px #ffffff;
      color: rgba(255, 255, 255, 0);
      @apply  font-semibold relative text-center;
      @screen sm{
        font-size:3rem;
      }
      @screen lg{
        font-size: 5rem;
      }
    }
    & h1{
      font-size: 2rem;
      letter-spacing: 0.2px;
      bottom:40px;
      @apply font-medium relative text-white text-center;
      @screen lg{
        bottom:55px;
        left:10px;
        @apply text-left;
      }
      & br{
        @apply block;
        @screen lg{
          @apply hidden;
        }
      }
      &:after {
        content: '';
        width: 80px;
        height: 6px;
        bottom:-20px;
        left: calc(50% - 40px);
        @apply bg-yellow-main absolute;
        @screen lg{
          left:20px;
        }
      }
    }
  }
  &-content {
    line-height: 1.6875rem;
    letter-spacing: 0.2px;
    @apply px-3 mx-auto;
    @screen md{
      @apply px-48;
    }
    @screen lg{
      padding-left:30px;
      padding-right:0px;
    }
    & span{
      @apply ml-3;
    }
  }
  &-container{
    @apply w-full order-1 flex items-center justify-center;
    @screen lg{
      @apply w-1/2 order-2 items-end;
    }
    & img{
      width:80%;
      @apply p-3;
      @screen lg{
        @apply p-0;
      }
    }
  }
}
.joinus {
  @apply mx-auto mb-16;
  &-title {
    line-height: 27px;
    letter-spacing: 4px;
    @apply text-center text-xl text-white mb-12;
  }
  &-button {
    @apply text-base text-yellow-main px-8 py-3 rounded-lg inline-flex items-center border-solid border-2 border-yellow-main;
    &:hover {
      box-shadow: 0 0 10px 0 #ffcc00;
    }
  }
}
.container {
  margin: 0 auto;
}
.logo{
  &-joinus{
    width:80%;
    height:184px;
    @apply mb-12 mx-auto;
  }
  &-hr {
    height: 15px;
    background-repeat: repeat no-repeat;
    background-position-x: left;
    background-size: auto 15px;
    margin-right:auto;
    margin-left:atuo;
    @apply mb-16;
    @screen md {
      height: 10px;
      background-size: auto 10px;
    }
  }
  &-volunteer, &-donate{
    width:128px;
    height:128px;
    @apply mb-8
  }
  @for $i from 1 through 11 { //從 1 到 5 共執行 5 次。
    &-#{$i} {
      width:124px;
      height:124px;
      @apply mb-4;
      @screen sm{
        width:188px;
        height:188px;
      }
    }
  }
}
.btn{
  &-second{
    @include btn(#ffcc00);
    box-shadow: 10px 10px 0 rgba(255, 217, 140, 0.5);
  }
  &-third{
    @include btn(#651fff);
    box-shadow: 10px 10px 0 rgba(101, 31, 255, 0.32);
    @apply text-white;
  }
}
.pic{
  background-position: center center;
  background-size: cover;
  &-community{
    &-logo{
      width:119px;
      height:90px;
    }
    &-pop{
      width:140px;
      height:140px;
    }
  }
  &-gdg{
    background-image:url(../assets/volunteerAndCommunity/gdg-cloud-kh.png);
  }
  &-python{
    background-image:url(../assets/volunteerAndCommunity/python.jpg);
  }
  &-ixda{
    background-image:url(../assets/volunteerAndCommunity/ixda.jpg);
  }
  &-goodideas{
    background-image:url(../assets/volunteerAndCommunity/goodideas.png);
  }
}
.volunteer{
  @apply mx-auto mb-12;
  @screen md{
    @apply mb-20 relative;
  }
  &-title{
    font-size:1.5rem;
    letter-spacing: 0.15px;
    @apply text-yellow-main ml-2;
    @screen sm{
      font-size:2rem;
      letter-spacing:0.2px
    }
  }
  &-content{
    @apply flex flex-wrap justify-center mb-12;
    &-card{
      @apply flex flex-col items-center m-4;
      @screen sm{
        @apply m-8;
      }
      & h5{
        @apply text-white text-xl;
      }
    }
  }
  &-message{
    @apply grid grid-cols-1;
    @screen md{
      @apply grid-cols-2;
    }
    &-box{
      @apply flex flex-col items-center;
      &-title{
        font-size:1.75rem;
        letter-spacing:0.18px;
        @apply mb-8;
        &.yellow{
          @apply text-yellow-main;
        }
        &.purple{
          color:#b594ff;
          @apply mt-8;
          @screen md{
            @apply mt-0;
          }
        }
      }
      & p{
        line-height: 1.69;
        letter-spacing: 0.1px;
        @apply mt-8 px-10 text-white font-medium;
        @screen lg{
          @apply px-24;
        }
      }
    }
  }
  &-pop{
    max-width:80%;
    z-index:9;
    overflow:hidden;
    @apply absolute mx-auto;
    @screen md{
      max-width:80%;
    }
    &-close{
      margin-bottom:1rem;
      @apply block flex justify-end;
    }
    &-card{
      background:#001333;
      @apply rounded-lg border-2 border-yellow-main p-5;
      &-title{
        font-size:1.5rem;
        letter-spacing:0.43px;
        margin-bottom:10px;
        @apply text-white text-center font-semibold;
      }
      &-content{
        letter-spacing:0.2px;
        margin-bottom:24px;
        @apply text-white text-center;
      }
      &-hr{
        height:56px;
        width:2px;
        background-color:#6d02ff;
        margin-bottom:24px;
        @apply mx-auto;
      }
      &-member{
        letter-spacing:0.36px;
        margin-bottom:12px;
        @apply text-xl text-white text-center;
        &-list{
          color:#b594ff;
          letter-spacing:0.2px;
          @apply flex flex-wrap justify-center;
          span{
            @apply mx-4 my-1;
          }
        }
      }
    }
  }
}
.community{
  @apply mx-auto p-6;
  &-title{
    @apply flex justify-center mb-8 ;
    @screen sm{
      @apply justify-start;
    }
  }
  &-grid{
    @apply grid grid-cols-1 relative;
    @screen md{
      @apply grid-cols-3 gap-4 mb-16;
    }
  }
  &-card{
    @apply mb-8;
    &-head{
      height:161px;
      background-color:#051f4c;
      @apply flex items-center justify-center relative;
      &-hover{
        @apply hidden;
      }
      &:hover .community-card-head-hover{
        display:block;
        height:100%;
        letter-spacing:0.29px;
        background-color: rgba(255, 204, 0, 0.7);
        z-index:1;
        top:0;
        left:0;
        @apply absolute flex justify-center items-center font-medium w-full;
      }
    }
    &-text{
    height:51px;
      @apply flex bg-white text-lg items-center justify-center;
    }
  }
  &-pop{
    max-width:100%;
    z-index:9;
    overflow:hidden;
    @apply absolute mx-auto;
    @screen md{
      max-width:20%;
      left:25%;
    }
    &-close{
      margin-bottom:1rem;
      @apply flex justify-end;
    }
    &-card{
      background:#001333;
      @apply rounded-lg border-2 border-yellow-main p-10;
      &-title{
      @apply flex ;
        &-content{
          font-size:1.5rem;
          @apply flex-grow self-center text-center text-white;
        }
      }
      &-icon{
        width:140px;
        height:24px;
        @apply flex justify-around my-6;
      }
      &-content{
        & h5{
          font-size:1.125rem;
          @apply text-white mb-1;
        }
        & span{
          @apply mr-2 text-yellow-main;
        }
        & h6{
          @apply text-white
        }
      }
    }
  }
}
.standard{
  &-en{
    font-family: Poppins;
    font-size: 2.5rem;
    letter-spacing: 0.125rem;
    opacity: 0.24;
    -webkit-text-stroke: 1px #ffffff;
    color: rgba(255, 255, 255, 0);
    @apply  font-semibold text-center;
    @screen md{
      font-size: 5rem;
    }
  }
  &-ch{
    font-size: 1.5rem;
    letter-spacing: 0.15px;
    top:-30px;
    @apply font-medium relative text-white text-center mb-8;
    @screen md{
      top:-50px;
      letter-spacing: 0.2px;
      font-size: 2rem;
      @apply mb-0;
    }
    &:after {
      content: '';
      width: 80px;
      height: 6px;
      left: calc(50% - 40px);
      bottom:-12px;
      @apply bg-yellow-main absolute;
    }
    & span{
      @apply ml-2 text-yellow-main
    }
    & br{
      @apply block;
      @screen sm{
        @apply hidden;
      }
    }
  }
  &-content{
    line-height:27px;
    letter-spacing:0.2px;
    @apply text-white;
    & span{
      @apply inline-block mb-1 p-6;
    }
  }

}

</style>
