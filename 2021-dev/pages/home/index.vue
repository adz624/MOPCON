<template>
  <div>
    <section class="home-bg">
      <div class="main container">
        <div class="vol10-gray" />
        <div class="main-content">
          <div class="logo-mopcon" />
          <div class="slogan">
            <p>// 線上科技研討會 </p>
            <p> 10/23（六）～10/24（日）</p>
          </div>
          <div class="button-area">
            <button class="btn" @click="openWindow('https://sites.google.com/view/mopcon2020edm?utm_source=edm&utm_medium=edm&utm_campaign=EDM0708&utm_term=edm_sub&fbclid=IwAR0wZqEpf98ZYjwWZGCFaXgBobG1I5WyXaAl2rJQ5rBpcvUmnG6U4nXXhH4&authuser=6')">
              ＋ 追蹤最新消息
            </button>
            <button class="btn" @click="openWindow('https://calendar.google.com/calendar/u/0/r/eventedit?text=MOPCON+2021+%E7%B7%9A%E4%B8%8A%E7%A0%94%E8%A8%8E%E6%9C%83&dates=20211023/20211025&trp=false&sf=true')">
              加入行事曆
            </button>
          </div>
          <div class="collect-area">
            <div class="btn-circle" @click="openWindow('https://lihipro.com/mopcon2021/webcta')">
              <p>{ 盲鳥票 }</p>
              <p>開賣</p>
            </div>
            <div class="growing">
              <p>我們10歲囉</p>
              <span>_Growing With You</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sopOne">
      <div class="sopOne-bg">
        <div class="container">
          <div class="sopOne-area">
            <div class="sopOne-content content-style">
              <div class="sopOne-icon" />
              <h2>今年相約線上見！</h2>
              <p>
                「堅持濁水溪以南」是 MOPCON 十年如一的口號，為了更安全的交流，今年我們將實體大會改以「預錄議程＋直播交流互動」形式呈現，保留多元議程的大會精神，影響力將更不受時空所限！
              </p>
            </div>
            <div class="sopOne-image-area">
              <div class="sopOne-image">
                <div class="image1" />
                <div class="image2" />
              </div>
              <span>2020 年論壇實影</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="line-deco line-deco-first" />
    </div>
    <section class="sopTwo">
      <div class="container">
        <div class="sopTwo-icon" />
        <h2>線上研討會如何進行？</h2>
        <div class="sopTwo-area content-style">
          <div class="sopTwo-item">
            <div class="sopTwo-item-icon icon1" />
            <h3>不限時提問</h3>
            <p>預先錄製議程確保最佳品質<br>議程進行時講者將會即時與會眾互動</p>
          </div>
          <div class="sopTwo-item">
            <div class="sopTwo-item-icon icon2" />
            <h3>7 天不限次數觀看</h3>
            <p>想回味的、錯過的議程<br>購票會眾可於 7 天內重複觀看</p>
          </div>
          <div class="sopTwo-item">
            <div class="sopTwo-item-icon icon3" />
            <h3>絕不錯過議程</h3>
            <p>自由規劃議程收看時刻表<br>專屬助理 Mo 孃將即時提醒你前往</p>
          </div>
        </div>
      </div>
    </section>
    <div v-if="isPad" class="container">
      <div class="line-deco" />
    </div>
    <section class="sopThree">
      <div class="container content-style">
        <div class="sopThree-area">
          <div class="sopThree-main">
            <div class="vol10-gray" />
            <div class="sopThree-content">
              <div class="sopThree-icon" />
              <h2>期待Mo孃的大變身</h2>
              <div class="description">
                <p>誕生於濁水溪以南的可愛女子，今年 8 歲了！</p>
                <p>回顧每年的成長，深深覺得養成一個孩子真的不容易。</p>
                <p>今年 Mo 孃將結合新科技，<br>以更「立體」的形式與大家見面囉！</p>
              </div>
            </div>
          </div>
          <div class="sopThree-mo">
            <div class="sopThree-mo-image" />
          </div>
        </div>
        <span>ＭＯ孃也很期待！</span>
      </div>
    </section>
    <div class="line-gray" />
    <section class="home-bg-lock">
      <div class="lock container">
        <div class="lock-icon" />
        <h1>{ 內容預備解鎖... }</h1>
        <div class="vol10-org" />
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'Home',
  data () {
    return {
      innerWidth: null
    }
  },
  computed: {
    isPad () {
      return this.innerWidth < 768
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
    }
  }
}
</script>

