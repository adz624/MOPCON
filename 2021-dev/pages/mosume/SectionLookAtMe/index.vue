<template>
  <div id="LookAtMe">
    <div class="container">
      <h3 class="mt-0 mb-6">
        來看看我
      </h3>
      <h4 class="mt-0 mb-14 text-center">
        某素梅現正參加 IT邦鐵人賽挑戰連續直播 30 天！每日 XX:XX 請鎖定 Youtube 頻道
      </h4>
      <div class="youTubeContainer">
        <iframe
          width="877"
          height="493"
          src="https://www.youtube.com/embed/hwVmgcrCoQU"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LookAtMe'
}
</script>
<style lang="scss" src='./style.scss' scoped>
