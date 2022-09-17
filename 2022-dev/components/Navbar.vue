<template>
  <div class="navbar">
    <nav class="container navbar-container">
      <div v-if="isMobile" class="navbar-mobile">
        <div :class="{'hidden': navOpen}" @click="openNav">
          <client-only><span class="iconify" data-icon="carbon:menu" /></client-only>
        </div>
        <div :class="{'hidden': !navOpen}" @click="openNav">
          <client-only><span class="iconify" data-icon="ic:baseline-cancel" /></client-only>
        </div>
      </div>
      <div class="navbar-content">
        <div v-if="!isMobile || (isMobile && !navOpen)" class="mopcon-logo">
          <a href="/"><Logo /></a>
        </div>
        <div class="menu-content" :class="{'active': navOpen}">
          <!--選單-->
          <ul v-if="!isMobile || (isMobile && navOpen)" class="menu-list">
            <li
              v-for="nav in navOpenList"
              :key="nav.url"
            >
              <a
                v-if="nav.subIsOpen"
                :href="nav.url"
                class="menu-list-link hasSub"
                :target="nav.target"
                @click.prevent="isMobile && subListOpen($event,nav.name)"
                @mouseover="!isMobile && subListOpen($event,nav.name)"
              >
                {{ $t( `navbar.${nav.name}`) }}
                <client-only>
                  <span
                    v-if="nav.subIsOpen"
                    class="iconify"
                    data-icon="ant-design:down-outlined"
                    :class="{'transform':isMobile}"
                  />
                </client-only>
              </a>
              <a
                v-else
                :href="
                  nav.url"
                class="menu-list-link"
                :target="nav.target"
              >
                {{ $t(`navbar.${nav.name}`) }}
              </a>
              <!--下拉選單-->
              <ul v-if="nowSubOpen == nav.name" class="menu-subList">
                <li v-for="(subNav,index) in nav.subNav" :key="`subNav_${index}`" :style="subNav.class">
                  <a :href="subNav.url" class="menu-subList-link">{{ $t(`navbar.${subNav.name}`) }}</a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="menu-icon">
            <a href="https://www.facebook.com/mopcon/" target="_blank">
              <client-only><span class="iconify" data-icon="fa-brands:facebook-square" /></client-only>
            </a>
            <a href="https://www.instagram.com/mopcon.tw/" target="_blank">
              <client-only><span class="iconify" data-icon="ant-design:instagram-filled" /></client-only>
            </a>
            <a href="https://open.firstory.me/user/mopcon/" target="_blank">
              <client-only><span class="iconify" data-icon="material-symbols:perm-camera-mic-rounded" /></client-only>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import Logo from '../assets/images/header_logo.svg?inline'
