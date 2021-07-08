<template>
  <div class="navbar">
    <nav class="container">
      <div class="navbar-content">
        <a
          v-for="item in navOpenList"
          :key="item.url"
          :class="item.class"
          class="nav-item"
        >
          {{ item.name }}
        </a>
      </div>
      <div class="navbar-mobile-btn" />
    </nav>
  </div>
</template>

<script>
export default {
  props: {
    isMobile: Boolean
  },
  data () {
    return {
      navList: [
        {
          name: '講者募集',
          class: '',
          url: '',
          subNav: [],
          subIsOpen: false,
          open: '',
          isIcon: false
        },
        {
          name: '時光機',
          class: '',
          url: '',
          subNav: [],
          subIsOpen: false,
          open: '',
          isIcon: false
        },
        {
          name: '',
          class: 'logo-fb',
          url: '',
          subNav: [],
          subIsOpen: false,
          open: '',
          isIcon: true
        },
        {
          name: '',
          class: 'logo-ig',
          url: '',
          subNav: [],
          subIsOpen: false,
          open: '',
          isIcon: true
        }
      ]
    }
  },
  computed: {
    navOpenList () {
      return this.navList.filter(nav => nav.open !== false)
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
  nav {
    @include flex(flex-end);
    .navbar-content {
      @include flex(flex-end);
      @include screen(sm) {
        display: none;
      }
      .nav-item {
        color: $colorPrimary;
        font-size: 1.5rem;
        font-weight: 600;
        line-height: 1.5rem;
        margin-left: 40px;
        cursor: pointer;
        &:hover {
          color: $colorOrange;
        }
      }
    }
    .navbar-mobile-btn {
      display: none;
      background-image: url(../assets/base/menu.svg);
      width: 32px;
      height: 32px;
      @include screen(sm) {
        display: block;
      }
    }
  }
}
</style>
