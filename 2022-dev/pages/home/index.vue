<template>
  <div>
    <section id="hero" class="pt-8 pb-6">
      <div class="container main pb-5">
        <div class="content mt-md-10">
          <h1>{{ $t('pages.home.title') }}</h1>
          <h2>{{ $t('pages.home.subTitle') }}</h2>
          <p>
            {{ $t('pages.home.intro.1') }}
          </p>
          <p>
            {{ $t('pages.home.intro.2') }}
          </p>
          <div class="button-area mt-15 mt-md-6 pt-6">
            <a class="btn btn-pink mr-10 mb-md-6" href="./ticket">
              <client-only><span class="iconify" data-icon="carbon:recommend" /></client-only>
              {{ $t('pages.home.heroImgBtn.1') }}
            </a>
            <a class="btn btn-pink" href="./schedule">
              <client-only><span class="iconify" data-icon="akar-icons:circle-check-fill" /></client-only>
              {{ $t('pages.home.heroImgBtn.2') }}
            </a>
          </div>
        </div>
        <div class="banner ml-5 ml-md-0">
          <img src="../../assets/images/home/image_banner.png" alt="banner image">
        </div>
      </div>
    </section>
    <section id="speaker" class="pt-8 pb-14">
      <div class="container">
        <h2 class="mb-15">
          {{ $t('pages.home.speaker.title') }}
        </h2>
        <div class="content pt-5">
          <div v-for="speaker in speakerList" :key="speaker.id" class="speaker-area">
            <img :src="speaker.img" alt="speaker">
            <h3 class="mt-4 mb-4">
              {{ speaker.name }}
            </h3>
            <p class="m-0">
              {{ speaker.company }}
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="schedule" class="pt-8 pb-14">
      <div class="container">
        <h2 class="mb-5">
          {{ $t('pages.home.schedule.title') }}
        </h2>
        <p class="mb-5">
          {{ $t('pages.home.schedule.intro.1') }}
          <br><br>
          {{ $t('pages.home.schedule.intro.2') }}
          <br>
          {{ $t('pages.home.schedule.intro.3') }}
        </p>
        <div class="content pt-15">
          <div class="schedule-area pb-15">
            <div class="schedule-img">
              <img src="../../assets/images/home/schedule-1.png" alt="schedule">
              <span class="mt-3">
                {{ $t('pages.home.schedule.1.imageTitle') }}
              </span>
            </div>
            <div class="schedule-content ml-15 ml-sm-0 mt-sm-4">
              <h3 class="mt-0 mb-0">
                {{ $t('pages.home.schedule.1.title') }}
                <br class="hidden sm-show">
                {{ $t('pages.home.schedule.1.subTitle') }}
              </h3>
              <p class="mt-4">
                {{ $t('pages.home.schedule.1.intro') }}
              </p>
            </div>
          </div>
          <div class="schedule-area mt-10 pb-15">
            <div class="schedule-img">
              <img src="../../assets/images/home/schedule-2.png" alt="schedule">
              <span class="mt-3">
                {{ $t('pages.home.schedule.2.imageTitle') }}
              </span>
            </div>
            <div class="schedule-content ml-15 ml-sm-0 mt-sm-4">
              <h3 class="mt-0 mb-0">
                {{ $t('pages.home.schedule.2.title') }}
                <br class="hidden sm-show">
                {{ $t('pages.home.schedule.2.subTitle') }}
              </h3>
              <p class="mt-4">
                {{ $t('pages.home.schedule.2.intro') }}
              </p>
            </div>
          </div>
          <div class="schedule-area mt-10 pb-15">
            <div class="schedule-img">
              <img src="../../assets/images/home/schedule-3.png" alt="schedule">
              <span class="mt-3">
                {{ $t('pages.home.schedule.3.imageTitle') }}
              </span>
            </div>
            <div class="schedule-content ml-15 ml-sm-0 mt-sm-4">
              <h3 class="mt-0 mb-0">
                {{ $t('pages.home.schedule.3.title') }}
                <br class="hidden sm-show">
                {{ $t('pages.home.schedule.3.subTitle') }}
              </h3>
              <p class="mt-4">
                {{ $t('pages.home.schedule.3.intro') }}
              </p>
            </div>
          </div>
          <div class="button-area">
            <a href="schedule" class="btn btn-primary">
              <client-only><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></client-only>
              {{ $t('pages.home.btn.schedule') }}
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="mo" class="pt-14 pb-14">
      <div class="container mo-area">
        <div class="mo-content">
          <h2 class="mt-0 mb-4 mt-md-8">
            {{ $t('pages.home.mo.title') }}
          </h2>
          <p>
            {{ $t('pages.home.mo.intro.1') }}<br><br>
            {{ $t('pages.home.mo.intro.2') }}<br><br>
            {{ $t('pages.home.mo.intro.3') }}<span class="ml-2" style="color: red;">❤</span>
          </p>
          <div class="btn-area mt-6 mt-md-8">
            <div class="btn btn-primary" @click="openWindow('https://www.youtube.com/channel/UCFpr5TjvP6tFqccS_oTfWHw/about')">
              {{ $t('pages.home.mo.btn.youtube') }}
            </div>
            <div class="btn btn-primary" @click="openWindow('https://www.instagram.com/mopcon.tw/')">
              {{ $t('pages.home.mo.btn.instagram') }}
            </div>
            <div v-if="false" class="btn btn-primary" @click="openWindow('')">
              {{ $t('pages.home.mo.btn.mo') }}
            </div>
          </div>
        </div>
        <div class="mo-image" />
      </div>
    </section>
    <section id="traffic" class="pt-8 pb-8 pr-10 pl-10 pr-sm-0 pl-sm-0">
      <div class="container box pb-15 pr-4 pl-4 pb-sm-0">
        <h2 class="mb-5">
          {{ $t('pages.home.traffic.title') }}
        </h2>
        <div class="content">
          <div class="traffic-img-area">
            <div class="traffic-img">
              <img class="pad-hidden" src="../../assets/images/home/traffic-1.png" alt="schedule">
              <img class="hidden pad-show sm-hidden" src="../../assets/images/home/traffic-m-1.png" alt="schedule">
              <img class="hidden sm-show" src="../../assets/images/home/traffic-s-1.png" alt="schedule">
            </div>
            <div class="traffic-img-sub-area mt-3">
              <div class="traffic-img">
                <img class="pad-hidden" src="../../assets/images/home/traffic-2.png" alt="schedule">
                <img class="hidden pad-show sm-hidden" src="../../assets/images/home/traffic-m-2.png" alt="schedule">
                <img class="hidden sm-show" src="../../assets/images/home/traffic-s-2.png" alt="schedule">
              </div>
              <div class="traffic-img ml-6 ml-sm-0 mt-sm-3">
                <img class="pad-hidden" src="../../assets/images/home/traffic-3.png" alt="schedule">
                <img class="hidden pad-show sm-hidden" src="../../assets/images/home/traffic-m-3.png" alt="schedule">
                <img class="hidden sm-show" src="../../assets/images/home/traffic-s-3.png" alt="schedule">
              </div>
            </div>
          </div>
          <div class="traffic-content-area">
            <h3 class="mb-3">
              {{ $t('pages.home.traffic.bus') }}
            </h3>
            <p class="mb-5">
              {{ $t('pages.home.traffic.busIntro') }}
            </p>
            <h3 class="mb-3">
              {{ $t('pages.home.traffic.thsr') }}
            </h3>
            <p class="mb-5">
              {{ $t('pages.home.traffic.thsrIntro') }}
            </p>
            <h3 class="mb-3">
              {{ $t('pages.home.traffic.tra') }}
            </h3>
            <p class="mb-5">
              {{ $t('pages.home.traffic.traIntro') }}
            </p>
            <h3 class="mb-3">
              {{ $t('pages.home.traffic.mrt') }}
            </h3>
            <p class="mb-5">
              {{ $t('pages.home.traffic.mrtIntro') }}
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="sponsor" class="pb-8">
      <div class="container">
        <div v-swiper="swiperOption" class="ml-auto relative" :loadtheme="false">
          <div class="swiper-wrapper">
            <div v-for="(data, index) in sponsorLogoList" :key="'sponsor_logo' + index" class="swiper-slide">
              <img :src="data" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import { directive } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'
