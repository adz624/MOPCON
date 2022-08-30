<template>
  <div id="agendaList" :class="parentClass">
    <a
      v-for="room in data"
      :key="room.topic"
      href="#"
      class="agenda-card"
      :class="{ 'disabled': room.topic === 'Coming Soon'}"
      :style="{'width': room.is_keynote && parentClass!=='agenda-filter' ? '100%' : ''}"
      @click.prevent="$emit('open', room)"
    >

      <div v-if="room.speakers && room.speakers.length>1" class="speakerNum">
        <div class="agenda-card-speaker">
          <!--相片-->
          <div class="speaker-img-wrap">
            <img src="~/assets/images/schedule/astronaut.png" alt="">
          </div>
          <!--講者姓名-->
          <div class="speaker-text-wrap">
            <p>講者｜</p>
            <p v-for="(speakerName,i) in room.speakers" :key="`speakerName-${i}`" class="speaker-name">
              {{ speakerName.name }}<span>、</span>
            </p>
          </div>
          <!--議程廳-->
          <p class="agenda-room">
            <span>{{ room.room }} 議程</span>
            <span v-if="room.is_keynote">四廳聯播</span>
          </p>
        </div>
      </div>

      <div v-else class="speakerNum">
        <div
          v-for="speaker in room.speakers"
          :key="speaker.speaker_id"
          class="agenda-card-speaker"
        >
          <!--相片-->
          <div class="speaker-img-wrap">
            <img :src="getSpeakerImg(speaker.img.web)" alt="">
          </div>
          <!--講者姓名-->
          <p class="speaker-name">
            講者｜{{ speaker.name }}
          </p>
          <!--議程廳-->
          <p class="agenda-room">
            <span>{{ room.room }} 議程</span>
            <span v-if="room.is_keynote">R2 議程</span>
            <span v-if="room.is_keynote">R3 議程</span>
            <span v-if="room.is_keynote">R4 議程</span>
          </p>
        </div>
      </div>

      <div class="agenda-card-content">
        <!--議程主題-->
        <p class="agenda-card-title" :class="{'text-center':room.is_keynote && parentClass!=='agenda-filter' }">
          {{ room.topic }}
        </p>
        <!--時間-->
        <p v-if="parentClass=='agenda-filter' && (room.started_at && room.ended_at)" class="agenda-card-date">
          {{ room.started_at? $moment(room.started_at*1000).format('MM 月 DD 日') :'' }}
          {{ room.started_at? $moment(room.started_at*1000).format('HH:mm') :'' }} - {{ room.started_at? $moment(room.ended_at*1000).format('HH:mm') :'' }}
        </p>
        <!--議程標籤-->
        <ul class="agenda-card-tag" :style="{'justify-content':room.is_keynote ? 'center' : 'flex-start'}">
          <li v-for="(tag, i) in room.tags" :key="'agenda-card-tag' + i">
            {{ tag.name }}
          </li>
        </ul>
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
    getSpeakerImg (img) {
      return `${process.env.BASE_URL}/${img}`
    }
  }
}
</script>

<style lang="scss" scoped>
#agendaList{
  @include flex(space-start,row,stretch);
  @include screen(md){
    flex-wrap:wrap;
    justify-content: space-between;
  }
  margin-bottom: 64px;
  &.agenda-filter{
    justify-content: space-between;
  }
}
.agenda-card{
  @include flex (center,column,flex-start);
  width: 25%;
  &:not(:last-child) {
    margin-right: 32px;
  }
  @include screen(md){
    margin-top: 24px;
    margin-bottom: 24px;
    width: 48%;
    &:not(:last-child) {
      margin-right: 0px;
    }
  }
  @include screen(sm){
    width: 100%;
  }
}
.disabled{
  cursor:not-allowed;
  pointer-events: none;
}
.agenda-card-speaker{
  background-color:#0074a2;
  border-top-right-radius: 16px;
  border-top-left-radius: 16px;
  width: 100%;
  @include flex(center,column,center);
}
.speakerNum{
  width: 100%;
  margin-top: 32px;
}
.speaker-img-wrap{
  img{
    width: 72px;
    height: 72px;
    border-radius: 99em;
    position: relative;
    top:-30px;
  }
}
.speaker-text-wrap{
  @include flex(center,row,center);
  flex-wrap: wrap;
  @include screen(sm){
    padding-left: 4px;
    padding-right: 4px;
  }
  p{
    @include font(16px,$colorWhite,700);
    margin-top: 0;
    span{
      @include font(16px,$colorWhite,700);
    }
  }
  p:last-child{
    span{
      display: none;
    }
  }
}
.speaker-name{
  margin-top: 0px;
  @include font(16px,$colorWhite,700);
}
.agenda-room{
  display: inline-block;
  span{
    border-radius: 4px;
    background-color:$colorPinkLight;
    padding: 4px 6px;
    @include font(12px,$colorWhite,400)
  }
}
.agenda-card-content{
  background-color:rgba(81,163,211,0.2);
  border-bottom-right-radius:16px;
  border-bottom-left-radius: 16px;
  padding:17px 28px 25px 28px;
  @include flex(flex-start,column,center);
  width: 100%;
  height: 100%;
  .agenda-card-title{
    width: 100%;
    @include font(20px,$colorPrimary,500);
    height: 100%;
  }
  .agenda-card-tag{
    @include flex(flex-start,row,center);
    width: 100%;
    flex-wrap:wrap;
    li{
      background-color: #51a3d3;
      padding: 4px 13px;
      color:$colorWhite;
      @include font(12px,$colorWhite,400);
      margin-bottom: 16px;
      border-radius: 80px;
      &:not(:last-child) {
        margin-right: 8px;
      }
    }
  }
}

.agenda-filter {
  flex-wrap:wrap;
  .agenda-card {
    width: 22%;
    margin-top: 32px;
    margin-bottom: 32px;
    margin-right: 0px;
    @include screen(md) {
      width: 49%;
    }
    @include screen(sm) {
      width: 100%;
      margin-right: 0px;
    }
  }
  .agenda-card-date{
    width: 100%;
  }
  .speaker-text-wrap{
    flex-wrap:wrap;
    padding-left: 4px;
    padding-right: 4px;
  }
}
.justify-content-center{
  justify-content: center;
}

</style>
