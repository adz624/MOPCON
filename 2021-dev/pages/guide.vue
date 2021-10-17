<template>
  <div class="guide">
    <section class="">
      <div class="main container">
        <div class="main-content">
          <h1 class="title">
            大會指南
          </h1>
          <p class="subTitle">
            COVID-19 肆虐全球，今年為了大家的安全，首次 MOPCON 改為線上大會的方式，但不要擔心！在科技的幫助下我們與你在線上相見沒有距離。
          </p>
        </div>
        <div class="btn-group">
          <a href="#" class="guide-btn" @click.prevent="scrollToId('see')">
            看議程
          </a>
          <a href="#" class="guide-btn" @click.prevent="scrollToId('visit')">
            逛攤位
          </a>
          <a href="#" class="guide-btn" @click.prevent="scrollToId('find')">
            找交流
          </a>
          <a href="#" class="guide-btn" @click.prevent="scrollToId('playgame')">
            玩遊戲
          </a>
        </div>
      </div>
    </section>
    <div class="line-gray pad-hidden" />
    <!--標籤-->
    <div id="see" class="container">
      <div class="guide-area">
        <section class="sopOne">
          <div class="sopOne-content">
            <div class="sopOne-icon" />
            <h2 class="sectionTitle">
              看議程
            </h2>
          </div>
        </section>
        <div class="guide-card">
          <div class="guide-img">
            <img src="../assets/images/guide/session.png" alt="">
          </div>
          <div class="guide-content">
            <p>今年會透過 Youtube 平台做各軌議程轉播，和親臨現場一樣及時和會眾一起聽大神分享，大會結束後也支援回放，不怕錯過任何議程。哦對了！敬請期待「Mo 孃專屬時段」!」</p>
            <div class="btn-group">
              <a href="https://lihipro.com/mopcon2021/webcta" class="guide-btn">
                購買門票
              </a>
              <a href="https://mopcon.org/2021/schedule" class="guide-btn">
                議程清單
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="visit" class="guide-area second">
      <div class="container">
        <section class="sopOne reverse">
          <div class="sopOne-content">
            <div class="sopOne-icon2" />
            <h2 class="sectionTitle">
              逛攤位
            </h2>
          </div>
        </section>
        <div class="guide-card reverse">
          <div class="guide-img">
            <img src="../assets/images/guide/vendor.png" alt="">
          </div>
          <div class="guide-content">
            <p>您可以在 Gather 太空艙地圖與社群、商業攤位交流，並且可以在 Gather 海灘地圖舉辦或參加 BoF 活動。<br>MOPCON 2021 的線上虛擬會場將對所有人開放一起來參與，無論是否有票，都歡迎您邀請好朋友一起在大會兩天上來見面!</p>
            <div class="btn-group">
              <a href="https://hackmd.io/TTUJtFZCRwqWSlGZtypHzw" class="guide-btn">
                如何使用 GatherTown
              </a>
            </div>
          </div>
        </div>
      </div>
      <h3 class="guide-place-title">
        選擇場地
      </h3>
      <div class="guide-place">
        <a href="https://gather.town/app/mWrzPVJE1RkrlWtz/Main-MOPCON-2021">
          <img src="../assets/images/guide/gather_space.png" alt="太空艙 - 主會場">
        </a>
        <a href="https://gather.town/app/YXEITGTyHFKAOgxF/mopcon21-act">
          <img src="../assets/images/guide/gather_beach.png" alt="海灘 - BoF">
        </a>
      </div>
    </div>
    <div class="container">
      <div id="find" class="guide-area">
        <section class="sopOne">
          <div class="sopOne-content">
            <div class="sopOne-icon3" />
            <h2 class="sectionTitle">
              找人交流、找工作人員
            </h2>
          </div>
        </section>
        <div class="guide-card">
          <div class="guide-img">
            <img src="../assets/images/guide/discord.png" alt="">
          </div>
          <div class="guide-content">
            <p>您可以在 Discord 會場與講師進行 QA，同時也邀請您在 Discord 與其他觀看議程的會眾即時交流討論!<br>我們也將在 Discord 設立一個服務台，若您有票務相關事宜，歡迎您到 Discord 尋找工作人員協助。</p>
            <div class="btn-group">
              <a href="https://discord.gg/6ykDqsmBVt" class="guide-btn long-text">
                Discord 連結 <span class="material-icons icon">
                  open_in_new
                </span>
              </a>
              <a href="https://hackmd.io/k3PSDZstTymscvBegmIiwg" class="guide-btn long-text">
                如何使用 Discord <span class="material-icons icon">
                  open_in_new
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="playgame" class="guide-area last">
        <section class="sopOne reverse">
          <div class="sopOne-content">
            <div class="sopOne-icon4" />
            <h2 class="sectionTitle">
              大地遊戲
            </h2>
          </div>
        </section>
        <div class="guide-card reverse">
          <div class="guide-img">
            <img src="../assets/images/guide/game.png" alt="">
          </div>
          <div class="guide-content">
            <p>
              Mosume 居然被綁架了？
              臭蟲帝國覬覦 MO 國豐厚資產，居然聯合其他王國攻打 MO 國的城堡，
              甚至把 Mosume 俘虜到了臭蟲帝國！
              身為 MO 國護衛軍的你，能成功拯救心愛的 Mosume 嗎？
            </p>
            <ul class="pl-4">
              <li>
                遊戲過程中需搭配 MOPCON Gather Town 地圖，並至指定贊助商及社群攤位中獲取線索。
              </li>
              <li> 在完成遊戲的過程中會有小驚喜，如果能全部完成的話還能額外獲得抽獎資格哦！</li>
            </ul>
            <div class="btn-group">
              <a href="#" class="guide-btn">
                遊戲連結 <span class="material-icons icon">
                  open_in_new
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Guide',
  data () {
    return {

    }
  },
  computed: {

  },
  methods: {
    scrollToId (id) {
      const element = document.getElementById(id)
      element.scrollIntoView({ behavior: 'smooth' })
    }
  }
}
</script>

