<template>
  <div :class="{'h-screen overflow-hidden' : navOpen}">
    <nav class="top-0 sticky z-20">
      <div class="contain">
        <div class="logo-box">
          <nuxt-link to="/" class="logo logo-mopcon" />
        </div>
        <ul
          class="navbar"
          :class="{'navbar-mobile' : isMobile,
                   'navbar-mobile_active' : navOpen}"
        >
          <li>
            <nuxt-link to="/cfp">
              稿件徵求
            </nuxt-link>
          </li>
          <li>
            <nuxt-link to="/cfs">
              贊助徵求
            </nuxt-link>
          </li>
          <li class="history-mopcon" @click="isMobile && (subNavOpen = !subNavOpen)">
            <a href="/" @click.prevent>
              歷年 MOPCON
              <span class="icon-arrow" />
            </a>
            <ul class="history-link" :class="{'history-link_active': subNavOpen}" @click.stop>
              <li v-for="(history, index) in historyLink" :key="`history_${index}`">
                <a :href="history" target="_blank">{{ history.match(/[\d]+/g)[0] }}</a>
              </li>
            </ul>
          </li>
        </ul>
        <div
          class="navbar-mobile-btn"
          :class="{'navbar-mobile-btn_active' : navOpen}"
          @click="isMobile && (navOpen = !navOpen)"
        />
        <transition name="line">
          <div v-if="navOpen" class="line" />
        </transition>
      </div>
    </nav>
    <div class="main">
      <nuxt />
    </div>
    <footer>
      <div class="contact">
        <h4>
          聯絡我們
        </h4>
        <a class="text-teal-main">
          contact@mopcon.org
        </a>
      </div>
      <div>
        在這裡找到 #MOPCON
      </div>
      <div>
        <a href="https://www.facebook.com/mopcon/" target="_blank" class="logo logo-fb" />
        <a href="https://twitter.com/mopcon" target="_blank" class="logo logo-twitter" />
        <a href="https://www.instagram.com/accounts/login/?next=/mopcon.tw/" target="_blank" class="logo logo-ig" />
        <a href="https://t.me/mopcon" target="_blank" class="logo logo-telegram" />
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  data () {
    const [startYear, currentYear] = [2012, new Date().getFullYear()]
    return {
      historyLink: Array.from(Array(currentYear - startYear).keys())
        .map(item => `https://mopcon.org/${startYear + item}/`),
      navOpen: false,
      subNavOpen: false,
      innerWidth: null
    }
  },
  computed: {
    isMobile () {
      return this.innerWidth < 768
    }
  },
  watch: {
    isMobile (val) {
      if (!val) {
        this.subNavOpen = false
        this.navOpen = false
      }
    },
    $route (to, from) {
      this.navOpen = false
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
    }
  }
}
</script>

<style lang="scss" scoped>
nav {
  height: 43px;
  @apply bg-black-main text-white;
  .contain {
    max-width: 1440px;
    @apply flex items-center mx-auto h-full;
  }
  .logo-box {
    @apply pl-2 mr-auto;
  }
  .logo {
    width: 99px;
    height: 12px;
    @apply mt-1;
  }
  .navbar-mobile {
    // transition end
    transition: all .6s ease-out .3s;
    z-index: -1;
    top: 43px;
    @apply bg-teal-main absolute inset-x-0 bottom-0 text-center h-0 w-full;
    > li {
      transition: opacity, visibility .3s linear .3s;
      @apply py-2 opacity-0 invisible;
    }
    .history-link {
      transition: all .6s ease-in-out;
      transform: scaleY(0);
      transform-origin: top;
      @apply flex opacity-0 bg-black-main text-white border-0 leading-8 h-0 opacity-0;
      li {
        @apply p-0;
      }
      &_active {
        transform: scaleY(1);
        @apply h-auto opacity-100;
      }
    }
    &::before {
      content: '';
      transition: all .6s ease-out;
      @apply absolute top-0 left-0 w-full h-0 bg-black-main;
    }
    &_active {
      // transition start
      transition: all .6s ease-out;
      @apply h-screen z-50 pt-16;
      &::before {
        z-index: -1;
        transition: all .6s ease-out .3s;
        @apply h-full;
      }
      > li {
        @apply opacity-100 visible;
      }
    }
  }
  a {
    letter-spacing: 1px;
  }
  .navbar-mobile-btn {
    height: 50%;
    transition: all .5s;
    @apply w-8 mr-4 relative;
    &::after, &::before {
      content: '';
      bottom: 4px;
      transition: all .5s;
      @apply absolute right-0 h-1 w-4 bg-white;
    }
    &::before {
      top: 4px;
      height: 2px;
      @apply left-0 w-8;
    }
    &_active {
      &::after, &::before {
        transform: rotate(210deg);
        height: 2px;
        top: 10px;
        @apply w-full;
      }
      &::before {
        transform: rotate(-210deg);
      }
    }
  }
  .icon-arrow {
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid white;
    transform: translateY(-3px);
    @apply w-0 h-0 inline-block;
  }
  .history-link {
    top: 35px;
    @apply hidden w-full flex-col items-start absolute z-10
    bg-white border-gray-100 border rounded text-black-main py-2 leading-7;
    li {
      @apply w-full cursor-pointer;
    }
  }
  .history-mopcon {
    @apply relative cursor-pointer;
    &:before {
      content: '';
      @apply absolute top-0 left-0 w-full h-12 bg-transparent;
    }
  }
  .line {
    height: 1px;
    top: 43px;
    opacity: 0;
    z-index: -1;
    @apply w-full absolute;
  }
  .line-leave-active {
    animation: line .7s linear .3s;
    @apply bg-teal-main;
  }
}
.main {
  min-height: calc(100vh - 160px - 69px);
}
footer {
  @apply bg-black-main text-white flex flex-col justify-center items-center text-xl pt-5 pb-8;
  div {
    @apply flex;
    @screen md {
      @apply ml-4;
    }
  }
  .contact {
    @apply flex-col items-center;
  }
  a {
    @apply leading-6 mt-4 leading-7 cursor-pointer;
    &.logo {
      @apply w-6 h-6 mx-3;
    }
    &:hover:not(.logo) {
      @apply border-b border-teal-main;
    }
  }
}
.logo {
  @apply inline-block;
}
@screen md {
  nav {
    height: 69px;
    .logo-box {
      @apply pl-16 mr-0;
    }
    .logo {
      width: 140px;
      height: 20px;
    }
    .navbar {
      @apply flex h-full justify-around items-center ml-2;
      > li {
        @apply ml-12;
      }
      > li > a:hover {
        @apply text-teal-main border-b border-teal-main;
        .icon-arrow {
          border-top: 5px solid #4dd0e1;
        }
      }
      &-mobile-btn {
        @apply hidden;
      }
    }
    .history-mopcon:hover .history-link {
      @apply flex;
    }
    .history-link li a {
      @apply block pl-6
    }
    .history-link li a:hover {
      @apply bg-gray-200;
    }
    .line {
      @apply hidden;
    }
  }
  footer {
    height: 160px;
    @apply flex-row py-0;
    h4 {
      @apply mr-4;
    }
    .contact {
      @apply flex-row mr-12;
    }
    a {
      @apply mt-0;
      &.logo {
        @apply mx-2;
      }
    }
  }
}
@keyframes line {
  0% {
    opacity: 1;
    z-index: 100;
    top: 400px;
  }
  50% {
    top: 200px;
  }
  100% {
    top: 43px;
    opacity: 1;
    z-index: 100;
  }
}
</style>
