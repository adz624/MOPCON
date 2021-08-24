<template>
  <div>
    <section class="home-bg">
      <div class="main container">
        <div class="vol10-gray pad-hidden" />
        <div class="main-content">
          <h1 class="title">
            <p class="title-orange">
              _Growing With You
            </p>
            <p>現在就跟我們<br class="sm-show"> 一起參與這場盛會</p>
          </h1>
          <p class="subTitle">
            不管你是新手入村，還是專家級高手，都歡迎共同參與每天精彩的議程。我們針對不同族群需求，開出各種票種，就是希望每個人都可以找到最適合自己的方案，年輕學生可以選擇以划算價格來現場見到心中的大神，或你是超級 VIP，就可以享有更多好康。
          </p>
        </div>
      </div>
    </section>
    <div class="line-gray" />
    <div class="ticket">
      <section class="sopOne container">
        <div class="vol10-gray vol10-2 pad-hidden" />
        <div class="sopOne-content">
          <div class="sopOne-icon" />
          <h2 class="sectionTitle">
            活動方式
          </h2>
          <div class="sopCard-area content-style">
            <div class="sopCard-item">
              <div class="icon">
                <img src="../../assets/images/ticket/gameIcon.svg" alt="">
              </div>
              <h3>攤位/大地遊戲</h3>
              <p>
                進入 Gather town<br>
                參與攤位及大地遊戲
              </p>
            </div>
            <div class="sopCard-item">
              <div class="icon">
                <img src="../../assets/images/ticket/playIcon.svg" alt="">
              </div>
              <h3>議程直播平台</h3>
              <p>
                MOPCON 2021
                <br>採用YouTube直播的方式進行
              </p>
            </div>
            <div class="sopCard-item">
              <div class="icon">
                <img src="../../assets/images/ticket/Frame.svg" alt="">
              </div>
              <h3>交流/客服頻道</h3>
              <p>提供 Discord 頻道<br>讓會眾互相交流議程內容</p>
            </div>
          </div>
          <div class="line-deco line-deco-first" />
          <div class="sopTwo">
            <div class="sopTwo-icon" />
            <h2 class="sectionTitle">
              票種介紹
            </h2>
            <div class="ticket-block">
              <div class="ticket-normal">
                <p>一般票</p>
                <div class="ticket-card-group">
                  <div class="ticket-card">
                    <h4>盲鳥票</h4>
                    <p>- 2日議程</p>
                    <a href="https://mopcon.kktix.cc/events/mopcon2021" target="_blank" class="ticket-card-button active">
                      前往購票
                    </a>
                  </div>
                  <div class="ticket-card">
                    <h4>一般會眾票</h4>
                    <p>- 2日議程</p>
                    <a href="#" target="_blank" class="ticket-card-button waiting" @click.prevent="">
                      尚未開放購票
                    </a>
                  </div>
                </div>
              </div>
              <div class="ticket-student">
                <p>學生票</p>
                <div class="ticket-card">
                  <h4>學生票 / FREE</h4>
                  <p>- 2日議程</p>
                  <a href="#" target="_blank" class="ticket-card-button waiting" @click.prevent="">
                    尚未開放購票
                  </a>
                </div>
              </div>
            </div>
            <div class="ticket-block">
              <div class="ticket-normal">
                <p>VIP</p>
                <div class="ticket-card-group">
                  <div class="ticket-card">
                    <h4>VIP</h4>
                    <p>- 2日議程</p>
                    <p>- 紀念 T</p>
                    <a href="#" target="_blank" class="ticket-card-button waiting" @click.prevent="">
                      尚未開放購票
                    </a>
                  </div>
                  <div class="ticket-card">
                    <h4>VVIP</h4>
                    <p>- 2日議程</p>
                    <p>- 紀念 T</p>
                    <p>- VIP 獨家紀念品</p>
                    <a href="#" target="_blank" class="ticket-card-button waiting" @click.prevent="">
                      尚未開放購票
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="line-gray" />
    <section class="sopThree container">
      <div class="vol10-gray pad-hidden" />
      <div class="sopThree-content">
        <div class="sopThree-icon" />
        <h2 class="sectionTitle">
          紀念品
        </h2>
        <div class="lock">
          <div class="lock-icon" />
          <p class="lock-title">
            { 內容預備解鎖... }
          </p>
        </div>
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
.pad-hidden {
  display: block;
  @include screen(pad) {
    display: none;
  }
}

