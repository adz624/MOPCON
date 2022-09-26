<template>
  <div id="history">
    <div class="container">
      <h3 class="mt-0 mb-12">
        各時期的<br /> Mosume
      </h3>
    </div>
    <ul class="m-0 p-0">
      <li v-for="year in mosumeHistory" :key="year">
        <div :class="`mosume_20${year}`" />
        <p class="text-center">
          20{{ year }}
        </p>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'SectionHistory',
  data () {
    return {
      mosumeHistory: []
    }
  },
  created () {
    for (let i = 13; i < 22; i++) {
      this.mosumeHistory.push(i)
    }
  }
}
</script>

<style lang="scss" scoped>
#history {
  background: $colorWhite;
  padding-bottom: 104px;
}
h3 {
  @include font(40px, $colorMosumeBlue, 600);
  br {
    display: none;
  }
}
ul {
  list-style: none;
  @include flex(flex-start, row, center);
  overflow-x: scroll;
  li {
    padding: 24px;
    p {
      @include font(24px, $colorMosumeBlue, 600);
    }
  }
}
@for $i from 13 through 21 {
  .mosume_20#{$i} {
    background-image: url(~/assets/images/mosume/Mosume_20#{$i}.png);
    @include bgCenter(320px, 320px);
    background-size: contain;
  }
}
@include screen(sm) {
  #history {
    padding-bottom: 72px;
  }
  h3 {
    font-size: 40px;
    br {
      display: block;
    }
  }
  ul {
    li {
      padding: 8px;
    }
  }
  @for $i from 13 through 21 {
    .mosume_20#{$i} {
      width: 160px;
      height: 160px;
    }
  }
}
</style>
