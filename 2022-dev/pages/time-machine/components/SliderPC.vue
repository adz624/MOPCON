<template>
  <div class="info">
    <div class="slider">
      <div @click="onLastSlide">
        <span
          class="iconify mb-3"
          data-icon="emojione-monotone:red-triangle-pointed-up"
          style="color: #ff7987;"
          data-width="24"
          data-height="24">
        </span>
      </div>
      <Splide ref="slider" :options="desktopOptions">
        <SplideSlide v-for="year in years" :key="year">
          {{ year }}
        </SplideSlide>
      </Splide>
      <div @click="onNextSlide">
        <span
          class="iconify"
          data-icon="emojione-monotone:red-triangle-pointed-down"
          style="color: #ff7987;"
          data-width="24"
          data-height="24">
        </span>
      </div>
    </div>

    <div class="content">
      <TimeMachineContent
        :year="slideContent.year"
        :title="slideContent.title"
        :subtitle="slideContent.subtitle"
        :text="slideContent.text"
        :album="slideContent.album"
        :websiteLink="slideContent.websiteLink" />
    </div>
  </div>
</template>

<script>
import albumData from '../../../../locales/album/photodata.json'
import TimeMachineContent from '../components/TimeMachineContent'

export default {
  name: 'SliderPC',
  components: {
    TimeMachineContent
  },
  data () {
    return {
      years: [2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012],
      desktopOptions: {
        direction: 'ttb',
        height: '30rem',
        width: '50rem',
        type: 'loop',
        wheel: true,
        perPage: 5,
        perMove: 1,
        start: 0,
        focus: 'center',
        snap: true,
        pagination: false,
        arrows: false
      },
      content: [{
        year: 2021,
        title: 'Mobile X AIoT',
        subtitle: 'MOPCON 2021 年精神意涵 "Growing with you"',
        text: '時逢第十周年，主題聚焦 Mobile 與 AIoT，以與您一同成長的心情，締造最多老朋友、新同學線上見面實績！',
        album: [],
        websiteLink: 'https://mopcon.org/2021/'
      }, {
        year: 2020,
        title: '社會參與、遠距職場、數位轉型',
        subtitle: 'MOPCON 2020 年精神意涵 “ $｛ con ｝ With Us ! "',
        text: '在面臨全球疫情與產業巨變的 2020 年，我們站在 What MOPCON can help？的角度，以「社會參與」、「數位轉型」與「遠距職場」為三大主軸，搭配行動科技的核心理念，完成南部科技產業交流的知識盛會！',
        album: albumData[0].category,
        websiteLink: 'https://mopcon.org/2020/'
      }, {
        year: 2019,
        title: '人工智慧、量化投資',
        subtitle: 'MOPCON 2019 年精神意涵 “here, we $｛ con ｝"',
        text: '2019 年以討論度夯的人工智慧與量化投資為主題，加上歷年受大家歡迎的 Startup、Mobile App、IoT、跨平台程式開發、UI/UX、Agile 等，重要的是還與在地社群合作，共同舉辦討論工程師職涯和敏捷實踐的 Panel ，開啟每年舉辦 Panel 討論的傳統。',
        album: albumData[1].category,
        websiteLink: 'https://mopcon.org/2019/'
      }, {
        year: 2018,
        title: 'IoT、AI、Blockchain',
        subtitle: 'MOPCON 2018 年精神意涵 “Connect Everything－互聯、互動、整合"',
        text: '2018 年議程除了熱門的 Mobile App、AR/VR、UI/UX，也關注不斷擴大發展的 IoT、AI、Blockchain 多樣技術，當年也解鎖首次在大會前舉辦的暖身場及區塊鏈之夜成就，與業界專家及夥伴們一起探討連接無處不在的世界，有什麼樣的新課題、實現智慧未來！',
        album: albumData[2].category,
        websiteLink: 'https://mopcon.org/2018/'
      }, {
        year: 2017,
        title: '聊天機器人、數據分析、機器學習',
        subtitle: 'MOPCON 2017 年精神意涵 “Hyperconnectivity － 互聯、互動、智慧"',
        text: '2017年的 MOPCON，感受到Web 3.0 挾物聯網與雲端運算崛起，除了快速增長的線上服務與智慧裝置之外，Big Data、AI 與 Virtual Reality 的出現也正劇烈快速的影響人與人、人與機器間的互動方式。因此，MOPCON 決定重新思考 "Mobile Open Platform" 的內涵，更廣泛地涵蓋聊天機器人、穿戴式裝置、物聯網的應用、數據分析及機器學習、VR 虛擬實境、AR 擴增實境等相關議題，帶領與會者探討更⾼度連結的未來世界。',
        album: albumData[3].category,
        websiteLink: 'https://mopcon.org/2017/'
      }, {
        year: 2016,
        title: 'VR 虛擬實境、AR 擴增實境、物聯網',
        subtitle: 'MOPCON 2016 年精神意涵 “Connect Everything"',
        text: 'MOPCON 2016 以精確表達出在這個資料為王的時代，「軟應用」與「硬載體」正在把每個人納入數據洪流之中，行動科技將是獲取使用者資料的最後一哩。議程重心除行動開發技術、服務營運、數位內容三大主軸之外，將更廣泛涵蓋雲端運算、穿戴應用、VR 虛擬實境、AR 擴增實境、物聯網應用與基於 HTML5 的可攜式跨裝置應用等相關議題，以真實運作的案例，向與會者做第一手的探討與分享，促進更多優秀開發者項目的成熟與發展。',
        album: albumData[4].category,
        websiteLink: 'https://mopcon.org/2016/'
      }, {
        year: 2015,
        title: '數位內容、穿戴應用、健康照護',
        subtitle: 'MOPCON 2015 年精神意涵 "Connect"',
        text: '迎接萬物聯網、資料為王的新世紀，MOPCON 2015 回歸人類關係互聯的社群連結，建構屬於濁水溪以南的科技饗宴。MOPCON 2015年度正名為「行動科技年會」，議程重心除行動開發技術、服務營運、雲端服務三大主軸之外，將更廣泛涵蓋數位內容、穿戴應用、健康照護、家庭自動化與使用者經驗設計等各類行動科技相關議題。在這個軟體正吞食世界，掌握資料為王的時代，行動應用科技是貼近使用者資訊收集的最後一里，不論是全面入侵的智慧手機、平板電腦，乃至於正夯的穿戴科技、舖天蓋地滲入的 IoT 裝置，積極克服加工瓶頸的智慧型紡織品，這一切勾勒被資料流貫穿的未來願景。',
        album: albumData[5].category,
        websiteLink: 'https://mopcon.org/2015/'
      }, {
        year: 2014,
        title: '穿戴式裝置、運動健康照護、家庭自動化',
        subtitle: 'MOPCON 2014 年精神意涵沿用 ”I code, I spread, I connect"',
        text: '議程涵蓋 App 開發、雲端服務、數位內容、創新營運四大主軸外，WWDC、Google I/O 兩大年度盛事聚焦的海量資料、穿戴式裝置、運動健康照護、家庭自動化、TV / 高畫質內容、簡化設計和開發流程等。當年度 800 張票和 189 張票分別在 68 分鐘內和 36 分鐘內被橫掃一空，刷新售票及出席紀錄，奠定千人研討會的亮眼成績！',
        album: [],
        websiteLink: 'https://mopcon.org/2014/'
      }, {
        year: 2013,
        title: '電子商務、數位內容、商業服務',
        subtitle: 'MOPCON 2013 年精神意涵 "I code, I spread, I connect"',
        text: '以營運、開發、數位內容等三大行動應用實務議題為主軸，行動應用成為媒體追逐之寵兒，從電子商務、數位內容、商業服務、消費應用無不積極行動相關領域發展。MOPCON 2013 年 正式移至 ICCK 高雄國際會議中心舉行，四百五十張張門票在四個半小時被掠奪殆盡，刷新南台灣科技研討會報名最快紀錄！現場參與人數高達近五百名，樹立南台灣科技研討會之新里程碑；同時 App便利屋、APPGuru、Punapp等媒體報導給予活動正面評價，亦獲得聯合報、經濟日報、自立晚報、聯合新聞網主流媒體報導。',
        album: [],
        websiteLink: 'https://mopcon.org/2013/'
      }, {
        year: 2012,
        title: '電子票券',
        subtitle: '',
        text: '2012 年為 MOPCON 啟動年，定位為針對移動通訊領域結合實際的產業面與工程研發(平台工具、後台服務、移動應用)的探討，藉由年度固定聚會持續專注這個領域, 培養台灣移動式領域人才，促使更多人投入這個領域發展，並增加廠商的能見度與第三方各種合作機會。MOPCON 2012 年議程主軸為「電子票劵」，此議題之應用因近年手機硬體相機、NFC，軟體如雲端服務、QR code等技術發展逐漸成形，以期發酵引發產業中新應用。',
        album: [],
        websiteLink: 'https://mopcon.org/2012/'
      }],
      slideActiveIndex: 0
    }
  },
  computed: {
    slideContent () {
      return {
        year: this.content[this.slideActiveIndex].year,
        title: this.content[this.slideActiveIndex].title,
        subtitle: this.content[this.slideActiveIndex].subtitle,
        text: this.content[this.slideActiveIndex].text,
        album: this.content[this.slideActiveIndex].album,
        websiteLink: this.content[this.slideActiveIndex].websiteLink
      }
    }
  },
  mounted () {
    const splide = this.$refs.slider.splide
    splide.on('move', () => {
      this.slideActiveIndex = splide.index
    })
  },
  methods: {
    onNextSlide () {
      this.$refs.slider.splide.go('<')
      this.onSlideChange('<')
    },
    onLastSlide () {
      this.$refs.slider.splide.go('>')
      this.onSlideChange('>')
    },
    onSlideChange (action) {
      if (action === '<') {
        const index = this.slideActiveIndex - 1
        if (index < 0) {
          this.slideActiveIndex = this.years.length - 1
          return
        }
        this.slideActiveIndex = index
      } else {
        const index = this.slideActiveIndex + 1
        if (index === this.years.length) {
          this.slideActiveIndex = 0
          return
        }
        this.slideActiveIndex = index
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.info {
  @include flex(center, row, center);
  background-color: white;
  width: 88%;
  border-radius: 40px;
  margin-top: 120px;
  padding: 88px 40px;
  box-shadow: 0px 4px 4px 0px #00000033;

  @include screen(md) {
    padding: 32px 20px;
  }

  @include screen(sm) {
    @include flex(center, column, center);
  }

  .slider {
    width: 30%;
    padding: 15px;
    @include flex(center, column, center);
    border-right: 4px solid $colorPink;

    @include screen(md) {
      width: 40%;
      padding-left: 0;
    }

    @include screen(sm) {
      width: 80%;
      @include flex(center, row, center);
    }

    svg {
      cursor: pointer;
    }

    .splide {
      width: 100%;

      &__slide {
        @include flex(center, row, center);
        font-size: 40px;
        font-weight: 700;
        color: #c8c7c8;

        &.is-active {
          font-size: 48px;
          color: $colorPrimary;
          border: none;
        }
      }
    }
  }

  .content {
    padding: 40px 104px;

    @include screen(md) {
      padding: 20px 0px 20px 20px;
    }
  }
}
</style>
