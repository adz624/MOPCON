<template>
  <Modal :modal-open="modalOpen" @modal-close="closeModal">
    <div class="modal-body modal-2020">
      <div class="banner"></div>
      <h4 class="title">{ MOPCON 2020 <br class="br-md-block"> 籌備中; }</h4>
      <div class="content">
        <p>10/24（六）- 10/25（日)<br>
        高雄國際會議中心 ICCK</p>
      </div>
      <div class="track-btn">
        <a href="https://www.facebook.com/mopcon/" class="btn-third" target="_blank">追蹤我們</a>
      </div>
      <div class="c-btn">
        <a :href="baseUrl + '/2020/cfp'" class="btn-primary" target="_blank">稿件徵求</a>
        <a href="mailto:sponsor@mopcon.org" class="btn-primary" target="_blank">贊助我們</a>
      </div>
    </div>
  </Modal>
</template>

<script>
import Modal from "~/components/Modal";
export default {
  name: 'sectionModal',
  data() {
    return {
      modalOpen: false,
      baseUrl: process.env.BASE_URL
    };
  },
  components: {
    Modal,
  },
  methods: {
    closeModal(show) {
      this.modalOpen = show;
    },
  },
  mounted() {
    this.modalOpen = true;
  },
}
</script>
<style lang="scss" src="./style.scss" scoped></style>
