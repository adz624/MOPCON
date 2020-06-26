<template>
  <div class="wrap">
    <div class="wrapContent m-w-full md:max-w-screen-xl mx-auto">
      <!-- "MPCON贊助募集"標題 -->
      <section class="cfsTitle">
        <h1 class="cfsTitleMobile block md:hidden">
          {MOPCON
          <span class="cfsTitleMobileSpan">需要你</span>;}
        </h1>
        <h1 class="cfsTitleWeb hidden md:block">
          {MOPCON
          <span class="cfsTitleWebSpan">贊助募集</span>;}
        </h1>
      </section>

      <div class="hr" />

      <!-- 贊助方案內容 -->
      <div>
        <table class="table-fixed optionTop optionSticky">
          <tbody>
            <tr>
              <th />
              <th>
                <p>
                  Developer
                  <br>
                  <span class="text-base">適合新創與小公司</span>
                </p>
              </th>
              <th>
                <p>
                  Hacker
                  <br>
                  <span class="text-base">適合需要宣傳產品與徵才的公司。</span>
                </p>
              </th>
              <th>
                <p>
                  Bruce Wayne
                  <br>
                  <span class="text-base">適合需要大舉徵才與產品推廣的大公司。</span>
                </p>
              </th>
              <th>
                <p>
                  Tony Stark
                  <br>
                  <span class="text-base">適合重視品牌行銷的產業領導者。</span>
                </p>
              </th>
            </tr>
          </tbody>
        </table>
        <table class="table-flexed option">
          <tbody>
            <tr class="optionDesc">
              <td />
              <td>
                <p>最經濟實惠的現場與數位曝光，可搭配加購滿足特定需求。</p>
              </td>
              <td>
                <p>享有在人潮多處的靜態曝光，和實體交流unconference。</p>
              </td>
              <td>
                <p>享有主動線攤位，與今年新增的媒體專訪、專欄文章、線上面試服務等等項目。</p>
              </td>
              <td>
                <p>享有所有項目，和最顯眼的演講時段與曝光位置。</p>
              </td>
            </tr>
            <tr class="optionListTitle">
              <td>
                <h3>實體曝光</h3>
              </td>
              <td />
              <td />
              <td />
              <td />
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  場內告示牌商標置入
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  電子看版 (企業形象圖)
                </h4>
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  場間投影片廣告 (企業形象圖文)
                </h4>
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />>
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  主動線旗幟廣告
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <p class="optionListContent">
                  1個
                </p>
              </td>
              <td>
                <p class="optionListContent">
                  2個
                </p>
              </td>
              <td>
                <p class="optionListContent">
                  2個
                </p>
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  700人演講廳旗幟3F
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <p class="optionListContent">
                  1個
                </p>
              </td>
              <td>
                <p class="optionListContent">
                  2個
                </p>
              </td>
              <td>
                <p class="optionListContent">
                  4個
                </p>
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  350人演講廳旗幟4F A/B廳
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <p class="optionListContent">
                  各廳各1
                </p>
              </td>
              <td>
                <p class="optionListContent">
                  各廳各1
                </p>
              </td>
              <td>
                <p class="optionListContent">
                  各廳各1
                </p>
              </td>
            </tr>
            <tr class="optionList">
              <td class="relative">
                <div class="optionInfo">
                  <h4 class="optionListDesc mr-2">
                    ICCK大門兩側全版廣告空間
                  </h4>
                  <div class="icon icon-info" @click.prevent="toggleInfo('optionInfoPic')" />
                </div>
                <div v-if="activeItem == 'optionInfoPic'" class="optionInfoPic">
                  <div class="optionInfoPic-Icck" />
                  <p>包含場內告示版與議程資訊張貼處</p>
                </div>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  報到處全版廣告空間
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  迎賓袋放入公司產品/文宣/問卷
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionListTitle">
              <td>
                <h3>數位曝光</h3>
              </td>
              <td />
              <td />
              <td />
              <td />
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  粉絲頁貼文
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  官網企業商標與連結
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  電子報曝光 (企業形象圖文)
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  KKTIX 報名頁面商標露出
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  Medium 專欄文章
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
            <tr class="optionList">
              <td>
                <h4 class="optionListDesc">
                  專業媒體專訪
                </h4>
              </td>
              <td>
                <div class="icon icon-close" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
              <td>
                <div class="icon icon-check" />
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="optionFoot">
              <th />
              <th>
                <p>
                  Developer
                  <br>
                  <span>適合新創與小公司</span>
                </p>
              </th>
              <th>
                <p>
                  Hacker
                  <br>
                  <span>適合需要宣傳產品與徵才的公司。</span>
                </p>
              </th>
              <th>
                <p>
                  Bruce Wayne
                  <br>
                  <span>適合需要大舉徵才與產品推廣的大公司。</span>
                </p>
              </th>
              <th>
                <p>
                  Tony Stark
                  <br>
                  <span>適合重視品牌行銷的產業領導者。</span>
                </p>
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- "心有餘力有足" -->
      <h2 class="extraTitleWeb">
        {心有餘
        <span class="extraTitleWebSpan">力有足？</span>;}
      </h2>
      <div class="px-6 lg:px-32 mt-5 flex justify-between">
        <h3 class="extraDesc text-yellow-main text-xl">
          實體曝光
        </h3>
        <div class="extraIcon extraIcon-minus block lg:hidden" />
      </div>
      <div class="px-6 lg:px-32 flex flex-wrap items-start">
        <div class="w-full lg:w-1/3 xl:w-1/4 pr-2 pl-2 mt-5">
          <div class="extraCard">
            <div class="extraCardHeader">
              <h3 class="extraCardTitle">
                Sponsor Session
              </h3>
              <h4 class="extraCardContent">
                選取活動當天一場議程
              </h4>
              <h5 class="extraCardDesc">
                適合搭配產品、服務做技術議題的分享
              </h5>
            </div>
            <h3 class="extraCardFooter">
              可加購 1 場，限量 5 場
            </h3>
          </div>
        </div>
        <div class="w-full lg:w-1/3 xl:w-1/4 pr-2 pl-2 mt-5">
          <div class="extraCard">
            <div class="extraCardHeader">
              <h3 class="extraCardTitle">
                UnConference
              </h3>
              <h4 class="extraCardContent">
                ⼤會現場議程廳外舉辦非正式的⼩型會議
              </h4>
              <h5 class="extraCardDesc">
                更貼近會眾的⽅式交流分享
              </h5>
            </div>
            <h3 class="extraCardFooter">
              可加購 1 場，限量 10 場
            </h3>
          </div>
        </div>
        <div class="w-full lg:w-1/3 xl:w-1/4 pr-2 pl-2 mt-5">
          <div class="extraCard">
            <div class="extraCardHeader">
              <h3 class="extraCardTitle">
                主動線攤位
              </h3>
              <h4 class="extraCardContent">
                可於現場擺攤，與參與者深入互動
              </h4>
              <h5 class="extraCardDesc">
                與 1,200 名以上會眾以及現場工作人員、贊助商交流
              </h5>
            </div>
            <h3 class="extraCardFooter">
              可加購 1 場，限量 10 場
            </h3>
          </div>
        </div>
        <div class="w-full lg:w-1/3 xl:w-1/4 pr-2 pl-2 mt-5">
          <div class="extraCard">
            <div class="extraCardHeader">
              <h3 class="extraCardTitle">
                VIP入場套票
              </h3>
              <h4 class="extraCardContent">
                (每套入場套票含入場門票+晚宴入場券一張)<br>
                入場快速通關、講者交流晚宴與獨家紀念商品
              </h4>
              <h5 class="extraCardDesc">
                與贊助商代表、講者深入互動
              </h5>
            </div>
            <h3 class="extraCardFooter">
              數量不限
            </h3>
          </div>
        </div>
      </div>
      <div class="px-6 lg:px-32 mt-5 flex justify-between">
        <h3 class="extraDesc text-yellow-main text-xl">
          數位交流
        </h3>
        <div class="extraIcon extraIcon-minus block lg:hidden" />
      </div>
      <div class="px-6 lg:px-32 flex flex-wrap items-start">
        <div class="w-full lg:w-1/3 xl:w-1/4 pr-2 pl-2 mt-5">
          <div class="extraCard">
            <div class="extraCardHeader">
              <h3 class="extraCardTitle">
                線上直播 AMA
              </h3>
              <h4 class="extraCardContent">
                Ask Me Anything 將由我們採訪關於貴公司的 QA 問答影片
              </h4>
              <h5 class="extraCardDesc">
                適合搭配產品、服務做技術議題的分享
              </h5>
            </div>
            <h3 class="extraCardFooter">
              可加購 1 場，限量 5 場
            </h3>
          </div>
        </div>
        <div class="w-full lg:w-1/3 xl:w-1/4 pr-2 pl-2 mt-5">
          <div class="extraCard">
            <div class="extraCardHeader">
              <h3 class="extraCardTitle">
                Meet.jobs 線上面試服務
              </h3>
              <h4 class="extraCardContent">
                Meet.jobs透過其系統媒合企業與會眾，並於會後提供線上面試的系統服務，只收取確定錄取者的年薪8%作為服務費。
              </h4>
              <h5 class="extraCardDesc">
                簡化投履歷流程，加強徵才轉化率。尤其適合需要遠端招募的公司。
              </h5>
            </div>
            <h3 class="extraCardFooter">
              可加購 1 場，限量 5 場
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CFS',
  data () {
    return {
      activeItem: ''
    }
  },
  methods: {
    toggleInfo (id) {
      const vm = this
      vm.activeItem !== id ? (vm.activeItem = id) : (vm.activeItem = '')
    }
  }
}
</script>
<style lang="scss" scoped>
* {
  // border: 1px dotted red;
}
.wrap {
  font-family: NotoSansCJKtc;
  @apply bg-black-main min-h-screen;
}
.cfsTitle {
  &Web {
    font-size: 5rem;
    @apply pt-20 text-center text-white font-medium pb-6;
  }
  &Mobile {
    font-family: NotoSansCJKtc;
    font-size: 2rem;
    @apply pt-12 ml-8 mr-8 text-center text-white font-medium pb-6;
    @media (max-width: 354px) {
      @apply text-left;
    }
  }
  &WebSpan,
  &MobileSpan {
    @apply text-yellow-main;
  }
}
.hr {
  margin-bottom: 3.5rem;
  @apply bg-yellow-main rounded-sm h-1;
}

