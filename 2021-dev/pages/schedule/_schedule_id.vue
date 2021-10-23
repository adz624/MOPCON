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
            MOPCON 目前已是南台灣最大技術社群研討會，成立宗旨為連結產業與資訊工程技術，以培養更多資訊科技人才，推動高雄產業創新發展，而沒有夥伴們的支持，這個願景就不可能成真！謝謝這 10 年來每一位夥伴的加入，和我們一起凝聚南臺灣的人才和知識，共同成長、學習！
          </p>
          <div class="agenda-link">
            <a target="_blank" href="https://www.youtube.com/watch?v=zRkNelfmQbU&list=PL0ny0trU2gnBthRYKJ5s7YGXiqWZpkktF&index=1">R1 連結</a>
            <a target="_blank" href="https://www.youtube.com/watch?v=kINJhSmiiXA&list=PL0ny0trU2gnBthRYKJ5s7YGXiqWZpkktF&index=2">R2 連結</a>
            <a target="_blank" href="https://www.youtube.com/watch?v=yVP4x6LFcO0&list=PL0ny0trU2gnBthRYKJ5s7YGXiqWZpkktF&index=3">R3 連結</a>
            <a target="_blank" href="https://www.youtube.com/watch?v=IgDIbx0FY8s&list=PL0ny0trU2gnBthRYKJ5s7YGXiqWZpkktF&index=5">Unconf 連結</a>
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
        <ul class="label-list">
          <li v-for="(tag,index) in tags" :key="tag" class="mr-4 mb-3">
            <input :id="`tag-${index}`" v-model="checkTag" :value="tag" type="checkbox" class="mr-1">
            <label :for="`tag-${index}`">{{ tag }}</label>
          </li>
        </ul>
        <AgendaCard v-if="checkTag.length > 0" :parent-class="'agenda-filter'" :data="agendaFilter" @open="openModal" />
        <div v-else class="agenda-content">
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
                <AgendaCard v-if="agenda.room.length > 0" :parent-class="'agenda-table-room'" :data="agenda.room" @open="openModal" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <Modal :modal-open="modalOpen" @modal-close="closeModal">
      <div v-if="session" class="modalBody mb-8 mb-pad-5">
        <div class="modalHeader mb-8 mb-pad-5">
          <div class="modal-speakers">
            <div v-for="speaker in session.speakers" :key="'m' + speaker.speaker_id" class="modal-speaker">
              <div class="modal-speaker-img-modal px-6 mt-4">
                <div class="modal-speaker-img-wrap">
                  <img :src="speaker.img.web" alt="">
                </div>
              </div>
              <div class="speaker-text-modal px-4 px-sm-0">
                <div class="speaker-title">
                  <h3 class="mb-1">
                    {{ speaker.name }}
                  </h3>
                  <p class="my-0">
                    {{ speaker.company }}
                  </p>
                  <p class="mb-4 mt-0">
                    {{ speaker.job_title }}
                  </p>
                </div>
                <div class="speaker-community-wrap">
                  <p v-if="speaker.link_fb ||speaker.link_github||speaker.link_other||speaker.link_twitter" class="my-0 mr-3 pad-hidden">
                    講者社群
                  </p>
                  <div class="speaker-community-icon d-flex">
                    <a v-if="speaker.link_fb" class="bg-facebook_icon" :href="speaker.link_fb" target="_blank" />
                    <a v-if="speaker.link_github" :href="speaker.link_github" class="bg-github_icon" target="_blank" />
                    <a v-if="speaker.link_other" :href="speaker.link_other" class="bg-website_icon" target="_blank" />
                    <a v-if="speaker.link_twitter" :href="speaker.link_twitter" class="bg-twitter_icon" target="_blank" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modalBody">
          <div class="modal-summary-header">
            <h4 class="mr-3 mb-pad-0 mr-pad-0 mb-2">
              <span>\\</span>
              議程主題
            </h4>
            <ul class="modal-tag">
              <li v-for="(tag,i) in session.tags" :key="'agenda-card-tag' + i">
                {{ tag.name }}
              </li>
            </ul>
          </div>
          <h3 class="mt-4 mb-3">
            {{ session.topic }}
          </h3>
          <div class="modal-summary-info-wrap">
            <div v-if="session.started_at > 0" class="modal-summary-info mr-6 mr-sm-0">
              <div class="bg-calendar mr-1" />
              <p class="m-0">
                {{ $moment(session.started_at * 1000).format('MM/DD HH:mm') }} ~ {{ $moment(session.ended_at * 1000).format('MM/DD HH:mm') }}
              </p>
            </div>
            <div v-if="session.room" class="modal-summary-info mt-sm-2">
              <div class="bg-location mr-1" />
              <p class="m-0">
                {{ session.room }}{{ session.floor ? `(${session.floor})` : '' }}
              </p>
            </div>
          </div>
          <p v-if="session.summary" class="mb-8" v-html="parseContent(session.summary)" />
          <div v-if="session.target">
            <h4 class="mb-1">
              <span>\\</span>
              目標會眾
            </h4>
            <p class="mb-8 mt-2" v-html="parseContent(session.target)" />
          </div>
          <div v-if="session.prior_knowledge">
            <h4 class="mb-1">
              <span>\\</span>
              先備知識
            </h4>
            <p class="mb-8 mt-2" v-html="parseContent(session.prior_knowledge)" />
          </div>
          <div v-if="session.expected_gain">
            <h4 class="mb-1">
              <span>\\</span>
              會眾預期收穫
            </h4>
            <p class="mb-8 mt-2" v-html="parseContent(session.expected_gain)" />
          </div>
          <div v-if="session.sponsor && session.sponsor.hasOwnProperty('logo_path')">
            <h4 class="mb-1">
              <span>\\</span>
              贊助商
            </h4>
            <a :href="'/2021/sponsor/' + session.sponsor_id">
              <img :src="session.sponsor.logo_path" alt="" class="sponsor-logo">
            </a>
          </div>
        </div>
        <div class="modalFooter">
          <a :href="`https://calendar.google.com/calendar/u/0/r/eventedit?text=MOPCON+2021+${session.topic}&dates=${$moment(session.started_at*1000).format('YYYYMMDDTHHmmss')}/${$moment(session.ended_at*1000).format('YYYYMMDDTHHmmss')}&trp=false&sf=true`" target="_blank" class="text-center py-3 mr-3">+ 加入行事曆</a>
          <div class="community-share py-3" @click.prevent="shareShow=!shareShow">
            <div class="bg-share mr-2" />
            <p class="my-0">
              分享議程
            </p>
            <div v-if="shareShow" class="community-share-list">
              <client-only>
                <ShareNetwork
                  network="facebook"
                  :url="shareUrl"
                  :title="`${session.topic} | 2021 MOPCON 議程`"
                  :description="`${session.summary}`"
                  :quote="`${session.topic} | 2021 MOPCON 議程`"
                  hashtags="MOPCON"
                >
                  分享 Facebook
                </ShareNetwork>
              </client-only>
              <client-only>
                <ShareNetwork
                  network="Twitter"
                  :url="shareUrl"
                  :title="`${session.topic} | 2021 MOPCON 議程`"
                  :description="`${session.summary}`"
                  :quote="`${session.topic} | 2021 MOPCON 議程`"
                  hashtags="MOPCON"
                >
                  分享 Twitter
                </ShareNetwork>
              </client-only>
              <a href="#" class="py-3 px-2" @click.prevent="copylink">複製講者連結</a>
            </div>
          </div>
        </div>
      </div>
    </Modal>
  </div>
