<template>
  <div class="TimeLine">
    <div class="container pb-15">
      <ul class="m-0 p-0">
        <li v-for="year in yearInfo" :key="`btn-${year.year}`" class="p-2">
          <a herf="#" class="inline-block px-3 py-1" @click.prevent="scrollAnchor(year.year)">{{ year.year }}</a>
        </li>
      </ul>
      <div class="timeline-section position-relative">
        <div v-for="data in yearInfo" :key="`intro-${data.year}`" class="row timeline-pointer position-relative pl-pad-5">
          <h3 class="position-relative mt-pad-0 mb-pad-6">
            {{ data.year }}
          </h3>
          <div class="content">
            <div class="content-text">
              <h4 class="mt-pad-0 mb-pad-2" :class="`tm-${data.year}`">
                {{ data.title }}
              </h4>
              <p>
                {{ data.intro }}
              </p>
            </div>
            <div class="content-img pt-8 pt-pad-0 mb-pad-6">
              <div :class="`bg-${data.year}`" />
            </div>
            <div class="link-container">
              <div class="triangle mr-2" />
              <a :href="data.webLink" class="mr-10" target="_blank">網站</a>
              <div class="triangle mr-2" />
              <a :href="data.photoLink" target="_blank">相簿</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TimeLine',
  data () {
    return {
      yearInfo: [
        {
          year: '2020',
          title: '社會參與、遠距職場、數位轉型',
          intro: 'con With Us! 堅持濁水溪以南的 MOPCON 邁入第九年，因為你們的支持，我們成為南台灣千人科技年會。今年在面臨全球疫情與產業巨變的此刻，我們站在 What MOPCON can help？的角度，以「社會參與」、「數位轉型」與「遠距職場」為三大主軸，搭配行動科技的核心理念，為您帶來南部科技產業交流的知識盛會！',
          webLink: 'https://mopcon.org/2020',
          photoLink: 'https://photos.app.goo.gl/cDKcaDDu94yLdScR7'
        },
        {
          year: '2019',
          title: '人工智慧、量化投資',
          intro: 'here, we $｛ con ｝ ，MOPCON 2019以時下討論度夯的人工智慧與量化投資為主題，再加上歷年受大家歡迎的 Startup、Mobile App、IoT、跨平台程式開發、UI/UX、Agile 等，還與在地社群合作，共同舉辦討論工程師職涯和敏捷實踐的 Panel !',
          webLink: 'https://mopcon.org/2019',
          photoLink: 'https://photos.app.goo.gl/PzCVnrUZap4JW6H1A'
        },
        {
          year: '2018',
          title: 'IoT、AI、Blockchain',
          intro: '2018 我們依然堅持「在濁水溪以南」，除了熱門的 Mobile App、AR/VR、UI/UX，並也將關注不斷擴大發展的 IoT、AI、Blockchain 多樣技術，今年我們也以超連結 "Connect Everything－互聯、互動、整合"為核心主題，歡迎大家與我們相約 MOPCON2018，與業界專家及夥伴們一起探討現今連接無處不在的世界，有什麼樣的新課題、實現智慧未來！',
          webLink: 'https://mopcon.org/2018',
          photoLink: 'https://photos.app.goo.gl/JfKxJrfBhNXwRGLF7'
        },
        {
          year: '2017',
          title: '聊天機器人、數據分析、機器學習',
          intro: '連續六年舉辦的 MOPCON，已是南台灣最⼤科技研討會',
          webLink: 'https://mopcon.org/2017',
          photoLink: 'https://photos.app.goo.gl/rCZtsUq2cfSXEuKB6'
        },
        {
          year: '2016',
          title: 'VR虛擬實境、AR擴增實境、物聯網',
          intro: 'MOPCON 2016 在各方支持下，穩定邁入了第五年，本年度「行動科技年會」精神意涵為" Connect Everything "，以精確表達出在這個資料為王的時代，「軟應用」與「硬載體」正在把每個人納入數據洪流之中，行動科技將是獲取使用者資料的最後一哩。',
          webLink: 'https://mopcon.org/2016',
          photoLink: 'https://photos.app.goo.gl/nMYdBXJrUPjApzGAA'
        },
        {
          year: '2015',
          title: '數位內容、穿戴應用、健康照護',
          intro: 'MOPCON 2015 簡化名稱為「行動科技年會」，今年度將精神意涵調整為" Connect "。本屆議程重心除行動開發技術、服務營運、雲端服務三大主軸之外，將更廣泛涵蓋數位內容、穿戴應用、健康照護、家庭自動化與使用者經驗設計等各類行動科技相關議題。',
          webLink: 'https://mopcon.org/2015',
          photoLink: 'https://photos.app.goo.gl/kAZCAVZh7knqpdAX6'
        },
        {
          year: '2014',
          title: '穿戴式裝置、運動健康照護、家庭自動化',
          intro: '"I code, I spread, I connect" MOPCON 2014 議程除了涵蓋以往 App 開發、雲端服務、數位內容、創新營運四大主軸外，WWDC、Google I/O 兩大年度盛事聚焦的海量資料、穿戴式裝置、運動健康照護、家庭自動化、TV / 高畫質內容、簡化設計和開發流程等議題也都是重要行動應用的脈絡，豪華的講師陣容是 MOPCON 重要傳統',
          webLink: 'https://mopcon.org/2014',
          photoLink: 'https://www.flickr.com/photos/sportecrs6/albums/72157648580539929'
        },
        {
          year: '2013',
          title: '電子商務、數位內容、商業服務',
          intro: 'MOPCON 2013 以營運、開發、數位內容等三大行動應用實務議題為主軸，行動應用近年成為媒體追逐之寵兒，從電子商務、數位內容、商業服務、消費應用無不積極行動相關領域發展。本年度精神意涵為" I code, I spread, I connect "。',
          webLink: 'https://mopcon.org/2013',
          photoLink: 'https://www.flickr.com/photos/othree/albums/72157637051143764'
        },
        {
          year: '2012',
          title: '電子票券',
          intro: 'MOPCON 2012議程主軸為「電子票劵」，此議題之應用因近年手機硬體相機、NFC，軟體如雲端服務、QR code等技術發展逐漸成形，預計明年將發酵引發產業中新應用，故MOPCON將針對此主題尋求相關實作經驗的工程人員與廠商來產業上、中、下游進行完整探討與經驗分享',
          webLink: 'https://mopcon.org/2012',
          photoLink: 'https://mopcon.org/2012/gallery.php'
        }
      ]
    }
  },
  methods: {
    scrollAnchor (year) {
      console.log(year)
      const yearDom = document.querySelector(`.tm-${year}`)
      yearDom.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      })
    }
  }
}
</script>

<style lang="scss" src='./style.scss' scoped></style>