.option {
  &Top th {
    font-family: NotoSansCJKtc-Medium;
    @apply w-1/5 pb-3 px-4 align-top text-yellow-main text-xl text-center bg-black-main;
    &span {
      @apply text-base;
    }
  }
  &Sticky {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
  }
  &Desc td {
    font-family: NotoSansCJKtc-Light;
    @apply pb-12 px-4 align-top text-white text-base text-center;
  }
  &ListTitle td {
    @apply border-t  border-b border-yellow-main text-yellow-main text-2xl py-5;
  }
  &List {
    scroll-snap-align: start;
    td {
      @apply py-8;
    }
    &:hover {
      background-color: rgba(255, 85, 0, 0.3);
    }
    &Desc {
      font-family: NotoSansCJKtc-Regular;
      @apply text-xl text-white;
    }
    &Content {
      @apply text-center text-base text-white;
    }
  }
  &Info {
    display: flex;
    &Pic {
      background: white;
      width: 180px;
      height: 240px;
      background-position: center;
      background-size: center;
      background-repeat: no-repeat;
      top: 50%;
      left: 180%;
      z-index: 10;
      @apply absolute rounded-lg;
      &-Icck {
        height: 180px;
        background-image: url('https://fakeimg.pl/180x180/');
        @apply rounded-lg rounded-b-none;
      }
    }
    &Pic p {
      @apply p-2 text-xs;
    }
  }
  .icon {
    width: 24px;
    height: 24px;
    background-position: center;
    background-size: center;
    background-repeat: no-repeat;
    @apply m-auto;
    &-check {
      background-image: url('~@/assets/cfs/cfs-check.svg');
    }
    &-close {
      background-image: url('~@/assets/cfs/cfs-close.svg');
    }
    &-info {
      background-image: url('~@/assets/cfs/cfs-info.svg');
    }
  }
  &Foot th {
    font-family: NotoSansCJKtc-Medium;
    @apply w-1/5 pb-3 px-4 align-top text-yellow-main text-center text-xl;
    span {
      @apply text-base;
    }
  }
}

