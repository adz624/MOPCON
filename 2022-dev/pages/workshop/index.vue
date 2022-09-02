<template>
  <div>
    <section id="hero" class="bg">
      <div class="container hero-content">
        <div class="banner">
          <div class="pinkCircle">
            <h1>社群工作坊</h1>
          </div>
        </div>
        <div class="hero-intro ml-6 ml-md-0">
          <h2>
            MOPCON X 社群之力
          </h2>
          <p>
            今年，是邁向 MOPCON 第二個十年的開端，我們不止擴大年會規模，更深入與社群合作帶狀 Workshop ，期望把每年一次多元的影響力，轉換成一年多次的單元相聚。我們真的很榮幸跟 React Native Taiwan、DDD、IxDA、WeakSelf 、iPlayground、Android 等社群合作，以跨域合作流程，串連社群擅長領域，建立跨域合作機制，邀請開發者一起加入高速迴圈碰撞，用鍵盤實踐 NEXT GIANT CONF.精神。
          </p>
        </div>
      </div>
    </section>
    <section class="workshop">
      <div class="container">
        <h2 class="mt-0 pt-8">
          社群工作坊
        </h2>
        <ul>
          <li v-for="act in shopList" :key="act.id" class="workshop-table">
            <div class="imgPart">
              <div class="imgWrap">
                <img :src="act.img" alt="">
              </div>
            </div>
            <div class="contentPart">
              <h3>{{ act.title }}</h3>
              <p class="sub">
                {{ act.sub }}
              </p>
              <a v-if="isMobile" class="dropDown" @click="isOpen(act.id)">
                <client-only><span class="iconify mr-2" data-icon="bi:chevron-double-down" style="color: #51A3D3;" data-width="16" :class="{'rotate':show}" /></client-only>
                查看詳情
              </a>
              <div v-if="show==act.id || !isMobile">
                <p class="intro">
                  {{ act.intro }}
                </p>
                <p class="add">
                  <client-only><span class="iconify mr-2" data-icon="entypo:location-pin" style="color: #bb0031;" data-width="20" /></client-only>
                  {{ act.add }}
                </p>
                <p class="time">
                  <client-only><span class="iconify mr-2" data-icon="bi:calendar-check-fill" style="color: #bb0031;" data-width="20" /></client-only>
                  {{ act.time }}
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: 'WorkshopPage',
  data () {
    return {
      shopList: [
        {
          id: '01',
          name: 'React Native',
          title: 'React Native 獨行俠 - 自幹錢包篇',
          sub: 'MOPCON feat. React Native Taiwan',
          intro: 'React Native 是跨平台 App 開發技術交流社群，本次Workshop 介紹區塊鏈以及背後的 Web3 技術。以手把手形式，引導學員實作出 React Native 虛擬錢包，並搭配 Expo 及 Infura 介接測試，使學員完成在實體載具建立虛擬錢包以及餘額查詢、轉帳等功能。',
          img: 'assets/images/workshop/ReactNative.png',
          add: '亞灣新創園 (高雄市前鎮區成功二路25號3樓 )',
          time: '2022/8/13-14 (六、日) 13:00 ~ 17:00'
        },
        {
          id: '02',
          name: 'IxDA',
          title: '設計你的研討會旅程 Design your conference journey',
          sub: '',
          intro: '透過 IxDA 的設計思考旅程，從用戶體驗的角度出發，釐清參與大型研討會會碰到的問題與痛點，找出可行的解決方案，設計出更友善的研討會旅程。本次課程會由 IxDA 理事，具備多年產品經理及設計經驗的 Vic 來帶領，透過動手做、討論、分享來產生 Take Away，並且可以將產出帶至下場由 weakself 帶領的 swift 工作坊實作喔！',
          img: 'assets/images/workshop/IxDA.png',
          add: '高軟 亞灣新創園',
          time: '8/28(日）下午 13:00 ~ 17:00'
        },
        {
          id: '03',
          name: 'DDD',
          title: '轟隆轟隆!進擊的DDD大賞來啦！',
          sub: '',
          intro: '依照Event Storming的方式帶領各位進入非常大量便利貼的世界，並且透過大量的溝通討論，釐清整個業務流程所有發生的事件。在這個過程中，團隊內會需要對於語言描述的認知保持一致形成“統一語言”幫助溝通順暢。',
          img: 'assets/images/workshop/DDD.png',
          add: '高軟 亞灣新創園',
          time: '9/3（六）整天 09:00~12:00、13:00 ~ 17:00'
        }
      ],
      innerWidth: null,
      show: null
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
    isOpen (num) {
      if (this.show === null || this.show !== num) {
        this.show = num
      } else if (this.show === num) {
        this.show = null
      }
    }
  }

}
</script>

<style lang="scss" scoped >
#hero{
  .hero-content{
    @include flex(space-between,row,center);
    padding-bottom: 72px;
    @include screen(md){
      flex-direction: column;
    }
  }
  .banner{
    width: 50%;
    @include flex(center,row,center);
    @include screen(md){
      width: 100%;
    }
  }
  .hero-intro{
    width: 50%;
    @include flex(center,column,flex-start);
    @include screen(md){
      width: 100%;
    }
    @include screen(sm){
      align-items: center;
    }
  }
  h2{
    @include font(40px,$colorWhite,700);
    @include screen(sm){
      font-size: 28px;
      text-align: center;
    }
  }
  p{
    @include font (16px,$colorWhite,500);
  }
}
.workshop{
  padding-bottom: 96px;
  background-color: $colorWhite;
  h2{
    @include font (40px,$colorPrimary,700);
      text-align: center;
    @include screen(sm){
      font-size: 32px;
    }
  }
}
.workshop-table{
  @include flex(space-between,row,center);
  padding: 64px 86px;
  border-radius: 48px;
  &:nth-child(odd){
    border:2px solid #004973;
  }
  &:nth-child(even){
    border:2px solid #f4435a;
  }
  &:not(:last-child){
    margin-bottom: 56px;
  }
  @include screen(md){
    flex-wrap:wrap;
    padding: 48px;
  }
  @include screen(sm){
    &:not(:last-child){
      margin-bottom: 48px;
    }
    padding-left: 24px;
    padding-right: 24px;
  }
}
.imgPart, .contentPart{
  width: 45%;
  @include screen(md){
    width: 100%;
  }
}
.imgPart{
  @include flex(center,row,center);
  .imgWrap{
    border-radius: 50rem;
    height: 268px;
    width: 486px;
    img{
      max-width: 100%;
      max-height: 100%;
      display: block;
      margin:auto;
      border-radius: 298.5px;
    }
    @include screen(md){
      width: 100%;
      height: 290px;
    }
    @include screen(sm){
      height: 164px;
    }
  }
}
h3{
  @include font(40px,#004973,700);
  @include screen(md){
    text-align: center;
  }
  @include screen(sm){
    font-size: 28px;
  }
}
.sub{
  @include font(24px,#004973,500);
  @include screen(sm){
    font-size: 22.4px;
  }
}
.dropDown{
  @include flex(center,row,center);
  @include font(16px,#51a3d3,500);
}
.intro{
  @include font(16px,#5d6160,500)
}
.add, .time{
  @include flex(flex-start,row,center);
  @include font(16px,#bb0031,500);
}
</style>