<style lang="scss" scoped>
section {
  h1 {
    font-weight: 600;
    font-size: 3rem;
    @include screen(sm) {
      font-size: 2rem;
    }
  }
  h2 {
    color: $colorGrayDark;
    font-weight: 600;
    font-size: 2.5rem;
    letter-spacing: 0.12em;
  }
  h3 {
    color: $colorPrimary;
    font-weight: 600;
    font-size: 1.5rem;
  }
  .content-style {
    p {
      color: $colorPrimary;
      font-size: 1.25rem;
    }
    span {
      color: $colorGrayLight;
    }
  }
}
.line-deco {
  right: 0px;
  position: absolute;
}
.line-deco-first {
  @include screen(sm) {
    top: -80px;
  }
}
.main {
  @include flex;
  min-height: 100vh;
  padding-top: 25vh;
  padding-bottom: 10vh;
  @include screen(pad) {
    min-height: unset;
    padding-top: 180px;
    padding-bottom: 50px;
  }
  @include screen(sm) {
    padding-top: 120px;
    padding-bottom: 120px;
  }
  .vol10-gray {
    @include screen(pad) {
      display: none;
    }
  }
  &-content {
    width: 100%;
    margin-left: 6%;
    @include screen(pad) {
      margin-left: 2%;
    }
    .slogan {
      @include flex;
      margin-top: 28px;
      @include screen(pad) {
        margin-top: 8px;
      }
      @include screen(sm) {
        flex-direction: column;
        margin-top: 20px;
      }
      p {
        color: $colorOrange;
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-right: 8px;
      }
    }
    .button-area {
      margin-top: 48px;
      @include screen(pad) {
        margin-top: 35px;
      }
      @include screen(sm) {
        margin-top: 70px;
      }
    }
    .btn {
      & ~ .btn {
        margin-left: 16px;
        @include screen(sm) {
          margin-left: 0px;
        }
      }
      @include screen(sm) {
        margin-bottom: 16px;
      }
    }
    .collect-area {
      @include flex(space-between);
      margin-top: 20vh;
      @include screen(pad) {
        margin-top: 150px;
      }
      @include screen(sm) {
        @include flex(space-between, column);
        margin-top: 0px;
      }
      .btn-circle {
        position: fixed;
        right: calc((100vw - 1280px)/2);
        z-index: 99;
        @media (max-width: 1280px){
          right: 24px;
        }
        @include screen(sm) {
          position: relative;
          right: auto;
          @include flex(center, row, center);
          width: 96%;
          line-height: 3rem;
          height: 3.4rem;
          p {
            font-weight: bold;
            font-size: 1rem;
            & ~ p {
              margin-left: 5px;
            }
          }
        }
      }
      .growing {
        text-align: left;
        @include screen(pad) {
          padding-top: 35px;
        }
        @include screen(sm) {
          text-align: right;
          padding-top: 80px;
        }
        p {
          font-family: Noto Sans;
          font-weight: 600;
          font-size: 2.5rem;
          letter-spacing: 0.12em;
          margin-top: 8px;
          margin-bottom: 0px;
          color: $colorOrange;
          @include screen(pad) {
            font-size: 1.5rem;
          }
        }
        span {
          font-family: Noto Sans;
          font-weight: 600;
          font-size: 2.5rem;
          margin-top: 16px;
          margin-bottom: 16px;
          @include screen(pad) {
            font-size: 1.5rem;
          }
        }
      }
    }
  }
}

.sopOne{
  margin-top: 100px;
  margin-bottom: 100px;
  @include screen(sm) {
    margin-top: 50px;
  }
  &:before {
    content: '';
    background-color: rgba(239, 234, 235, 0.3);
    width: 100%;
    height: calc(100% + 100px);
    top: -100px;
    left: -25%;
    position: absolute;
    @include screen(lg) {
      left: 5%;
      height: calc(100% + 120px);
    }
    @include screen(sm) {
      height: calc(100% + 170px);
    }
  }
  &-bg:before {
    content: '';
    background-color: #EFEAEB;
    width: 70%;
    height: calc(100% + 70px);
    top: -50px;
    position: absolute;
    @include screen(lg) {
      width: 75%;
      height: calc(100% + 100px);
    }
    @include screen(sm) {
      width: 100%;
    }
  }
  &-area {
    @include flex(space-between);
  }
  &-content {
    @include flex(normal, column);
    width: 410px;
    margin-left: 8.3333333333%;
    margin-right: 18px;
    @include screen(md) {
      margin-left: 0px;
      width: 370px;
    }
    @include screen(pad) {
      margin-left: 0px;
      margin-right: 15px;
    }
    @include screen(sm) {
      width: 100%;
    }
    h2 {
      margin-top: 32px;
      margin-bottom: 0px;
    }
    p {
      margin-top: 32px;
    }
  }
  &-icon {
    background-image: url('../../assets/home/sop01.svg');
    width: 67px;
    height: 48px;
  }
  &-image-area {
    @include flex(normal, column, flex-end);
    @include screen(sm) {
      display: none;
    }
    span {
      color: $colorGrayLight;
      margin-top: 10px;
      font-size: 1.25rem;
    }
  }
  &-image {
    @include flex;
    .image1 {
      background-image: url('../../assets/home/sop01-image1.png');
      width: 193px;
      height: 400px;
      border-radius: 8px;
      margin-right: 20px;
      @include screen(lg) {
        height: 374px;
      }
      @include screen(md) {
        display: none;
      }
    }
    .image2 {
      background-image: url('../../assets/home/sop01-image2.png');
      width: 411px;
      height: 400px;
      border-radius: 8px;
      @include screen(lg) {
        width: 334px;
        height: 374px;
      }
      @include screen(pad) {
        width: 300px;
      }
    }
  }
}

