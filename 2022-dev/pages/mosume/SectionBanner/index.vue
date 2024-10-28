<template>
  <div class="banner">
    <div class="container">
      <p class="hello">{{ $t('pages.mosume.hello') }}</p>
      <img src="~/assets/images/mosume/Mosume.png" alt="mosume">
      <p>
        {{ $t('pages.mosume.intro.1') }}
        <br />
        {{ $t('pages.mosume.intro.2') }}
      </p>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.banner {
  width: 100%;
  background: url('~/assets/images/mosume/banner-web.png') no-repeat center center / cover;

  @include screen(md) {
    background: url('~/assets/images/mosume/banner-pad.png') no-repeat center center / cover;
  }

  @include screen(sm) {
    background: url('~/assets/images/mosume/banner-phone.png') no-repeat center center / cover;
  }

  .container {
    width: 50%;
    padding: 15% 0 25% 0;
    margin: 0 5%;
    @include flex(center, column, flex-start);

    @include screen(md) {
      padding: 15% 0 40% 0;
    }

    @include screen(sm) {
      width: 90%;
      padding: 10% 0 130% 0;
    }

    .hello {
      @include screen(sm) {
        align-self: center;
      }
    }

    img {
      object-fit: cover;
      margin: 2rem 0 1.5rem 0;
      max-width: 160%;

      @include screen(sm) {
        max-width: 90%;
        align-self: center;
        margin: 1rem 0;
      }
    }

    p {
      color: white;
      font-size: 20px;
      font-weight: 500;
      line-height: 41px;
      letter-spacing: 1.5px;

      @include screen(sm) {
        margin-top: 2rem;
      }
    }
  }
}
</style>
