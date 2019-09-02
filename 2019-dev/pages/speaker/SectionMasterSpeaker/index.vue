<template>
  <div class="section-master-speaker">
    <h2 class="title"><span>{ 開箱</span><span class="color-primary">高手陣容</span><span>; }</span></h2>
    <div id="tag_area">
      <div class="tag">
        <label v-for="(tag, index) in tagsList" :class="{'active': selectedTags.includes(tag.name), 'filter-btn-primary': tag.color == '#01aaf0',
          'filter-btn-third': tag.color == '#ff4492', 'filter-btn-secondary': tag.color == '#98ce02'}" :key="tag.name">
          <input class="hidden" type="checkbox" :value="tag.name" v-model="selectedTags">
          <span>{{ selectedTags.includes(tag.name)? 'x '+ tag.name : tag.name }}</span>
        </label>
      </div>
      <a href="#" class="clear__tag" @click.prevent="selectedTags = []"
        v-if="selectedTags.length !== 0"><small>清除篩選</small></a>
    </div>
    <div class="section__speaker__list" v-if="speakerHasTagsList.length != 0">
      <div class="section__speaker__card" v-for="speaker in speakerHasTagsList" @click="openModal(speaker)">
        <img class="section-master-speaker__img" :src="speaker.img.web" alt="" width="140px"
          height="140px">
        <h3 class="section-master-speaker__name">{{ speaker.name }}</h3>
        <div class="section-master-speaker__content">
          <p>{{ speaker.company }}</p>
          <p>{{ speaker.job_title }}</p>
        </div>
        <span class="basic-badge-primary" v-for="tag in speaker.tags"
        :style="{'background-color': tag.color}">{{ tag.name }}</span>
      </div>
    </div>
    <div class="section__speaker__noSpeaker" v-else>
      <div class="section__speaker__noSpeaker-img"></div>
      <h3 class="color-primary">Oops！沒有符合篩選的講者哦！</h3>
    </div>
    <Modal :modal-open="modalOpen" @modal-close="closeModal">
      <div class="modal-body">
        <div class="section-master-speaker__info">
          <img v-if="tempSpeakerData.img" :src="tempSpeakerData.img.web" class="section-master-speaker__img" alt="" width="140px"
            height="140px">
          <div class="intro">
            <span class="speaker-badge-third" v-if="tempSpeakerData.is_keynote">Keynote</span>
            <h3 class="section-master-speaker__name">{{ tempSpeakerData.name }}</h3>
            <div class="section-master-speaker__content">
              <p>{{ tempSpeakerData.company }}</p>
              <p>{{ tempSpeakerData.job_title }}</p>
            </div>
          </div>
        </div>
        <div class="socail_media" :class="{'has_icon': tempSpeakerData.link_fb || tempSpeakerData.link_twitter || tempSpeakerData.link_github || tempSpeakerData.link_other}">
          <a v-if="tempSpeakerData.link_fb" :href="tempSpeakerData.link_fb" target="_blank">
            <img src="./images/icon/icon-fb.png" alt="" width="34.5px" height="34.5px">
          </a>
          <a  v-if="tempSpeakerData.link_twitter" :href="tempSpeakerData.link_twitter" target="_blank">
            <img src="./images/icon/icon-twitter.png" alt="" width="34.5px" height="34.5px">
          </a>
          <a  v-if="tempSpeakerData.link_github" :href="tempSpeakerData.link_github" target="_blank">
            <img src="./images/icon/icon-github.png" alt="" width="34.5px" height="34.5px">
          </a>
          <a  v-if="tempSpeakerData.link_other" :href="tempSpeakerData.link_other" target="_blank">
            <img src="./images/icon/icon-web.png" alt="" width="34.5px" height="34.5px">
          </a>
        </div>
        <p class="summary">{{ tempSpeakerData.summary }}</p>
        <div class="topic">
          <p v-if="tempSpeakerData.tags != ''">課程主題 <span class="basic-badge-primary"
              v-for="tag in tempSpeakerData.tags">{{ tag.name }}</span></p>
          <h3 class="topic__title color-third">{{ tempSpeakerData.topic }}</h3>
          <p class="topic__time">時間： {{ fullTime }}　<br class="break">
            地點：{{ tempSpeakerData.room }}({{ tempSpeakerData.floor }})</p>
        </div>
        <div class="sponsor" v-if="tempSpeakerData.sponsor_id !== 0 && Object.keys(tempSpeakerData).length !== 0" >
          <p class="color-primary">贊助廠商</p>
          <img :src="getSponsorData(tempSpeakerData.sponsor_id)" alt="" srcset="" width="60px" height="60px">
        </div>
        <div class="share">
          <button class="basic-btn" @click.prevent="copyLink(nowUrl + '?id='+tempSpeakerData.speaker_id)">分享講者</button>
        </div>
      </div>
    </Modal>
  </div>
