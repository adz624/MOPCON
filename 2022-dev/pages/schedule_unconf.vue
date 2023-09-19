<template>
  <div>
    <section id="hero" class="bg">
      <div class="container hero-content">
        <div class="banner">
          <div class="pinkCircle">
            <h1>交流議程</h1>
          </div>
        </div>
        <div class="hero-intro ml-6 ml-md-0">
          <h2>
            兩天議程，<br class="d-block d-sm-none">帶給你<br class="d-none d-sm-block">不同單元的知識旅程
          </h2>
          <p>
            MOPCON 承載第一個十年的使命，每年一次的多元影響力，在準備邁向第二個十年之時，我們決定擴大議程規模，讓更多開發者站上舞台，讓更多社群發起人實現理念，會眾更多選擇，更多人展現熱情、自信和交集，是建立 NEXT GIANT CONF.的起始點。
          </p>
        </div>
      </div>
    </section>
    <div class="agenda-content pt-10">
      <div class="container">
        <section class="agenda-date">
          <div class="agenda-choose">
            <a href="#" :class="{'active':day==1}" @click.prevent="day=1">10/15 Day 01</a>
            <a href="#" :class="{'active':day==2}" @click.prevent="day=2">10/16 Day 02</a>
          </div>
        </section>
        <section class="agenda-table">
          <ul>
            <li v-for="agenda in agendaList" :key="`schedule_unconf${agenda.session_id}`" class="agenda-table-list">
              <!--時間-->
              <div v-if="agenda.event !== '休息 Break'" class="agenda-table-date">
                {{ agenda.started_at? $moment(agenda.started_at*1000).format('HH:mm') :'' }} - {{ agenda.started_at? $moment(agenda.ended_at*1000).format('HH:mm') :'' }}
              </div>
              <!--內容-->
              <div class="agenda-table-content" :class="{'center':agenda.event == '休息 Break'}">
                <!--休息或午茶時間-->
                <p v-if="agenda.event" class="agenda-table-event" :class="{'rest':agenda.event == '休息 Break'}">
                  {{ agenda.event }}
                </p>
                <!--議程-->
                <div v-if="agenda.room.length>0">
                  <div v-if="agenda.room[0].topic !== '歡迎現場報名'" class="agenda-table-session">
                    <h3>{{ agenda.room[0].topic }}</h3>
                    <div class="agenda-table-session-text">
                      <p>
                        {{ agenda.room[0].speakers[0].name }}
                      </p>
                      <p>
                        {{ agenda.room[0].floor }}
                      </p>
                    </div>
                  </div>
                  <div v-else class="agenda-table-reg">
                    <h3>分享你的想法</h3>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </section>
      </div>
    </div>
  </div>
</template>

<script>
import { scheduleUnconf } from '@/api/url'
export default {
  name: 'ScheduleUnConf',
  async asyncData ({ $axios }) {
    try {
      const { data } = await $axios.get(scheduleUnconf)

      const config = {
        scheduleData: data.data,
        day: 1
      }

      return config
    } catch (err) {}
  },
  data () {
    return {
      scheduleData: [],
      day: 1
    }
  },
  head () {
    return {
      title: '交流議程 | MOPCON 2022',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: '交流議程 | MOPCON 2022'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: `${process.env.BASE_URL}/2022/schedule_unconf`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: `${process.env.BASE_URL}/2022/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: '交流議程 | MOPCON 2022'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: '交流議程 | MOPCON 2022'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: '交流議程 | MOPCON 2022'
        }
      ]
    }
  },
  computed: {
    agendaList () {
      return this.scheduleData[this.day - 1].period
    }
  },
  methods: {
    parseContent (content) {
      return content.replace(/\n/gi, '<br>')
    }
  }
}
</script>

<style lang="scss" scoped>
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
  }
  h2{
    @include font(40px,$colorWhite,700);
    @include screen(sm){
      font-size: 28px;
    }
  }
  p{
    @include font (16px,$colorWhite,500);
  }
}
.agenda-content{
  background-color: $colorWhite;
  padding-bottom: 96px;
}
.agenda-date{
  text-align: center;
  margin-bottom: 16px;
  .agenda-choose{
    display: inline-flex;
    border:1px solid #0074a2;
    border-radius: 50rem;
    overflow: hidden;
    margin-bottom: 16px;
    a{
      display: block;
      @include font (32px, #85bfe0 ,700);
      padding: 16px 44px;
      background: $colorWhite;
      &:hover, &.active{
        background:#0074a2;
        color:$colorWhite;
      }
      @include screen (md){
        font-size: 28px;
      }
      @include screen (sm){
        font-size: 20px;
      }
    }
  }
}
.agenda-table-list{
  margin-bottom: 64px;
}
.agenda-table-date{
  @include font (32px,$colorWhite,500);
  background:#022B42;
  border-top-left-radius: 24px;
  border-top-right-radius: 24px;
  border:1px solid #022b42;
  text-align: center;
  padding-top: 12px;
  padding-bottom: 12px;
}
.agenda-table-content{
  &.center{
    text-align: center;
  }
  .agenda-table-event{
    @include font (32px,$colorPrimary,500);
    padding:0px 70px;
    border-bottom-left-radius: 24px;
    border-bottom-right-radius: 24px;
    border:1px solid #0074a2;
    margin: 0px;
    padding:24px 70px;
    &.rest{
      display: inline-block;
      @include font (16px,#0074a2,500);
      border-radius:48px;
      padding:16px 47px;
    }
    @include screen(sm){
      font-size: 28px;
    }
  }
  .agenda-table-session{
    padding: 0 70px;
    border-bottom-left-radius: 24px;
    border-bottom-right-radius: 24px;
    border:1px solid #0074a2;
    h3{
      @include font (32px,$colorPrimary,500);
    }
    .agenda-table-session-text{
      @include flex(space-between,row,center);
      p:first-child{
        @include font (20px,#000000,400);
      }
      p:last-child{
        @include font (10px,$colorWhite,400);
        background:#ff99a6;
        display: inline-block;
        padding: 1px 6px;
        border-radius: 4px;
      }
    }
    @include screen(md){
      padding: 0 48px;
      h3{
        font-size: 28px;
      }
      .agenda-table-session-text{
        flex-wrap:wrap;
      }
    }
  }
  .agenda-table-reg{
    @include flex(space-between,row,center);
    padding: 0px 70px;
    border-bottom-left-radius: 24px;
    border-bottom-right-radius: 24px;
    border:1px solid #0074a2;
    h3{
      @include font (24px,$colorPrimary,500);
    }
    a{
      display: inline-block;
      @include font(20px,$colorWhite,700);
      padding: 16px 48px;
      border-radius: 32px;
      background-color: $colorPrimary;
      margin:24px 0px;
      transition: background-color .3s;
      &:hover{
        background-color:$colorPrimaryLight;
      }
    }
    @include screen(sm){
      flex-wrap: wrap;
      padding: 0 48px;
      a{
        margin-top: 0px;
      }
    }
  }
}
</style>
