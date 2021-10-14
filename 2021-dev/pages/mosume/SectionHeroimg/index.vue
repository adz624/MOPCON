<template>
  <div id="Heroimg">
    <div class="container text-center">
      <h4 class="mb-0">
        搭給厚！我是
      </h4>
      <h2 class="mt-0 mb-7">
        Mosume
      </h2>
    </div>
    <div class="heroMosumeContainer">
      <div v-swiper:mySwipper1="swiperOption">
        <div class="swiper-wrapper">
          <p class="mosumeSkill m-0 swiper-slide">
            Javascript,
          </p>
          <p class="mosumeSkill m-0 swiper-slide">
            Python,
          </p>
          <p class="mosumeSkill m-0 swiper-slide">
            Html,
          </p>
          <p class="mosumeSkill m-0 swiper-slide">
            CSS,
          </p>
          <p class="mosumeSkill m-0 swiper-slide">
            SQL,
          </p>
          <p class="mosumeSkill m-0 swiper-slide">
            Java,
          </p>
        </div>
      </div>
      <div class="decorateCircle">
        <img src="./images/heroMosume.png" alt="">
      </div>
      <div v-swiper:mySwipper2="mosumeOption" class="mosumeText">
        <div class="swiper-wrapper">
          <p class="swiper-slide m-0">
            MOSUME
          </p>
          <p class="swiper-slide m-0">
            MOSUME
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { directive } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'

export default {
  name: 'Heroimg',
  directives: {
    swiper: directive
  },
  data () {
    return {
      swiperOption: {
        slidesPerView: 'auto',
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false
        }
      },
      mosumeOption: {
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 30,
        loop: true,
        speed: 8000,
        autoplay: {
          delay: 1,
          disableOnInteraction: false
        }
      }
    }
  }

}
</script>

<style lang="scss" src="./style.scss" scoped></style>
