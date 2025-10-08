<template>
  <div>
    <div
      id="sponsorModal"
      class="modal fade"
      :class="{'show': show}"
      :style="{'display: block': show }"
    >
      <div class="modal-content">
        <div class="clearfix">
          <span class="close mr-1" @click="close()">&times;</span>
        </div>
        <div class="sponsor-info">
          <div class="sponsor-image mr-4  mr-pad-0">
            <img :src="data?.logo_path?.web" :alt="data.name">
          </div>
          <div class="sponsor-content">
            <h4>{{ data.name }}</h4>
            <!-- eslint-disable-next-line vue/no-v-html -->
            <p v-html="parseContent(data.about_us)" />
          </div>
        </div>
        <div v-for="speaker in data.speaker_information" :key="speaker.speaker_id" class="speaker mt-5 pt-10">
          <div class="speaker-info">
            <div class="speaker-image mr-4">
              <img :src="speaker?.img?.web" :alt="speaker.name">
            </div>
            <div>
              <h4 class="speaker-title my-0 mt-sm-4">
                <p class="name pr-3 my-0">
                  {{ speaker.name }}
                </p>
                <span class="speaker-subtitle">{{ speaker.company }} {{ speaker.job_title }} </span>
              </h4>
              <!-- eslint-disable-next-line vue/no-v-html -->
              <p class="speaker-bio my-0 my-sm-2" v-html="parseContent(getSpeakerBio(speaker.speaker_id))" />
            </div>
          </div>
          <div class="speaker-date">
            <p class="text mt-3 mb-4">
              <span v-if="speaker.started_at > 0" class="pr-2">{{ $moment(speaker.started_at * 1000).format('MM/DD HH:mm') }} - {{ $moment(speaker.endeded_at * 1000).format('HH:mm') }}</span>
              <span v-if="speaker.room">{{ speaker.room }}{{ speaker.floor ? `(${ speaker.floor })` : '' }}</span>
              <client-only><span class="iconify fz-5" data-icon="bxs:map" /></client-only>
            </p>
          </div>
        </div>
        <div class="button-area mt-5 mb-5">
          <div v-if="data.official_website" class="btn btn-primary" @click="openWindow(data.official_website)">
            <client-only><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></client-only>
            官方網站
          </div>
          <div v-if="data.facebook_url" class="btn btn-primary" @click="openWindow(data.facebook_url)">
            <client-only><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></client-only>
            Facebook
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SponsorModal',
  props: {
    modalOpen: Boolean,
    data: {
      type: Object,
      default: () => {}
    },
    speakerData: {
      type: Array,
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
      const modal = document.getElementById('sponsorModal')
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
      const modal = document.getElementById('sponsorModal')
      if (status) {
        body.classList.add('modal-open')
        modal.style.display = 'block'
      } else {
        modal.style.display = 'none'
        modal.classList.remove('show')
        body.classList.remove('modal-open')
      }
    },
    openWindow (url) {
      window.open(url)
    },
    getSpeakerBio (speakerId) {
      const speaker = this.speakerData.filter(speaker => speaker.speaker_id === +speakerId)
      return speaker[0].bio
    }
  }
}
</script>

<style lang="scss" scoped>
/* The Modal (background) */
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1071;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.6);
}

.modal.fade {
  opacity: 0;
}
.modal.show {
  opacity: 1;
}

/* Modal Content */
.modal.fade .modal-content {
  background-color: #ffffff;
  border: 2px solid #0074A2;
  border-radius: 32px;
  margin: 50px auto;
  width: 90%;
  max-width: 720px;
  transform: translate(0, -50px);
  transition: transform 0.3s ease-out;
  padding: 1rem 2.5rem;
  @include screen(pad) {
    padding: 1rem 1.5rem;
  }
}

.modal.show .modal-content {
  transform: none;
}

.fade {
  transition: opacity 0.15s linear;
}

/* The Close Button */
.close {
  color: #0074A2;
  font-size: 30px;
  line-height: 1;
  cursor: pointer;
  float: right;
}

.clearfix {
  &:after {
    content: '';
    display: table;
    clear: both;
  }
}

.sponsor-info, .speaker-info {
  @include flex;
  .sponsor-image img, .speaker-image img {
    width: 200px;
  }
  h4 {
    @include font(1.25rem, $colorPrimary, 500);
  }
  p {
    @include font(1rem, $colorBlueLight);
  }
  @include screen(pad) {
    @include flex(normal, column);
    .sponsor-image, .speaker-image {
      @include flex(center);
    }
  }
}

.sponsor-info + .speaker, .speaker + .speaker {
  border-top: 1px solid $colorPrimaryLight;
}

.speaker {
  &-title {
    .name {
      @include font(20px, $colorPrimary, 500);
    }
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    @include screen(sm) {
      flex-direction: column;
    }
  }
  &-subtitle {
    @include font(16px,$colorBlue,500);
  }
  &-bio {
    @include font(16px,$colorBlueLight,400);
  }
  &-date {
    @include flex(flex-end, row, center);
    @include screen(sm) {
      @include flex(center, row, center);
    }
    .text {
      @include flex(normal, row, center);
      svg {
        color: $colorPrimaryLight;
      }
      span {
        @include font(16px,$colorBlueLight,400);
      }
    }
  }
}

.button-area {
  @include flex;
  .btn {
    width: 100%;
    svg {
      font-size: 1.5rem;
      top: 3px;
    }
  }
  .btn + .btn {
    margin-left: 1rem;
  }
  @include screen(pad) {
    @include flex(normal, column);
    .btn + .btn {
      margin-left: 0;
      margin-top: 1rem;
    }
  }
}
</style>
