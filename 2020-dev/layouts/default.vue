<template>
  <div :class="{'h-screen overflow-hidden' : navOpen}">
    <Navbar :nav-open="navOpen" :inner-width="innerWidth" :sub-nav-open="subNavOpen" :is-mobile="isMobile" @update="closeNav" />
    <div class="main">
      <nuxt />
    </div>
    <Footer />
  </div>
</template>

<script>
import Navbar from '~/components/Navbar.vue'
import Footer from '~/components/Footer.vue'
export default {
  components: {
    Navbar,
    Footer
  },
  data () {
    return {
      navOpen: false,
      subNavOpen: false,
      innerWidth: null
    }
  },
  computed: {
    isMobile () {
      return this.innerWidth < 1024
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
    },
    closeNav (val) {
      this.navOpen = val
    }
  }
}
</script>
