<template>
  <div>
    <section class="home-bg">
      <div class="main container">
        <div class="vol10-gray pad-hidden" />
        <div class="vol10-mobile position-absolute pad-show" />
        <div class="main-content">
          <h1 class="title">
            我們感謝<br class="hidden md-show pad-hidden"> 今年<br class="hidden sm-show">支持<br class="hidden pad-show sm-hidden"> MOPCON<br class="hidden sm-show"> 的贊助商
          </h1>
          <p class="subTitle sm-hidden">
            MOPCON 目前已是南台灣最大技術社群研討會，成立宗旨為連結產業與資訊工程技術，以培養更多資訊科技人才，推動高雄產業創新發展，而沒有夥伴們的支持，這個願景就不可能成真！謝謝這 10 年來每一位夥伴的加入，和我們一起凝聚南臺灣的人才和I知識，共同成長、學習！
          </p>
          <p class="subTitle">
            想了解成為贊助商的優勢嗎？
          </p>
          <button class="btn" @click="scrollToId('sopTwo')">
            ＋想加入我們嗎？
          </button>
        </div>
      </div>
    </section>
    <div class="line-gray" />
    <section class="sopOne">
      <div class="container">
        <div class="sectionTitle">
          <div class="sopOne-icon" />
          <h2>我們的夥伴們</h2>
        </div>
        <div class="sopOne-content">
          <div
            v-for="(sponsor, sponsorIndex) in sponsorList"
            :key="sponsor.name"
            class="sponsor"
          >
            <div class="sponsor-title">
              <div class="sponsor-icon" :class="['bg-' + sponsor.icon]" />
              <div class="sponsor-title-content">
                <div class="sponsor-title-rank">
                  <span>Rank</span>
                  <div class="star-icon bg-Star ml-2" />
                  <div class="star-icon bg-Star" />
                  <div class="star-icon bg-Star" />
                  <div class="star-icon bg-Star" />
                  <div class="star-icon bg-Star" />
                </div>
                <h3>
                  {{ sponsor.name }}
                </h3>
              </div>
            </div>
            <div class="sponsor-content" :class="{'sponsor-content-tiny': sponsorIndex }">
              <div
                v-for="card in sponsor.data"
                :key="card.name"
                class="sponsor-card"
                @click="openModal(card)"
              >
                <div class="sponsor-image">
                  <img :src="card.logo_path">
                </div>
                <span>
                  {{ card.name }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="line-gray" />
    <section id="sopTwo" class="sopTwo">
      <div class="container">
        <div class="sectionTitle">
          <div class="sopTwo-icon" />
          <h2>想加入我們嗎？</h2>
        </div>
        <div class="sopTwo-content">
          <h2>加入我們，最實質的收穫是....</h2>
          <div class="sopTwo-gain">
            <div class="sopTwo-gain-area">
              <div class="sopTwo-gain-image">
                <img src="../../assets/images/sponsor/sop02-img1.svg">
              </div>
              <h2>品牌曝光</h2>
              <p>
                場間休息、廣告輪播，<br class="hidden md-show">
                接觸逾千名參與者的行動科技社群，<br class="hidden md-show">
                推廣服務及產品、曝光品牌的絕佳機會。
              </p>
            </div>
            <div class="sopTwo-gain-area">
              <div class="sopTwo-gain-image">
                <img src="../../assets/images/sponsor/sop02-img2.svg">
              </div>
              <h2>徵才媒合</h2>
              <p>
                今年 MOPCON 以嶄新的線上活動模式，<br class="hidden md-show">
                更能打破距離的障礙匯集人才，<br class="hidden md-show">
                同時也能夠將貴司的產品及公司<br class="hidden md-show">
                推向國內外的工程師、學生與關鍵決策者。
              </p>
            </div>
          </div>
          <h2>會遇到什麼樣的與會民眾嗎？</h2>
          <div class="sopTwo-meet">
            <div class="sopTwo-meet-content">
              <span># 濁水溪以南破千人研討會</span>
              <span># 與會者以軟體開發者居多，也有設計師、學生等等</span>
              <span># 每年超過 30 場高品質議程，邀請超過 25 位講師</span>
              <h4>參與者目的</h4>
              <span>Top 1 支持濁水溪以南科技研討會</span>
              <span>Top 2 想聽取不同領域的相關議題</span>
              <span>Top 3 有感興趣的議題</span>
            </div>
            <div class="sopTwo-meet-image">
              <img src="../../assets/images/sponsor/sop02-img3.svg" class="pad-hidden sm-show" alt="">
              <img src="../../assets/images/sponsor/sop02-768px-img3.svg" class="hidden pad-show sm-hidden" alt="">
            </div>
          </div>
          <div class="sopTwo-join">
            <div class="sponsor-icon bg-BruceWayne" />
            <button class="btn" @click="mailTo">
              有興趣贊助我們!
            </button>
            <span>謝謝你願意成為全台最大行動科技領域社群研討會的參與者及貢獻者之一！</span>
          </div>
        </div>
      </div>
    </section>
    <Modal :modal-open="modalOpen" @modal-close="closeModal">
      <div v-if="sponsorData" class="modal-title">
        <div class="modal-title-image">
          <img :src="sponsorData.logo_path">
        </div>
        <div class="modal-title-content">
          <h4>{{ sponsorData.name }}</h4>
          <div class="modal-title-button">
            <button v-if="sponsorData.official_website" class="btn btn-tiny" @click="openWindow(sponsorData.official_website)">
              官方網站
            </button>
            <button v-if="sponsorData.facebook_url" class="btn btn-tiny" @click="openWindow(sponsorData.facebook_url)">
              Facebook
            </button>
          </div>
        </div>
      </div>
      <div v-if="sponsorData && sponsorData.about_us" class="modal-body">
        <h5 v-if="!isMobile">
          關於我們
        </h5>
        <!-- eslint-disable-next-line vue/no-v-html -->
        <p v-html="parseSummary(sponsorData.about_us)" />
      </div>
      <div
        v-if="sponsorData && sponsorData.speaker_information && sponsorData.speaker_information.length > 0"
        class="modal-extend"
      >
        <h5>相關講者資訊</h5>
        <div
          v-for="speaker in sponsorData.speaker_information"
          :key="speaker.name"
          class="modal-extend-content"
        >
          <div class="modal-extend-speaker">
            <div class="modal-extend-speaker-image">
              <img v-if="!isPad" :src="speaker.img.web">
              <img v-if="isPad" :src="speaker.img.mobile">
            </div>
            <div class="modal-extend-speaker-content">
              <h6>{{ speaker.name }}</h6>
              <span>{{ speaker.job_title }}</span>
            </div>
          </div>
          <div class="hidden sm-show line-tiny" />
          <div class="modal-extend-session">
            <h6>議程主題</h6>
            <span>
              {{ $moment(speaker.started_at * 1000).format('MM/DD') }}
              <br class="hidden sm-show">
              {{ $moment(speaker.started_at * 1000).format('HH:mm') }}
              ~
              {{ $moment(speaker.endeded_at * 1000).format('HH:mm') }}
            </span>
          </div>
        </div>
      </div>
    </Modal>
  </div>
</template>

<script>
import Modal from '../../components/Modal'
export default {
  name: 'Sponsor',
  components: {
    Modal
  },
  async asyncData ({ $axios, params }) {
    try {
      let data = []
      const res = await $axios.get(process.env.BASE_URL + '/2021/sponsor.json')
      data = res.data

      const config = {
        sponsorList: data
      }

      if (params.sponsor_id) {
        data.forEach((sponsor) => {
          sponsor.data.forEach((item) => {
            if (item.sponsor_id === +params.sponsor_id) {
              config.sponsorData = item
            }
          })
        })
        config.modalOpen = true
      }
      return config
    } catch (err) {}
  },
  data () {
    return {
      innerWidth: null,
      sponsorData: {},
      modalOpen: false,
      sponsorList: []
    }
  },
  head () {
    return {
      title: this.modalOpen ? `${this.sponsorData.name} | 贊助商 MOPCON 2021` : '贊助社群 | MOPCON 2021',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: this.modalOpen ? this.sponsorData.about_us : ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: this.modalOpen ? `${this.sponsorData.name} | 贊助商 MOPCON 2021` : '贊助社群 | MOPCON 2021'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: this.modalOpen ? this.sponsorData.about_us : ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: this.modalOpen ? `${process.env.BASE_URL}/2021/sponsor/${this.sponsorData.sponsor_id}` : `${process.env.BASE_URL}/2021/sponsor`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: this.modalOpen ? `${this.sponsorData.logo_path}` : `${process.env.BASE_URL}/2021/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: this.modalOpen ? `${this.sponsorData.name} | 贊助商 MOPCON 2021` : '贊助社群 | MOPCON 2021'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: this.modalOpen ? this.sponsorData.about_us : ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: this.modalOpen ? `${this.sponsorData.name} | 贊助商 MOPCON 2021` : '贊助社群 | MOPCON 2021'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: this.modalOpen ? `${this.sponsorData.name} | 贊助商 MOPCON 2021` : '贊助社群 | MOPCON 2021'
        }
      ]
    }
  },
  computed: {
    isPad () {
      return this.innerWidth < 768
    },
    isMobile () {
      return this.innerWidth < 568
    }
  },
  watch: {
    isPad (val) {
      if (!val) {
        this.subNavOpen = false
        this.navOpen = false
      }
    }
  },
  mounted () {
    this.innerWidth = window.innerWidth
    window.addEventListener('resize', this.resize)
  },
  methods: {
    resize () {
      this.innerWidth = window.innerWidth
    },
    openWindow (url) {
      window.open(url)
    },
    openModal (data) {
      const vm = this
      vm.sponsorData = data
      vm.modalOpen = true
    },
    closeModal (show) {
      this.modalOpen = show
    },
    parseSummary (summary) {
      return summary.replace(/\n/gi, '<br>')
    },
    scrollToId (id) {
      const element = document.getElementById(id)
      element.scrollIntoView({ behavior: 'smooth' })
    },
    mailTo () {
      window.open('mailto:sponsor@mopcon.org')
    }
  }
}
</script>

<style lang="scss" scoped>
$bg_map: (
  svg: BruceWayne Hacker Developer Other Star
);
@include bgImg(sponsor);
.line-deco {
  right: 0px;
  position: absolute;
}
.line-deco-first {
  @include screen(sm) {
    top: -80px;
  }
}
.sectionTitle {
  @include flex(normal, row, center);
  margin-bottom: 80px;
  h2 {
    color: rgba(0, 0, 0, 0.87);
    margin: 0 1rem;
  }
  @include screen(sm) {
    @include flex(normal, column, flex-start);
    h2 {
      margin: 2rem 0 0 0;
    }
  }
}
.hidden {
  display: none;
}
.md-show {
  @include screen(md) {
    display: block;
  }
}
.md-hidden {
  @include screen(md) {
    display: none;
  }
}
.pad-show {
  @include screen(pad) {
    display: block;
  }
}
.pad-hidden {
  @include screen(pad) {
    display: none;
  }
}
.sm-show {
  @include screen(sm) {
    display: block;
  }
}
.sm-hidden {
  @include screen(sm) {
    display: none;
  }
}
img {
  max-height: 100%;
  max-width: 100%;
  width: auto;
  height: auto;
  margin: auto;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  position: absolute;
}
h2 {
  font-weight: 600;
  font-size: 2.5rem;
  letter-spacing: 0.12em;
  margin: 0;
}
h4 {
  font-size: 1.5rem;
  font-weight: bold;
  margin-top: 0rem;
  margin-bottom: 0.5rem;
  color: $colorBlack;
}
h5 {
  font-size: 1.25rem;
  font-weight: bold;
  color: $colorBlack;
  margin-top: 0rem;
  margin-bottom: 1rem;
}
h6 {
  font-size: 1.125rem;
  font-weight: bold;
  color: $colorBlack;
  margin-top: 0rem;
  margin-bottom: 0.5rem;
}
.line-tiny {
  background-color: $colorOrange;
  border-color: $colorOrange;
  border-radius: 10px;
  width: 2rem;
  height: 4px;
  margin-top: 1rem;
  margin-bottom: 1rem;
}
.main {
  @include flex(normal, row, center);
  min-height: 100vh;
  @include screen(pad) {
    padding: 150px 24px;
  }
  .vol10-mobile {
    top: 10vh;
  }
  &-content {
    @include flex(normal, column, center);
    width: 100%;
    .title {
      font-weight: bold;
      text-align: center;
      margin: 0.5rem 0;
      font-size: 2.5rem;
      letter-spacing: 0.12em;
    }
    .subTitle {
      width: 85%;
      font-size: 1.25rem;
      margin: 2rem auto;
      text-align: center;
      @include screen(pad) {
        width: 80%;
      }
      @include screen(sm) {
        width: 100%;
      }
    }
    .btn {
      width: 382px;
      transition: all 0.25s;
      background-color: $colorOrange;
      color: $colorWhite;
      border: none;
      font-size: 1.25rem;
      &:hover {
        background-color: $colorOrangeLight;
        border-color: $colorOrange;
      }
      @include screen(sm) {
        width: 100%;
      }
    }
  }
}

.sopOne {
  margin-top: 120px;
  margin-bottom: 120px;
  &-content {
    margin-left: 6%;
    margin-right: 6%;
    @include screen(sm) {
      margin-left: 0;
      margin-right: 0;
    }
    .sponsor {
      &-title {
        @include flex;
        border-bottom: 3px #C4C4C4 solid;
        padding-left: 1.5rem;
        padding-bottom: 0.5rem;
        &-content {
          margin-left: 1rem;
        }
        &-rank {
          @include flex;
          span {
            font-size: 1.25rem;
            font-weight: bold;
            line-height: 1.5rem;
          }
        }
        h3 {
          font-size: 2rem;
          font-weight: 900;
          margin: 0px;
        }
      }
      &-content {
        display: grid;
        grid-template-columns: repeat(3, minmax(0,1fr));
        grid-gap: 1.5rem;
        gap: 1.5rem;
        margin-top: 1.5rem;
        margin-bottom: 7.5rem;
        @include screen(pad) {
          grid-template-columns: repeat(2, minmax(0,1fr));
        }
        @include screen(sm) {
          grid-template-columns: repeat(1, minmax(0,1fr));
        }
        .sponsor-image {
          width: 100%;
          height: 150px;
          background-size: contain;
          @include screen(pad) {
            height: 125px;
          }
          @include screen(pad) {
            height: 100px;
          }
          img {
            padding-right: 1rem;
            padding-left: 1rem;
          }
        }
        &-tiny {
          grid-template-columns: repeat(4, minmax(0,1fr));
          margin-bottom: 5rem;
          @include screen(pad) {
            grid-template-columns: repeat(3, minmax(0,1fr));
            margin-bottom: 3.5rem;
          }
          @include screen(sm) {
            grid-template-columns: repeat(1, minmax(0,1fr));
          }
          .sponsor-image {
            height: 110px;
            @include screen(pad) {
              height: 75px;
            }
            @include screen(sm) {
              height: 60px;
            }
          }
        }
      }
      &-card {
        @include flex(normal, column, center);
        padding: 1rem;
        transition: all 0.2s;
        border: 2px solid transparent;
        cursor: pointer;
        span {
          font-size: 1.25rem;
          margin-top: 0.5rem;
          text-align: center;
        }
        &:hover {
          border: 2px solid $colorOrange;
          border-radius: 10px;
        }
      }
      &-icon {
        width: 62px;
        height: 70px;
        background-size: contain;
      }
      .star-icon {
        width: 20px;
        height: 20px;
      }
    }
  }
}

.sopTwo {
  margin-top: 120px;
  margin-bottom: 120px;
  &-content {
    @include flex(normal, column, center);
    h2 {
      color: $colorOrange;
      @include screen(sm) {
        font-size: 1.5rem;
      }
    }
  }
  &-gain {
    @include flex(space-evenly);
    margin-top: 3rem;
    margin-bottom: 5rem;
    width: 100%;
    @include screen(sm) {
      @include flex(space-evenly, column);
      margin-bottom: 3rem;
    }
    h2 {
      color: $colorPrimary;
      margin-top: 2rem;
      @include screen(sm) {
        margin-top: 0;
        font-size: 1.5rem;
      }
    }
    &-area {
      @include flex(normal, column, center);
      width: 40%;
      p {
        width: 85%;
        text-align: center;
        font-size: 1.25rem;
        @include screen(sm) {
          font-size: 1rem;
        }
      }
      @include screen(md) {
        width: 47%;
      }
      @include screen(sm) {
        width: 100%;
        margin-bottom: 3rem;
      }
    }
    &-image {
      width: 100%;
      height: 270px;
      border-radius: 8px;
      @include screen(sm) {
        height: 200px;
      }
    }
  }
  &-meet {
    @include flex(space-around, row, center);
    margin-top: 3rem;
    margin-bottom: 8rem;
    width: 100%;
    @include screen(md) {
      margin-bottom: 4.5rem;
    }
    @include screen(sm) {
      @include flex(space-around, column, center);
      margin-bottom: 2rem;
    }
    &-content {
      @include flex(center, column, flex-start);
      width: 45%;
      @include screen(sm) {
        width: 100%;
        margin-bottom: 2rem;
      }
      span {
        font-size: 1.25rem;
        line-height: 2.5rem;
        @include screen(sm) {
          font-size: 1rem;
        }
      }
      h4 {
        margin-top: 2rem;
      }
    }
    &-image {
      width: 45%;
      height: 400px;
      border-radius: 8px;
      @include screen(sm) {
        width: 100%;
      }
      img {
        width: 100%;
      }
    }
  }
  &-join {
    @include flex(normal, column, center);
    background-color: #F9F7F7;
    border-radius: 8px;
    width: 95%;
    padding: 3rem;
    .sponsor-icon {
      width: 101px;
      height: 108px;
    }
    .btn {
      font-size: 3rem;
      max-width: 90%;
      width: 780px;
      height: 96px;
      border-radius: 33px;
      transition: all 0.25s;
      background-color: $colorOrange;
      border: none;
      margin-top: 2rem;
      margin-bottom: 2rem;
      @include screen(pad) {
        font-size: 2.5rem;
      }
      @include screen(sm) {
        width: 269px;
        height: 47px;
        font-size: 1.25rem;
      }
      &:hover {
        background-color: $colorOrangeLight;
        border-color: $colorOrange;
        color: $colorPrimary;
      }
    }
    span {
      font-size: 1.25rem;
      text-align: center;
      @include screen(sm) {
        font-size: 1rem;
      }
    }
  }
}

.modal {
  &-title {
    @include flex(flex-start, row, center);
    @include screen(sm) {
      @include flex(center, column, center);
    }
    &-image {
      width: 120px;
      height: 120px;
    }
    &-content {
      margin-left: 1rem;
      @include screen(sm) {
        margin-left: 0rem;
        width: 100%;
      }
      h4 {
        @include screen(sm) {
          margin-left: 0rem;
          margin-top: 1rem;
        }
      }
    }
    &-button {
      @include flex;
      @include screen(sm) {
        @include flex(normal, column);
        margin-top: 2rem;
      }
      .btn-tiny {
        width: 137px;
        height: 27px;
        transition: all 0.25s;
        background-color: $colorOrange;
        color: $colorWhite;
        border: none;
        font-size: 1rem;
        line-height: 1.7rem;
        margin-right: 0.75rem;
        &:hover {
          background-color: $colorOrangeLight;
          border-color: $colorOrange;
        }
        @include screen(sm) {
          width: 100%;
          margin-bottom: 1rem;
        }
      }
    }
  }
  &-body {
    margin-top: 2rem;
    margin-bottom: 3rem;
    p {
      font-size: 1.125rem;
      color: $colorBlack;
      line-height: 2rem;
    }
  }
  &-extend {
    margin-bottom: 2rem;
    &-content {
      @include flex(space-between);
      @include screen(sm) {
        @include flex(normal, column, center);
      }
    }
    &-speaker {
      @include flex;
      &-image {
        width: 115px;
        height: 115px;
        @include screen(pad) {
          width: 136px;
          height: 136px;
          border-radius: 40px;
          overflow: hidden;
          transform: rotate(45deg) scale(0.9);
          img {
            transform: rotate(-45deg) scale(1.2);
          }
        }
      }
      &-content {
        @include flex(center, column);
        margin-left: 2rem;
        span {
          font-size: 1.125rem;
          color: rgba(0, 0, 0, 0.8);
        }
      }
      @include screen(sm) {
        @include flex(normal, column, center);
        &-content {
          @include flex(center, column, center);
          margin-left: 0rem;
          margin-top: 1rem;
        }
      }
    }
    &-session {
      @include flex(center, column);
      span {
        font-size: 1.125rem;
        text-align: center;
        color: rgba(0, 0, 0, 0.8);
      }
      @include screen(sm) {
        @include flex(normal, column, center);
        span {
          line-height: 2rem;
        }
      }
    }
  }
}

</style>
