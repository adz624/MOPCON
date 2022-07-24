<template>
  <div @click="toggleDropdown('', $event)">
    <section id="hero" class="pt-8 pb-15 pb-md-6">
      <div class="container main pb-5">
        <div class="content mt-md-10">
          <h1>啟動 2022 Next Giant Conf</h1>
          <p>
            MOPCON (Mobile Open Platform Conference)行動科技年會，是南台灣最具有指標性的軟體科技研討會。
            回顧過去十年，我們堅持在濁水溪以南，積極鼓勵探討前沿技術、實務歷程及在地產業經驗的分享，提供在地社群運作潛力，並打造企業與科技人的優質互動環境。
          </p>
          <p>
            今年，我們以「 Next Giant Conf 」為號召，透過來自各種產業的夥伴，分享不同領域的技術與實務經驗，帶來更多創新想法，帶入發展新觀點，共同為行動服務締造無限可能。
          </p>
          <div class="button-area mt-15 mt-md-6 pt-6">
            <div class="btn btn-pink mr-10 mb-md-6" @click="openWindow('https://reurl.cc/GxQ5bD')">
              <no-ssr><span class="iconify" data-icon="carbon:recommend" /></no-ssr>
              成為講者
            </div>
            <div class="btn btn-pink" @click="openWindow('https://reurl.cc/DyeK6R')">
              <no-ssr><span class="iconify" data-icon="akar-icons:circle-check-fill" /></no-ssr>
              推薦講者
            </div>
          </div>
        </div>
        <div class="banner ml-5 ml-md-0">
          <img src="../../assets/images/home/image_banner.png" alt="banner image">
        </div>
      </div>
    </section>
    <section id="history" class="pt-8 pb-14">
      <div class="container">
        <h2>歷年資料</h2>
        <div class="history-2021 mb-15">
          <div class="content">
            <h3>2021 Mobile x AioT</h3>
            <p>
              MOPCON 2021年精神意涵" Growing with you"<br>
              時逢第十周年，主題聚焦 Mobile 與 AIoT，以與您一同成長的心情，締造最多老朋友、新同學線上見面實績！
            </p>
            <div class="button-area">
              <div class="btn btn-primary" @click="openWindow('https://mopcon.org/2021/')">
                <no-ssr><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></no-ssr>
                進入網站
              </div>
            </div>
          </div>
          <div class="image">
            <img src="../../assets/images/home/2021.png" alt="2021 image">
          </div>
        </div>
        <div class="history-2020 mb-15">
          <div class="content">
            <h3>2020 社會參與、遠距職場、數位轉型</h3>
            <p>
              MOPCON 2020年精神意涵 “ $｛ con ｝ With Us ! "<br>
              在面臨全球疫情與產業巨變的2020年，我們站在 What MOPCON can help？的角度，以「社會參與」、「數位轉型」與「遠距職場」為三大主軸，搭配行動科技的核心理念，完成南部科技產業交流的知識盛會！
            </p>
            <div class="button-area">
              <div class="mr-10 mr-sm-0 mb-sm-6">
                <div class="btn" name="2020" @click="toggleDropdown('2020', $event)">
                  <no-ssr><span class="iconify" data-icon="ep:arrow-down-bold" /></no-ssr>
                  活動花絮
                </div>
                <div class="dropdown" :class="{'active': nowDropdownOpen === '2020'}">
                  <ul>
                    <li><a href="https://photos.app.goo.gl/iv5XLYf5J8mUz7Ka9" target="_blank">第一天</a></li>
                    <li><a href="https://photos.app.goo.gl/wCtHc9VYPqGRSC7k9" target="_blank">第二天</a></li>
                    <li><a href="https://photos.app.goo.gl/2snqVCqgKD2jY5Qc6" target="_blank">晚宴</a></li>
                  </ul>
                </div>
              </div>
              <div class="btn btn-primary" @click="openWindow('https://mopcon.org/2020/')">
                <no-ssr><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></no-ssr>
                進入網站
              </div>
            </div>
          </div>
          <div class="image">
            <img src="../../assets/images/home/2020.png" alt="2020 image">
          </div>
        </div>
        <div class="history-button pt-15">
          <a class="btn btn-primary" href="/timeMachine">
            <no-ssr><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></no-ssr>
            更多歷年介紹
          </a>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'HomePage',
  data () {
    return {
      nowDropdownOpen: ''
    }
  },
  methods: {
    openWindow (url) {
      window.open(url)
    },
    toggleDropdown (name, event) {
      const hasDropdown = event.target.closest('.dropdown') !== null
      if (hasDropdown) {
        return
      }
      const attrName = event.target.getAttribute('name')
      if (attrName === null || attrName === name || (attrName !== name && (attrName === 2021 || attrName === 2020))) {
        this.nowDropdownOpen = this.nowDropdownOpen === name ? '' : name
      }
    }
  }
}
</script>

<style lang="scss" scoped>
#hero {
  background-color: #0074A2;
  h1 {
    @include font(40px, $colorWhite, bold);
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

#history {
  background: $colorWhite;
  h2 {
    @include font(40px, $colorPrimary, bold);
    text-align: center;
  }
  h3 {
    @include font(40px, $colorPrimary, bold);
  }
  p {
    height: 240px;
    color: $colorBlueLight;
  }
  .content {
    width: 55%;
  }
  .image {
    @include flex(center, row, center);
    width: 35%;
  }
  .button-area {
    @include flex;
    .btn svg {
      font-size: 20px;
      top: 4px;
    }
  }
  .dropdown {
    width: 100%;
    left: 0;
    position: absolute;
    border: $colorPrimaryLight solid 2px;
    border-radius: 2rem;
    background-color: white;
    z-index: 10;
    display: none;
    &.active {
      display: block;
    }
    ul {
      @include flex(normal, column, center);
      padding-left: 0;
      list-style: none;
      li {
        a {
          font-size: 1.25rem;
          color: $colorPrimary;
          &:hover {
            color: $colorPrimaryLight;
          }
        }
        & + li {
          margin-top: 0.5rem;
        }
      }
    }
  }
  .history-2021 {
    @include flex(space-between, row, center);
  }
  .history-2020 {
    @include flex(space-between, row-reverse, center);
  }
  .history-2021, .history-2020 {
    img {
      width: 100%;
    }
  }
  .history-button {
    @include flex(center);
  }
  @include screen(md) {
    .content, .image {
      width: 100%;
    }
    .history-2021, .history-2020 {
      @include flex(normal, column-reverse, center);
      img {
        max-width: 464px;
      }
    }
    .button-area {
      @include flex(flex-end);
    }
  }
  @include screen(sm) {
    .button-area {
      @include flex(normal, column);
    }
  }
}
</style>
