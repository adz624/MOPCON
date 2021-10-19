<template>
  <div id="Sticker">
    <div class="container">
      <div class="stickerTextContainer p-12">
        <h3 class="mt-0 mt-pad-12 mb-6">
          嘴砲應援！
        </h3>
        <p class="mb-sm-6">
          請支援輸贏！官方 Line 貼圖即將上市！讓 Mosume 成為你每日嘴砲的得力助手吧！
        </p>
      </div>
      <div class="stickerImgContainer">
        <div class="stickergroup">
          <div class="stickerBg">
            <div class="sticker1" />
            <div class="sticker2" />
            <div class="sticker3" />
            <div class="sticker4" />
          </div>
          <div class="stickerBg">
            <div class="sticker5" />
            <div class="sticker6" />
            <div class="sticker7" />
            <div class="sticker8" />
          </div>
          <div class="stickerBg">
            <div class="sticker9" />
            <div class="sticker10" />
            <div class="sticker11" />
            <div class="sticker12" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'Sticker',
  data () {
    return {
      mosumeStickerList: []

    }
  },
  created () {
    const vm = this
    for (let i = 1; i < 13; i++) {
      vm.mosumeStickerList.push(i)
    }
  }
}

</script>
<style lang="scss" src='./style.scss' scoped>

</style>
