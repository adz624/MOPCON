<template>
  <div id="TimeMachine">
    <section class="main home-bg">
      <div class="container">
        <div class="vol10-mobile position-absolute d-none d-pad-block" />
        <div class="mo-container position-relatvie mb-8 mb-sm-0">
          <div class="bg-mosume" />
          <div class="vol10-gray d-pad-none position-absolute" />
        </div>
        <h2 class="main-title text-center mb-8">
          啟動 MOPCON<br>時光機
        </h2>
        <p class="main-content pb-sm-8">
          MOPCON 全名為 Mobile Open Platform Conference，為非營利的技術研討會，成立宗旨為針對移動通訊領域結合實際的產業面與工程研發做比較深入的探討
        </p>
      </div>
    </section>
    <SectionAbout />
    <SectionTime />
  </div>
</template>
<script>
import SectionTime from './SectionTime'
import SectionAbout from './SectionAbout'
export default {
  name: 'TimeMachine',
  components: {
    SectionTime,
    SectionAbout
  }

}
</script>

<style lang="scss" src="./style.scss" scoped></style>
