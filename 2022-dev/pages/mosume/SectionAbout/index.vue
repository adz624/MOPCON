<template>
  <div class="wrapper">
    <div class="about">
      <div class="container">
        <h3>ABOUT</h3>
        <p>{{ $t('pages.mosume.about.1') }}</p>
        <p>{{ $t('pages.mosume.about.2') }}</p>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.wrapper {
  background: #0F184B;
  padding: 50px 0;

  @include screen(md) {
    padding: 0;
  }

  .about {
    width: 100%;
    background: url('~/assets/images/mosume/about-web.png') no-repeat center center / cover;

    @include screen(md) {
      background: url('~/assets/images/mosume/about-pad.png') no-repeat center center / cover;
    }

    @include screen(sm) {
      background: url('~/assets/images/mosume/about-phone.png') no-repeat center center / cover;
    }

    .container {
      padding: 18% 0;
      @include flex(center, column, center);
      width: 36%;

      @include screen(md) {
        padding: 45% 0 45% 10%;
        width: 66%;
      }

      @include screen(sm) {
        padding: 65% 0 60% 0;
        width: 85%;
      }
    }

    h3 {
      color: white;
      margin: 0;
      font-size: 56px;
      text-align: center;
    }

    p {
      color: white;
      font-size: 20px;
      text-align: center;
      margin-top: 1.7rem;
      line-height: 32px;

      @include screen(sm) {
        margin-top: 2rem;
      }
    }
  }
}
</style>
