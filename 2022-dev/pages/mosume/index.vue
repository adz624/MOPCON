<template>
  <div id="Mosume">
    <SectionBanner />
    <SectionAbout />
    <SectionYoutube />
    <SectionDesignThought />
    <SectionHistory />
  </div>
</template>

<script>
import SectionBanner from './SectionBanner'
import SectionAbout from './SectionAbout'
import SectionYoutube from './SectionYoutube'
import SectionDesignThought from './SectionDesignThought'
import SectionHistory from './SectionHistory'

export default {
  name: 'Mosume',
  components: {
    SectionBanner,
    SectionAbout,
    SectionYoutube,
    SectionDesignThought,
    SectionHistory
  },
  layout: 'mosume'
}
</script>

<style lang="scss" scoped>
</style>
