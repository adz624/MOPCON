<template>
  <div>
    <div
      id="tagModal"
      class="modal fade"
      :class="{'show': show}"
      :style="{'display: block': show }"
    >
      <div class="modal-content">
        <div class="clearfix">
          <span class="close mr-1" @click="close()">&times;</span>
        </div>
        <slot />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'DropdownModal',
  props: {
    modalOpen: Boolean
  },
  data () {
    return {
      show: this.modalOpen
    }
  },
  watch: {
    modalOpen (show) {
      this.modalChange(show)
      this.show = show
    },
    show (show) {
      this.$emit('modal-close', show)
    }
  },
  mounted () {
    const vm = this
    if (this.show) {
      vm.modalChange(true)
    }
    window.onclick = function (event) {
      const modal = document.getElementById('tagModal')
      if (event.target === modal) {
        vm.close()
        vm.modalChange()
      }
    }
  },
  methods: {
    close () {
      this.show = false
    },
    modalChange (status = false) {
      const body = document.querySelector('html, body')
      const modal = document.getElementById('tagModal')
      if (status) {
        body.classList.add('modal-open')
        modal.style.display = 'block'
      } else {
        modal.style.display = 'none'
        modal.classList.remove('show')
        body.classList.remove('modal-open')
      }
    }

  }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>
