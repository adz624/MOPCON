<template>
  <footer>
    <div class="container footer">
      <p class="mt-0 mb-3">下載 MOPCON App，一同來參與遊戲吧</p>
      <div class="img mb-3">
        <a href="https://apps.apple.com/us/app/mopcon/id721411970" class="apple mr-4" target="_blank">
          <AppStore />
        </a>
        <a href='https://play.google.com/store/apps/details?id=org.mopcon.session.app&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' class="google" target="_blank">
          <img alt='Google Play立即下載' src='../assets/images/footer_google_play.png' />
        </a>
      </div>
      <Logo />
    </div>
  </footer>
</template>

<script>
import Logo from '../assets/images/footer_logo.svg?inline'
import AppStore from '../assets/images/footer_app_store.svg?inline'
export default {
  name: 'FooterComponent',
  components: {
    Logo,
    AppStore
  }
}
</script>

<style lang="scss" scoped>
footer {
  background-color: $colorPrimary;

  p {
    @include font(2.5rem, $colorWhite, 500);
    text-align: center;
  }
  .footer {
    @include flex(center, column, center);
    height: 282px;
  }
  .img {
    @include flex;
    .apple {
      @include flex(normal, row, center);
      width: 115px;
      svg {
        width: 108px;
      }
    }
    .google {
      @include flex(normal, row, center);
      img {
        height: 50px;
      }
    }
  }
  @include screen(md) {
    p {
      font-size: 2rem;
    }
  }
  @include screen(sm) {
    p {
      font-size: 1.5rem;
    }
  }
}
</style>
