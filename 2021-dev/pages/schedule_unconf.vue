<template>
  <div>
    <section class="home-bg">
      <div class="main container">
        <div class="vol10-gray pad-hidden" />
        <div class="vol10-mobile position-absolute pad-show" />
        <div class="main-content">
          <h1 class="title">
            每一場 <br class="sm-show"> 都讓你收穫滿滿的議程規劃
          </h1>
          <p class="subTitle">
            MOPCON 目前已是南台灣最大技術社群研討會，成立宗旨為連結產業與資訊工程技術，以培養更多資訊科技人才，推動高雄產業創新發展，而沒有夥伴們的支持，這個願景就不可能成真！謝謝這 7 年來每一位夥伴的加入，和我們一起凝聚南臺灣的人才和知識，共同成長、學習！
          </p>
          <div class="agenda-link">
            <a href="">R1 連結</a>
            <a href="">R2 連結</a>
            <a href="">R3 連結</a>
            <a href="">R4 連結</a>
          </div>
        </div>
      </div>
    </section>
    <div class="line-gray" />
    <section class="agenda">
      <section class="sopOne container">
        <div class="sopOne-content">
          <div class="sopOne-icon" />
          <h2 class="sectionTitle">
            精彩議程
          </h2>
        </div>
      </section>
      <!--標籤-->
      <div class="container">
        <div class="date">
          <div class="date-choose">
            <a :class="{'active': day == 1}" href="#" @click.prevent="day = 1">Day 1</a>
            <a :class="{'active': day == 2}" href="#" @click.prevent="day = 2">Day 2</a>
          </div>
        </div>
        <div class="agenda-content">
          <ul class="">
            <li v-for="agenda in agendaList" :key="agenda.session_id" class="agenda-table">
              <div class="agenda-table-date">
                <p class="agenda-date">
                  {{ agenda.started_at? parseDate(agenda.started_at*1000) :'' }}
                  -
                  {{ agenda.ended_at? parseDate(agenda.ended_at*1000) :'' }}
                </p>
              </div>
              <div class="agenda-table-content">
                <p v-if="agenda.event" class="agenda-table-event" :class="{'rest': agenda.event == '休息 Break'}">
                  {{ agenda.event }}
                </p>
                <div v-else class="agenda-table-card">
                  <h4 class="agenda-table-card-title">
                    {{ agenda.room[0].topic }}
                  </h4>
                  <div class="agenda-table-card-detail">
                    <p>{{ agenda.room[0].speakers[0].name }}</p>
                    <p>{{ agenda.room[0].floor }}</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'ScheduleUnConf',
  async asyncData ({ $axios }) {
    try {
      let data = []
      if (process.server) {
        const res = await $axios.get(process.env.BASE_URL + '/2021/unconf.json')
        data = res.data
      } else {
        const res = '../static/unconf.json'
        data = res.data
      }

      const config = {
        scheduleData: data,
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
  computed: {
    agendaList () {
      return this.scheduleData[this.day - 1].period
    }
  },
  methods: {
    parseContent (content) {
      return content.replace(/\n/gi, '<br>')
    },
    parseDate (date) {
      const hour = new Date(date).getHours() > 9 ? new Date(date).getHours() : `0${new Date(date).getHours()}`
      const min = new Date(date).getMinutes() > 9 ? new Date(date).getMinutes() : `0${new Date(date).getMinutes()}`
      return `${hour}:${min}`
    },
    parseDateTime (date) {
      const mm = new Date(date).getMonth() + 1 > 9 ? new Date(date).getMonth() + 1 : `0${new Date(date).getMonth() + 1}`
      const dd = new Date(date).getDate() > 9 ? new Date(date).getDate() : `0${new Date(date).getDate()}`
      return '2021' + mm + dd
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
  @include flex(normal, row, center);
  min-height: 100vh;
  @include screen(pad) {
    min-height: unset;
    padding: 150px 24px;
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
      text-align: center;
      margin: 0.5rem 0;
      font-size: 2.5rem;
      @include screen(sm) {
        font-size: 2rem;
      }
      .title-orange {
        color: $colorOrange;
      }
    }
    .subTitle {
      width: 75%;
      line-height: 2;
      font-size: 1.25rem;
      margin: 2rem auto;
      text-align: center;
      @include screen(pad) {
        line-height: 1.5;
        width: 80%;
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

.agenda {
  padding: 120px 0;
  background-color: #E5E5E5;
}
.sopOne{
  &-content {
    width: 100%;
    display: flex;
    align-items: center;
    @include screen(pad) {
      margin-left: 0%;
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
  }
}

.date {
  text-align: center;
  &-choose {
    display: inline-flex;
    margin: 32px auto;
    border-radius: 50rem;
    border: 2px solid $colorOrange;
    overflow: hidden;
  }
  a {
    font-size: 20px;
    padding: 16px 44px;
    display: block;
    background: $colorWhite;
    color: $colorOrange;
    &:hover, &.active {
      background: $colorOrange;
      color: $colorWhite;
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
.agenda-content ul {
  padding: 0;
  list-style: none;
}
.agenda-table {
  display: block;
  @include flex(center, row, center);
  @include screen(pad) {
    flex-direction: column;
    margin-bottom: 1.5rem;
  }
  &-date {
    flex: 0 0 auto;
    width: 16.66666667%;
    opacity: 0.6;
    font-size: 24px;
    @include screen(pad) {
      width: 100%;
    }
  }
  &:first-child {
    .agenda-table-content {
      border-top: 2px solid rgba($colorOrange , 30%);
    }
  }
  &-content {
    flex: 0 0 auto;
    width: 83.33333333%;
    border-left: 2px solid rgba(#FB8628 , 30%);
    border-right: 2px solid rgba(#FB8628 , 30%);
    border-bottom: 2px solid rgba(#FB8628 , 30%);
    margin-top: -1px;
    @include screen(pad) {
      border-top: 2px solid rgba(#FB8628 , 30%);
      width: 100%;
    }
  }
  &-event {
    padding: 24px;
    font-size: 24px;
    font-weight: 700;
    text-align: center;
    margin-top: 0px;
    margin-bottom: 0px;
    color: $colorWhite;
    background-color: #F6AE76;
    &.rest {
      background-color: transparent;
      color: $colorPrimary;
    }
  }
  &-room {
    padding: 24px;
    @include flex(center, row, normal);
    @include screen(md) {
      padding: 16px;
      flex-direction: column;
    }
  }
}
.agenda-table-card {
  background: $colorWhite;
  padding: 28px 16px;
  border-radius: 10px;
  display: flex;
  margin: 16px;
  flex-direction: column;
  p, h4 {
    margin: 0px;
  }
  h4 {
    margin-bottom: 16px;
  }
  &-title {
    margin-top: 0px;
    font-size: 18px;
    font-weight: 600;
  }
  &-detail {
    margin-top: auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
  }
  &-speakers {
    display: flex;
    flex-direction: column;
  }
}
</style>
