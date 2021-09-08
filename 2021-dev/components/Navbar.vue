<template>
  <div
    class="navbar"
    :class="{'fixed': navFixed && !isMobile, 'fixed-open': navFixedOpen && !isMobile}"
  >
    <nav
      class="container navbar-container"
      :class="{'navbar-container-around': navFixed && !isMobile, 'navbar-container-mobile': navOpen}"
    >
      <div v-if="isMobile || navFixed">
        <div
          v-if="navOpen || navFixed"
          class="logo-w"
          :class="{'primary': navFixed && !isMobile}"
        >
          <a href="/">
            <LogoW />
          </a>
        </div>
      </div>
      <div class="navbar-content" :class="{'active': navOpen}">
        <a
          v-for="item in navOpenList"
          :key="item.url"
          :href="item.url"
          :target="item.target"
          :class="item.class"
          class="navbar-item"
        >
          {{ item.name }}
        </a>
        <a v-if="!isMobile" class="navbar-item" href="https://www.facebook.com/mopcon/" target="_blank">
          <IconFB />
        </a>
        <a v-if="!isMobile" class="navbar-item" href="https://www.instagram.com/mopcon.tw/" target="_blank">
          <IconIG />
        </a>
      </div>
      <div
        v-if="isMobile"
        class="navbar-item navbar-mobile-btn"
        @click="openNav"
      >
        <IconMenu v-if="!navOpen" />
        <div v-if="navOpen" class="navbar-close">
          <fa :icon="['fas', 'times-circle']" />
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import LogoW from '../assets/images/logo-w.svg?inline'
import IconFB from '../assets/images/fb.svg?inline'
import IconIG from '../assets/images/ig.svg?inline'
import IconMenu from '../assets/images/menu.svg?inline'
export default {
  components: {
    LogoW,
    IconFB,
    IconIG,
    IconMenu
  },
  props: {
    isMobile: Boolean
  },
  data () {
    return {
      navOpen: false,
      windowTop: null,
      navList: [
        {
          name: '主辦社群',
          class: '',
          url: './community',
          subNav: [],
          subIsOpen: false,
          open: process.env.route_community,
          target: ''
        },
        {
          name: '票種介紹',
          class: '',
          url: './ticket',
          subNav: [],
          subIsOpen: false,
          open: process.env.route_ticket,
          target: ''
        },
        {
          name: '講者陣容',
          class: '',
          url: './speaker',
          subNav: [],
          subIsOpen: false,
          open: process.env.route_speaker,
          target: ''
        },
        {
          name: '時光機',
          class: '',
          url: 'https://mopcon.org/album.php',
          subNav: [],
          subIsOpen: false,
          open: '',
          target: '_blank'
        }
      ]
    }
  },
  computed: {
    navOpenList () {
      return this.navList.filter(nav => nav.open !== false)
    },
    navFixed () {
      return this.windowTop > 200
    },
    navFixedOpen () {
      return this.windowTop > 500
    }
  },
  mounted () {
    this.windowTop = window.top.scrollY
    window.addEventListener('scroll', this.onScroll)
  },
  methods: {
    openNav () {
      this.navOpen = !this.navOpen
    },
    onScroll () {
      this.windowTop = window.top.scrollY
    }
  }
}
</script>

<style lang="scss" scoped>
.navbar {
  width: 100%;
  position: absolute;
  margin-top: 32px;
  z-index: 100;
  &.fixed {
    position: fixed;
    transition: all 0.3s;
    top: -110px;
    .navbar-container {
      width: 94%;
      background-color: $colorWhite;
      box-shadow: 0px 4px 12px 4px rgb(0 0 0 / 12%);
      border-radius: 8px;
      padding: 1.3rem 1.5rem 1rem;
    }
    .navbar-container-around {
      @include flex(space-between);
    }
  }
  &.fixed-open {
    top: 0px;
  }
  .logo-w.primary path {
    fill: $colorPrimary;
  }
  nav {
    @include flex(flex-end);
    @include screen(pad) {
      @include flex(space-between);
      .logo-w {
        margin-top: 4px;
        z-index: 1;
      }
    }
    .logo-w {
      z-index: 1;
    }
    &.navbar-container-mobile {
      position: fixed;
      // left: 5%;
    }
    .navbar-content {
      @include flex(flex-end);
      @include screen(pad) {
        background: $colorPrimary;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding-top: 6rem;
        transform: translateX(100%);
        transition: all 0.3s;
        &.active {
          transform: translateX(0);
          .navbar-item {
            display: block;
            padding-top: 1rem;
            padding-bottom: 1rem;
            text-align: center;
            color: $colorWhite;
            margin-left: 0px;
            &:hover {
              color: $colorOrange;
            }
          }
        }
      }
    }
    .navbar-item {
      color: $colorPrimary;
      font-size: 1.5rem;
      font-weight: 600;
      line-height: 1.7rem;
      margin-left: 40px;
      cursor: pointer;
      @include screen(pad) {
        margin-left: 25px;
      }
      &:hover {
        color: $colorOrange;
        svg path {
          fill: $colorOrange;
        }
      }
      svg {
        width: 1.7rem;
        height: 1.7rem;
        path {
          fill: $colorPrimary;
        }
      }
    }
    .navbar-mobile-btn {
      svg {
        width: 2rem;
        height: 2rem;
      }
      &:hover svg circle {
        fill: $colorOrange;
      }
      .navbar-close{
        &:hover svg path {
          fill: $colorOrange;
        }
        svg path {
          fill: $colorWhite;
        }
      }
    }
  }
}
</style>
