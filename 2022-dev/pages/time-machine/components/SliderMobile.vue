<template>
  <div>
    <div class="info">
      <div class="slider">
        <div @click="onLastSlide">
          <span
            class="iconify"
            data-icon="entypo:triangle-left"
            style="color: #ff7987;"
            data-width="24"
            data-height="24"
          >
          </span>
        </div>
        <client-only>
          <Splide ref="slider" :options="mobileOptions">
            <SplideSlide v-for="year in years" :key="year">
              {{ year }}
            </SplideSlide>
          </Splide>
        </client-only>
        <div @click="onNextSlide">
          <span
            class="iconify"
            data-icon="entypo:triangle-right"
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
  name: 'SliderMobile',
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
      mobileOptions: {
        type: 'loop',
        wheel: true,
        perPage: 3,
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

  @media (max-width: 640px) {
    @include flex(center, column, center);
    padding: 32px 18px;
  }

  .slider {
    width: 30%;
    padding: 15px;
    @include flex(center, column, center);
    border-right: 4px solid $colorPink;

    @media (max-width: 640px) {
      width: 85%;
      @include flex(center, row, center);
      border-right: none;
      margin-left: 1rem;
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

        @media (max-width: 640px) {
          font-size: 28px;
        }

        &.is-active {
          font-size: 48px;
          color: $colorPrimary;
          border: none;

          @media (max-width: 640px) {
            font-size: 32px;
          }
        }
      }
    }
  }

  .content {
    padding: 40px 104px;

    @media (max-width: 640px) {
      padding: 20px 0px;
      border-top: 4px solid $colorPink;
    }
  }
}

img {
  object-fit: cover;

  @media (max-width: 640px) {
    width: 500px;
  }
}

.mosume-2021 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 5%;
  }

  @include screen(sm) {
    bottom: -70%;
    right: 0;
  }

  img {
    @include screen(sm) {
      width: 380px;
    }
  }
}

.mosume-2020 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 0;
  }

  @include screen(sm) {
    bottom: -55%;
    right: -5%;
  }

  img {
    @include screen(sm) {
      width: 385px;
    }
  }
}

.mosume-2019 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 10%;
  }

  @include screen(sm) {
    bottom: -45%;
  }

  img {
    @include screen(sm) {
      width: 335px;
    }
  }
}

.mosume-2018 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 10%;
  }

  @include screen(sm) {
    bottom: -50%;
  }

  img {
    @include screen(sm) {
      width: 335px;
    }
  }
}

.mosume-2017 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 5%;
  }

  @include screen(sm) {
    bottom: -45%;
    right: 10%;
  }

  img {
    @include screen(sm) {
      width: 335px;
    }
  }
}

.mosume-2016 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 5%;
  }

  @include screen(sm) {
    bottom: -45%;
    right: 6%;
  }

  img {
    @include screen(sm) {
      width: 345px;
    }
  }
}

.mosume-2015 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 5%;
  }

  @include screen(sm) {
    bottom: -42%;
  }

  img {
    @include screen(sm) {
      width: 355px;
    }
  }
}

.mosume-2014 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 5%;
  }

  @include screen(sm) {
    bottom: -60%;
    right: 0;
  }

  img {
    @include screen(sm) {
      width: 375px;
    }
  }
}

.mosume-2013 {
  @media (max-width: 640px) {
    position: absolute;
    bottom: -85%;
    right: 0;
  }

  @include screen(sm) {
    bottom: -55%;
    right: -7%;
  }

  img {
    @include screen(sm) {
      width: 400px;
    }
  }
}
</style>
