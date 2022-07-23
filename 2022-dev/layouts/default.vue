<template>
  <div>
    <Navbar :is-mobile="isMobile" />
    <nuxt class="page" />
    <Footer />
  </div>
</template>

<script>
import Navbar from '~/components/Navbar.vue'
import Footer from '~/components/Footer.vue'
export default {
  name: 'DefaultLayout',
  components: {
    Navbar,
    Footer
  },
  data () {
    return {
      innerWidth: null
    }
  },
  computed: {
    isMobile () {
      return this.innerWidth <= 1024
    }
  },
  mounted () {
    this.innerWidth = window.innerWidth
    window.addEventListener('resize', this.resize)
  },
  methods: {
    resize () {
      this.innerWidth = window.innerWidth
    }
  }
}
</script>

<style lang="scss" scoped>
.page {
  padding-top: 112px;
}
</style>