</template>

<script>
import Modal from '../../components/Modal'
import AgendaCard from '../../components/AgendaCard'
export default {
  name: 'Schedule',
  components: {
    Modal,
    AgendaCard
  },
  async asyncData ({ $axios, params }) {
    try {
      let data = []
      if (process.server) {
        const res = await $axios.get(process.env.BASE_URL + '/2021/session.json')
        data = res.data
      } else {
        const res = '../static/session.json'
        data = res.data
      }
      const res = await $axios.get(process.env.BASE_URL + '/2021/speaker-tags.json')

      const config = {
        scheduleData: data,
        day: 1,
        tags: res.data.map(tag => tag.name)
      }
      if (params.schedule_id) {
        const arr = []
        config.scheduleData.forEach((period) => {
          period.period.forEach((session) => {
            session.room.forEach((ele) => {
              if (ele.session_id === +params.schedule_id) {
                arr.push(ele)
              }
            })
          })
        })
        config.session = arr[0]
        config.modalOpen = true
      }

      return config
    } catch (err) {}
  },
  data () {
    return {
      scheduleData: [],
      tags: [],
      innerWidth: null,
      day: 1,
      checkTag: [],
      modalOpen: false,
      session: {},
      shareShow: false
    }
  },
  head () {
    return {
      title: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2021` : '主要議程 | MOPCON 2021',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: this.modalOpen ? this.session.summary : ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2021` : '主要議程 | MOPCON 2021'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: this.modalOpen ? this.session.summary : ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: this.modalOpen ? `${process.env.BASE_URL}/2021/schedule/${this.session.session_id}` : `${process.env.BASE_URL}/2021/schedule`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: this.modalOpen ? `${process.env.BASE_URL}/2021/${this.session.speakers[0].img.web}` : `${process.env.BASE_URL}/2021/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2021` : '主要議程 | MOPCON 2021'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: this.modalOpen ? this.session.summary : ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2021` : '主要議程 | MOPCON 2021'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2021` : '主要議程 | MOPCON 2021'
        }
      ]
    }
  },
  computed: {
    isPad () {
      return this.innerWidth < 768
    },
    shareUrl () {
      return process.client ? `${window.location.origin}/2021/schedule/${this.session.session_id}` : ''
    },
    agendaList () {
      return this.scheduleData[this.day - 1].period
    },
    agendaFilter () {
      const arr = []
      if (this.checkTag.length > 0) {
        this.scheduleData.forEach((period) => {
          period.period.forEach((session) => {
            session.room.forEach((ele) => {
              if (ele.tags && ele.tags.some(tag => this.checkTag.includes(tag.name))) {
                arr.push(ele)
              }
            })
          })
        })
      }
      return arr
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
    copylink () {
      navigator.clipboard.writeText(this.shareUrl).then(() => {
        this.copySuccess = true
        setTimeout(() => {
          this.copySuccess = false
        }, 1000)
      }).catch(() => {})
    },
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
    },
    openModal (data) {
      this.session = data
      this.modalOpen = true
    },
    closeModal (show) {
      this.modalOpen = show
      this.shareShow = false
    }
  }
}
</script>

<style lang="scss" scoped>
@import './modal.scss';
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
    background-image: url('../../assets/images/sop01.svg');
    width: 67px;
    height: 48px;
  }
}

// 標籤
.label-list {
  list-style: none;
  padding-left: 96px;
  padding-right: 96px;
  @include flex(center, row, center);
  flex-wrap: wrap;
  li {
    display: inline-block;
  }
  label {
    display: inline-block;
    background-color: $colorBlueLight;
    opacity: 0.6;
    border-radius: 32px;
    padding: 7px 16px;
    color: white;
    cursor: pointer;
    &:hover {
      opacity: 1;
    }
  }
  input[type='checkbox'] {
    display: none;
  }
  input[type='checkbox'] + label:before {
    content: '';
    display: inline-block;
    height: 15px;
  }
  input[type='checkbox']:checked + label:before {
    content: '';
    vertical-align: middle;
    height: 15px;
    width: 15px;
    background-image: url(../../assets/images/speaker/check.svg);
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    margin-right: 4px;
  }
  input[type='checkbox']:checked + label {
    background-color: $colorBlueDark;
    opacity: 1;
  }
}
@include screen(pad) {
  .label-list {
    padding-left: 0px;
    padding-right: 0px;
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

</style>
