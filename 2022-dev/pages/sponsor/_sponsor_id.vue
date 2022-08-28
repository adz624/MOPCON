<template>
  <div>
    <section id="hero" class="pt-8 pb-6">
      <div class="container main pb-5">
        <div class="banner ml-5 mr-ml-0">
          <h2>{{ $t('pages.sponsor.title') }}</h2>
          <MopconLogoWeb />
        </div>
        <div class="content mt-md-10">
          <h1>{{ $t('pages.sponsor.subTitle.1') }}<br>{{ $t('pages.sponsor.subTitle.2') }}</h1>
          <p>{{ $t('pages.sponsor.intro.1') }}</p>
          <p>{{ $t('pages.sponsor.intro.2') }}</p>
          <div class="button-area mt-10 mb-10">
            <div class="btn btn-pink">
              <client-only><span class="iconify" data-icon="carbon:recommend" /></client-only>
              {{ $t('pages.sponsor.btn') }}
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="sponsor" class="pt-8 pb-2">
      <div class="container">
        <h2 class="mb-8">
          {{ $t('pages.sponsor.sponsorList') }}
        </h2>
        <div v-for="(item, i) in sponsorData" :key="i" class="sponsor mb-10">
          <div class="sponsor-header pb-6 mb-6">
            <div class="sponsor-header-image pr-6">
              <SponsorLogo1 v-if="i === 0" />
              <SponsorLogo2 v-if="i === 1" />
              <SponsorLogo3 v-if="i === 2" />
              <SponsorLogo4 v-if="i === 3" />
              <SponsorLogo5 v-if="i === 4" />
              <SponsorLogo6 v-if="i === 5" />
            </div>
            <h3>
              {{ item.name }}
              <span v-if="item.name_e && (item.name_e != item.name)">{{ item.name_e }}</span>
            </h3>
          </div>
          <div class="sponsor-content">
            <div v-for="detail in item.data" :key="detail.sponsor_id" class="sponsor-card" @click="openSponsorModal(detail)">
              <div class="sponsor-card-image">
                <img :src="detail.logo_path" :alt="detail.name">
              </div>
              <span>{{ detail.name }}</span>
            </div>
          </div>
        </div>
        <SponsorModal :data="activeSponsor" :speaker-data="speakerData" :modal-open="modalOpen" @modal-close="closeModal" />
      </div>
    </section>
    <section id="info" class="pt-8 pb-2">
      <div class="container">
        <h2 class="mb-8">
          {{ $t('pages.sponsor.info.title') }}
        </h2>
        <div class="info-area">
          <div class="info-card">
            <div class="info-image">
              <Sponsor1 />
            </div>
            <h3 class="mb-3">
              {{ $t('pages.sponsor.info.1.title') }}
            </h3>
            <span>{{ $t('pages.sponsor.info.1.description') }}</span>
          </div>
          <div class="info-card">
            <div class="info-image">
              <Sponsor2 />
            </div>
            <h3 class="mb-3">
              {{ $t('pages.sponsor.info.2.title') }}
            </h3>
            <span>{{ $t('pages.sponsor.info.2.description') }}</span>
          </div>
          <div class="info-card">
            <div class="info-image">
              <Sponsor3 />
            </div>
            <h3 class="mb-3">
              {{ $t('pages.sponsor.info.3.title') }}
            </h3>
            <span>{{ $t('pages.sponsor.info.3.description') }}</span>
          </div>
        </div>
        <div class="button-area mt-10 mb-10">
          <div class="btn btn-primary">
            <client-only><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></client-only>
            {{ $t('pages.sponsor.info.btn') }}
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import MopconLogoWeb from '../../assets/images/mopcon_logo_web.svg?inline'
import SponsorLogo1 from '../../assets/images/sponsor/sponsorLogo-1.svg?inline'
import SponsorLogo2 from '../../assets/images/sponsor/sponsorLogo-2.svg?inline'
import SponsorLogo3 from '../../assets/images/sponsor/sponsorLogo-3.svg?inline'
import SponsorLogo4 from '../../assets/images/sponsor/sponsorLogo-4.svg?inline'
import SponsorLogo5 from '../../assets/images/sponsor/sponsorLogo-5.svg?inline'
import SponsorLogo6 from '../../assets/images/sponsor/sponsorLogo-6.svg?inline'
import Sponsor1 from '../../assets/images/sponsor/sponsor-1.svg?inline'
import Sponsor2 from '../../assets/images/sponsor/sponsor-2.svg?inline'
import Sponsor3 from '../../assets/images/sponsor/sponsor-3.svg?inline'
import SponsorModal from '~/components/sponsor/SponsorModal'
import { sponsor, speaker } from '@/api/url'
export default {
  name: 'TicketPage',
  components: {
    MopconLogoWeb,
    SponsorLogo1,
    SponsorLogo2,
    SponsorLogo3,
    SponsorLogo4,
    SponsorLogo5,
    SponsorLogo6,
    Sponsor1,
    Sponsor2,
    Sponsor3,
    SponsorModal
  },
  async asyncData ({ $axios, params }) {
    try {
      const { data } = await $axios.get(sponsor)
      const res = await $axios.get(speaker)
      const config = {
        sponsorData: data.data,
        speakerData: res.data.data
      }
      if (params.sponsor_id) {
        data.data.forEach((sponsor) => {
          sponsor.data.forEach((item) => {
            if (item.sponsor_id === +params.sponsor_id) {
              config.activeSponsor = item
              config.modalOpen = true
            }
          })
        })
      }

      return config
    } catch (err) {}
  },
  data () {
    return {
      innerWidth: null,
      sponsorData: [],
      speakerData: [],
      modalOpen: false,
      activeSponsor: {}
    }
  },
  head () {
    return {
      title: this.modalOpen ? `${this.activeSponsor.name} | 贊助商 MOPCON 2022` : '贊助夥伴 | MOPCON 2022',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: this.modalOpen ? this.activeSponsor.about_us : ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: this.modalOpen ? `${this.activeSponsor.name} | 贊助商 MOPCON 2022` : '贊助夥伴 | MOPCON 2022'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: this.modalOpen ? this.activeSponsor.about_us : ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: this.modalOpen ? `${process.env.BASE_URL}/2022/speaker/${this.activeSponsor.sponsor_id}` : `${process.env.BASE_URL}/2022/speaker`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: this.modalOpen ? `${process.env.BASE_URL}/2022/${this.activeSponsor.logo_path}` : `${process.env.BASE_URL}/2022/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: this.modalOpen ? `${this.activeSponsor.name} | 贊助商 MOPCON 2022` : '贊助夥伴 | MOPCON 2022'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: this.modalOpen ? this.activeSponsor.about_us : ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: this.modalOpen ? `${this.activeSponsor.name} | 贊助商 MOPCON 2022` : '贊助夥伴 | MOPCON 2022'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: this.modalOpen ? `${this.activeSponsor.name} | 贊助商 MOPCON 2022` : '贊助夥伴 | MOPCON 2022'
        }
      ]
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
    },
    openSponsorModal (data) {
      this.modalOpen = true
      this.activeSponsor = data
    },
    closeModal (show) {
      this.modalOpen = show
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
    @include flex(space-between, row-reverse);
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
    .button-area {
      @include flex;
    }
    @include screen(md) {
      @include flex(normal, column);
      margin-bottom: 150px;
      img {
        max-width: 650px;
      }
      .button-area {
        @include flex(center);
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

#sponsor {
  background: $colorWhite;
  h2 {
    @include font(2.5rem, $colorPrimary, bold);
    text-align: center;
  }
  h3, h3 span {
    @include font(2rem, $colorPrimary, bold);
    margin: 0;
  }
  .sponsor {
    &-header {
      @include flex(normal, row, center);
      border-bottom: 1px $colorPrimaryLight solid;
      &-image svg {
        width: 90px;
      }
    }
    &-content {
      display: grid;
      grid-template-columns: repeat(6, minmax(0,1fr));
      grid-gap: 1.5rem;
      gap: 1.5rem;
    }
    &-card {
      @include flex(normal, column, center);
      cursor: pointer;
      border: 2px solid transparent;
      border-radius: 0.5rem;
      &-image {
        width: 100%;
        height: 150px;
        img, svg {
          max-height: 100%;
          max-width: 100%;
          margin: auto;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          position: absolute;
        }
      }
      span {
        @include font(1.25rem, $colorBlack);
        text-align: center;
        padding: 0 0.5rem;
      }
      &:hover {
        border-color: $colorPrimaryLight;
      }
    }
  }
  @include screen(md) {
    .sponsor {
      &-content {
        grid-template-columns: repeat(4, minmax(0,1fr));
      }
    }
  }
  @include screen(pad) {
    .sponsor {
      &-content {
        grid-template-columns: repeat(2, minmax(0,1fr));
      }
    }
  }
}

#info {
  background: $colorWhite;
  h2 {
    @include font(2.5rem, $colorPrimary, bold);
    text-align: center;
  }
  h3 {
    @include font(2rem, $colorPrimary, bold);
    margin: 0;
    text-align: center;
  }
  .info-area {
    @include flex(space-around);
  }
  .info-card {
    width: 30%;
    span {
      color: $colorBlueLight;
    }
    svg {
      width: 100%;
    }
  }
  .button-area {
    @include flex(center);
  }
  @include screen(pad) {
    .info-area {
      @include flex(normal, column, center);
    }
    .info-card {
      width: 90%;
    }
  }
}
</style>
