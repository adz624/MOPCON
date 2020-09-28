<template>
  <Dialog
    v-if="speaker"
    :visible="visible"
    @close="$emit('update:visible', false)"
    @click.native="btnListShow && (btnListShow = false)"
  >
    <div slot="body" class="dialog-body">
      <speaker-topic :speaker="speaker" notitle class="-mt-4 md:mt-0" />

      <speaker-info :speaker="speaker.speakers[0]" class="mt-8 mb-6" />
    </div>
    <div slot="footer">
      <share-btn :speaker="speaker" :btn-list-show.sync="btnListShow" :share-url="shareUrl" />
    </div>
  </Dialog>
</template>

<script>
import Dialog from '@/components/Dialog'
import SpeakerInfo from './SpeakerInfo'
import SpeakerTopic from './SpeakerTopic'
import ShareBtn from './ShareBtn'

export default {
  name: 'SpeakerDialog',
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
      return `${window.location.origin}/2020/schedule/${this.speaker.speakers[0].speaker_id}`
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
  @screen md {
    width: 50%;
  }
}
</style>