export default {
  name: 'HomePage',
  directives: {
    swiper: directive
  },
  data () {
    return {
      nowDropdownOpen: '',
      innerWidth: null,
      modalOpen: false,
      speakerList: [
        {
          id: 1,
          name: 'Sam Huang',
          company: 'RevtelTech 忻旅科技 / Co-Founder',
          img: 'assets/images/home/speaker-1.png'
        },
        {
          id: 2,
          name: '范聖佑',
          company: 'JetBrains Developer Advocate',
          img: 'assets/images/home/speaker-2.png'
        },
        {
          id: 3,
          name: 'wiwi',
          company: 'tits technology / 前端打工仔',
          img: 'assets/images/home/speaker-3.png'
        },
        {
          id: 4,
          name: '楊博荏',
          company: 'FANSI & MetaBoom / Product Head',
          img: 'assets/images/home/speaker-4.png'
        },
        {
          id: 5,
          name: 'York Chang',
          company: 'Engineer',
          img: 'assets/images/home/speaker-5.png'
        },
        {
          id: 6,
          name: 'John Lu',
          company: '時刻科技股份有限公司 Android Developer',
          img: 'assets/images/home/speaker-6.png'
        },
        {
          id: 7,
          name: 'Marvin Lin',
          company: 'CMoney',
          img: 'assets/images/home/speaker-7.png'
        },
        {
          id: 8,
          name: 'Mike',
          company: 'Taipei HakerSpace 常務理事 / BitoPro App工程師',
          img: 'assets/images/home/speaker-8.png'
        }
      ],
      swiperOption: {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: false
        },
        breakpoints: {
          1024: {
            slidesPerView: 5,
            spaceBetween: 20
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 10
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 10
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }
      },
      sponsorLogoList: [
        'assets/images/home/logo_banner_0.png?v=2',
        'assets/images/home/logo_banner_1.png?v=2',
        'assets/images/home/logo_banner_2.png?v=2',
        'assets/images/home/logo_banner_3.png?v=2',
        'assets/images/home/logo_banner_4.png?v=2',
        'assets/images/home/logo_banner_5.png?v=2',
        'assets/images/home/logo_banner_6.png?v=2',
        'assets/images/home/logo_banner_7.png?v=2',
        'assets/images/home/logo_banner_8.png?v=2',
        'assets/images/home/logo_banner_9.png?v=2',
        'assets/images/home/logo_banner_10.png?v=2',
        'assets/images/home/logo_banner_11.png?v=2',
        'assets/images/home/logo_banner_12.png?v=2',
        'assets/images/home/logo_banner_13.png?v=2',
        'assets/images/home/logo_banner_14.png?v=2',
        'assets/images/home/logo_banner_15.png?v=2',
        'assets/images/home/logo_banner_16.png?v=2',
        'assets/images/home/logo_banner_17.png?v=2'
      ]
    }
  },
  computed: {
    isMobile () {
      return this.innerWidth < 568
    }
  },
  mounted () {
    this.innerWidth = window.innerWidth
    window.addEventListener('resize', this.resize)
  },
  destroyed () {
    window.removeEventListener('resize', this.resize)
  },
  methods: {
    resize () {
      this.innerWidth = window.innerWidth
    },
    openWindow (url) {
      window.open(url)
    }
  }
}
</script>

