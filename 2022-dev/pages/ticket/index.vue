<template>
  <div>
    <section id="hero" class="pt-8 pb-6">
      <div class="container main pb-5">
        <div class="banner mr-5 mr-md-0">
          <h2>{{ $t('pages.ticket.title') }}</h2>
          <MopconLogoWeb />
        </div>
        <div class="content mt-md-10">
          <h1>{{ $t('pages.ticket.subTitle') }}</h1>
          <p>{{ $t('pages.ticket.intro.1') }}</p>
          <p>{{ $t('pages.ticket.intro.2') }}</p>
        </div>
      </div>
    </section>
    <section id="ticket" class="pt-8 pb-2">
      <div class="container">
        <h2 class="mb-15">
          {{ $t('pages.ticket.title') }}
        </h2>
        <div class="ticket-box ticket-pink">
          <div class="ticket-title">
            <div class="img">
              <VVIP />
            </div>
            <h3>{{ $t('pages.ticket.vvip') }}</h3>
          </div>
          <div class="ticket-content">
            <ul>
              <li>{{ $t('pages.ticket.contain.1') }}</li>
              <li>{{ $t('pages.ticket.contain.2') }}</li>
              <li>{{ $t('pages.ticket.contain.3') }}</li>
              <li>{{ $t('pages.ticket.contain.4') }}</li>
            </ul>
            <div class="btn btn-pink">
              {{ $t('pages.ticket.goToBuy') }}
            </div>
          </div>
        </div>
        <div class="ticket-box ticket-pink">
          <div class="ticket-title">
            <div class="img">
              <VIP />
            </div>
            <h3>{{ $t('pages.ticket.vip') }}</h3>
          </div>
          <div class="ticket-content">
            <ul>
              <li>{{ $t('pages.ticket.contain.1') }}</li>
              <li>{{ $t('pages.ticket.contain.5') }}</li>
              <li>{{ $t('pages.ticket.contain.6') }}</li>
              <li>{{ $t('pages.ticket.contain.7') }}</li>
            </ul>
            <div class="btn btn-pink">
              {{ $t('pages.ticket.goToBuy') }}
            </div>
          </div>
        </div>
        <div class="ticket-box ticket-primary">
          <div class="ticket-title">
            <div class="img">
              <BlindBird />
            </div>
            <h3>{{ $t('pages.ticket.blindBird') }}</h3>
          </div>
          <div class="ticket-content">
            <ul>
              <li>{{ $t('pages.ticket.contain.8') }}</li>
              <li>{{ $t('pages.ticket.contain.9') }}</li>
              <li>{{ $t('pages.ticket.contain.10') }}</li>
            </ul>
            <div class="btn btn-primary">
              {{ $t('pages.ticket.goToBuy') }}
            </div>
          </div>
        </div>
        <div class="ticket-box ticket-primary">
          <div class="ticket-title">
            <div class="img">
              <General />
            </div>
            <h3>{{ $t('pages.ticket.general') }}</h3>
          </div>
          <div class="ticket-content">
            <ul>
              <li>{{ $t('pages.ticket.contain.8') }}</li>
              <li>{{ $t('pages.ticket.contain.11') }}</li>
              <li>{{ $t('pages.ticket.contain.12') }} 👉 {{ $t('pages.ticket.contain.13') }}</li>
              <li>{{ $t('pages.ticket.contain.14') }} 👉 {{ $t('pages.ticket.contain.15') }}</li>
            </ul>
            <div class="btn btn-primary">
              {{ $t('pages.ticket.goToBuy') }}
            </div>
          </div>
        </div>
        <!-- <div class="ticket-box ticket-primary-light">
          <div class="ticket-title">
            <div class="img">
              <Student />
            </div>
            <h3>{{ $t('pages.ticket.student') }}</h3>
          </div>
          <div class="ticket-content">
            <ul>
              <li>{{ $t('pages.ticket.contain.1') }}</li>
            </ul>
            <div class="btn btn-primary-light">
              {{ $t('pages.ticket.goToBuy') }}
            </div>
          </div>
        </div> -->
      </div>
    </section>
    <section id="product" class="pt-2 pb-14">
      <div class="container">
        <h2 class="mb-3">
          {{ $t('pages.ticket.product.title') }}
        </h2>
        <p class="mb-5">
          {{ $t('pages.ticket.product.intro') }}
        </p>
        <div class="product-area">
          <div class="product-box">
            <img src="../../assets/images/ticket/收納包_合成照1.jpg" alt="product">
            <h3>{{ $t('pages.ticket.product.1.title') }}</h3>
            <p>{{ $t('pages.ticket.product.1.description') }}</p>
          </div>
          <div class="product-box">
            <img src="../../assets/images/ticket/收納包_合成照2.jpg" alt="product">
            <h3>{{ $t('pages.ticket.product.2.title') }}</h3>
            <p>{{ $t('pages.ticket.product.2.description') }}</p>
          </div>
          <div class="product-box">
            <img src="../../assets/images/ticket/2022_會眾T.png" alt="product">
            <h3>{{ $t('pages.ticket.product.3.title') }}</h3>
            <p>{{ $t('pages.ticket.product.3.description') }}</p>
          </div>
          <div class="product-box">
            <img src="../../assets/images/ticket/2022_宮廟帽正面.png" alt="product">
            <h3>{{ $t('pages.ticket.product.4.title') }}</h3>
            <p>{{ $t('pages.ticket.product.4.description') }}</p>
          </div>
          <div class="product-box">
            <img src="../../assets/images/ticket/2022_宮廟帽背面.png" alt="product">
            <h3>{{ $t('pages.ticket.product.5.title') }}</h3>
            <p>{{ $t('pages.ticket.product.5.description') }}</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import MopconLogoWeb from '../../assets/images/mopcon_logo_web.svg?inline'