</template>

<script>
  import Modal from "~/components/Modal";

  export default {
    components: {
      Modal,
    },
    head() {
      let speaker = this.tempSpeakerData
      return {
        title: `講者 | MOPCON 2019`,
        meta: [
          {
            hid: 'description',
            name: 'description',
            content: `${speaker.summary}`,
          },
          // fb
          {
            hid: 'og-title',
            property: 'og:title',
            content: `${speaker.name} | 講者 MOPCON 2019`,
          },
          {
            hid: 'og-description',
            property: 'og:description',
            content: `${speaker.summary}`,
          },
          {
            hid: 'og-url',
            property: 'og:url',
            content: `${process.env.BASE_URL}/2019/speaker?id=${speaker.speaker_id}`,
          },
          {
            hid: 'og-image',
            property: 'og:image',
            content: `${speaker.photo_for_session_web}`,
          },
          // twitter seo
          {
            hid: 'twitter-site',
            name: 'twitter:site',
            content: `${speaker.name} | 講者 MOPCON 2019`,
          },
          {
            hid: 'twitter-description',
            name: 'twitter:description',
            content: `${speaker.summary}`
          },
          {
            hid: 'twitter-app:name:iphone',
            name: 'twitter:app:name:iphone',
            content: `${speaker.name} | 講者 MOPCON 2019`,
          },
          {
            hid: 'twitter-app:name:ipad',
            name: 'twitter:app:name:ipad',
            content: `${speaker.name} | 講者 MOPCON 2019`,
          },
        ],
      };
    },
    data() {
      return {
        spearkerList: [],
        modalOpen: false,
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
      openModal(data) {
        const vm = this;
        vm.tempSpeakerData = data;
        vm.modalOpen = true;
      },
      closeModal(show) {
        this.modalOpen = show;
      },
      copyLink(link) {
        const temp = document.createElement('input');
        document.querySelector('body').append(temp);
        temp.value = link;
        temp.select()
        document.execCommand("copy");
        temp.remove();
      },
      getSponsorData(id) {
        const vm = this;
        vm.$axios.$get(`/api/2019/sponsor?sponsor_id=${id}`)
          .then(({ success, data, message }) => {
            if (success) {
              vm.imgUrl = data[0].logo_path;
            }
          })
        return vm.imgUrl
      },
    },
    computed: {
      fullTime: function () {
        const vm = this;
        const startDate = new Date();
        startDate.setTime(vm.tempSpeakerData.started_at * 1000);
        const endDate = new Date();
        endDate.setTime(vm.tempSpeakerData.ended_at * 1000);
        const startHour = (startDate.getHours() < 10 ? '0' + startDate.getHours() : startDate.getHours())
        const startMin = (startDate.getMinutes() < 10 ? '0' + startDate.getMinutes() : startDate.getMinutes())
        const endHour = (endDate.getHours() < 10 ? '0' + endDate.getHours() : endDate.getHours())
        const endMin = (endDate.getMinutes() < 10 ? '0' + endDate.getMinutes() : endDate.getMinutes())
        const fullDate = `${startDate.getMonth() + 1}/${startDate.getDate()} ${startHour}:${startMin} ~ ${endHour}: ${endMin}`
        return fullDate
      },
      speakerHasTagsList: function () {
        const vm = this;
        if (vm.selectedTags.length == 0) {
          return vm.spearkerList;
        } else {
          let filterSpeakerList = [];
          vm.spearkerList.forEach(function(speaker) {
            let speakerTagArr = [];
            speaker.tags.map(tag => speakerTagArr.push(tag.name))
            function speakerContainsFilter(filter) {
              return speakerTagArr.indexOf(filter) != -1;
            }
            if(vm.selectedTags.every(speakerContainsFilter)) {
              filterSpeakerList.push(speaker);
            }
          });
          
          return filterSpeakerList;
        }
      },
    },
    mounted() {
      const vm = this;
      vm.getTags();
      vm.getSpeakerData();
      vm.nowUrl = `${process.env.BASE_URL}/2019/speaker`;
      if (vm.$route.query.id) {
        vm.$axios.$get(`/api/2019/speaker/${vm.$route.query.id}`)
          .then(({ success, data, message }) => {
            if (success) {
              vm.openModal(data);
            }
          })
      }
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