<style lang="scss" scoped>
.hidden {
  display: none;
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
#hero {
  background-color: #0074A2;
  background-image: url('../../assets/images/banner.svg');
  background-position-x: center;
  background-position-y: bottom;
  background-repeat: no-repeat;
  background-size: cover;
  @include screen(md) {
    background-size: contain;
  }
  @include screen(pad) {
    background-image: url('../../assets/images/banner_short_ipad.svg');
  }
  @include screen(sm) {
    background-image: url('../../assets/images/banner_short_mobile.svg');
  }
  h1 {
    @include font(40px, $colorWhite, bold);
  }
  h2 {
    @include font(1.5rem, $colorWhite);
    text-decoration-line: underline;
    text-underline-offset: 3px;
  }
  p {
    @include font(1rem, $colorWhite);
    text-align: justify;
    & + p {
      margin-top: 1.5rem;
    }
  }
  .main {
    @include flex(space-between);
    .content {
      width: 100%;
    }
    .button-area {
      @include flex;
      .btn svg {
        font-size: 1.5rem;
        top: 4px;
      }
      @include screen(md) {
        @include flex(normal, column);
        .btn-pink {
          width: 100%;
        }
      }
    }
    .banner {
      @include flex(center, row, center);
      width: 100%;
      img {
        width: 100%;
      }
    }
    @include screen(md) {
      @include flex(normal, column-reverse);
      img {
        max-width: 650px;
      }
    }
  }
}

