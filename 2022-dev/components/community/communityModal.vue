<template>
  <div>
    <div
      id="myModal"
      class="modal fade"
      :class="{'show': show}"
      :style="{'display: block': show }"
    >
      <div class="modal-content">
        <div class="clearfix">
          <span class="close mr-1" @click="close()">&times;</span>
        </div>
        <div class="community-main">
          <img class="community-img mr-4" :src="data.photo || 'https://fakeimg.pl/300/'" :alt="data.name">
          <div>
            <h2 class="community-title mb-2 mt-md-4 mt-0">
              {{ data.name }}
            </h2>
            <p v-if="data.introduction" class="community-introduction mt-0" v-html="parseContent(data.introduction)" />
          </div>
        </div>
        <div class="community-content">
          <h2 class="community-title text-center">
            來看看成員有誰
          </h2>
          <div class="community-member">
            <p v-for="(member, i) in data.member" :key="`member_${i}`" class="mr-4 my-3">
              {{ member }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'DropdownModal',
  props: {
    modalOpen: Boolean,
    data: {
      type: Object,
      default: () => {}
    }
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
      const modal = document.getElementById('myModal')
      if (event.target === modal) {
        vm.close()
        vm.modalChange()
      }
    }
  },
  methods: {
    parseContent (content) {
      return content.replace(/\n/gi, '<br>')
    },
    close () {
      this.show = false
    },
    modalChange (status = false) {
      const body = document.querySelector('html, body')
      const modal = document.getElementById('myModal')
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

<style lang="scss" scoped>
/* The Modal (background) */

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1071;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.6);
}

.modal.fade {
  opacity: 0;
}
.modal.show {
  opacity: 1;
}

/* Modal Content */
.modal.fade .modal-content {
  background-color: #ffffff;
  border: 2px solid #0074A2;
  border-radius: 32px;
  margin: 50px auto;
  width: 90%;
  max-width: 609px;
  transform: translate(0, -50px);
  transition: transform 0.3s ease-out;
  padding: 1rem 2.5rem;
  @include screen(pad) {
    padding: 1rem 1.5rem;
  }
}

.modal.show .modal-content {
  transform: none;
}

.fade {
  transition: opacity 0.15s linear;
}

/* The Close Button */
.close {
  color: #0074A2;
  font-size: 30px;
  line-height: 1;
  cursor: pointer;
  float: right;
}

.clearfix {
  &:after {
    content: '';
    display: table;
    clear: both;
  }
}

.community {
  &-main {
    @include flex(normal, row, flex-start);
    @include screen(sm) {
      @include flex(center, column, center);
    }
  }
  &-img {
    width: 240px;
    height: 240px;
    object-fit: cover;
    border-radius: 50%;
    display: block;
  }
  &-title {
    @include font(20px, $colorPrimary, 500);
    @include screen(sm) {
      text-align: center;
    }
  }
  &-introduction {
     @include font(16px, $colorBlueLight, 400);
  }
  &-member {
    @include flex(center, row, center);
    flex-wrap: wrap;
    p {
      cursor: pointer;
      color: #0074A2;
      &:hover {
        color: $colorPink;
      }
    }
  }
}

</style>
