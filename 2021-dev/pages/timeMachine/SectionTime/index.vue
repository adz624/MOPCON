<template>
  <div id="Time" class="time">
    <section>
      <div class="container">
        <div class="time-title-container">
          <div class="sopOne-icon mr-7" />
          <h2>歷年MOPCON</h2>
        </div>
      </div>
    </section>
    <TimeLine />
  </div>
</template>

<script>
import TimeLine from './TimeLine'
export default {
  name: 'Time',
  components: {
    TimeLine
  }
}
</script>

<style lang="scss" src='./style.scss' scoped></style>
