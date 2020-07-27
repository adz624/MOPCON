<template>
  <div :class="{'h-screen overflow-hidden' : navOpen}">
    <Navbar />
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
  }
}
</script>