#speaker {
  background: $colorWhite;
  h2 {
    @include font(2.5rem, $colorPrimary, bold);
    text-align: center;
  }
  .content {
    @include flex;
    flex-wrap: wrap;
  }
  .speaker-area {
    @include flex(normal, column, center);
    width: 25%;
    padding: 1rem 1.5rem;
    @include screen(md) {
      width: 50%;
    }
    @include screen(sm) {
      width: 100%;
    }
    img {
      max-width: 213px;
      width: 95%;
      border-radius: 50%;
    }
    h3 {
      @include font(2rem, $colorPrimary, bold);
    }
    p {
      color: $colorBlueLight;
      text-align: center;
    }
  }
}

#schedule {
  background: $colorWhite;
  h2 {
    @include font(2.5rem, $colorPrimary, bold);
    text-align: center;
  }
  p {
    color: $colorBlueLight;
    text-align: center;
  }
  .button-area {
    @include flex(center);
    a svg {
      font-size: 1.5rem;
      top: 3px;
    }
    @include screen(sm) {
      .btn {
        width: auto;
      }
    }
  }
  .schedule-area {
    @include flex(normal, row, center);
    @include screen(sm) {
      @include flex(normal, column, center);
    }
    .schedule-img {
      @include flex(normal, column, center);
      img {
        max-width: 190px;
        width: 95%;
        @include screen(sm) {
          max-width: 130px;
        }
      }
      span {
        color: $colorBlack;
      }
    }
    .schedule-content {
      @include flex(space-between, column);
      width: 75%;
      h3 {
        @include font(2rem, $colorPrimary, bold);
        line-height: 2.5rem;
      }
      p {
        text-align: left;
      }
      @include screen(sm) {
        width: 100%;
        &, p{
          text-align: center;
        }
      }
    }
  }
}

#mo {
  background: $colorWhite;
  h2 {
    @include font(2.5rem, $colorPrimary, bold);
  }
  p {
    @include font(1rem, $colorBlueLight)
  }
  .mo-area {
    @include flex(space-around, row, center);
    .mo-content {
      width: 60%;
      .btn-area {
        @include flex(space-around);
      }
    }
    .mo-image {
      width: 396px;
      height: 248px;
      margin-left: 0.5rem;
      background: url('../../assets/images/home/mo.jpg');
      background-size: cover;
      border-radius: 298.5px;
      background-position-y: center;
    }
  }
  @include screen(md) {
    h2 {
      text-align: center;
    }
    .mo-area {
      @include flex(normal, column-reverse, center);
      .mo-content {
        width: 85%;
      }
      .mo-image {
        width: 464px;
        height: 290px;
      }
    }
  }
  @include screen(pad) {
    .mo-area {
      .mo-content {
        width: 90%;
        .btn-area {
          @include flex(normal, column, center);
          .btn {
            width: 205px;
            margin-bottom: 1rem;
          }
        }
      }
    }
  }
  @include screen(sm) {
    .mo-area {
      .mo-image {
        width: 263px;
        height: 164px;
      }
    }
  }
}

#traffic {
  background: $colorWhite;
  .box {
    border: 1px #0074A2 solid;
    border-radius: 94px;
    @include screen(sm) {
      border-width: 0px;
    }
  }
  h2 {
    @include font(2.5rem, $colorPrimary, bold);
    text-align: center;
  }
  h3 {
    @include font(1.5rem, $colorPrimary, bold);
  }
  .sub-title {
    color: $colorBlueLight;
    text-align: center;
  }
  .content {
    @include flex(space-around, row, center);
    .traffic-img-area {
      width: 50%;
      img {
        width: 100%;
        border-radius: 16px;
      }
      .traffic-img-sub-area {
        @include flex(space-between);
        @include screen(sm) {
          @include flex(space-between, column);
        }
      }
    }
    .traffic-content-area {
      width: 40%;
      p {
        color: $colorBlack;
      }
      @include screen(sm) {
        text-align: center;
      }
    }
    @include screen(sm) {
      @include flex(space-around, column);
      .traffic-img-area, .traffic-content-area {
        width: 100%;
      }
    }
  }
}

#sponsor {
  background: $colorWhite;
  .swiper-wrapper {
    -webkit-transition-timing-function: linear !important;
    -o-transition-timing-function: linear !important;
    transition-timing-function: linear !important;
  }
  .swiper-slide {
    width: auto;
  }
  .img-fluid {
    max-width: 100%;
    display: block;
    margin: auto;
  }
}
</style>
