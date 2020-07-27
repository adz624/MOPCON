<template>
  <footer>
    <div class="contact">
      <h4>聯絡我們</h4>
      <a class="text-yellow-main">contact@mopcon.org</a>
    </div>
    <div>在這裡找到 #MOPCON</div>
    <div>
      <a href="https://www.facebook.com/mopcon/" target="_blank" class="logo logo-fb" />
      <a href="https://twitter.com/mopcon" target="_blank" class="logo logo-twitter" />
      <a href="https://www.instagram.com/mopcon.tw/" target="_blank" class="logo logo-ig" />
      <a href="https://t.me/mopcon" target="_blank" class="logo logo-telegram" />
    </div>
  </footer>
</template>
<style lang="scss" scoped>
@import '~@/assets/styles/logo_mix';
$logo_map: (
  svg: mopcon fb twitter ig telegram
);
@include logo_map_mix(base);
footer {
  @apply bg-blue-main text-white flex flex-col justify-center items-center text-xl pt-5 pb-8;
  div {
    @apply flex;
    @screen md {
      @apply ml-4;
    }
  }
  .contact {
    @apply flex-col items-center;
  }
  a {
    @apply leading-6 mt-4 leading-7 cursor-pointer;
    &.logo {
      @apply w-6 h-6 mx-3;
    }
    &:hover:not(.logo) {
      @apply border-b border-teal-main;
    }
  }
}
.logo {
  @apply inline-block;
}
@screen md {
  footer {
    height: 160px;
    @apply flex-row py-0;
    h4 {
      @apply mr-4;
    }
    .contact {
      @apply flex-row mr-12;
    }
    a {
      @apply mt-0;
      &.logo {
        @apply mx-2;
      }
    }
  }
}
</style>