.main {
  @include flex(normal, row, center);
  min-height: 100vh;
  @include screen(pad) {
    min-height: unset;
    padding: 150px 24px;
  }
  &-content {
    width: 100%;
    @include screen(pad) {
      margin-left: 2%;
    }
    .title {
      .title-orange {
        color: $colorOrange;
      }
      p {
        font-weight: bold;
        text-align: center;
        margin: 0.5rem 0;
        font-size: 2.5rem;
        @include screen(sm) {
          font-size: 2rem;
        }
      }
    }
    .subTitle {
      width: 70%;
      font-size: 1.25rem;
      margin: 2rem auto;
      @include screen(pad) {
        width: 80%;
      }
      @include screen(sm) {
        width: 100%;
      }
    }
  }
}

.sopOne{
  margin-top: 6rem;
  @include flex;
  @include screen(sm) {
    margin-top: 50px;
  }
  &-content {
    width: 100%;
    margin-left: 6%;
    @include screen(pad) {
      margin-left: 0%;
    }
  }
  &-icon {
    background-image: url('../../assets/images/sop01.svg');
    width: 67px;
    height: 48px;
  }
}
.sopCard {
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
    width: 33%;
    margin-bottom: 8rem;
    @include screen(md) {
      width: 48%;
    }
    @include screen(sm) {
      width: 100%;
      margin-bottom: 4rem;
    }
    .icon {
      text-align: center;
      @include flex(center, row, center);
      height: 178px;
    }
    .icon1 {
      background-image: url('../../assets/images/ticket/gameIcon.svg');
    }
    .icon2 {
      background-image: url('../../assets/images/ticket/playIcon.svg');
    }
    .icon3 {
      background-image: url('../../assets/images/ticket/Frame.svg');
    }
    &-icon {
      width: 120px;
      height: 120px;
    }
    h3 {
      border-bottom: 4px solid $colorOrange;
      padding: 0px 1rem;
      font-size: 1.5rem;
      font-weight: bold;
      margin-top: 24px;
      margin-bottom: 0px;
    }
    p {
      text-align: center;
      margin-top: 1.5rem;
      font-size: 1.5rem;
      @include screen(xs) {
        font-size: 1.25rem;
      }
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

.sopTwo {
  margin-top: 4rem;
  &-icon {
    background-image: url('../../assets/images/sop02.svg');
    width: 67px;
    height: 48px;
  }
}
.ticket {
  margin-bottom: 8rem;
  @include screen(sm) {
    margin-bottom: 5rem;
  }
  &-block {
    margin: 55px 0;
    @include flex(space-between, row, normal);
    @include screen(sm) {
      flex-direction: column;
    }
    flex-wrap: wrap;
  }
  &-card-group {
    width: 100%;
    @include flex(normal, row, normal);
    flex-wrap: wrap;
  }
  &-card {
    border-radius: 10px;
    padding: 40px 30px;
    background-color: rgba(239, 234, 235, 0.5);
    margin-right: 1.5rem;
    min-height: 384px;
    @include flex(normal, column, normal);
    @include screen(sm) {
      width: 100%;
      margin-top: 1rem;
      margin-right: 0rem;
    }
    h4 {
      font-size: 1.5rem;
      font-weight: bold;
      margin-top: 0.5rem;
      margin-bottom: 1rem;
    }
    p {
      margin-top: 0.5rem;
      margin-bottom: 0rem;
    }
    &-button {
      width: 240px;
      padding: 18px;
      font-size: 1.25rem;
      border-radius: 10px;
      margin-top: auto;
      display: block;
      text-align: center;
      @include screen(sm) {
        width: 100%;
      }
      &.active {
        cursor: pointer;
        background-color: $colorOrange;
        border: 2px solid $colorOrange;
        color: $colorBlack;
        &:hover {
          opacity: 0.7;
        }
      }
      &.over {
        cursor: none;
        background-color: $colorPrimary;
        border: 2px solid $colorPrimary;
        color: $colorWhite;
      }
      &.waiting {
        cursor: none;
        background-color: transparent;
        border: 2px solid $colorPrimary;
        color: $colorPrimary;
      }
    }
  }
}
.sopThree {
  margin-top: 100px;
  margin-bottom: 80px;
  @include flex;
  @include screen(pad) {
    margin-top: 50px;
  }
  &-content {
    width: 100%;
    margin-left: 6%;
    @include screen(pad) {
      margin-left: 0%;
    }
  }
  &-icon {
    background-image: url('../../assets/images/sop03.svg');
    width: 67px;
    height: 48px;
  }
}
.lock {
  padding: 120px 0px;
  background-color: #F7F4F5;
  border-radius: 10px;
  width: 100%;
  margin-top: 55px;
  @include flex(normal, column, center);
  &-title {
    color: rgba(0, 0, 0, 0.87);
    font-weight: 600;
    font-size: 2.5rem;
    letter-spacing: 0.12em;
    margin-top: 1.25rem;
    @include screen(pad) {
      font-size: 1.5rem;
    }
  }
  &-icon {
    background-image: url('../../assets/images/lock.svg');
    width: 92px;
    height: 92px;
  }
}
</style>
