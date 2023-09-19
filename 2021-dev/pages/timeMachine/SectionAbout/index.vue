<template>
  <div id="About">
    <div class="container">
      <h2 class="mt-0 mb-14 mb-pad-10 pt-15 pt-pad-10">
        關於 MOPCON
      </h2>
      <div class="text-container">
        <ul>
          <li v-for="info in data" :key="info.textTop">
            <p>
              {{ info.textTop }}
            </p>
            <p class="num">
              {{ info.num }}
            </p>
            <p>
              {{ info.textBottom }}
            </p>
          </li>
        </ul>
        <div />
      </div>
    </div>
    <div class="line-gray" />
  </div>
</template>

<script>
export default {
  name: 'About',
  data () {
    return {
      data: [
        {
          textTop: '持續舉辦',
          num: 10,
          textBottom: '年'
        },
        {
          textTop: '總參與人數',
          num: '8,640',
          textBottom: '人次'
        },
        {
          textTop: '舉辦議程數',
          num: 392,
          textBottom: '議程'
        },
        {
          textTop: '講者總人數',
          num: 310,
          textBottom: '人次'
        }
      ]
    }
  }
}
</script>

<style lang="scss" src='./style.scss' scoped>

</style>
