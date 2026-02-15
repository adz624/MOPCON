<template>
  <div>
    <div>
      <div
        id="tagModal"
        class="modal fade"
        :class="{'show': show}"
        :style="{'display: block': show }"
      >
        <div class="modal-content">
          <h1>
            主題篩選
          </h1>
          <ul class="schedule-tags">
            <li v-for="(tag,i) in tags" :key="tag" class="mr-4 mb-3">
              <input
                :id="`tag-${i}`"
                type="checkbox"
                class="mr-1"
                :value="tag"
              >
              <label :for="`tag-${i}`">{{ tag }}</label>
            </li>
          </ul>
          <a class="search" href="#" @click.prevent="selectedTag()">
            <span class="iconify mr-2" data-icon="fe:search" style="color: white;" data-width="24" />
            <p class="d-inline-block" />搜尋主題
          </a>
          <a class="clearfix" @click.prevent="close()">
            <span class="iconify" data-icon="carbon:close" style="color: #ff7987;" data-width="24" />
            關閉視窗
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SectionTagModal',
  props: {
    tags: {
      type: Array,
      default: () => []
    },
    tagModalOpen: Boolean
  },
  data () {
    return {
      show: this.tagModalOpen
    }
  },
  watch: {
    tagModalOpen (show) {
      this.modalChange(show)
      this.show = show
    },
    show (show) {
      this.$emit('tag-modal-close', show)
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
      this.selectedTag()
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
    },
    selectedTag () {
      const data = document.querySelectorAll('input[type="checkbox"]:checked')
      const checkTag = []
      data.forEach((data) => { checkTag.push(data.value) })
      this.$emit('checkTag', checkTag)
      this.show = false
    }
  }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>
