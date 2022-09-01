<template>
  <footer>
    <Logo />
  </footer>
</template>

<script>
import Logo from '../assets/images/footer_logo.svg?inline'
export default {
  name: 'FooterComponent',
  components: {
    Logo
  }
}
</script>

<style lang="scss" scoped>
footer {
  @include flex(center, column, center);
  background-color: $colorPrimary;
  height: 96px;
}
</style>
