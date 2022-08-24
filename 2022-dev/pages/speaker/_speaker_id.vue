<template>
  <div>
    <section class="banner pt-8 pb-15 pb-md-6">
      <div class="container main pb-5">
        <div class="banner-image ">
          <img src="../../assets/images/home/image_banner.png" alt="banner image">
        </div>
        <div class="content ml-5 ml-md-0 mt-md-10">
          <h1 class="my-6">
            {{ $t('pages.speaker.title') }}
          </h1>
          <p>
            {{ $t('pages.speaker.intro.1') }}
            <br>{{ $t('pages.speaker.intro.2') }}
          </p>
        </div>
      </div>
    </section>
    <section class="main-content pt-8 pb-14">
      <div class="container">
        <div class="tags desktop">
          <label v-for="(item,i) in tags" :key="`d-tags-${i}`" :for="`tag-${i}`" class="tags-item" :class="{'active': checkTag.includes(item) }">
            {{ item }}
            <input :id="`tag-${i}`" v-model="checkTag" :value="item" type="checkbox" class="mr-1">
          </label>
        </div>
        <button class="speaker-filter-button btn btn-primary" @click="openTagModal()">
          <client-only><span class="iconify" data-icon="ci:filter" /></client-only>
          {{ $t('pages.speaker.filter_tag') }}
        </button>
        <Modal v-if="isMobile" :modal-open="tagsModalOpen">
          <h3 class="text-center fz-6 mt-2 mobile-tag-title">
            {{ $t('pages.speaker.filter_tag') }}
          </h3>
          <div class="tags mb-10">
            <label v-for="(item,i) in tags" :key="`m-tags-${i}`" :for="`m-tag-${i}`" class="tags-item" :class="{'active': tempCheckTag.includes(item) }">
              {{ item }}
              <input :id="`m-tag-${i}`" v-model="tempCheckTag" :value="item" type="checkbox" class="mr-1">
            </label>
          </div>
          <button class="mobile-tag-button btn btn-primary mb-4" @click="mobileCheckFilter()">
            <client-only><span class="iconify mr-2" data-icon="fa:search" /></client-only>
            {{ $t('pages.speaker.filter_tag_button') }}
          </button>
          <button class="mobile-tag-button btn btn-outline-primary" @click="closeTagModal(!tagsModalOpen)">
            <client-only><span class="iconify fz-7 color-pink" data-icon="carbon:close" /></client-only>
            {{ $t('pages.speaker.close') }}
          </button>
        </Modal>
        <div class="speakers">
          <div
            v-for="(item, i) in filterSpeakers"
            :key="`d-tags-${i}`"
            class="speakers-item col-3 col-md-2 col-sm-1 my-11 py-4 px-10 px-sm-4"
            @click="openSpeakerModal(item)"
          >
            <img :src="item.img.web" :alt="item.name" class="speakers-img">
            <h4 class="speakers-title mt-4 mb-0">
              {{ item.name }}
            </h4>
            <p class="speakers-bio my-4">
              {{ item.bio }}
            </p>
            <div class="tags">
              <button v-for="(tag, tagIndex) in item.tags" :key="`speaker-tags-${tagIndex}`" class="speakers-tags-item">
                {{ tag.name }}
              </button>
            </div>
          </div>
        </div>
        <SpeakerModal :data="activeSpeaker" :modal-open="modalOpen" @modal-close="closeModal" />
      </div>
    </section>
  </div>
</template>

