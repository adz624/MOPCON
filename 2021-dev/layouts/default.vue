<template>
  <div>
    <Navbar :is-mobile="isMobile" />
    <nuxt />
  </div>
</template>

<script>
import Navbar from '~/components/Navbar.vue'
export default {
  components: {
    Navbar
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
