<template>
  <div id="schedule">
    <SectionHero />
    <div class="container">
      <SectionTag v-if="!isMobile" :tags="tags" @checkTag="tagSelected" />
      <a v-if="isMobile" class="filterBtn" @click.prevent="isMobile && openTag()">
        <client-only><span class="iconify mr-2" data-icon="codicon:filter-filled" style="color: white;" data-width="24" /></client-only>
        主題篩選
      </a>
      <SectionTagModal v-if="isMobile" :tag-modal-open="tagIsOpen" :tags="tags" @tag-modal-close="closeTag" @checkTag="tagSelected" />
      <SectionDate :day="day" @checkDay="daySelected" />
      <AgendaCard v-if="checkTag.length > 0" :parent-class="'agenda-filter'" :data="agendaFilter" @open="openModal" />
      <!--Agenda-->
      <div v-else class="agenda-content">
        <ul>
          <li v-for="agenda in agendaList" :key="agenda.session_id" class="agenda-table">
            <!--Agenda 時間-->
            <div v-if="agenda.event !== '休息 Break'" class="agenda-table-date">
              <p class="agenda-date">
                {{ agenda.started_at? $moment(agenda.started_at*1000).format('HH:mm') :'' }}
                -
                {{ agenda.ended_at? $moment(agenda.ended_at*1000).format('HH:mm') :'' }}
              </p>
            </div>
            <!--Agenda 內容-->
            <div class="agenda-table-content" :class="{'center':agenda.event=='休息 Break'}">
              <p v-if="agenda.event" class="agenda-table-event" :class="{'rest':agenda.event=='休息 Break'}">
                {{ agenda.event }}
              </p>
              <AgendaCard v-if="agenda.room.length>0" :parent-class="'agenda-table-room'" :data="agenda.room" @open="openModal" />
            </div>
          </li>
        </ul>
      </div>
      <!--SpeakerModal-->
      <Modal :modal-open="modalOpen" @modal-close="closeModal">
        <div v-if="session && session.speakers" class="modalBody mb-8 mb-pad-5">
          <div class="modalHeader mb-8 mb-pad-5">
            <!--講者-->
            <a v-if="session.speakers.length > 1" class="modal-speaker-dropdown" @click.prevent="modalDropdown()">
              <span :class="{'transform':!isModalDropdown}" />
              講者陣容
            </a>
            <div v-if="isModalDropdown">
              <div v-for="speaker in session.speakers" :key="'m' + speaker.speaker_id" class="modal-speaker">
                <div class="modal-speaker-img  mt-4 mt-sm-0">
                  <img :src="getSpeakerImg(speaker.img.web)" alt="">
                </div>
                <div class="modal-speaker-text pl-4 pl-sm-0 mb-sm-6">
                  <p class="speaker-title">
                    {{ speaker.name }}
                  </p>
                  <p class="speaker-company">
                    {{ speaker.company }}{{ speaker.job_title }}
                  </p>
                  <div class="speaker-community-wrap">
                    <a v-if="speaker.link_twitter" :href="speaker.link_twitter" class="bg-twitter_icon" target="_blank">
                      <client-only><span class="iconify" data-icon="akar-icons:twitter-fill" style="color: #51A3D3;" data-width="24" /></client-only>
                    </a>
                    <a v-if="speaker.link_other" :href="speaker.link_other" class="bg-website_icon" target="_blank">
                      <client-only><span class="iconify" data-icon="foundation:web" style="color: #51a3d3;" data-width="24" /></client-only>
                    </a>
                    <a v-if="speaker.link_fb" :href="speaker.link_fb" class="bg-facebook_icon" target="_blank">
                      <client-only><span class="iconify" data-icon="entypo-social:facebook" style="color: #51a3d3;" data-width="24" /></client-only>
                    </a>
                    <a v-if="speaker.link_github" :href="speaker.link_github" class="bg-github_icon " target="_blank">
                      <client-only><span class="iconify" data-icon="akar-icons:github-fill" style="color: #51a3d3;" data-width="24" /></client-only>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!--時/地-->
            <div class="modal-agenda-info">
              <div v-if="session.started_at > 0" class="mr-2">
                {{ $moment(session.started_at * 1000).format('MM/DD HH:mm') }} - {{ $moment(session.ended_at * 1000).format('HH:mm') }}
              </div>
              <div v-if="session.room" class="mr-2">
                {{ session.room }}{{ session.floor ? `(${session.floor})` : '' }}
              </div>
              <client-only>
                <span class="iconify" data-icon="entypo:location-pin" style="color: #51a3d3;" data-width="24" />
              </client-only>
            </div>
          </div>
          <div class="modalBody">
            <h4 class="modal-agenda-title mb-2">
              議程主題名稱
            </h4>
            <h3 class="modal-agenda-topic mt-4 mb-3">
              {{ session.topic }}
            </h3>
            <p v-if="session.summary" class="modal-agenda-intro" v-html="parseContent(session.summary)" />
            <ul class="modal-tag">
              <li v-for="(tag,i) in session.tags" :key="'agenda-card-tag' + i" class="mb-2">
                {{ tag.name }}
              </li>
            </ul>
            <div v-if="session.target" class="mb-4">
              <h4 class="modal-agenda-title mb-1">
                目標會眾
              </h4>
              <p class="modal-agenda-intro" v-html="parseContent(session.target)" />
            </div>
            <div v-if="session.prior_knowledge" class="mb-4">
              <h4 class="modal-agenda-title mb-1">
                先備知識
              </h4>
              <p class="modal-agenda-intro" v-html="parseContent(session.prior_knowledge)" />
            </div>
            <div v-if="session.expected_gain" class="mb-4">
              <h4 class="modal-agenda-title mb-1">
                會眾預期收穫
              </h4>
              <p class="modal-agenda-intro" v-html="parseContent(session.expected_gain)" />
            </div>
            <div v-if="session.sponsor_info && session.sponsor_info.hasOwnProperty('logo_path')">
              <h4 class="mb-1">
                贊助商
              </h4>
              <a :href="'/2022/sponsor/' + session.sponsor_id">
                <img :src="session.sponsor_info.logo_path" alt="" class="sponsor-logo">
              </a>
            </div>
          </div>
          <div class="modalFooter">
            <a :href="`https://calendar.google.com/calendar/u/0/r/eventedit?text=MOPCON+2022+${session.topic}&dates=${$moment(session.started_at*1000).format('YYYYMMDDTHHmmss')}/${$moment(session.ended_at*1000).format('YYYYMMDDTHHmmss')}&trp=false&sf=true`" target="_blank" class="calendar text-center py-4">
              <client-only><span class="iconify" data-icon="bi:calendar-check-fill" style="color: #004973;" data-width="24" /></client-only>
              <span class="ml-3">加入行事曆</span>
            </a>
            <div class="community-share py-4" @click.prevent="shareShow=!shareShow">
              <!-- <div class="bg-share mr-2" /> -->
              <p class="my-0 community-share-btn">
                <client-only><span class="iconify" data-icon="bi:share-fill" style="color: white;" data-width="24" /></client-only>
                <span class="ml-3">分享議程</span>
              </p>
              <div v-if="shareShow" class="community-share-list">
                <client-only>
                  <ShareNetwork
                    network="facebook"
                    :url="shareUrl"
                    :title="`${session.topic} | 2022 MOPCON 議程`"
                    :description="`${session.summary}`"
                    :quote="`${session.topic} | 2022 MOPCON 議程`"
                    hashtags="MOPCON"
                    class="text-center"
                  >
                    分享 Facebook
                  </ShareNetwork>
                </client-only>
                <client-only>
                  <ShareNetwork
                    network="Twitter"
                    :url="shareUrl"
                    :title="`${session.topic} | 2022 MOPCON 議程`"
                    :description="`${session.summary}`"
                    :quote="`${session.topic} | 2022 MOPCON 議程`"
                    hashtags="MOPCON"
                    class="text-center"
                  >
                    分享 Twitter
                  </ShareNetwork>
                </client-only>
                <a href="#" class="py-3 px-2 text-center" @click.prevent="copylink">複製講者連結</a>
              </div>
            </div>
          </div>
        </div>
      </Modal>
    </div>
  </div>
