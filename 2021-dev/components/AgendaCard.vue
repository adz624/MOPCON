<template>
  <div :class="parentClass">
    <a
      v-for="room in data"
      :key="room.topic"
      href="#"
      class="agenda-card"
      :class="{'disabled': room.topic === 'Coming Soon'}"
      @click.prevent="$emit('open', room)"
    >
      <p class="agenda-card-title">
        {{ room.topic }}
      </p>
      <ul class="agenda-card-tag">
        <li v-for="(tag, i) in room.tags" :key="'agenda-card-tag' + i">
          {{ tag.name }}
        </li>
      </ul>
      <div class="agenda-card-detail">
        <div class="agenda-card-speakers" :class="{'morethan6': room.speakers && room.speakers.length > 5}">
          <div
            v-for="speaker in room.speakers"
            :key="speaker.speaker_id"
            class="agenda-card-speaker"
            :class="{'morethan6': room.speakers && room.speakers.length > 5}"
          >
            <div class="speaker-img-list position-relative">
              <div class="speaker-img-wrap">
                <img :src="speaker.img.web" alt="">
              </div>
              <div class="hover-box position-absolute" />
            </div>
            <p class="agenda-card-speaker-name">
              {{ speaker.name }}
            </p>
          </div>
        </div>
        <div>
          <p v-if="parentClass === 'agenda-filter' && (room.started_at && room.ended_at)" class="agenda-card-date">
            {{ room.started_at? parseDate(room.started_at*1000) :'' }}
            -
            {{ room.ended_at? parseDate(room.ended_at*1000) :'' }}
          </p>
          <p class="agenda-card-room">{{ room.room }} 議程</p>
        </div>
      </div>
    </a>
  </div>
</template>
<script>
export default {
  props: {
    open: {
      type: Object,
      default: () => {}
    },
    parentClass: {
      type: String,
      default: ''
    },
    data: {
      type: Array,
      default: () => {}
    }
  },
  methods: {
    parseDate (date) {
      const hour = new Date(date).getHours() > 9 ? new Date(date).getHours() : `0${new Date(date).getHours()}`
      const min = new Date(date).getMinutes() > 9 ? new Date(date).getMinutes() : `0${new Date(date).getMinutes()}`
      return `${hour}:${min}`
    }
  }
}
</script>

<style lang="scss">
.agenda-card {
  width: 100%;
  background: $colorWhite;
  padding: 20px 16px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  &:not(:last-child) {
    margin-right: 32px;
  }
  @include screen(md) {
    margin-right: 0px;
    margin-bottom: 16px;
  }
  &-title {
    margin-top: 0px;
    font-size: 18px;
    font-weight: 600;
  }
  &-tag {
    list-style: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 32px;
    li {
      font-size: 14px;
      border-radius: 20rem;
      padding: 4px 12px;
      border: 2px solid $colorBlueDark;
      margin-bottom: 8px;
      margin-right: 12px;
      color: $colorBlueDark;
    }
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
    &.morethan6 {
      flex-direction: row;
      flex-wrap: wrap;
      max-width: 650px;
    }
  }
  &-speaker {
    &:not(:first-child) {
      margin-top: 20px;
    }
    display: flex;
    align-items: center;
    &.morethan6 {
      margin-top: 0px;
      margin-bottom: 20px;
      min-width: 200px;
    }

    &-name {
      margin-top: 0px;
      margin-left: 16px;
      margin-bottom: 4px;
    }
  }
  &-date {
    white-space: nowrap;
  }
  &-room {
    white-space: nowrap;
    margin-left: 8px;
    text-align: right;
  }
}
.disabled {
  cursor: not-allowed;
  pointer-events: none;
}
.agenda-filter {
  display: flex;
  flex-wrap: wrap;
  .agenda-card {
    width: 32%;
    margin-bottom: 16px;
    margin-right: 1%;
    @include screen(md) {
      width: 49%;
    }
    @include screen(sm) {
      width: 100%;
      margin-right: 0px;
    }
  }
}

.speaker {
  &-img-list {
    width: 52px;
    height: 52px;
  }
  &-img-wrap {
    width: 52px;
    height: 52px;
    transform: rotate(45deg);
    border-radius: 16px;
    overflow: hidden;
    position: relative;
    z-index: 1;
    img {
      object-fit: cover;
      transform: rotate(-45deg) scale(1.2);
      max-width: 100%;
    }
  }
}
</style>
