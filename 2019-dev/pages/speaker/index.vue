<template>
  <div class="speaker">
    <div class="speaker__banner"></div>
    <div class="section">
      <h2 class="title"><span>{ 驅動高速資訊交流圈</span><span class="color-primary">的佼佼者們</span><span>; }</span></h2>
      <p class="intro">每年我們都邀請了超過 25 位講師來到現場，包含知名的前端開發者、軟體工程師、資深架構師、設計師，以及專案經理等等，讓這場活動更加多元，也貫徹 MOPCON
        的精神，使參與的會眾都能從中獲得養分，甚至達到近一步的交流。</p>
      <div class="section-master-speaker">
        <h2 class="title"><span>{ 開箱</span><span class="color-primary">高手陣容</span><span>; }</span></h2>
        <div id="tag_area">
          <div class="tag">
            <label v-for="(tag, index) in tagsList" :class="{'active': selectedTags.includes(tag.name), 'filter-btn-primary': tag.color == '#01aaf0',
                          'filter-btn-third': tag.color == '#ff4492', 'filter-btn-secondary': tag.color == '#98ce02'}"
              :key="tag.name">
              <input class="hidden" type="checkbox" :value="tag.name" v-model="selectedTags">
              <span>{{ selectedTags.includes(tag.name)? 'x '+ tag.name : tag.name }}</span>
            </label>
          </div>
          <a href="#" class="clear__tag" @click.prevent="selectedTags = []"
            v-if="selectedTags.length !== 0"><small>清除篩選</small></a>
        </div>
        <div class="section__speaker__list" v-if="speakerHasTagsList.length != 0">
          <NuxtLink class="section__speaker__card" v-for="speaker in speakerHasTagsList" :to="'/speaker/' + speaker.speaker_id" :key="speaker.speaker_id">
            <img class="section-master-speaker__img" :src="speaker.img.web" alt="" width="140px" height="140px">
            <h3 class="section-master-speaker__name">{{ speaker.name }}</h3>
            <div class="section-master-speaker__content">
              <p>{{ speaker.company }}</p>
              <p>{{ speaker.job_title }}</p>
            </div>
            <span class="basic-badge-primary" v-for="tag in speaker.tags"
              :style="{'background-color': tag.color}">{{ tag.name }}</span>
        </NuxtLink>
        </div>
        <div class="section__speaker__noSpeaker" v-else>
          <div class="section__speaker__noSpeaker-img"></div>
          <h3 class="color-primary">Oops！沒有符合篩選的講者哦！</h3>
        </div>
      </div>
    </div>
    <SectionApp />
  </div>
</template>

<script>
  import SectionApp from '~/components/SectionApp';

  export default {
    components: {
      SectionApp,
    },
    data() {
      return {
        spearkerList: [],
        tempSpeakerData: {},
        tagsList: [],
        selectedTags: [],
        nowUrl: '',
        imgUrl: '',
      };
    },
    methods: {
      getSpeakerData() {
        const vm = this;
        vm.$axios
          .$get(`/api/2019/speaker`)
          .then(({ success, data, message }) => {
            if (success) {
              vm.spearkerList = data
            } else {
              console.log("error", message);
            }
          })
          .catch(error => {
            console.log(error);
          });
      },
      getTags() {
        const vm = this;
        vm.$axios.$get(`/api/2019/speaker/tags`)
          .then(({ success, data, message }) => {
            if (success) {
              vm.tagsList = data;
            }
          })
      },
    },
    computed: {
      speakerHasTagsList: function () {
        const vm = this;
        if (vm.selectedTags.length == 0) {
          return vm.spearkerList;
        } else {
          return vm.spearkerList.filter((speaker) => {
            return speaker.tags.some(tag => vm.selectedTags.includes(tag.name))
          });
        }
      },
    },
    mounted() {
      const vm = this;
      vm.getTags();
      vm.getSpeakerData();
      const tagArea = document.getElementById("tag_area");
      const sticky = tagArea.offsetParent.offsetTop +
        tagArea.offsetParent.offsetParent.offsetTop +
        tagArea.offsetTop + 47 - 36;
      window.addEventListener('scroll', (event) => {
        if (window.pageYOffset > sticky) {
          tagArea.classList.add("sticky-top")
        } else {
          tagArea.classList.remove("sticky-top");
        }
      });
    },
  };
</script>

<style lang="scss" src="./style.scss" scoped></style>