</template>

<script>
import SectionHero from '~/components/Schedule/SectionHero'
import SectionTag from '~/components/Schedule/SectionTag'
import SectionTagModal from '~/components/Schedule/SectionTagModal'
import SectionDate from '~/components/Schedule/SectionDate'
import AgendaCard from '~/components/AgendaCard.vue'
import Modal from '~/components/Modal'
import { schedule, tags } from '@/api/url'

export default {
  name: 'SchedulePage',
  components: {
    SectionHero,
    SectionTag,
    SectionTagModal,
    SectionDate,
    AgendaCard,
    Modal
  },
  async asyncData ({ $axios, params }) {
    try {
      const { data } = await $axios.get(schedule)
      const res = await $axios.get(tags)

      const config = {
        scheduleData: data.data,
        day: 1,
        tags: res.data.data.map(tag => tag.name)
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
      shareShow: false,
      tagIsOpen: false,
      isModalDropdown: true
    }
  },
  head () {
    return {
      title: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2022` : '主要議程 | MOPCON 2022',
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
          content: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2022` : '主要議程 | MOPCON 2022'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: this.modalOpen ? this.session.summary : ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: this.modalOpen ? `${process.env.BASE_URL}/2022/schedule/${this.session.session_id}` : `${process.env.BASE_URL}/2022/schedule`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: this.modalOpen ? `${process.env.BASE_URL}/2022/${this.session.speakers[0].img.web}` : `${process.env.BASE_URL}/2022/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2022` : '主要議程 | MOPCON 2022'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: this.modalOpen ? this.session.summary : ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2022` : '主要議程 | MOPCON 2022'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: this.modalOpen ? `${this.session.topic} | 主要議程 MOPCON 2022` : '主要議程 | MOPCON 2022'
        }
      ]
    }
  },
  computed: {
    isPad () {
      return this.innerWidth < 768
    },
    isMobile () {
      return this.innerWidth < 568
    },
    agendaList () {
      return this.scheduleData[this.day - 1].period
    },
    agendaFilter () {
      const arr = []
      if (this.checkTag.length > 0) {
        this.scheduleData.forEach((item) => {
          item.period.forEach((period) => {
            period.room.forEach((room) => {
              if (room.tags && room.tags.some(tag => this.checkTag.includes(tag.name))) {
                arr.push(room)
              }
            })
          })
        })
      }
      return arr
    },
    shareUrl () {
      return process.client ? `${window.location.origin}/2022/schedule/${this.session.session_id}` : ''
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
    copylink () {
      navigator.clipboard.writeText(this.shareUrl).then(() => {
        this.copySuccess = true
        setTimeout(() => {
          this.copySuccess = false
        }, 1000)
      }).catch(() => {})
    },
    resize () {
      this.innerWidth = window.innerWidth
    },
    tagSelected (tags) {
      this.checkTag = tags
    },
    openTag () {
      this.tagIsOpen = true
    },
    closeTag (data) {
      this.tagIsOpen = data
    },
    daySelected (num) {
      this.day = num
    },
    openModal (data) {
      this.session = data
      this.modalOpen = true
    },
    closeModal (show) {
      this.modalOpen = show
      this.shareShow = false
      this.isModalDropdown = true
    },
    parseContent (content) {
      return content.replace(/\n/gi, '<br>')
    },
    modalDropdown () {
      this.isModalDropdown = !this.isModalDropdown
    },
    getSpeakerImg (img) {
      return `${process.env.BASE_URL}/${img}`
    }
  }
}

</script>

<style lang="scss" scoped>;
@import './modal.scss';
#schedule{
  padding-bottom: 32px;
  background-color: $colorWhite;
  @include flex(center,column,center);
  .container{
    position: relative;
  }
  .filterBtn{
    margin: 24px 0px;
    padding: 16px 0px;
    width: 100%;
    display: block;
    background-color: $colorPrimary;
    @include font(20px,$colorWhite,500);
    border-radius:32px;
    @include flex(center,row,center);
  }
  .agenda-date{
    @include font(40px,$colorPrimary,500);
    padding-bottom: 16px;
    padding-left: 32px;
    border-bottom:2px solid $colorPrimary;
    margin-bottom: 32px;
    @include screen(md){
      padding-left: 0;
      text-align: center;
      font-size: 32px;
    }
    @include screen(sm){
      font-size: 28px;
    }
  }
  .agenda-table-content{
    &.center{
      text-align: center;
    }
  }
  .agenda-table-event{
    background-color:#DCEDF6;
    padding:16px;
    @include font(40px,$colorPrimary,500);
    border-radius: 240px;
    padding-left: 47px;
    padding-right: 47px;
    margin-bottom: 80px;
    @include screen (md){
      font-size: 32px;
    }
    @include screen (sm){
      font-size: 28px;
    }
    &.rest{
      display: inline-block;
      border-radius: 48px;
      background-color:$colorWhite;
      border:1px solid #0074a2;
      @include font (16px,#0074a2,500)
    }
  }
}
</style>
