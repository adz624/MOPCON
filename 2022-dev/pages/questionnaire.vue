<template>
  <div class="questionnaire">
    <div class="container py-14 py-md-10">
      <h1 class="my-0">
        MOPCON <br> 問卷調查
      </h1>
      <div class="btn-group">
        <a v-for="item in btnInfo" :key="item.name" :href="item.href" class="btn btn-primary" target="_blank">{{ item.name }}</a>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'QuestionnairePage',
  data () {
    return {
      btnInfo: [
        {
          name: '大會問卷',
          href: 'https://docs.google.com/forms/d/e/1FAIpQLSc3xGtGOpfsydOZKvrHwKhdrUl4y3VC4HozJUOD7ch_Z2jv5A/viewform'
        },
        {
          name: '議程問卷',
          href: 'https://docs.google.com/forms/d/e/1FAIpQLSfo04HjMmEuxRoM_RaqpRUiGyHXV0LkpNaR_DJJIZx-AdOnwg/viewform'
        }
      ]
    }
  },
  head () {
    return {
      title: '問卷調查 | MOPCON 2022',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: '問卷調查 | MOPCON 2022'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: `${process.env.BASE_URL}/2022/questionnaire`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: `${process.env.BASE_URL}/2022/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: '問卷調查 | MOPCON 2022'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: '問卷調查 | MOPCON 2022'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: '問卷調查 | MOPCON 2022'
        }
      ]
    }
  }
}
</script>
<style lang="scss" scoped>
  .questionnaire{
    height: calc(100vh - 112px );
    background: $colorWhite;
    h1 {
      text-align: center;
      @include font(40px, $colorPrimary, bold);
      margin-bottom: 30px;
    }
    .btn-group{
      @include flex(center,column,center);
      flex-direction: column;
      & a:first-child{
        margin-bottom: 30px;
      }
    }
  }
</style>
