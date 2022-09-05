<template>
  <div class="time-machine">
    <!-- banner image -->
    <div class="banner">
      <div class="image" />
    </div>

    <!-- content -->
    <main>
      <h1>
        {{ $t('pages.timeline.title.1') }}<br>{{ $t('pages.timeline.title.2') }}
      </h1>
      <div class="bg-pink-image-right">
        <img src="~/assets/images/timeMachine/bg-right-pink.webp" alt="right">
      </div>
      <div class="bg-pink-image-left">
        <img src="~/assets/images/timeMachine/bg-left-pink.webp" alt="left">
      </div>

      <section>
        <!-- desktop slider -->
        <SliderPC v-if="!isMobile" :years="years" :content="content" />

        <!-- mobile slider -->
        <SliderMobile v-else :years="years" :content="content" />
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
      years: [2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012],
      content: [{
        year: 2021,
        title: 'Mobile X AIoT',
        subtitle: this.$t('pages.timeline.content.2021.subtitle'),
        text: this.$t('pages.timeline.content.2021.text'),
        album: [],
        websiteLink: 'https://mopcon.org/2021/'
      }, {
        year: 2020,
        title: this.$t('pages.timeline.content.2020.title'),
        subtitle: this.$t('pages.timeline.content.2020.subtitle'),
        text: this.$t('pages.timeline.content.2020.text'),
        album: [
          {
            title: 'Day1',
            link: 'https://photos.app.goo.gl/iv5XLYf5J8mUz7Ka9'
          },
          {
            title: this.$t('pages.timeline.content.album.speakersDinner'),
            link: 'https://photos.app.goo.gl/2snqVCqgKD2jY5Qc6'
          },
          {
            title: 'Day2',
            link: 'https://photos.app.goo.gl/wCtHc9VYPqGRSC7k9'
          },
          {
            title: this.$t('pages.timeline.content.album.celebration'),
            link: 'https://photos.app.goo.gl/7C1eKR8AYXT8Vtw87'
          }
        ],
        websiteLink: 'https://mopcon.org/2020/'
      }, {
        year: 2019,
        title: this.$t('pages.timeline.content.2019.title'),
        subtitle: this.$t('pages.timeline.content.2019.subtitle'),
        text: this.$t('pages.timeline.content.2019.text'),
        album: [
          {
            title: 'Day1',
            link: 'https://photos.app.goo.gl/KoJRgP7qbUm1svuQ9'
          },
          {
            title: this.$t('pages.timeline.content.album.preparation'),
            link: 'https://photos.app.goo.gl/wTFzqXVN4b5GZyu7A'
          },
          {
            title: 'Day2',
            link: 'https://photos.app.goo.gl/q1Q2wakMYNPkt5gi8'
          }
        ],
        websiteLink: 'https://mopcon.org/2019/'
      }, {
        year: 2018,
        title: 'IoT、AI、Blockchain',
        subtitle: this.$t('pages.timeline.content.2018.subtitle'),
        text: this.$t('pages.timeline.content.2018.text'),
        album: [
          {
            title: this.$t('pages.timeline.content.album.warmUp'),
            link: 'https://photos.app.goo.gl/wRNWqSZhpteA1AXp9'
          },
          {
            title: 'Day0',
            link: 'https://photos.app.goo.gl/S3ZUeQ24BaP7U2go6'
          },
          {
            title: 'Day1',
            link: 'https://photos.app.goo.gl/wZxz6rH8ai98XrUaA'
          },
          {
            title: 'Day2',
            link: 'https://photos.app.goo.gl/f62VB1ifqCTRPivB6'
          }
        ],
        websiteLink: 'https://mopcon.org/2018/'
      }, {
        year: 2017,
        title: this.$t('pages.timeline.content.2017.title'),
        subtitle: this.$t('pages.timeline.content.2017.subtitle'),
        text: this.$t('pages.timeline.content.2017.text'),
        album: [
          {
            title: 'Day1',
            link: 'https://photos.app.goo.gl/G11QTTRUcditG2HP9'
          },
          {
            title: 'Day2',
            link: 'https://photos.app.goo.gl/kk9yxQveCyrikjvXA'
          },
          {
            title: this.$t('pages.timeline.content.album.meetUp'),
            link: 'https://photos.app.goo.gl/XVa38R9b1e6EF7kMA'
          },
          {
            title: this.$t('pages.timeline.content.album.celebration'),
            link: 'https://photos.app.goo.gl/QvuMq7AtsHRjLxCr9'
          }
        ],
        websiteLink: 'https://mopcon.org/2017/'
      }, {
        year: 2016,
        title: this.$t('pages.timeline.content.2016.title'),
        subtitle: this.$t('pages.timeline.content.2016.subtitle'),
        text: this.$t('pages.timeline.content.2016.text'),
        album: [
          {
            title: 'MOPCON 2016',
            link: 'https://photos.app.goo.gl/qwyTgSPsMcVx65j28'
          },
          {
            title: this.$t('pages.timeline.content.album.celebration'),
            link: 'https://photos.app.goo.gl/MxQt2CnGBtZC3JSF8'
          },
          {
            title: this.$t('pages.timeline.content.album.speakersDinner'),
            link: 'https://photos.app.goo.gl/yXh53ghK3qxgoEJ68'
          },
          {
            title: this.$t('pages.timeline.content.album.meetUp'),
            link: 'https://photos.app.goo.gl/J8w84ndYejU3NrTF8'
          }
        ],
        websiteLink: 'https://mopcon.org/2016/'
      }, {
        year: 2015,
        title: this.$t('pages.timeline.content.2015.title'),
        subtitle: this.$t('pages.timeline.content.2015.subtitle'),
        text: this.$t('pages.timeline.content.2015.text'),
        album: [
          {
            title: 'MOPCON 2015',
            link: 'https://photos.app.goo.gl/b7x4pRBxGWTcC6T49'
          },
          {
            title: this.$t('pages.timeline.content.album.meetUp'),
            link: 'https://photos.app.goo.gl/5WCaScXRzWgi5LbB8'
          }
        ],
        websiteLink: 'https://mopcon.org/2015/'
      }, {
        year: 2014,
        title: this.$t('pages.timeline.content.2014.title'),
        subtitle: '',
        text: this.$t('pages.timeline.content.2014.text'),
        album: [],
        websiteLink: 'https://mopcon.org/2014/'
      }, {
        year: 2013,
        title: this.$t('pages.timeline.content.2013.title'),
        subtitle: this.$t('pages.timeline.content.2013.subtitle'),
        text: this.$t('pages.timeline.content.2013.text'),
        album: [],
        websiteLink: 'https://mopcon.org/2013/'
      }, {
        year: 2012,
        title: this.$t('pages.timeline.content.2012.title'),
        subtitle: '',
        text: this.$t('pages.timeline.content.2012.text'),
        album: [],
        websiteLink: 'https://mopcon.org/2012/'
      }],
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
    window.removeEventListener('resize', this.onResize)
  },
  methods: {
    onResize () {
      this.innerWidth = window.innerWidth
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
        padding-bottom: 700px;
      }

      @include screen(sm) {
        padding-bottom: 830px;
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
