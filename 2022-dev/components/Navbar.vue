<template>
  <div class="navbar">
    <nav class="container navbar-container">
      <div v-if="isMobile" class="navbar-mobile">
        <div :class="{'hidden': navOpen}" @click="openNav">
          <no-ssr><span class="iconify" data-icon="carbon:menu" /></no-ssr>
        </div>
        <div :class="{'hidden': !navOpen}" @click="openNav">
          <no-ssr><span class="iconify" data-icon="ic:baseline-cancel" /></no-ssr>
        </div>
      </div>
      <div class="navbar-content">
        <div v-if="!isMobile || (isMobile && !navOpen)">
          <a href="/"><Logo /></a>
        </div>
        <div class="menu-content" :class="{'active': navOpen}">
          <div class="menu-item mr-8 mr-md-0 mb-md-6">
            <a href="/timeMachine">時光機</a>
          </div>
          <div class="menu-icon">
            <a href="https://www.facebook.com/mopcon/" target="_blank">
              <no-ssr><span class="iconify" data-icon="fa-brands:facebook-square" /></no-ssr>
            </a>
            <a href="https://www.instagram.com/mopcon.tw/" target="_blank">
              <no-ssr><span class="iconify" data-icon="ant-design:instagram-filled" /></no-ssr>
            </a>
            <a href="https://open.firstory.me/user/mopcon/" target="_blank">
              <no-ssr><span class="iconify" data-icon="material-symbols:perm-camera-mic-rounded" /></no-ssr>
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
      navOpen: false
    }
  },
  methods: {
    openNav () {
      this.navOpen = !this.navOpen
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
    width: 100%;
    @include flex(space-between);
    @include screen(md) {
      @include flex(center);
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
      @include flex(center, column, center);
      background: $colorPrimary;
      position: fixed;
      left: 0;
      right: 0;
      top: 110px;
      bottom: 0;
      transform: translateX(-100%);
      transition: all 0.3s;
      &.active {
        transform: translateX(0);
      }
    }
  }
  .menu-item {
    a {
      color: $colorWhite;
      font-size: 1.25rem;
    }
  }
  .menu-icon {
    a {
      color: $colorWhite;
      & + a {
        margin-left: 2rem;
      }
    }
    svg {
      font-size: 1.75rem;
    }
  }
}
</style>
