
<template>
  <div>
    <section class="promotion container mx-auto">
      <div class="promotion-l">
        <h2>\\ 怕錯過感興趣的講者議程嗎？</h2>
        <p>下載 MOPCON App，建立你的行事曆吧！</p>
        <a
          href="https://play.google.com/store/apps/details?id=org.mopcon.session.app"
          target="_blank"
          class="logo logo-google-play"
        />
        <a
          href="https://apps.apple.com/tw/app/mopcon/id721411970"
          target="_blank"
          class="logo logo-app-store"
        />
      </div>
      <div class="promotion-r">
        <div class="logo logo-mobile" />
      </div>
    </section>
  </div>
</template>

<style lang="scss" scoped>
@import '~@/assets/styles/_mix';
$logo_map: (
  png: mobile google-play app-store
);
@include logo_map_mix(app-section);

.promotion {
  @apply flex pb-0 pt-0 flex-col items-center justify-center;
  &-l {
    @apply text-center;
    .logo {
      width: 143px;
      height: 43px;
      background-size: cover;
      @apply inline-block mt-6 mx-2;
    }
  }
  &-r {
    @apply mt-6;
    .logo {
      width: 245px;
      height: 380px;
    }
  }
  h2 {
    @apply text-yellow-500 text-2xl mb-2;
  }
  p {
    @apply text-gray-100;
  }
  @screen md {
    width: 80%;
    @apply flex-row items-start;
    &-l {
      @apply pt-20 mr-24 text-left;
      .logo {
        @apply mr-8 ml-0;
      }
    }
    &-r {
      @apply mt-0;
    }
    h2 {
      @apply text-3xl;
    }
  }
}
</style>
