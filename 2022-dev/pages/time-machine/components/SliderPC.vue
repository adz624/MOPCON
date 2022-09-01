<template>
  <div>
    <div class="info">
      <div class="slider">
        <div @click="onLastSlide">
          <span
            class="iconify mb-3"
            data-icon="emojione-monotone:red-triangle-pointed-up"
            style="color: #ff7987;"
            data-width="24"
            data-height="24">
          </span>
        </div>
        <client-only>
          <Splide ref="slider" :options="desktopOptions">
            <SplideSlide v-for="year in years" :key="year">
              {{ year }}
            </SplideSlide>
          </Splide>
        </client-only>
        <div @click="onNextSlide">
          <span
            class="iconify"
            data-icon="emojione-monotone:red-triangle-pointed-down"
            style="color: #ff7987;"
            data-width="24"
            data-height="24">
          </span>
        </div>
      </div>

      <div class="content">
        <TimeMachineContent
          :year="slideContent.year"
          :title="slideContent.title"
          :subtitle="slideContent.subtitle"
          :text="slideContent.text"
          :album="slideContent.album"
          :websiteLink="slideContent.websiteLink" />
      </div>
    </div>

    <!-- <div class="mosume">
      <img :src="imgSrc" alt="mosume">
    </div> -->
  </div>
</template>

<script>
import TimeMachineContent from '../components/TimeMachineContent'

export default {
  name: 'SliderPC',
  components: {
    TimeMachineContent
  },
  props: {
    years: {
      type: Array,
      required: true
    },
    content: {
      type: Array,
      required: true
    }
  },
  data () {
    return {
      desktopOptions: {
        direction: 'ttb',
        height: '30rem',
        width: '50rem',
        type: 'loop',
        wheel: true,
        perPage: 5,
        perMove: 1,
        start: 0,
        focus: 'center',
        snap: true,
        pagination: false,
        arrows: false
      },
      slideActiveIndex: 0
    }
  },
  computed: {
    slideContent () {
      return {
        year: this.content && this.content[this.slideActiveIndex].year,
        title: this.content && this.content[this.slideActiveIndex].title,
        subtitle: this.content && this.content[this.slideActiveIndex].subtitle,
        text: this.content && this.content[this.slideActiveIndex].text,
        album: this.content && this.content[this.slideActiveIndex].album,
        websiteLink: this.content && this.content[this.slideActiveIndex].websiteLink
      }
    },
    imgSrc () {
      return require(`~/assets/images/timeMachine/mo-${this.years[this.slideActiveIndex]}.webp`)
    }
  },
  mounted () {
    this.$nextTick(function () {
      const splide = this.$refs.slider?.splide
      if (splide) {
        splide.on('move', () => {
          this.slideActiveIndex = splide.index
        })
      }
    })
  },
  unmounted () {
    this.$refs.slider.splide.destroy(true)
  },
  methods: {
    onNextSlide () {
      this.$refs.slider.splide.go('<')
    },
    onLastSlide () {
      this.$refs.slider.splide.go('>')
    }
  }
}
</script>

<style lang="scss" scoped>
.info {
  @include flex(center, row, center);
  background-color: white;
  width: 88%;
  border-radius: 40px;
  margin-top: 120px;
  padding: 88px 40px;
  box-shadow: 0px 4px 4px 0px #00000033;

  @include screen(md) {
    padding: 32px 20px;
  }

  @include screen(sm) {
    @include flex(center, column, center);
  }

  .slider {
    width: 30%;
    padding: 15px;
    @include flex(center, column, center);
    border-right: 4px solid $colorPink;

    @include screen(md) {
      width: 40%;
      padding-left: 0;
    }

    @include screen(sm) {
      width: 80%;
      @include flex(center, row, center);
    }

    svg {
      cursor: pointer;
    }

    .splide {
      width: 100%;

      &__slide {
        @include flex(center, row, center);
        font-size: 40px;
        font-weight: 700;
        color: #c8c7c8;

        &.is-active {
          font-size: 48px;
          color: $colorPrimary;
          border: none;
        }
      }
    }
  }

  .content {
    padding: 40px 104px;

    @include screen(md) {
      padding: 20px 0px 20px 20px;
    }
  }
}

.mosume {
  position: absolute;
  bottom: -80%;
  right: 10%;

  @include screen(md) {
    bottom: -60%;
    right: 10%;
  }

  img {
    width: 680px;
    height: 500px;
    object-fit: cover;

    @include screen(md) {
      width: 460px;
      height: 340px;
    }
  }
}
</style>
