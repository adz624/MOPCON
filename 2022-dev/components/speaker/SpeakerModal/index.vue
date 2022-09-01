<template>
  <div>
    <div
      id="speakerModal"
      class="modal fade"
      :class="{'show': show}"
      :style="{'display: block': show }"
    >
      <div class="modal-content">
        <div class="clearfix">
          <span class="close mr-1" @click="close()">&times;</span>
        </div>
        <!-- {{ JSON.stringify(data) }} -->
        <div class="speaker-info">
          <img :src="getSpeakerImg(data?.img?.web)" :alt="data.name" class="speaker-image mr-4">
          <div>
            <h4 class="speaker-title my-0 mt-sm-4">
              <p class="name pr-3 my-0">
                {{ data.name }}
              </p>
              <span class="speaker-subtitle">{{ data.company }} {{ data.job_title }} </span>
            </h4>
            <p class="speaker-bio my-0 my-sm-2">
              {{ data.bio }}
            </p>
          </div>
        </div>
        <div class="speaker-community-wrap">
          <div class="speaker-community-icon mt-3">
            <client-only>
              <a v-if="data.link_twitter" :href="data.link_twitter" target="_blank"><span class="iconify fz-6 mr-2" data-icon="akar-icons:twitter-fill" /></a>
              <a v-if="data.link_other" :href="data.link_other" target="_blank"><span class="iconify fz-6 mr-2" data-icon="ri:global-fill" /></a>
              <a v-if="data.link_github" :href="data.link_github" target="_blank"><span class="iconify fz-6 mr-2" data-icon="akar-icons:github-fill" /></a>
              <a v-if="data.link_fb" :href="data.link_fb" target="_blank"><span class="iconify fz-6" data-icon="akar-icons:facebook-fill" /></a>
            </client-only>
          </div>
        </div>
        <div class="speaker-date">
          <p class="text mt-3 mb-4">
            <span v-if="data.started_at > 0" class="pr-2">{{ $moment(data.started_at * 1000).format('MM/DD HH:mm') }} - {{ $moment(data.ended_at * 1000).format('HH:mm') }}</span>
            <span v-if="data.room">{{ data.room }}{{ data.floor ? `(${ data.floor })` : '' }}</span>
            <client-only><span class="iconify fz-5" data-icon="bxs:map" /></client-only>
          </p>
        </div>
        <h4 class="section-title mb-2 mt-0">
          {{ $t('pages.speaker.modal.topic') }}
        </h4>
        <h3 class="speaker-topic my-0">
          {{ data.topic }}
        </h3>
        <!-- eslint-disable-next-line vue/no-v-html -->
        <p class="speaker-content my-0" v-html="parseContent(data.summary)" />
        <div class="speaker-tag mt-2 mb-5">
          <div
            v-for="(tag,idx) in data.tags"
            :key="`speaker-tag-${idx}`"
            class="speaker-tag-item"
          >
            {{ tag.name }}
          </div>
        </div>
        <!-- eslint-disable-next-line vue/no-v-html -->
        <div v-if="data.target">
          <h4 class="section-title mb-2 mt-0">
            {{ $t('pages.speaker.modal.target') }}
          </h4>
          <!-- eslint-disable-next-line vue/no-v-html -->
          <p class="speaker-content mb-5 mt-0" v-html="parseContent(data.target)" />
        </div>
        <div v-if="data.prior_knowledge">
          <h4 class="section-title mb-2 mt-0">
            {{ $t('pages.speaker.modal.prior_knowledge') }}
          </h4>
          <!-- eslint-disable-next-line vue/no-v-html -->
          <p class="speaker-content mb-5 mt-0" v-html="parseContent(data.prior_knowledge)" />
        </div>
        <div v-if="data.expected_gain">
          <h4 class="section-title mb-2 mt-0">
            {{ $t('pages.speaker.modal.expected_gain') }}
          </h4>
          <!-- eslint-disable-next-line vue/no-v-html -->
          <p class="speaker-content mb-5 mt-0" v-html="parseContent(data.expected_gain)" />
        </div>
        <div class="share-dropdown">
          <button class="btn btn-primary mb-4 speaker-modal-button" @click="shareShow=!shareShow">
            <client-only><span class="iconify fz-5 mr-2" data-icon="bi:share-fill" /></client-only>              {{ $t('pages.speaker.modal.share') }}
          </button>
          <div v-if="shareShow" class="share-list">
            <client-only>
              <ShareNetwork
                network="facebook"
                :url="shareUrl"
                :title="`${data.name} | 2022 MOPCON 講者`"
                :description="`${data.summary}`"
                :quote="`${data.name} | 2022 MOPCON 講者`"
                hashtags="MOPCON"
              >
                分享 Facebook
              </ShareNetwork>
            </client-only>
            <client-only>
              <ShareNetwork
                network="Twitter"
                :url="shareUrl"
                :title="`${data.name} | 2022 MOPCON 講者`"
                :description="`${data.summary}`"
                :quote="`${data.name} | 2022 MOPCON 講者`"
                hashtags="MOPCON"
              >
                分享 Twitter
              </ShareNetwork>
            </client-only>
            <a href="#" class="py-3 px-2" @click.prevent="copylink">複製講者連結</a>
          </div>
          <p v-if="copySuccess" key="success" class="copy-success">
            連結複製成功！
          </p>
        </div>
        <a :href="`https://calendar.google.com/calendar/u/0/r/eventedit?text=MOPCON+2022+${data.topic}&dates=${$moment(data.started_at*1000).format('YYYYMMDDTHHmmss')}/${$moment(data.ended_at*1000).format('YYYYMMDDTHHmmss')}&trp=false&sf=true`" target="_blank" class="btn btn-outline-primary speaker-modal-button mb-4">
          <client-only>
            <span class="iconify fz-6 mr-1" data-icon="bxs:calendar-check" />
          </client-only>
          {{ $t('pages.speaker.modal.add_calendar') }}
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'DropdownModal',
  props: {
    modalOpen: Boolean,
    data: {
      type: Object,
      default: () => {}
    }
  },
  data () {
    return {
      shareShow: false,
      copySuccess: false,
      show: this.modalOpen
    }
  },
  computed: {
    shareUrl () {
      return process.client ? `${window.location.origin}/2022/speaker/${this.data.speaker_id}` : ''
    }
  },
  watch: {
    modalOpen (show) {
      this.modalChange(show)
      this.show = show
    },
    show (show) {
      this.$emit('modal-close', show)
    }
  },
  mounted () {
    const vm = this
    if (this.show) {
      vm.modalChange(true)
    }
    window.onclick = function (event) {
      const modal = document.getElementById('speakerModal')
      if (event.target === modal) {
        vm.close()
        vm.modalChange()
      }
    }
  },
  methods: {
    copylink () {
      navigator.clipboard.writeText(this.shareUrl).then(() => {
        this.copySuccess = true
        this.shareShow = false
        setTimeout(() => {
          this.copySuccess = false
        }, 1500)
      }).catch(() => {})
    },
    parseContent (content) {
      if (content) {
        return content.replace(/\n/gi, '<br>')
      }
      return ''
    },
    close () {
      this.show = false
    },
    modalChange (status = false) {
      const body = document.querySelector('html, body')
      const modal = document.getElementById('speakerModal')
      if (status) {
        body.classList.add('modal-open')
        modal.style.display = 'block'
      } else {
        modal.style.display = 'none'
        modal.classList.remove('show')
        body.classList.remove('modal-open')
      }
    },
    getSpeakerImg (img) {
      return `${process.env.BASE_URL}/${img}`
    }

  }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>