.extraTitleWeb {
  font-family: NotoSansCJKtc-Medium;
  margin-top: 4.5rem;
  margin-bottom: 3.5rem;
  @apply text-5xl text-white text-center;
  &Span {
    @apply text-yellow-main;
  }
}

.extraIcon {
  width: 24px;
  height: 24px;
  background-position: center;
  background-size: center;
  background-repeat: no-repeat;
  &-plus {
    background-image: url('~@/assets/cfs/cfs-plus.svg');
  }
  &-minus{
    background-image: url('~@/assets/cfs/cfs-minus.svg');
  }
}
.extraCard{
  min-height: 252px;
  @media(min-width:1024px){
    min-height:350px;
  }
  @apply border flex flex-col justify-between border-solid border-yellow-main rounded-lg p-5;
  &Title {
    font-family: NotoSansCJKtc-Medium;
    @apply text-2xl text-yellow-main mb-2;
  }

  &Content{
    font-family: NotoSansCJKtc-Regular;
    @apply text-base text-yellow-main mb-6;

  }
  &Desc{
    font-family: NotoSansCJKtc-Light;
    @apply text-base text-white;
  }
  &Footer {
  font-family: NotoSansCJKtc-Bold;
  margin-top:3.5rem;
  @apply text-base text-white ;
  }
&:hover{
    z-index:-1;
    @apply bg-yellow-main;
    .extraCardTitle{
      @apply text-black-main;
    }
    .extraCardContent{
      @apply text-black-main;
    }
    .extraCardDesc{
      @apply text-black-main;
    }
    .extraCardFooter{
      @apply text-black-main;
    }
  }
}

</style>
