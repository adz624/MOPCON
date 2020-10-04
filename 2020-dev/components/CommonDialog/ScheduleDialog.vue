<template>
  <Dialog
    v-if="speaker"
    :visible="visible"
    @close="$emit('update:visible', false)"
    @click.native="btnListShow && (btnListShow = false)"
  >
    <div slot="body" class="dialog-body">
      <speaker-topic
        :speaker="speaker"
        notitle
        class="-mt-4 md:mt-0"
        @handle-tag-click="toggleTag($event); $emit('update:visible', false);"
      />

      <speaker-info :speakers="speaker.speakers" class="mt-8 mb-4" />
    </div>
    <div slot="footer">
      <share-btn :btn-list-show.sync="btnListShow" :share-url="shareUrl" />
    </div>
  </Dialog>
</template>

<script>
import Dialog from '@/components/Dialog'
import SpeakerInfo from './SpeakerInfo'
import SpeakerTopic from './SpeakerTopic'
import ShareBtn from './ShareBtn'

export default {
  name: 'ScheduleDialog',
  components: {
    Dialog,
    SpeakerInfo,
    SpeakerTopic,
    ShareBtn
  },
  props: {
    visible: {
      type: Boolean,
      default: false
    },
    speaker: {
      type: [Object, undefined],
      default: () => {}
    },
    toggleTag: {
      type: Function,
      default: () => {}
    }
  },
  data () {
    return {
      btnListShow: false,
      copySuccess: false
    }
  },
  computed: {
    shareUrl () {
      return process.client ? `${window.location.origin}/2020${this.$route.path}/${this.speaker.session_id}` : ''
    }
  },
  methods: {
    parseSummary (summary) {
      return summary.replace(/\n/gi, '<br>')
    }
  }
}
</script>

<style lang="scss" scoped>
::v-deep .dialog {
  width: 90%;
  @screen lg {
    width: 70%;
  }
  @screen xl {
    width: 60%;
  }
}
</style>