export default {
  name: 'NavbarComponent',
  components: {
    Logo
  },
  props: {
    isMobile: Boolean
  },
  data () {
    return {
      navOpen: false,
      nowSubOpen: '',
      navList: [
        {
          name: 'community',
          url: '',
          subNav: [
            {
              name: 'staff',
              url: './staff',
              open: process.env.route_staff,
              class: 'border-top-left-radius: 10px; border-top-right-radius: 10px;'
            },
            {
              name: 'participant',
              url: './community',
              open: process.env.route_community,
              class: 'border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;'
            }
          ],
          subIsOpen: true,
          open: process.env.route_community || process.env.route_staff,
          target: ''
        },
        {
          name: 'schedule',
          url: '',
          subNav: [
            {
              name: 'scheduleMain',
              url: './schedule',
              open: process.env.route_schedule,
              class: 'border-top-left-radius: 10px; border-top-right-radius: 10px;'
            },
            {
              name: 'scheduleUnconf',
              url: './schedule_unconf',
              open: process.env.route_schedule_unconf,
              class: 'border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;'
            }
          ],
          subIsOpen: true,
          open: process.env.route_schedule || process.env.route_schedule_unconf,
          target: ''
        },
        {
          name: 'speaker',
          url: './speaker',
          subNav: [],
          subIsOpen: false,
          open: process.env.route_speaker,
          target: ''
        },
        {
          name: 'sponsor',
          url: './sponsor',
          subNav: [],
          subIsOpen: false,
          open: process.env.route_sponsor,
          target: ''
        },
        {
          name: 'ticket',
          url: './ticket',
          subNav: [],
          subIsOpen: false,
          open: process.env.route_ticket,
          target: ''
        },
        {
          name: 'workshop',
          url: './workshop',
          subNav: [],
          subIsOpen: false,
          open: process.env.route_workshop,
          target: ''
        },
        // {
        //   name: 'guide',
        //   class: '',
        //   url: './guide',
        //   subNav: [],
        //   subIsOpen: false,
        //   open: process.env.route_guide,
        //   target: ''
        // },
        {
          name: 'timeMachine',
          url: './time-machine',
          subNav: [],
          subIsOpen: false,
          open: '',
          target: ''
        }
        // {
        //   name: 'coWriting',
        //   url: 'https://hackmd.io/@mopcon/2021/',
        //   subNav: [],
        //   subIsOpen: false,
        //   open: '',
        //   target: '_blank'
        // }
      ]
    }
  },
  computed: {
    navOpenList () {
      return this.navList.filter(nav => nav.open !== false)
    }
  },
  methods: {
    openNav () {
      this.navOpen = !this.navOpen
    },
    subListOpen (event, name) {
      if (this.isMobile && this.nowSubOpen === '') {
        this.nowSubOpen = name
        event.target.firstElementChild.classList.remove('transform')
      } else if (this.isMobile && this.nowSubOpen !== '') {
        this.nowSubOpen = ''
        event.target.firstElementChild.classList.add('transform')
      } else if (!this.isMobile) {
        this.nowSubOpen = name
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.navbar {
  @include flex(center, column, center);
  background-color: $colorPrimary;
  width: 100%;
  height: 112px;
  position: fixed;
  z-index: 100;
  color: $colorWhite;
  &-container {
    @include flex(space-between, row, center);
  }
  &-content {
    @include flex(normal,row,center);
    width: 100%;
    @include screen(md) {
      @include flex(center);
    }
    .mopcon-logo{
      padding-right:1rem;
      margin-right: auto;
      @include screen(md){
        padding-right: 0px;
        margin-right: 0px;
      }
    }
  }
  &-mobile {
    div {
      color: $colorWhite;
      cursor: pointer;
      &.hidden {
        display: none;
      }
    }
    svg {
      font-size: 1.75rem;
    }
  }
  .menu-content {
    @include flex;
    @include screen(md) {
      @include flex(flex-start, column, center);
      background: $colorPrimary;
      position: fixed;
      left: 0;
      right: 0;
      top: 112px;
      bottom: 0;
      transform: translateX(-100%);
      transition: all 0.3s;
      height: calc(100% - 112px);
      &.active {
        transform: translateX(0);
      }
    }
  }
  .menu-list{
    position: relative;
    padding-right: 1rem;
    padding-left: 1rem;
    @include flex(space-around, row, center);
    @include screen(md){
      flex-direction: column;
      padding: 0;
      width: 100%;
    }
    > li{
      padding: 0 0.5rem;
      &:hover{
        .menu-subList{
          opacity:1;
          height: auto;
        }
        .menu-list-link{
          color:$colorPink;
        }
      }
      @include screen (md){
        padding: 1rem 0;
        width: 100%;
        flex-wrap:wrap;
      }
      @include screen(xs){
        padding: 0.8rem 0;
      }
    }
    &-link{
      @include font(20px,$colorWhite,500);
      transition: .3s;
      display: block;
      @include flex(center,row,center);
      .transform{
        transform: rotate(180deg);
      }
    }
    .menu-subList{
      height: 0;
      opacity:0;
      position: absolute;
      top:calc(100% + 5px);
      width:100%;
      left:0px;
      transition: opacity 1s ease-out;
      @include screen(md){
        position: static
      }
      >li{
        @include flex (center,column,center);
        background-color: $colorPink;
        padding:.5rem;
        &:hover{
          background-color: $colorPinkLight;
        }
        @include screen(md){
          &:nth-child(1){
            margin-top: 10px;
          }
        }
      }
      &-link{
        display: block;
        @include font(18px,$colorWhite,500);
      }
    }
  }
  .menu-icon {
    @include flex(center,row,center);
    a {
      line-height: initial;
      color: $colorWhite;
      transition: all .3s;
      & + a {
        margin-left: 1rem;
      }
      &:hover{
        color:$colorPink;
      }
    }
    svg {
      font-size: 1.75rem;
    }
  }
}
</style>