<style lang="scss" scoped>
.vol10-2 {
  position: relative;
  top: 40vh;
}
.sectionTitle {
  color: rgba(0, 0, 0, 0.87);
  font-weight: 600;
  font-size: 2.5rem;
  letter-spacing: 0.12em;
  margin-top: 1.25rem;
}
.sm-show {
  display: none;
  @include screen(sm) {
    display: block;
  }
}
.pad-show {
  display: none;
  @include screen(pad) {
    display: block;
  }
}
.pad-hidden {
  display: block;
  @include screen(pad) {
    display: none;
  }
}

.main {
  @include flex(center, column, flex-start);
  min-height: 615px;
  @include screen(pad) {
    min-height: unset;
    padding: 150px 24px;
    padding-bottom: 48px;
  }
  .vol10-mobile {
    top: 10vh;
  }
  &-content {
    width: 100%;
    @include screen(pad) {
      margin-left: 2%;
    }
    .title {
      font-weight: bold;
      text-align: left;
      margin: 0.5rem 0;
      font-size: 2.5rem;
      // @include screen(sm) {
      //   font-size: 2rem;
      // }
      .title-orange {
        color: $colorOrange;
      }
    }
    .subTitle {
      width: 60%;
      line-height: 2;
      font-size: 1.25rem;
      text-align: left;
      @include screen(md) {
        width: 80%
      }
      @include screen(pad) {
        line-height: 1.5;
        width: 95%;
      }
      @include screen(sm) {
        width: 100%;
      }
    }
  }
  .agenda-link {
    width: 75%;
    margin: 0 auto;
    border: 2px solid $colorOrange;
    padding: 8px;
    border-radius: 50rem;
    @include flex(space-between, row, center);
    @include screen(pad) {
      width: 100%;
      flex-wrap: wrap;
    }
    @include screen(sm) {
      border-radius: 2rem;
    }
    a {
      display: block;
      border-radius: 50rem;
      text-align: center;
      padding: 16px 40px;
      font-size: 20px;
      &:hover {
        color: $colorWhite;
        background-color: $colorOrange;
      }
      @include screen(pad) {
        padding: 16px 27px;
      }
      @include screen(sm) {
        width: 50%;
      }
    }
  }
}

