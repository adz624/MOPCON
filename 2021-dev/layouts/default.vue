<template>
  <div>
    <Navbar :is-mobile="isMobile" />
    <nuxt />
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
  computed: {
    isMobile () {
      return this.innerWidth < 568
    }
  },
  watch: {
    isMobile (val) {
      if (!val) {
        this.subNavOpen = false
        this.navOpen = false
      }
    }
  }
}
</script>
