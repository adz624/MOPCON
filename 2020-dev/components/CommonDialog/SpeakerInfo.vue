<template>
  <section class="info">
    <h2 v-if="!notitle" class="mb-6">
      相關講者資訊
    </h2>
    <div
      class="flex items-center pt-3 flex-col md:flex-row text-center md:text-left"
      :class="{'pb-4': !speakerContactVisible}"
    >
      <div class="flex flex-col items-start">
        <div class="img-wrap">
          <img :src="speaker.img.web">
        </div>
        <speaker-contact v-if="speakerContactVisible" :links="speaker" />
      </div>
      <div class="text-wrap">
        <h3>{{ speaker.name }}</h3>
        <p>{{ speaker.company }}</p>
        <p>{{ speaker.job_title }}</p>
      </div>
    </div>
  </section>
</template>

<script>
import SpeakerContact from './SpeakerContact'

export default {
  name: 'SpeakerInfo',
  components: {
    SpeakerContact
  },
  props: {
    speaker: {
      type: [Object, undefined],
      default: () => {}
    },
    notitle: {
      type: Boolean,
      default: false
    }
  },
  computed: {
    speakerContactVisible () {
      return Object.entries(this.speaker).some(([key, value]) => key.startsWith('link_') && value)
    }
  }
}
</script>

<style scoped lang="scss">
.info {
  @apply text-white;
  h2 {
    @apply text-lg pl-4 relative mr-4;
    &::before {
      content: '\\\\';
      left: -5px;
      @apply absolute text-yellow-500 text-lg font-medium;
    }
  }
  .img-wrap {
    width: 115px;
    height: 115px;
    border-radius: 16px;
    transform: rotate(45deg);
    flex-shrink: 0;
    @apply border border-white overflow-hidden mb-8;
  }
  img {
    object-fit: cover;
    transform: rotate(-45deg) scale(1.3);
  }
  h3 {
    @apply text-xl mb-3;
  }
  p {
    @apply text-gray-400;
  }
  .text-wrap {
    @apply flex justify-center flex-col mb-auto;
  }
  @screen md {
    .img-wrap {
      @apply mr-16 ml-5 mb-0;
    }
    .text-wrap {
      height: 135px;
    }
  }
}
</style>