<script>
import SpeakerModal from '~/components/speaker/SpeakerModal'
import Modal from '~/components/speaker/tagsMobileModal'
import { speaker, tags } from '@/api/url'
export default {
  name: 'SpeakerPage',
  components: {
    Modal,
    SpeakerModal
  },
  async asyncData ({ $axios, params }) {
    try {
      const { data } = await $axios.get(speaker)
      const res = await $axios.get(tags)
      const config = {
        speakerData: data.data,
        tags: res.data.data.map(tag => tag.name)
      }
      if (params.speaker_id) {
        const filterSpeaker = data.data.filter(speaker => speaker.speaker_id === +params.speaker_id)
        config.activeSpeaker = filterSpeaker && filterSpeaker.length > 0 ? filterSpeaker[0] : {}
        config.modalOpen = !!(filterSpeaker && filterSpeaker.length > 0)
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
      speakerData: [],
      activeSpeaker: {}
    }
  },
  head () {
    return {
      title: this.modalOpen ? `${this.activeSpeaker.name} | 講者 MOPCON 2022` : '講者陣容 | MOPCON 2022',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: this.modalOpen ? this.activeSpeaker.summary : ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: this.modalOpen ? `${this.activeSpeaker.name} | 講者 MOPCON 2022` : '講者陣容 | MOPCON 2022'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: this.modalOpen ? this.activeSpeaker.summary : ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: this.modalOpen ? `${process.env.BASE_URL}/2022/speaker/${this.activeSpeaker.speaker_id}` : `${process.env.BASE_URL}/2022/speaker`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: this.modalOpen ? `${process.env.BASE_URL}/2022/${this.activeSpeaker.img.web}` : `${process.env.BASE_URL}/2022/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: this.modalOpen ? `${this.activeSpeaker.name} | 講者 MOPCON 2022` : '講者陣容 | MOPCON 2022'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: this.modalOpen ? this.activeSpeaker.summary : ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: this.modalOpen ? `${this.activeSpeaker.name} | 講者 MOPCON 2022` : '講者陣容 | MOPCON 2022'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: this.modalOpen ? `${this.activeSpeaker.name} | 講者 MOPCON 2022` : '講者陣容 | MOPCON 2022'
        }
      ]
    }
  },
  computed: {
    isMobile () {
      return this.innerWidth < 768
    },
    filterSpeakers () {
      const vm = this
      let filterArr = this.speakerData
      if (vm.checkTag.length) {
        filterArr = filterArr.filter(speaker => speaker.tags.some(tag => vm.checkTag.includes(tag.name)))
      }
      return filterArr
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
    openSpeakerModal (data) {
      this.modalOpen = true
      this.activeSpeaker = data
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
  .speaker-filter-button {
      display: none;
      @include screen(pad) {
        width: 100%;
        display: block;
      }
    }
  .tags {
    padding: 0px 1rem;
    @include flex(center, row, center);
    @include screen(pad) {
      &.desktop {
        display: none;
      }
    }
    flex-wrap: wrap;
    &-item {
      display: block;
      border-radius: 2rem;
      background: $colorPrimaryLight;
      color: $colorWhite;
      padding: 0.5rem 1rem;
      border: 0px;
      margin-right: 1rem;
      margin-bottom: 2rem;
      input {
        display: none;
      }
      @include screen(pad) {
        margin-bottom: 1.5rem;
      }
      cursor: pointer;
      &:hover {
        background: $colorBlue;
      }
      &.active {
        background: $colorBlue;
      }
    }
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
.speakers {
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
      border: 2px solid $colorPrimaryLight;
      border-radius: 8px;
    }
  }
  &-img {
    width: 104px;
    height: 104px;
    object-fit: cover;
    border-radius: 50%;
  }
  &-title {
    @include font(20px,$colorPrimary,500);
  }
  &-bio {
    @include font(16px,$colorBlueLight,400);
  }
  &-tags-item {
     display: block;
    border-radius: 2rem;
    background: transparent;
    color: $colorPrimaryLight;
    padding: 0.5rem 1rem;
    border: 2px solid $colorPrimaryLight;
    margin-right: 1rem;
    margin-bottom: 1rem;
  }
}
.mobile-tag {
  &-title {
    border-bottom: 4px solid $colorPink;
  }
  &-button {
    @include flex(center, row, center);
  }
}
.color-pink {
  color: $colorPink;
}

</style>
