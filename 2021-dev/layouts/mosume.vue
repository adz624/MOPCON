<template>
  <div id="MosumeLayout">
    <div class="container header">
      <ul class="m-0 p-0">
        <li class="mr-8" @click="openWindow('https://www.youtube.com/c/MopconOrg')" />
        <li class="mr-8" @click="openWindow('https://www.facebook.com/mopcon/')" />
        <li @click="openWindow('https://www.instagram.com/mopcon.tw/')" />
      </ul>
    </div>
    <Nuxt />
    <div class="container footer">
      <a href="https://mopcon.org/2021/">
        <img src="../assets/images/mosumeLayout/MOsume_logo.svg" alt="">
      </a>
      <ul class="m-0 p-0">
        <li class="mr-8" @click="openWindow('https://www.youtube.com/c/MopconOrg')" />
        <li class="mr-8" @click="openWindow('https://www.facebook.com/mopcon/')" />
        <li @click="openWindow('https://www.instagram.com/mopcon.tw/')" />
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  name: 'MosumeLayout',
  methods: {
    openWindow (url) {
      window.open(url)
    }
  }
}
</script>
<style lang="scss" scoped>
#MosumeLayout{
  background: #0D1336;
  padding-top: 50px;
}
ul{
  @include flex (flex-end,row,center);
  li{
    @include bgCenter(24px,20px);
    background-size: contain;
    cursor: pointer;
  }
  li:first-child{
    background-image: url(../assets/images/mosumeLayout/Youtube.svg);
  }
  li:nth-child(2){
    background-image:url(../assets/images/mosumeLayout/Facebook.svg);
  }
  li:last-child{
    background-image:url(../assets/images/mosumeLayout/Instgram.svg);
  }
}
.header{
  ul{
    margin-bottom: 35px;
  }
}
.footer{
  padding-top: 47px;
  padding-bottom: 47px;
  @include flex(center,row,center);
  a{
    display: block;
    margin-right: auto;
    width: 104px;
    height: 48px;
  }
}

@include screen(sm){
  .header{
    display: none;
  }
  .footer{
    flex-direction: column;
    align-items: flex-start;
    a{
      margin-bottom: 50px;
    }
  }
}
</style>
