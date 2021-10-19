<template>
  <div id="Mosume">
    <SectionHeroimg />
    <SectionAbout />
    <SectionLookAtMe />
    <SectionDesignThought />
    <SectionHistory />
    <SectionSticker />
  </div>
</template>

<script>
import SectionHeroimg from './SectionHeroimg'
import SectionAbout from './SectionAbout'
import SectionLookAtMe from './SectionLookAtMe'
import SectionDesignThought from './SectionDesignThought'
import SectionHistory from './SectionHistory'
import SectionSticker from './SectionSticker'
export default {
  name: 'Mosume',
  components: {
    SectionHeroimg,
    SectionAbout,
    SectionLookAtMe,
    SectionDesignThought,
    SectionHistory,
    SectionSticker
  },
  layout: 'mosume'
}
</script>
<style lang="scss" scoped>

</style>
