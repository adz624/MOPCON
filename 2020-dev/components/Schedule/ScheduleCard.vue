<template>
  <div class="card-wrap" :class="floorColor(roomInfo.floor)">
    <div class="card-header">
      <div class="img">
        <img :src="roomInfo.speakers[0].img.mobile" alt="speaker_img">
      </div>
      <h3>{{ roomInfo.speakers.map(item => item.name).join(', ') }}</h3>
      <span class="logo logo-location" />
      <p>{{ roomInfo.room }}({{ roomInfo.floor }})</p>
    </div>

    <h2>{{ roomInfo.topic }}</h2>

    <ul class="tag-wrap">
      <li v-for="(tag, idx) in roomInfo.tags" :key="`tag-${idx}`">
        <button class="btn-tag btn-tag-outline">
          {{ tag.name }}
        </button>
      </li>
    </ul>

    <ul class="hashtag-wrap">
      <li v-for="(hasstag, idx) in 3" :key="`hashtag-${idx}`">
        <a href=""># 夥伴議程</a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'ScheduleCard',
  props: {
    roomInfo: {
      type: Object,
      default: () => {}
    }
  },
  data () {
    return {
    }
  },
  methods: {
    floorColor (floor) {
      switch (floor) {
        case '4F':
          return 'blue'
        case '5F':
          return 'green'
        default:
          return 'orange'
      }
    }
  }
}
</script>

<style lang="scss" scoped>
// logo
@import '~@/assets/styles/_mix';
$logo_map: (
  svg: location,
);
@include logo_map_mix(speaker);

.card-wrap {
  background: rgba(255,255,255,0.12);
  border-radius: 8px;
  // min-width: 275px;
  width: 100%;
  height: 100%;
  @apply text-gray-400 pr-3 pl-5 pb-4 pt-5 relative cursor-pointer flex flex-col;
  &::before {
    content: '';
    border-radius: 8px;
    @apply absolute inset-0 border-l-8;
  }
  &.orange::before {
    @apply border-orange-300;
  }
  &.green::before {
    @apply border-green-300;
  }
  &.blue::before {
    @apply border-blue-300;
  }
  &:hover::after {
    content: '- Read more -';
    background: rgba(255, 204, 0, 0.7);
    border-radius: 8px;
    @apply absolute inset-0 text-black flex items-center justify-center font-medium;
  }
  @screen xl {
    min-width: 275px;
  }
  @screen lg {
    min-width: 230px;
  }
}
h2 {
  @apply text-gray-100 text-lg my-3 h-12;
}
.card-header {
  @apply flex items-center;
  .img {
    transform: rotate(45deg);
    @apply w-6 h-6 bg-indigo-300 rounded-md mr-4;
  }
  img {
    transform: rotate(-45deg);
  }
  .logo {
    width: 20px;
    height: 18px;
    @apply inline-block ml-auto;
  }
  p {
    @apply text-sm;
  }
}
.tag-wrap, .hashtag-wrap {
  @apply flex flex-wrap pt-2 text-sm;
  li {
    @apply mr-2 mt-2;
  }
}
.hashtag-wrap {
  @apply mt-auto;
}
.btn-tag-outline {
  border-radius: 18px;
  padding: 2px 8px;
  @apply border-2 border-purple-700 text-sm outline-none text-purple-400;
}

</style>
