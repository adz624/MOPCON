<template>
  <div id="youtube">
    <div class="container">
      <h3 class="mt-0 mb-6">
        {{ $t('pages.mosume.youtube.title') }}
      </h3>
      <h4 class="mt-0 mb-14 text-center">
        {{ $t('pages.mosume.youtube.intro') }}
      </h4>
      <div class="youtubeContainer">
        <iframe
          width="877"
          height="493"
          src="https://www.youtube.com/embed/0gX3WZWS5rM"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        />
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
#youtube {
  padding-top: 85px;
  padding-bottom: 120px;
  background: #F5F5F5;
}
.container {
  @include flex(center, column, center);
}
h3 {
  @include font(64px, $colorMosumeBlue, 600);
}
h4 {
  @include font(20px, $colorMosumeBlue, 400);
  width: 600px;
}
.youtubeContainer {
  margin-bottom: 120px;
  display: contents;
  iframe {
    border-radius: 12px;
  }
}

@include screen(md) {
  #youtube {
    padding-bottom: 70px;
  }

  .youtubeContainer {
    iframe {
      width: 784px;
      height: 441px;
    }
  }
}

@include screen(pad) {
  #youtube {
    padding-bottom: 48px;
  }

  h4 {
    width: 100%;
  }
  .youtubeContainer {
    margin-bottom: 80px;
    width: 100%;
    height: auto;
    iframe {
      width: 570px;
      height: 319px;
    }
  }
}

@include screen(sm) {
  #youtube {
    padding-top: 60px;
  }

  h3 {
    font-size: 48px;
  }

  .youtubeContainer {
    iframe {
      width: 340px;
      height: 189px;
    }
  }
}

</style>