import VVIP from '../../assets/images/ticket/vvip.svg?inline'
import VIP from '../../assets/images/ticket/vip.svg?inline'
import BlindBird from '../../assets/images/ticket/blind_bird.svg?inline'
import General from '../../assets/images/ticket/general.svg?inline'
// import Student from '../../assets/images/ticket/student.svg?inline'
export default {
  name: 'TicketPage',
  components: {
    MopconLogoWeb,
    VVIP,
    VIP,
    BlindBird,
    General
    // Student
  },
  data () {
    return {
      innerWidth: null
    }
  },
  computed: {
    isMobile () {
      return this.innerWidth < 568
    }
  },
  mounted () {
    this.innerWidth = window.innerWidth
    window.addEventListener('resize', this.resize)
  },
  destroyed () {
    window.removeEventListener('resize', this.resize)
  },
  methods: {
    resize () {
      this.innerWidth = window.innerWidth
    },
    openWindow (url) {
      window.open(url)
    }
  }
}
</script>

<style lang="scss" scoped>
.hidden {
  display: none;
}
.pad-show {
  @include screen(pad) {
    display: block;
  }
}
.pad-hidden {
  @include screen(pad) {
    display: none;
  }
}
.sm-show {
  @include screen(sm) {
    display: block;
  }
}
.sm-hidden {
  @include screen(sm) {
    display: none;
  }
}
.btn {
  min-width: 185px;
}
#hero {
  background-color: #0074A2;
  background-image: url('../../assets/images/banner.svg');
  background-position-x: center;
  background-position-y: bottom;
  background-repeat: no-repeat;
  background-size: cover;
  @include screen(md) {
    background-size: contain;
  }
  @include screen(pad) {
    background-image: url('../../assets/images/banner_short_ipad.svg');
  }
  @include screen(sm) {
    background-image: url('../../assets/images/banner_short_mobile.svg');
  }
  h1 {
    @include font(40px, $colorWhite, bold);
  }
  h2 {
    @include font(4rem, $colorWhite, bold);
    width: 70%;
    margin: 0 0 2rem 0;
    padding-bottom: 1rem;
    border-bottom: 1px #ffffff solid;
    text-align: center;
    @include screen(pad) {
      width: 60%;
    }
    @include screen(sm) {
      font-size: 1.5rem;
    }
  }
  p {
    @include font(1rem, $colorWhite);
    text-align: justify;
    & + p {
      margin-top: 1.5rem;
    }
  }
  .main {
    @include flex(space-between);
    .content {
      width: 100%;
    }
    .banner {
      @include flex(center, column, center);
      width: 100%;
      min-width: 570px;
      min-height: 414px;
      background-image: url('../../assets/images/banner-img.svg');
      background-position-x: center;
      background-position-y: center;
      background-repeat: no-repeat;
      background-size: contain;
      img {
        width: 100%;
      }
    }
    @include screen(md) {
      @include flex(normal, column);
      margin-bottom: 150px;
      img {
        max-width: 650px;
      }
    }
    @include screen(pad) {
      .banner {
        min-width: 500px;
        min-height: 300px;
      }
    }
    @include screen(sm) {
      margin-bottom: 0;
      .banner {
        min-width: 300px;
        min-height: 200px;
      }
    }
  }
}

