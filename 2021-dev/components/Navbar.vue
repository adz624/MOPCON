<template>
  <div
    class="navbar"
    :class="{'fixed': navFixed && !isMobile, 'fixed-open': navFixedOpen && !isMobile}"
  >
    <nav
      class="container navbar-container"
      :class="{'navbar-container-mobile': navOpen}"
    >
      <div class="navbar-content" :class="{'active': navOpen}">
        <div
          v-if="!isMobile || (isMobile && navOpen)"
          class="logo-w"
          :class="{'primary': !isMobile}"
        >
          <a href="/">
            <LogoW />
          </a>
        </div>
        <div class="menu-content">
          <div v-for="item in navOpenList" :key="item.url" :class="{'timeline': item.subNav.length > 0, 'timeline-padding': !navFixed && !isMobile}">
            <a
              v-if="item.subNav.length > 0"
              :href="item.url"
              :target="item.target"
              :class="item.class"
              class="navbar-item timeline"
              @click.prevent="toggleSubNav(item.name, item.subIsOpen)"
            >
              {{ item.name }}<span v-if="item.subNav.length > 0" class="material-icons" :class="{'subActive': item.subIsOpen && nowSubOpen == item.name }">
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
            <!-- 議程表 的下拉選單 -->
            <div v-if="item.subNav.length > 0 && item.name == '議程表'" class="dropdown schedule" :class="{'active': item.subIsOpen && isMobile && nowSubOpen == item.name}">
              <ul>
                <li v-for="(subNav, index) in filterOpen(item.subNav)" :key="`subNav_${index}`">
                  <a :href="subNav.url" :target="item.target"><span>{{ subNav.name }}</span></a>
                </li>
              </ul>
            </div>
            <!-- 議程表 的下拉選單 -->
            <!-- 時光機 的下拉選單 -->
            <div v-if="item.subNav.length > 0 && item.name == '時光機'" class="dropdown" :class="{'active': item.subIsOpen && isMobile && nowSubOpen == item.name}">
              <h4>歷年網站</h4>
              <ul>
                <li v-for="(subNav, index) in item.subNav" :key="`subNav_${index}`">
                  <a :href="subNav.url" :target="item.target"><span>{{ subNav.name }}</span></a>
                </li>
              </ul>
              <a href="https://mopcon.org/album.php" target="_blank" class="btn btn-photo w-100">歷年相簿</a>
            </div>
            <!-- 時光機 的下拉選單 -->
          </div>
          <a v-if="!isMobile" class="navbar-item" href="https://www.facebook.com/mopcon/" target="_blank">
            <IconFB />
          </a>
          <a v-if="!isMobile" class="navbar-item" href="https://www.instagram.com/mopcon.tw/" target="_blank">
            <IconIG />
          </a>
          <a v-if="!isMobile" class="navbar-item" href="https://open.firstory.me/user/mopcon/" target="_blank">
            <IconPodcast />
          </a>
        </div>
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
import IconPodcast from '../assets/images/podcast.svg?inline'
import IconMenu from '../assets/images/menu.svg?inline'
export default {
  components: {
    LogoW,
    IconFB,
    IconIG,
    IconPodcast,
    IconMenu
  },
  props: {
    isMobile: Boolean
  },
  data () {
    // const [startYear, currentYear] = [2012, new Date().getFullYear()]
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
          name: '議程表',
          class: '',
          url: './schedule',
          subNav: [
            {
              name: '主要議程',
              url: './schedule',
              open: process.env.route_schedule
            },
            {
              name: '交流議程',
              url: './schedule_unconf',
              open: process.env.route_schedule_unconf
            }
          ],
          subIsOpen: true,
          open: process.env.route_schedule,
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
          url: './timeMachine',
          subNav: [],
          subIsOpen: false,
          open: '',
          target: ''
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
    filterOpen (data) {
      return data.filter(nav => nav.open !== false)
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
    top: -150px;
    .navbar-container {
      width: 94%;
      background-color: $colorWhite;
      box-shadow: 0px 4px 12px 4px rgb(0 0 0 / 12%);
      border-radius: 8px;
      padding: 1.3rem 1.5rem 1rem;
      .navbar-item {
        margin-left: 2rem;
        @include screen(lg) {
          margin-left: 1.25rem;
        }
      }
    }
  }
  &.fixed-open {
    top: 0px;
  }
  .logo-w.primary path {
    fill: $colorPrimary;
  }
  nav {
    @include screen(md) {
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
      @include flex(space-between);
      @include screen(md) {
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
        @include screen(md) {
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
        @include screen(md) {
          color: white;
        }
        &.subActive {
          transform: rotate(180deg);
        }
      }
      .timeline-padding {
        padding-bottom: 18px;
      }
      @media (min-width: 1025px) {
        .timeline:hover .dropdown {
          max-height: 800px;
          opacity: 1;
          overflow: auto;
          display: block;
        }
        .timeline:hover + .dropdown {
          max-height: 800px;
          opacity: 1;
          overflow: auto;
          display: block;
        }
        .timeline:hover .material-icons, .timeline:hover + .material-icons {
          transform: rotate(180deg);
        }
      }
      .dropdown {
        display: none;
        max-width: 480px;
        margin: auto;
        max-height: 0px;
        overflow: hidden;
        opacity: 0;
        transition: 0.4s;
        position: absolute;
        right: 0;
        background: #0d1336;
        padding: 24px;
        width: 280px;
        border-radius: 8px;
        top: 100%;
        &:hover, &.active {
          max-height: 800px;
          opacity: 1;
          overflow: auto;
          display: block;
        }
        @include screen(md) {
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
          @include screen(md) {
            text-align: left;
          }
        }
        a {
          display: block;
          padding-bottom: 40px;
          @include screen(md) {
            padding-left: 0px;
            padding-bottom: 32px;
          }
          @include screen(sm) {
            padding-left: 0px;
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
            @include screen(md) {
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
          width: 100%;
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
      .dropdown.schedule {
        &.active {
          position: relative;
          top: 0;
          padding: 0;
          li {
            text-align: center;
          }
        }
        width: auto;
        ul {
          padding-right: 0px;
        }
        li {
          width: 100%;
          a {
            white-space: nowrap;
            padding-bottom: 8px;
            span {
              font-size: 1.25rem;
            }
            &:hover span {
              color: $colorOrange;
              &::after {
                content: none;
              }
            }
          }
        }
      }
    }
    .navbar-item {
      color: $colorPrimary;
      font-size: 1.25rem;
      font-weight: 600;
      line-height: 1.7rem;
      margin-left: 40px;
      cursor: pointer;
      @include screen(lg) {
        margin-left: 1.5rem;
      }
      @include screen(md) {
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
