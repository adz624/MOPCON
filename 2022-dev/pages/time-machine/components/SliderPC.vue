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
            data-height="24"
          >
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
            data-height="24"
          >
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
          :website-link="slideContent.websiteLink"
        />
      </div>
    </div>

    <div v-if="slideActiveIndex !== 9" :class="`mosume-${years[slideActiveIndex]}`">
      <img :src="imgSrc" alt="mosume">
    </div>
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

  .slider {
    width: 30%;
    padding: 15px;
    @include flex(center, column, center);
    border-right: 4px solid $colorPink;

    @include screen(md) {
      width: 45%;
      padding-left: 0;
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

          @media (max-width: 690px) {
            font-size: 44px;
          }
        }
      }
    }
  }

  .content {
    padding: 40px 104px;

    @include screen(lg) {
      padding: 30px 40px 30px 50px;
    }

    @include screen(md) {
      padding: 20px 0px 20px 20px;
    }
  }
}

img {
  object-fit: cover;
}

.mosume-2021 {
  position: absolute;
  bottom: -93%;
  right: 10%;

  @include screen(md) {
    bottom: -74%;
  }

  @include screen(pad) {
    bottom: -80%;
  }

  img {
    width: 690px;

    @include screen(md) {
      width: 470px;
    }

    @include screen(pad) {
      width: 500px;
    }
  }
}

.mosume-2020 {
  position: absolute;
  bottom: -85%;
  right: 10%;

  @include screen(md) {
    bottom: -78%;
  }

  @include screen(pad) {
    bottom: -80%;
  }

  @media (max-width: 690px) {
    bottom: -77%;
  }

  img {
    width: 640px;

    @include screen(md) {
      width: 500px;
    }

    @include screen(pad) {
      width: 500px;
    }
  }
}

.mosume-2019 {
  position: absolute;
  bottom: -75%;
  right: 12%;

  @include screen(md) {
    bottom: -74%;
  }

  @include screen(pad) {
    bottom: -69%;
  }

  img {
    width: 580px;

    @include screen(md) {
      width: 470px;
    }
  }
}

.mosume-2018 {
  position: absolute;
  bottom: -78%;
  right: 12%;

  @include screen(md) {
    bottom: -74%;
  }

  @include screen(pad) {
    bottom: -79%;
  }

  @media (max-width: 690px) {
    bottom: -72%;
  }

  img {
    width: 580px;

    @include screen(md) {
      width: 470px;
    }

    @include screen(pad) {
      width: 500px;
    }

    @media (max-width: 690px) {
      width: 450px;
    }
  }
}

.mosume-2017 {
  position: absolute;
  bottom: -78%;
  right: 12%;

  @include screen(md) {
    bottom: -74%;
  }

  @include screen(pad) {
    bottom: -64%;
  }

  img {
    width: 580px;

    @include screen(md) {
      width: 470px;
    }

    @include screen(pad) {
      width: 420px;
    }
  }
}

.mosume-2016 {
  position: absolute;
  bottom: -78%;
  right: 12%;

  @include screen(md) {
    bottom: -74%;
  }

  @include screen(pad) {
    bottom: -68%;
  }

  img {
    width: 580px;

    @include screen(md) {
      width: 470px;
    }

    @include screen(pad) {
      width: 420px;
    }
  }
}

.mosume-2015 {
  position: absolute;
  bottom: -78%;
  right: 12%;

  @include screen(md) {
    bottom: -79%;
  }

  @include screen(pad) {
    bottom: -66%;
  }

  @media (max-width: 670px) {
    bottom: -59%;
  }

  img {
    width: 580px;

    @include screen(md) {
      width: 500px;
    }

    @include screen(pad) {
      width: 400px;
    }
  }
}

.mosume-2014 {
  position: absolute;
  bottom: -78%;
  right: 8%;

  @include screen(md) {
    bottom: -87%;
  }

  @include screen(pad) {
    bottom: -74%;
  }

  img {
    width: 580px;

    @include screen(md) {
      width: 550px;
    }

    @include screen(pad) {
      width: 470px;
    }
  }
}

.mosume-2013 {
  position: absolute;
  bottom: -84%;
  right: 8%;

  @include screen(md) {
    bottom: -87%;
  }

  @include screen(pad) {
    bottom: -74%;
  }

  @media (max-width: 690px) {
    bottom: -68%;
  }

  img {
    width: 620px;

    @include screen(md) {
      width: 550px;
    }

    @include screen(pad) {
      width: 470px;
    }

    @media (max-width: 690px) {
      width: 430px;
    }
  }
}
</style>