#ticket {
  background: $colorWhite;
  h2 {
    @include font(2.5rem, $colorPrimary, bold);
    text-align: center;
  }
  h3 {
    @include flex(center);
    width: 100%;
    font-size: 2rem;
    font-weight: bold;
  }
  .ticket-box {
    @include flex(normal, row, center);
    border: 1px solid;
    border-radius: 120px;
    margin-bottom: 3rem;
  }
  .ticket-title {
    @include flex(flex-start, row, center);
    width: 45%;
    border-right: 2px solid;
    border-radius: 2px;
    margin: 1rem 4rem;
    padding-right: 1rem;
  }
  .ticket-content {
    @include flex(space-between, row, center);
    width: 55%;
    padding-right: 4rem;
    ul {
      margin-right: 1.5rem;
      li {
        color: $colorBlueLight;
        list-style: disc;
      }
    }
  }
  .ticket-pink {
    h3, &.ticket-box, .ticket-title {
      border-color: #F4435A;
      color: #F4435A;
    }
  }
  .ticket-primary {
    h3, &.ticket-box, .ticket-title {
      border-color: $colorPrimary;
      color: $colorPrimary;
    }
  }
  .ticket-primary-light {
    h3, &.ticket-box, .ticket-title {
      border-color: #0074a2;
      color: #0074a2;
    }
  }
  @include screen(md) {
    .ticket-box {
      @include flex(normal, column);
      border-radius: 160px;
    }
    .ticket-title {
      width: calc(100% - 10rem);
      margin: 1rem 5rem;
      padding: 1rem 0;
      border-right-width: 0;
      border-bottom: 2px solid;
      .img {
        width: 50%;
        @include flex(center);
      }
      h3 {
        width: 50%;
      }
    }
    .ticket-content {
      width: calc(100% - 11rem);
      padding-right: 0;
      margin: 0 5rem 1rem 6rem;
    }
  }
  @include screen(sm) {
    .ticket-title {
      @include flex(normal, column, center);
      width: calc(100% - 6rem);
      margin: 1rem 3rem;
      .img {
        width: 100%;
      }
      h3 {
        width: 100%;
        margin: 1rem 0;
      }
    }
    .ticket-content {
      @include flex(space-between, column, center);
      width: calc(100% - 10rem);
      margin: 0 5rem 2rem 5rem;
      ul {
        margin-right: 0;
      }
      .btn {
        width: auto;
      }
    }
  }
}

#product {
  background: $colorWhite;
  h2 {
    @include font(2.5rem, $colorPrimary, bold);
    text-align: center;
  }
  h3 {
    @include font(2rem, $colorPrimary, bold);
    text-align: center;;
  }
  p {
    text-align: center;
    color: $colorBlueLight;
  }
  .product-area {
    display: grid;
    grid-gap: 1rem;
    justify-content: center;
    grid-template-columns: repeat(auto-fill, calc(20% - 0.8rem));
    .product-box {
      img {
        width: 100%;
        border-radius: 50%;
        box-shadow: 0px 4px 4px 0px #00000033;
      }
    }
  }
  @include screen(md) {
    .product-area {
      grid-template-columns: repeat(auto-fill, calc(33% - 0.8rem));
    }
  }
  @include screen(sm) {
    .product-area {
      grid-template-columns: repeat(auto-fill, 70%);
    }
  }
}
</style>
