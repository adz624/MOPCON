<template>
  <footer>
    <div class="logo-mopcon-w" />
    <p>堅持濁水溪以南，最大行動科技年會</p>
  </footer>
</template>
<style lang="scss" scoped>
footer {
  @include flex(center, column, center);
  background-color: $colorPrimary;
  height: 140px;
  padding-top: 40px;
  padding-bottom: 20px;
  @include screen(pad) {
    height: 171px;
    padding-top: 54px;
    padding-bottom: 30px;
  }
  p {
    color: $colorWhite;
  }
}
</style>
