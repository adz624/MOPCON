<template>
  <div @click="!isMobile && toggleDropdown('', $event)">
    <section id="hero" class="pt-8 pb-15 pb-md-6">
      <div class="container main pb-5">
        <div class="content mt-md-10">
          <h1>{{ $t('pages.home.title') }}</h1>
          <p>
            {{ $t('pages.home.intro.1') }}
          </p>
          <p>
            {{ $t('pages.home.intro.2') }}
          </p>
          <div class="button-area mt-15 mt-md-6 pt-6">
            <div class="btn btn-pink mr-10 mb-md-6" @click="openWindow('https://reurl.cc/GxQ5bD')">
              <no-ssr><span class="iconify" data-icon="carbon:recommend" /></no-ssr>
              {{ $t('pages.home.speaker.1') }}
            </div>
            <div class="btn btn-pink" @click="openWindow('https://reurl.cc/DyeK6R')">
              <no-ssr><span class="iconify" data-icon="akar-icons:circle-check-fill" /></no-ssr>
              {{ $t('pages.home.speaker.2') }}
            </div>
          </div>
        </div>
        <div class="banner ml-5 ml-md-0">
          <img src="../../assets/images/home/image_banner.png" alt="banner image">
        </div>
      </div>
    </section>
    <section id="history" class="pt-8 pb-14">
      <div class="container">
        <h2>{{ $t('pages.home.history.title') }}</h2>
        <div class="history-2021 mb-15">
          <div class="content">
            <h3>{{ $t('pages.home.history.2021_title') }}</h3>
            <p>
              {{ $t('pages.home.history.2021_intro.1') }}<br v-if="$t('pages.home.history.newline')">{{ $t('pages.home.history.2021_intro.2') }}
            </p>
            <div class="button-area">
              <div class="btn btn-primary" @click="openWindow('https://mopcon.org/2021/')">
                <no-ssr><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></no-ssr>
                {{ $t('pages.home.btn.web') }}
              </div>
            </div>
          </div>
          <div class="image">
            <img src="../../assets/images/home/2021.png" alt="2021 image">
          </div>
        </div>
        <div class="history-2020 mb-15">
          <div class="content">
            <h3>{{ $t('pages.home.history.2020_title') }}</h3>
            <p>
              {{ $t('pages.home.history.2020_intro.1') }}<br v-if="$t('pages.home.history.newline')">{{ $t('pages.home.history.2020_intro.2') }}
            </p>
            <div class="button-area">
              <div class="mr-10 mr-sm-0 mb-sm-6">
                <div class="btn" name="2020" @click.prevent="toggleDropdown('2020', $event)">
                  <no-ssr><span class="iconify" data-icon="ep:arrow-down-bold" /></no-ssr>
                  {{ $t('pages.home.btn.album') }}
                </div>
                <div v-if="!isMobile" class="dropdown" :class="{'active': nowDropdownOpen === '2020'}">
                  <ul>
                    <li v-for="(item,i) in recordData" :key="`record-${i}`">
                      <a :href="item.url" :target="item.target">{{ item.name }}</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="btn btn-primary" @click="openWindow('https://mopcon.org/2020/')">
                <no-ssr><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></no-ssr>
                {{ $t('pages.home.btn.web') }}
              </div>
            </div>
          </div>
          <div class="image">
            <img src="../../assets/images/home/2020.png" alt="2020 image">
          </div>
        </div>
        <div class="history-button pt-15">
          <a class="btn btn-primary" href="/timeMachine">
            <no-ssr><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></no-ssr>
            {{ $t('pages.home.history.more') }}
          </a>
        </div>
      </div>
    </section>
    <Modal v-if="isMobile" :modal-open="modalOpen" @modal-close="closeModal">
      <ul class="modalList">
        <li v-for="(item,i) in recordData" :key="`record-${i}`">
          <a :href="item.url" :target="item.target">{{ item.name }}</a>
        </li>
      </ul>
    </Modal>
  </div>
</template>

<script>
import Modal from '../home/homeDropdownModal'
export default {
  name: 'HomePage',
  components: {
    Modal
  },
  data () {
    return {
      nowDropdownOpen: '',
      innerWidth: null,
      modalOpen: false,
      recordData: [
        {
          name: '第一天',
          url: 'https://photos.app.goo.gl/iv5XLYf5J8mUz7Ka9',
          target: '_blank'
        },
        {
          name: '第二天',
          url: 'https://photos.app.goo.gl/wCtHc9VYPqGRSC7k9',
          target: '_blank'
        },
        {
          name: '晚宴',
          url: 'https://photos.app.goo.gl/2snqVCqgKD2jY5Qc6',
          target: '_blank'
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
    toggleDropdown (name, event) {
      const vm = this
      if (!this.isMobile) {
        const hasDropdown = event.target.closest('.dropdown') !== null
        if (hasDropdown) {
          return
        }
        const attrName = event.target.getAttribute('name')
        if (attrName === null || attrName === name || (attrName !== name && (attrName === 2021 || attrName === 2020))) {
          vm.nowDropdownOpen = vm.nowDropdownOpen === name ? '' : name
        }
      } else if (this.isMobile) {
        vm.modalOpen = true
      }
    },
    closeModal (show) {
      this.modalOpen = show
    }
  }
}
</script>

<style lang="scss" scoped>
#hero {
  background-color: #0074A2;
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
    .banner {
      @include flex(center, row, center);
      width: 100%;
      img {
        width: 100%;
      }
    }
    @include screen(md) {
      @include flex(normal, column-reverse);
      img {
        max-width: 650px;
      }
    }
  }
}

#history {
  background: $colorWhite;
  h2 {
    @include font(40px, $colorPrimary, bold);
    text-align: center;
  }
  h3 {
    @include font(40px, $colorPrimary, bold);
  }
  p {
    height: 240px;
    color: $colorBlueLight;
  }
  .content {
    width: 55%;
  }
  .image {
    @include flex(center, row, center);
    width: 35%;
  }
  .button-area {
    @include flex;
    .btn svg {
      font-size: 20px;
      top: 4px;
    }
  }
  .dropdown {
    width: 100%;
    left: 0;
    position: absolute;
    border: $colorPrimaryLight solid 2px;
    border-radius: 2rem;
    background-color: white;
    z-index: 10;
    display: none;
    &.active {
      display: block;
    }
    ul {
      @include flex(normal, column, center);
      padding-left: 0;
      list-style: none;
      li {
        a {
          font-size: 1.25rem;
          color: $colorPrimary;
          &:hover {
            color: $colorPrimaryLight;
          }
        }
        & + li {
          margin-top: 0.5rem;
        }
      }
    }
  }
  .history-2021 {
    @include flex(space-between, row, center);
  }
  .history-2020 {
    @include flex(space-between, row-reverse, center);
  }
  .history-2021, .history-2020 {
    img {
      width: 100%;
    }
  }
  .history-button {
    @include flex(center);
  }
  @include screen(md) {
    .content, .image {
      width: 100%;
    }
    .history-2021, .history-2020 {
      @include flex(normal, column-reverse, center);
      img {
        max-width: 464px;
      }
    }
    .button-area {
      @include flex(flex-end);
    }
  }
  @include screen(sm) {
    .button-area {
      @include flex(normal, column);
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
</style>
