<template>
  <div class="date">
    <div class="date-choose">
      <a href="#" :class="{'active':day==1}" @click.prevent="selectedDay(1)">10/15 Day 01</a>
      <a href="#" :class="{'active':day==2}" @click.prevent="selectedDay(2)">10/16 Day 02</a>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SectionDate',
  props: {
    day: {
      type: Number,
      default: 1
    }
  },
  data () {
    return {
      checkDay: this.day
    }
  },
  methods: {
    selectedDay (num) {
      this.$emit('checkDay', this.checkDay = num)
    }
  }
}
</script>

<style lang="scss" scoped>
.date{
  text-align: center;
  margin-bottom: 16px;
  &-choose{
    display: inline-flex;
    border:1px solid #0074a2;
    border-radius: 50rem;
    overflow: hidden;
  }
  a{
    display: block;
    @include font (32px, #85bfe0 ,700);
    padding: 16px 44px;
    background: $colorWhite;
    &:hover, &.active{
      background:#0074a2;
      color:$colorWhite;
    }
    @include screen(md){
      font-size: 28px;
    }
    @include screen(md){
      font-size: 20px;
    }
  }
}
</style>
