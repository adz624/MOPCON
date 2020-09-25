<template>
  <div id="schedule" class="logo-bg">
    <!--每一場都讓你收獲滿滿的議程規劃-->
    <section class="container slogan">
      <div class="slogan-title">
        <h3 class="slogan-title-en">
          Satisfy
        </h3>
        <h1>
          每一場都讓你收穫滿滿的
          <br>
          <span>
            議程規劃
          </span>
        </h1>
        <p class="slogan-content">
          MOPCON 目前已是南台灣最大技術社群研討會，成立宗旨為連結產業與資訊工程技術，以培養更多資訊科技人才，推動高雄產業創新發展，而沒有夥伴們的支持，這個願景就不可能成真！謝謝這 7 年來每一位夥伴的加入，和我們一起凝聚南臺灣的人才和知識，共同成長、學習！
        </p>
      </div>
      <div class="slogan-pic">
        <div class="slogan-pic-container" />
      </div>
    </section>

    <!--日期搜尋區-->
    <section class="container flex justify-center mb-12">
      <div class="btn-group">
        <button>
          10/24(六)
        </button>
        <button>
          10/25(日)
        </button>
      </div>
    </section>
    <!--標籤搜尋區-->
    <section class="container  flex justify-center mb-12">
      <ul class="tags-wrap">
        <li
          v-for="(tag, index) in tags"
          :key="`tag-${index}`"
        >
          <button class="btn-tag">
            <span class="logo logo-check" />
            {{ tag }}
          </button>
        </li>
      </ul>
    </section>
    <app-section />
  </div>
</template>

<script>
import AppSection from '@/components/AppSection'

export default {
  name: 'Schedule',
  components: {
    AppSection
  },
  data () {
    return {
      sessionData: [],
      tags: []
    }
  },
  created () {
    this.getSessionData()
  },
  methods: {
    getSessionData () {
      const vm = this
      vm.$axios
        .$get('/api/2019/session')
        .then(({ success, data, message }) => {
          if (success) {
            vm.sessionData = data

            // 撈出 tags
            const set = new Set()
            data.forEach(
              function (dataItem) {
                dataItem.period.forEach(
                  function (periodItem) {
                    periodItem.room.forEach(
                      function (roomItem) {
                        roomItem.tags.forEach(
                          function (tagsItem) {
                            console.log(tagsItem.name)
                            set.add(tagsItem.name)
                          }
                        )
                      }
                    )
                  }
                )
              }
            )
            vm.tags = [...set]
          } else {
            console.log('error', message)
          }
        })
        .catch((error) => {
          console.log(error)
        })
    }
  }
}
</script>

<style lang="scss" src='./style.scss' scoped></style>
