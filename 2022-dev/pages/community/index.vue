<template>
  <div>
    <section class="banner pt-8 pb-15 pb-md-6">
      <div class="container main pb-5">
        <div class="banner-image ">
          <img src="../../assets/images/home/image_banner.png" alt="banner image">
        </div>
        <div class="content ml-5 ml-md-0 mt-md-10">
          <h1 class="my-6">
            {{ $t('pages.community.title') }}
          </h1>
          <p>
            {{ $t('pages.community.intro.1') }}
            <br>{{ $t('pages.community.intro.2') }}
            <br>{{ $t('pages.community.intro.3') }}
          </p>
        </div>
      </div>
    </section>
    <section class="main-content pt-8 pb-14">
      <div class="container">
        <h2 class="subTitle text-center">
          {{ $t('pages.community.volunteer_team') }}
        </h2>
        <div class="community">
          <div
            v-for="(item, i) in communityData"
            :key="`d-tags-${i}`"
            class="community-item col-3 col-md-2 col-sm-1 my-11 py-4 px-10 px-sm-4"
            @click="openCommunityModal(item)"
          >
            <div class="community-img-cover">
              <img :src="item.photo || 'https://fakeimg.pl/300/'" :alt="item.name" class="community-img">
            </div>
            <h4 class="community-title mt-4 mb-0">
              {{ item.name }}
            </h4>
          </div>
        </div>
        <communityModal :data="activeCommunity" :modal-open="modalOpen" @modal-close="closeModal" />
      </div>
    </section>
  </div>
</template>

<script>
import communityModal from '~/components/community/communityModal'
export default {
  name: 'CommunityPage',
  components: {
    communityModal
  },
  async asyncData ({ $axios, params }) {
    try {
      let data = []
      if (process.server) {
        const res = await $axios.get(process.env.BASE_URL + '/2022/community.json')
        data = res.data
      } else {
        const res = '../static/community.json'
        data = res.data
      }
      const config = {
        communityData: data.community
      }

      return config
    } catch (err) {}
  },
  data () {
    return {
      nowDropdownOpen: '',
      innerWidth: null,
      modalOpen: false,
      tagsModalOpen: false,
      tags: [],
      checkTag: [],
      tempCheckTag: [],
      communityData: [],
      activeCommunity: {}
    }
  },
  head () {
    return {
      title: '主辦社群 | MOPCON 2022',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: this.modalOpen ? this.activeCommunity.summary : ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: '主辦社群 | MOPCON 2022'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: `${process.env.BASE_URL}/2022/community`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: `${process.env.BASE_URL}/2022/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: '主辦社群 | MOPCON 2022'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: this.modalOpen ? this.activeCommunity.summary : ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: '主辦社群 | MOPCON 2022'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: '主辦社群 | MOPCON 2022'
        }
      ]
    }
  },
  computed: {
    isMobile () {
      return this.innerWidth < 768
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
    openCommunityModal (data) {
      this.modalOpen = true
      this.activeCommunity = data
    },
    closeTagModal (show) {
      this.tagsModalOpen = show
      this.tempCheckTag = []
    },
    openTagModal () {
      this.tempCheckTag = [...this.checkTag]
      this.tagsModalOpen = true
    },
    closeModal (show) {
      this.modalOpen = show
    },
    mobileCheckFilter () {
      this.checkTag = [...this.tempCheckTag]
      this.closeTagModal(!this.tagsModalOpen)
    }
  }
}
</script>

<style lang="scss" scoped>
.banner {
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
    .button-area {
      @include flex;
      .btn svg {
        font-size: 1.5rem;
        top: 4px;
      }
      @include screen(md) {
        @include flex(normal, column);
        .btn-pink {
          width: 100%;
        }
      }
    }
    .banner-image {
      @include flex(center, row, center);
      width: 100%;
      img {
        width: 100%;
      }
    }
    @include screen(md) {
      @include flex(normal, column);
      img {
        max-width: 650px;
      }
    }
  }
}

.main-content {
  background: $colorWhite;
  .subTitle {
    @include font(40px, $colorBlueDark, 500);
  }
}
.modalList{
  @include flex(center,column,center);
  li{
    width: 100%;
  }
  a{
    display: flex;
    justify-content: center;
    @include font(20px,$colorPrimary,500);
    padding: 8px 0px;
  }
}
.community {
  @include flex(normal, row, stretch);
  flex-wrap: wrap;
  @include screen(sm) {
    @include flex(center, column, center);
  }
  &-item {
    @include flex(flex-start, column, center);
    border: 2px solid transparent;
    cursor: pointer;
    &:hover {
      .community-img-cover {
        position: relative;
        border-radius: 50%;
        overflow: hidden;
        &::after {
          content: "";
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          background-color: $colorPink;
          opacity: 0.4;
        }
      }
    }
  }
  &-img {
    width: 240px;
    height: 240px;
    object-fit: cover;
    border-radius: 50%;
    display: block;
  }
  &-title {
    @include font(20px,$colorPrimary,500);
  }
}
.color-pink {
  color: $colorPink;
}

</style>
