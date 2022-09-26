<template>
  <div id="design">
    <div class="container">
      <div class="designTextContainer mb-md-12">
        <h3 class="mt-0 mb-6">
          {{ $t('pages.mosume.designer.title') }}
        </h3>
        <p class="m-0">
          {{ $t('pages.mosume.designer.intro.1') }}
          <br />
          {{ $t('pages.mosume.designer.intro.2') }}
          <br />
          {{ $t('pages.mosume.designer.intro.3') }}
        </p>
        <p class="mt-10 m-0">
          {{ $t('pages.mosume.designer.intro.4') }}
        </p>
      </div>
      <div class="designImgContainer">
        <div class="designThoughtBg" />
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
#design {
  background-color: $colorWhite;
  padding-top: 120px;
  padding-bottom: 80px;
}

.container {
  padding: 0 48px;
  @include flex(space-between, row, center);
}

.designTextContainer {
  width: 50%;
  h3 {
    @include font(56px, $colorMosumeBlue, 600);
  }
  p {
    line-height: 41.5px;
    @include font(20px, $colorMosumeBlue, 400);

    div {
      margin-top: 40px;
      @include font(20px, $colorMosumeBlue, 400);
    }
  }
}

.designImgContainer {
  width: 50%;
  .designThoughtBg {
    background-image: url(~/assets/images/mosume/design-thought.png);
    @include bgCenter(auto, 450px);
    background-size: contain;
  }
}

@include screen(md) {
  .container {
    @include flex(center, column, center);
  }

  .designTextContainer {
    width: 100%;
  }

  .designImgContainer {
    width: 100%;
  }
}

@include screen(sm) {
  #Design {
    padding-top: 48px;
    padding-bottom: 96px;
  }
  .container {
    padding: 0 24px;
  }
  .designTextContainer {
    h3 {
      font-size: 48px;
    }
    p {
      width: 100%;
    }
  }
}

</style>