.sopTwo {
  // margin-top: 100px;
  &-icon {
    background-image: url('../../assets/home/sop02.svg');
    width: 67px;
    height: 48px;
  }
  h2 {
    margin-top: 32px;
  }
  &-area {
    @include flex(space-around);
    flex-wrap: wrap;
    margin-top: 100px;
    @include screen(md) {
      margin-top: 50px;
    }
    @include screen(pad) {
      margin-top: 40px;
    }
  }
  &-item {
    @include flex(normal, column, center);
    width: 340px;
    margin-bottom: 100px;
    @include screen(xs) {
      width: 90%;
    }
    .icon1 {
      background-image: url('../../assets/home/sop02-icon1.svg');
    }
    .icon2 {
      background-image: url('../../assets/home/sop02-icon2.svg');
    }
    .icon3 {
      background-image: url('../../assets/home/sop02-icon3.svg');
    }
    &-icon {
      width: 120px;
      height: 120px;
    }
    h3 {
      margin-top: 24px;
      margin-bottom: 0px;
    }
    p {
      text-align: center;
      margin-top: 10px;
      margin-bottom: 0px;
    }
  }
}
.sopThree {
  margin-top: 100px;
  margin-bottom: 80px;
  @include screen(pad) {
    margin-top: 50px;
  }
  &-area {
    @include flex(space-between);
    @include screen(pad) {
      @include flex(normal, column);
    }
  }
  &-main {
    @include flex;
    width: 45%;
    @include screen(pad) {
      width: 100%;
    }
    .vol10-gray {
      @include screen(md) {
        display: none;
      }
    }
  }
  &-content {
    width: 100%;
    margin-left: 15.33333%;
    @include screen(md) {
      margin-left: 0%;
    }
    h2 {
      margin-top: 32px;
      margin-bottom: 0px;
    }
    .description {
      margin-top: 32px;
    }
  }
  &-icon {
    background-image: url('../../assets/home/sop03.svg');
    width: 67px;
    height: 48px;
  }
  &-mo {
    width: 50%;
    height: 760px;
    @include screen(pad) {
      width: 100%;
      margin-top: 50px;
      height: 483px;
    }
    &:before {
      content: '';
      background-color: rgba(239, 234, 235, 0.3);
      width: 120%;
      height: 92%;
      left: 5%;
      position: absolute;
      @include screen(pad) {
        height: 70%;
        top: 80px;
        left: 0%;
      }
    }
    &-image {
      width: 100%;
      height: 100%;
      &:before {
        content: '';
        background-color: #EFEAEB;
        width: 100%;
        height: 92%;
        top: -6%;
        left: 12%;
        position: absolute;
        @include screen(pad) {
          height: 70%;
          top: 50px;
          left: 7%;
        }
      }
      &:after {
        content: '';
        position: absolute;
        background-image: url('../../assets/home/sop03-mo.png');
        background-repeat: no-repeat;
        background-position: center;
        width: 402px;
        height: 738px;
        right: calc((50% - 220px));
        @include screen(pad) {
          right: calc((50% - 215px));
          background-size: 65%;
          height: 483px;
        }
      }
    }
  }
  span {
    display: none;
    @include screen(md) {
      position: absolute;
      bottom: 50px;
      display: block;
    }
    @include screen(pad) {
      bottom: 35px;
    }
  }
}
.lock {
  @include flex(center, column, center);
  min-height: calc(100vh - 140px);
  @include screen(pad) {
    min-height: calc(100vh - 171px);
  }
  &-icon {
    background-image: url('../../assets/home/lock.svg');
    width: 92px;
    height: 92px;
  }
}
</style>