.sopOne{
  &-content {
    width: 100%;
    display: flex;
    align-items: center;
    @include screen(pad) {
      margin-left: 0%;
    }
    @include screen(sm) {
      align-items: flex-start;
    }
    h2 {
      margin: 0;
      margin-left: 14px;
    }
  }
  &-icon {
    background-image: url('../assets/images/sop01.svg');
    width: 67px;
    height: 48px;
    flex-shrink: 0;
    @include screen(sm) {
      margin-top: 4px;
    }
  }
  &-icon2 {
    background-image: url('../assets/images/sop02.svg');
    width: 67px;
    height: 48px;
    flex-shrink: 0;
    @include screen(sm) {
      margin-top: 4px;
    }
  }
  &-icon3 {
    background-image: url('../assets/images/sop03.svg');
    width: 67px;
    height: 48px;
    flex-shrink: 0;
    @include screen(sm) {
      margin-top: 4px;
    }
  }
  &-icon4 {
    background-image: url('../assets/images/sop04.svg');
    width: 67px;
    height: 48px;
    flex-shrink: 0;
    @include screen(sm) {
      margin-top: 4px;
    }
  }
  &.reverse {
    width: 53%;
    margin-left: auto;
    @include screen(pad) {
      width: 100%;
      margin-left: 0px;
    }
  }
}

.line-deco {
  right: 0px;
  position: absolute;
  background-repeat: no-repeat;
  background-position: center;
  @include screen(sm) {
    width: 100%;
  }
}

.guide {
  .btn-group {
    display: flex;
    margin-top: 16px;
    @include screen(sm) {
      flex-direction: column;
      width: 100%;
    }
  }
  .guide-btn {
    border-radius: 8px;
    background-color: $colorOrange;
    color: $colorWhite;
    border: 0;
    padding: 16px 56px;
    font-size: 20px;
    display: flex;
    align-items: center;
    @include screen(md) {
      padding: 16px 40px;
    }
    @include screen(sm) {
      width: 100%;
      display: block;
      text-align: center;
      margin-bottom: 12px;
    }
    &:hover {
      opacity: 0.8;
    }
    &:not(:last-child) {
      margin-right: 24px;
    }
    .icon {
      color: $colorWhite;
      margin-left: 4px;
      vertical-align: middle;
    }
    &.long-text {
      padding: 16px 36px;
      @include screen(lg) {
        padding: 16px 24px;
      }
      @include screen(md) {
        padding: 16px 40px;
      }
    }
  }
}

.guide-area {
  margin-top: 60px;
  margin-bottom: 60px;
  &.second {
    background-color: #F9F7F7;
    padding: 60px 0px;
    @include screen(sm) {
      padding: 24px 0px;
    }
  }
  @include screen(sm) {
    margin-top: 0px;
    margin-bottom: 24px;
    &.last {
      margin-top: 48px;
      margin-bottom: 48px;
    }
  }
}

.guide-card {
  display: flex;
  margin-top: 32px;
  &.reverse {
    flex-direction: row-reverse;
    .guide-img {
      margin-right: 0px;
      margin-left: 32px;
    }
  }
  .guide-img {
    @include screen(pad) {
      display: none;
    }
    width: 55%;
    margin-right: 32px;
    img {
      max-width: 100%;
    }
  }
  .guide-content {
    width: 45%;
    @include screen(pad) {
      width: 80%;
      margin-right: auto;
    }
    @include screen(sm) {
      width: 100%;
    }
    p {
      margin-top: 0px;
      font-size: 20px;
    }
  }
}
.guide-place-title {
  text-align: center;
  font-size: 24px;
  font-weight: bold;
  margin-top: 32px;
  margin-bottom: 32px;
}
.guide-place {
  display: flex;
  justify-content: center;
  @include screen(sm) {
    overflow-y: auto;
    justify-content: flex-start;
    padding-bottom: 16px;
  }
  a {
    display: block;
    margin: 0px 16px;
    img {
      @include screen(md) {
        width: 240px;
        height: 240px;
      }
      @include screen(pad) {
        width: 200px;
        height: 200px;
      }
    }
  }
}
</style>
