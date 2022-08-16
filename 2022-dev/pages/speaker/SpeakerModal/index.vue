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
          <img :src="'https://fakeimg.pl/300/'" :alt="data.name" class="speaker-image mr-4">
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
        <div class="speaker-date">
          <p class="text my-4">
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
        <button class="btn btn-primary mb-4 speaker-modal-button">
          <client-only><span class="iconify fz-5 mr-2" data-icon="bi:share-fill" /></client-only>              {{ $t('pages.speaker.modal.share') }}
        </button>
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
      show: this.modalOpen
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
    }

  }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>
