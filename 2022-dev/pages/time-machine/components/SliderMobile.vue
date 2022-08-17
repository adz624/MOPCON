<template>
  <div>
    <div class="info">
      <div class="slider">
        <div @click="onLastSlide">
          <span class="iconify"
            data-icon="entypo:triangle-left"
            style="color: #ff7987;"
            data-width="24"
            data-height="24">
          </span>
        </div>
        <Splide ref="slider" :options="mobileOptions">
          <SplideSlide v-for="year in years" :key="year">
            {{ year }}
          </SplideSlide>
        </Splide>
        <div @click="onNextSlide">
          <span class="iconify"
            data-icon="entypo:triangle-right"
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
        year: this.content[this.slideActiveIndex].year,
        title: this.content[this.slideActiveIndex].title,
        subtitle: this.content[this.slideActiveIndex].subtitle,
        text: this.content[this.slideActiveIndex].text,
        album: this.content[this.slideActiveIndex].album,
        websiteLink: this.content[this.slideActiveIndex].websiteLink
      }
    },
    imgSrc () {
      return require(`~/assets/images/timeMachine/mo-${this.years[this.slideActiveIndex]}-mobile.webp`)
    }
  },
  mounted () {
    const splide = this.$refs.slider.splide
    splide.on('move', () => {
      this.slideActiveIndex = splide.index
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

  @media (max-width: 640px) {
    @include flex(center, column, center);
    padding: 32px 18px;
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

    @include screen(md) {
      padding: 20px 0px 20px 20px;
    }

    @media (max-width: 640px) {
      padding: 20px 0px;
      border-top: 4px solid $colorPink;
    }
  }
}

.mosume {
  margin-top: 4rem;

  img {
    @media (max-width: 640px) {
      width: 330px;
      height: 310px;
      object-fit: cover;
    }
  }
}
</style>
