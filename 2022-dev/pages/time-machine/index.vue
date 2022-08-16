<template>
  <div class="time-machine">
    <!-- header -->

    <!-- banner image -->
    <div class="banner">
      <div class="image" />
    </div>

    <!-- content -->
    <main>
      <h1>
        一路以來，<br />堅持在濁水溪以南
      </h1>
      <div class="bg-pink-image-right">
        <img src="~/assets/images/timeMachine/bg-right-pink.webp" alt="right" />
      </div>
      <div class="bg-pink-image-left">
        <img src="~/assets/images/timeMachine/bg-left-pink.webp" alt="left" >
      </div>

      <section>
        <!-- desktop slider -->
        <SliderPC v-if="!isMobile" />

        <!-- mobile slider -->
        <SliderMobile v-if="isMobile" />
      </section>
    </main>
  </div>
</template>

<script>
import SliderPC from './components/SliderPC.vue'
import SliderMobile from './components/SliderMobile.vue'

export default {
  name: 'TimeMachinePage',
  components: {
    SliderPC,
    SliderMobile
  },
  data () {
    return {
      innerWidth: null
    }
  },
  computed: {
    isMobile () {
      return this.innerWidth <= 640
    }
  },
  mounted () {
    this.onResize()
    window.addEventListener('resize', this.onResize)
  },
  unmounted () {
    // this.$refs.slider.splide.destroy(true)
    window.removeEventListener('resize', this.onResize)
  },
  methods: {
    onResize () {
      console.log(1, this.innerWidth)
      this.innerWidth = window.innerWidth
      console.log(2, this.isMobile)
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
      background: url('~/assets/images/timeMachine/banner-pc.webp') no-repeat center center / cover;

      @include screen(md) {
        height: 424px;
        background: url('~/assets/images/timeMachine/banner-ipad.webp') no-repeat center center / cover;
      }

      @include screen(sm) {
        height: 354px;
        background: url('~/assets/images/timeMachine/banner-mobile.webp') no-repeat center center / cover;
      }
    }
  }

  main {
    background-color: white;
    width: 100%;

    h1 {
      text-align: center;
      @include font(40px, $colorFont, 800);
      padding: 56px 0;
      margin: 0;

      @include screen(pad) {
        padding: 46px 20px 20px 20px;
      }

      @include screen(sm) {
        font-size: 32px;
        padding: 46px 20px 20px 20px;
      }

      br {
        display: none;

        @include screen(sm) {
          display: block;
        }
      }
    }

    .bg-pink-image-right {
      display: flex;
      justify-content: flex-end;
      position: relative;

      img {
        object-fit: scale-down;
        height: 400px;

        @include screen(md) {
          width: 260px;
          height: 280px;
        }

        @include screen(sm) {
          width: 200px;
          height: 250px;
        }
      }
    }

    .bg-pink-image-left {
      margin-top: 300px;
      padding-bottom: 380px;
      display: flex;

      @include screen(md) {
        margin-top: 30px;
        padding-bottom: 410px;
      }

      @media (max-width: 640px) {
        padding-bottom: 880px;
      }

      img {
        object-fit: scale-down;
        height: 400px;

        @include screen(md) {
          width: 260px;
          height: 280px;
          margin-top: 120px;
        }

        @include screen(sm) {
          width: 200px;
          height: 250px;
          margin-top: 50px;
        }
      }
    }

    section {
      width: 100%;
      position: absolute;
      left: 50%;
      top: 0;
      transform: translate(-44%, 20%);

      @include screen(md) {
        transform: translate(-44%, 7%);
      }

      @include screen(sm) {
        transform: translate(-44%, 15%);
      }
    }
  }
}
</style>
