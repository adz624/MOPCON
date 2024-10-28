<template>
  <div id="History">
    <div class="container">
      <h3 class="mt-0 mb-12">
        各時期的<br>Mosume
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
  name: 'History',
  data () {
    return {
      mosumeHistory: []
    }
  },
  created () {
    const vm = this
    for (let i = 13; i < 21; i++) {
      vm.mosumeHistory.push(i)
    }
  }
}
</script>

<style lang="scss" src='./style.scss' scoped>

</style>
