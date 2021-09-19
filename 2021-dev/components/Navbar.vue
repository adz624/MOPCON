<template>
  <div
    class="navbar"
    :class="{'fixed': navFixed && !isMobile, 'fixed-open': navFixedOpen && !isMobile}"
  >
    <nav
      class="container navbar-container"
      :class="{'navbar-container-around': navFixed && !isMobile, 'navbar-container-mobile': navOpen}"
    >
      <div class="navbar-content" :class="{'active': navOpen}">
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
        <div class="menu-content">
          <div v-for="item in navOpenList" :key="item.url">
            <a
              v-if="item.subNav.length > 0"
              :href="item.url"
              :target="item.target"
              :class="item.class"
              class="navbar-item"
              @click.prevent="toggleSubNav(item.name, item.subIsOpen)"
            >
              {{ item.name }}
              <span v-if="item.subNav.length > 0" class="material-icons" :class="{'subActive': item.subIsOpen && nowSubOpen == item.name }">
                expand_more
              </span>
            </a>
            <a
              v-else
              :key="item.url"
              :href="item.url"
              :target="item.target"
              :class="item.class"
              class="navbar-item"
            >
              {{ item.name }}
            </a>
            <div v-if="item.subNav.length > 0 && item.name == '時光機' && nowSubOpen == item.name" class="dropdown" :class="{'active': item.subIsOpen}">
              <h4>歷年網站</h4>
              <ul>
                <li v-for="(subNav, index) in item.subNav" :key="`subNav_${index}`">
                  <a :href="subNav.url" :target="item.target"><span>{{ subNav.name }}</span></a>
                </li>
              </ul>
              <a href="https://mopcon.org/album.php" target="_blank" class="btn btn-photo">歷年相簿</a>
            </div>
          </div>
        </div>
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
    const [startYear, currentYear] = [2012, new Date().getFullYear()]
    return {
      navOpen: false,
      windowTop: null,
      nowSubOpen: '',
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
          name: '贊助社群',
          class: '',
          url: './sponsor',
          subNav: [],
          subIsOpen: false,
          open: process.env.route_sponsor,
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
          url: '#',
          subNav: Array.from(Array(currentYear - startYear).keys())
            .map(function (item) {
              return {
                open: true,
                url: `https://mopcon.org/${startYear + item}/`,
                name: startYear + item
              }
            }).reverse(),
          subIsOpen: true,
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
    toggleSubNav (name, hasSub) {
      if (hasSub) {
        this.nowSubOpen !== name ? (this.nowSubOpen = name) : (this.nowSubOpen = '')
      } else {
        this.nowSubOpen = ''
      }
    },
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
        margin-top: 2rem;
        margin-bottom: 2rem;
        margin-left: 2rem;
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
        align-items: stretch;
        justify-content: flex-start;
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
      .menu-content {
        display: flex;
        @include screen(pad) {
          flex-direction: column;
          overflow-y: auto;
          height: 100%;
          padding: 2rem;
        }
      }
      .material-icons {
        vertical-align: top;
        transform: rotate(0deg);
        transition: 0.3s;
        @include screen(pad) {
          color: white;
        }
        &.subActive {
          transform: rotate(180deg);
        }
      }
      .dropdown {
        max-height: 0px;
        overflow: hidden;
        opacity: 0;
        transition: 0.4s;
        margin-top: 16px;
        position: absolute;
        right: 0;
        background: #0d1336;
        padding: 24px;
        width: 280px;
        border-radius: 8px;
        top: 100%;
         &.active {
          max-height: 800px;
          opacity: 1;
          overflow: auto;
        }
        @include screen(pad) {
          left: 0;
          width: 100%;
          padding: 0px 24px 36px 24px;
          text-align: left;
        }
        h4 {
          color: white;
          font-size: 20px;
          font-weight: 700;
          margin-top: 0px;
        }
        ul {
          list-style: none;
          padding-left: 0;
          display: flex;
          padding-right: 12px;
          flex-wrap: wrap;
          margin: 0;
        }
        li {
          width: 50%;
          text-align: right;
          @include screen(pad) {
            text-align: left;
          }
        }
        a {
          display: block;
          padding-bottom: 40px;
          @include screen(pad) {
            padding-left: 12px;
            padding-bottom: 32px;
          }
          &:hover span::after {
            content: "";
            position: absolute;
            width: 8px;
            height: 8px;
            left: 25%;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 50%;
            background-color: $colorOrange;
            @include screen(pad) {
              content: none;
            }
          }
          span {
            position: relative;
            display: block;
            font-size: 24px;
            color: white;
          }
        }
        .btn-photo {
          border: none;
          background-color: $colorOrange;
          color: white;
          display: block;
          text-align: center;
          padding-bottom: 0px;
          &:hover {
            background-color: $colorOrangeLight;
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
        .material-icons {
          color: $colorOrange;
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
      position: absolute;
      right: 24px;
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
