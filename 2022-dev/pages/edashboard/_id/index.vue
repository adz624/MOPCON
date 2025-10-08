<template>
  <div class="edashboard eboard-bg" :class="boardBgClass">
    <div v-if="hasNews" class="news" :class="newsDelay" style="height: 152px;">
      <marquee scrollamount="10" align="middle">
        <p class="text-white">
          {{ newsData.title }}：
        </p>
        <p class="text-white">
          {{ newsData.description }}
        </p>
      </marquee>
    </div>
    <div class="slider sponsor_carrousel">
      <div v-if="boardData.length > 0" ref="mySwiper" v-swiper:mySwiper="swiperOption" class="slider-container" @load="slideChange()">
        <div class="swiper-wrapper">
          <div v-for="(data, index) in boardData" :key="'swiper_'+index" class="swiper-slide" :data-swiper-autoplay="(data.play_time*1000)">
            <div v-if="data.type == 'ad'">
              <eboardSponsor :sponsor-data="data.data" :has-news="hasNews" />
            </div>
            <div v-else-if="data.type == 'session'">
              <div v-show="sessionShow">
                <eboardSchedule :schedule-data="data.data" :has-news="hasNews" />
              </div>
            </div>
            <div v-else-if="data.type == 'map'">
              <eboardSite :site-data="data.data" :has-news="hasNews" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { board } from '@/api/url'
import eboardSchedule from '~/components/EboardSchedule'
import eboardSponsor from '~/components/EboardSponsor'
import eboardSite from '~/components/EboardSite'
export default {
  name: 'Edashboard',
  components: {
    eboardSchedule,
    eboardSponsor,
    eboardSite
  },
  layout: 'dashboard',
  // eslint-disable-next-line require-await
  async asyncData ({ params }) {
    try {
      return {
        boardId: params.id
      }
    } catch (error) {
      console.log(error)
    }
  },
  data () {
    const vm = this
    return {
      boardId: '',
      boardType: 'outroom',
      hasNews: false, // 是否有上方的公告
      newsData: {
        title: '',
        description: ''
      },
      nowActive: 0,
      swiperOption: {
        effect: 'slide',
        loop: true,
        autoplay: {
          delay: 1000
        },
        on: {
          slideChange () {
            vm.nowActive = this.realIndex
          }
        }
      },
      boardData: [],
      testTime: 0,
      boardBgClass: 'eboard-bg',
      newsDelay: '',
      sessionShow: false
    }
  },
  watch: {
    nowActive () {
      const vm = this
      let bgClass = 'eboard-bg'
      let newsClass = ''
      if (this.boardData[this.nowActive] !== undefined && this.boardData[this.nowActive].type === 'session') {
        const roomCount = this.boardData[this.nowActive].data.room.sidecar.length
        switch (this.boardData[this.nowActive].data.title) {
          case '議程預告':
            bgClass = roomCount === 0 ? 'eboard-session-bg' : 'eboard-session-multi-bg'
            newsClass = 'news-delay'
            break
          case '議程即將開始':
          case '議程進行中':
          case '．本廳同步轉播中':
            bgClass = roomCount === 0 ? 'eboard-session-start-bg' : 'eboard-session-start-multi-bg'
            newsClass = 'news-delay'
            break
        }
        vm.sessionShow = true
      } else {
        vm.sessionShow = false
      }
      vm.boardBgClass = bgClass
      vm.newsDelay = newsClass

      if (newsClass !== '') {
        setTimeout(() => {
          vm.newsDelay = ''
        }, 1500)
      }
    }
  },
  updated () {
    if (this.mySwiper) {
      this.$nextTick(() => {
        this.mySwiper.loopDestroy()
        this.mySwiper.loopCreate()
      })
    }
  },
  mounted () {
    const vm = this
    this.getBoardData()
    setInterval(function () {
      vm.getBoardData()
    },
    60000)
  },
  created () {
    const vm = this
    if (vm.$route.query.now) {
      vm.testTime = vm.$route.query.now
    }
    if (vm.$route.query.type) {
      vm.boardType = vm.$route.query.type
    }
  },
  methods: {
    getBoardData () {
      const vm = this
      vm.$axios.$get(`${board}${vm.boardId}?type=${vm.boardType}&now=${vm.testTime}`)
        .then(({ success, data, message }) => {
          if (success) {
            vm.boardData = data.content
            if (data.news.length > 0) {
              vm.$nextTick(() => {
                vm.hasNews = true
              })
              vm.newsData = {
                title: data.news[0].title,
                description: data.news[0].description
              }
            } else {
              vm.$nextTick(() => {
                vm.hasNews = false
              })
            }
          }
        })
    }
  }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>
