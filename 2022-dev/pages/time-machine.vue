<template>
  <div class="time-machine">
    <!-- header -->

    <!-- banner image -->
    <div class="banner">
      <div class="image" />
    </div>

    <!-- content -->
    <main>
      <div class="slogan">
        一路以來，堅持在濁水溪以南
      </div>
      <img
        src="~/assets/images/triangle-pointed-up.svg"
        alt="pointed-up"
        @click="$refs.mySwiper.swiperInstance.slideNext()"
      >
      <div class="swiper">
        <swiper ref="mySwiper" :options="swiperOptions">
          <swiper-slide v-for="(year) in years" :key="year">
            <div :class="`slide`">
              {{ year }}
            </div>
          </swiper-slide>
        </swiper>
      </div>
      <img
        src="~/assets/images/triangle-pointed-down.svg"
        alt="pointed-down"
        @click="$refs.mySwiper.swiperInstance.slidePrev()"
      >
    </main>
  </div>
</template>

<script>
export default {
  name: 'TimeMachinePage',
  data () {
    return {
      swiperOptions: {
        direction: 'vertical',
        loop: true,
        mousewheel: true,
        autoHeight: true,
        slidesPerView: 3,
        initialSlide: 9
      },
      years: [2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021]
    }
  },
  computed: {
    swiper () {
      return this.$refs.mySwiper
    }
  }
}
</script>

<style lang="scss" scoped>
.time-machine {
  width: 100%;

  .banner {
    width: 100%;

    .image {
      height: 568px;
      background: url('~/assets/images/banner-pc.webp') no-repeat center center / cover;
    }
  }

  main {
    width: 100%;

    .slogan {
      @include flex(center, row, center);
      @include font(40px, $colorFont, 800);
      margin: 56px 0;
    }

    .swiper {
      width: 10%;
    }
  }
}
</style>
