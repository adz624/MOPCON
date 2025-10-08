<template>
  <div id="hero" class="bg">
    <div class="container hero-content">
      <div class="banner">
        <div class="pinkCircle">
          <h1>主要議程</h1>
        </div>
      </div>
      <div class="hero-intro ml-6 ml-md-0">
        <h2>
          講者，<br class="d-none d-sm-block">知識迴圈核心的說書人</br>
        </h2>
        <p>
          MOPCON 是南台灣唯一指定行動科技年會，也志在打造每年一次的知識迴圈，講者是知識迴圈核心，也是說書人，透過 30-50分鐘的時間，簡述的那些開發經驗、方法驗證、踩坑事件，不止精彩自己也豐富他人。
          <br>講者，不止是聽眾專注的力量，也是我們持續堅持濁水溪以南的動力，一起走向 NEXT GIANT CONF.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SectionHero'
}
</script>

<style lang="scss" scoped>
#hero{
  .hero-content{
    @include flex(space-between,row,center);
    @include screen(md){
      flex-direction: column;
    }
  }
  .banner{
    width: 50%;
    @include flex(center,row,center);
    @include screen(md){
      width: 100%;
    }
  }
  .hero-intro{
    width: 50%;
    @include flex(center,column,flex-start);
    @include screen(md){
      width: 100%;
    }
  }
  h2{
    @include font(40px,$colorWhite,700);
    @include screen(sm){
      font-size: 28px;
    }
  }
  p{
    @include font (16px,$colorWhite,500);
  }
}
</style>
