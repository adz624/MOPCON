<template>
  <div id="speaker">
    <section class="main home-bg">
      <div class="vol10-mobile position-absolute d-none d-pad-block" />
      <div class="container">
        <div class="mo-container position-relatvie mb-8 mb-sm-0">
          <div class="bg-mosume " />
          <div class="vol10-gray d-pad-none position-absolute" />
        </div>
        <h2 class="main-title text-center position-relatvie mb-10">
          啟動高速資訊交流圈的<br><span>佼佼者們</span>
        </h2>
        <p class="main-content">
          每年我們都邀請了超過 25 位講師來到現場，包含知名的前端開發者、軟體工程師、資深架構師、設計師，以及專案經理等等，讓這場活動更加多元，也貫徹
          MOPCON 的精神，使參與的會眾都能從中獲得養分，甚至達到進一步的交流。
          <br>
          <span class="d-block py-8">
            MOPCON 志在打造出一座「高速資訊交流圈」！
          </span>
        </p>
      </div>
    </section>
    <!--講師陣容-->
    <section class="speaker">
      <div class="container">
        <div class="title-container">
          <div class="sopOne-icon" />
          <h2>高手陣容</h2>
        </div>
        <!--標籤-->
        <ul class="label-list mb-0 px-15">
          <li v-for="(tag,index) in tags" :key="tag" class="mr-4 mb-3">
            <input :id="`tag-${index}`" v-model="checkTag" :value="tag" type="checkbox" class="mr-1">
            <label :for="`tag-${index}`">{{ tag }}</label>
          </li>
        </ul>
        <!--講者名單-->
        <ul class="speaker-list p-0 mb-0">
          <li v-for="speaker in filterSpeakers" :key="speaker.speaker_id" @click.prevent="openModal(speaker.speaker_id)">
            <div class="speaker-img-list position-relative">
              <div class="speaker-img-wrap">
                <img :src="speaker.img.web" alt="">
              </div>
              <div class="hover-box position-absolute" />
            </div>
            <h3 class="pb-2 my-2">
              {{ speaker.name }}
            </h3>
            <p class="mb-1 mt-0">
              {{ speaker.company }}
            </p>
            <div class="speaker-btn-wrap">
              <button v-for="(tag,idx) in speaker.tags" :key="`tags-${idx}`" class="mr-2 mt-2">
                {{ tag.name }}
              </button>
            </div>
          </li>
        </ul>
        <Modal :modal-open="modalOpen" @modal-close="closeModal">
          <div v-if="singleSpeaker.length>0" class="modalBody mb-8 mb-pad-5">
            <div class="modalHeader mb-8 mb-pad-5">
              <div class="speaker-img-modal px-6 mt-4">
                <div class="speaker-img-wrap ">
                  <img :src="singleSpeaker[0].img.web" alt="">
                </div>
              </div>
              <div class="speaker-text-modal px-6 px-sm-0">
                <h3 class="mb-1">
                  {{ singleSpeaker[0].name }}
                </h3>
                <p class="my-0">
                  {{ singleSpeaker[0].company }}
                </p>
                <p class="mb-4 mt-0">
                  {{ singleSpeaker[0].job_title }}
                </p>
                <div class="speaker-community-wrap">
                  <p v-if="singleSpeaker[0].link_fb ||singleSpeaker[0].link_github||singleSpeaker[0].link_other||singleSpeaker[0].link_twitter" class="mr-4 mr-sm-0 mb-sm-4">
                    講者社群
                  </p>
                  <div class="speaker-community-icon d-flex">
                    <a v-if="singleSpeaker[0].link_fb" class="bg-facebook_icon" :href="singleSpeaker[0].link_fb" target="_blank" />
                    <a v-if="singleSpeaker[0].link_github" :href="singleSpeaker[0].link_github" class="bg-github_icon" target="_blank" />
                    <a v-if="singleSpeaker[0].link_other" :href="singleSpeaker[0].link_other" class="bg-website_icon" target="_blank" />
                    <a v-if="singleSpeaker[0].link_twitter" :href="singleSpeaker[0].link_twitter" class="bg-twitter_icon" target="_blank" />
                  </div>
                </div>
              </div>
            </div>
            <div class="modalBody">
              <h4 class="mb-2">
                <span>\\</span>
                介紹
              </h4>
              <p class="mb-8 mt-1">
                {{ singleSpeaker[0].bio }}
              </p>
              <div class="modal-summary-header">
                <h4 class="mr-3 mb-pad-0 mr-pad-0 mb-0 mt-2">
                  <span>\\</span>
                  議程主題
                </h4>
                <div class="speaker-btn-wrap">
                  <button
                    v-for="(tag,idx) in singleSpeaker[0].tags"
                    :key="`modalag-${idx}`"
                    class="mr-2 mt-2"
                  >
                    {{ tag.name }}
                  </button>
                </div>
              </div>
              <h3 class="mt-4 mb-3">
                {{ singleSpeaker[0].topic }}
              </h3>
              <div class="modal-summary-info-wrap">
                <div v-if="singleSpeaker[0].started_at > 0" class="modal-summary-info mr-6 mr-sm-0">
                  <div class="bg-calendar mr-1" />
                  <p class="m-0">
                    {{ $moment(singleSpeaker[0].started_at * 1000).format('MM/DD HH:mm') }} ~ {{ $moment(singleSpeaker[0].ended_at * 1000).format('MM/DD HH:mm') }}
                  </p>
                </div>
                <div v-if="singleSpeaker[0].room" class="modal-summary-info mt-sm-2">
                  <div class="bg-location mr-1" />
                  <p class="m-0">
                    {{ singleSpeaker[0].room }}{{ singleSpeaker[0].floor ? `(${ singleSpeaker[0].floor })` : '' }}
                  </p>
                </div>
              </div>
              <!-- eslint-disable-next-line vue/no-v-html -->
              <p class="mb-8" v-html="parseContent(singleSpeaker[0].summary)" />
              <div v-if="singleSpeaker[0].target">
                <h4 class="mb-1">
                  <span>\\</span>
                  目標會眾
                </h4>
                <!-- eslint-disable-next-line vue/no-v-html -->
                <p class="mb-8 mt-2" v-html="parseContent(singleSpeaker[0].target)" />
              </div>
              <div v-if="singleSpeaker[0].prior_knowledge">
                <h4 class="mb-1">
                  <span>\\</span>
                  先備知識
                </h4>
                <!-- eslint-disable-next-line vue/no-v-html -->
                <p class="mb-8 mt-2" v-html="parseContent(singleSpeaker[0].prior_knowledge)" />
              </div>
              <div v-if="singleSpeaker[0].expected_gain">
                <h4 class="mb-1">
                  <span>\\</span>
                  會眾預期收穫
                </h4>
                <!-- eslint-disable-next-line vue/no-v-html -->
                <p class="mb-8 mt-2" v-html="parseContent(singleSpeaker[0].expected_gain)" />
              </div>
              <div v-if="singleSpeaker[0].sponsor_info.hasOwnProperty('logo_path')">
                <h4 class="mb-1">
                  <span>\\</span>
                  贊助商
                </h4>
                <a :href="'/2021/sponsor/' + singleSpeaker[0].sponsor_id">
                  <img :src="singleSpeaker[0].sponsor_info.logo_path" alt="" class="sponsor-logo">
                </a>
              </div>
            </div>
            <div class="modalFooter">
              <!-- <a v-if="singleSpeaker[0].link_slide.length !== 0" :href="singleSpeaker[0].link_slide" target="_blank" class="text-center py-3 mr-3">簡報連結</a> -->
              <a href="https://lihipro.com/mopcon2021/speaker" target="_blank" class="text-center py-3 mr-3">
                <i class="material-icons mr-2" style="transform: rotate(-45deg); vertical-align: middle">
                  local_activity
                </i>前往買票</a>
              <div class="community-share-outline py-3" @click.prevent="shareShow=!shareShow">
                <div class="bg-share mr-2" />
                <p class="my-0">
                  分享議程
                </p>
                <div v-if="shareShow" class="community-share-list">
                  <client-only>
                    <ShareNetwork
                      network="facebook"
                      :url="shareUrl"
                      :title="`${singleSpeaker[0].name} | 2021 MOPCON 講者`"
                      :description="`${singleSpeaker[0].summary}`"
                      :quote="`${singleSpeaker[0].name} | 2021 MOPCON 講者`"
                      hashtags="MOPCON"
                    >
                      分享 Facebook
                    </ShareNetwork>
                  </client-only>
                  <client-only>
                    <ShareNetwork
                      network="Twitter"
                      :url="shareUrl"
                      :title="`${singleSpeaker[0].name} | 2021 MOPCON 講者`"
                      :description="`${singleSpeaker[0].summary}`"
                      :quote="`${singleSpeaker[0].name} | 2021 MOPCON 講者`"
                      hashtags="MOPCON"
                    >
                      分享 Twitter
                    </ShareNetwork>
                  </client-only>
                  <a href="#" class="py-3 px-2" @click.prevent="copylink">複製講者連結</a>
                </div>
              </div>
            </div>
          </div>
        </Modal>
      </div>
    </section>
    <div class="line-gray-transform" />
  </div>
</template>
<script>
import Modal from '../../components/Modal'
export default {
  name: 'Speaker',
  components: {
    Modal
  },
  async asyncData ({ $axios, params }) {
    try {
      let data = []
      if (process.server) {
        const res = await $axios.get(process.env.BASE_URL + '/2021/speaker.json')
        data = res.data
      } else {
        const res = '../static/speaker.json'
        data = res.data
      }

      const res = await $axios.get(process.env.BASE_URL + '/2021/speaker-tags.json')

      const config = {
        speakerData: data,
        tags: res.data.map(tag => tag.name)
      }
      if (params.speaker_id) {
        config.activeSpeaker = +params.speaker_id
        config.modalOpen = true
      }

      return config
    } catch (err) {}
  },
  data () {
    return {
      speakerData: [],
      tags: [],
      activeSpeaker: 0,
      modalOpen: false,
      checkTag: [],
      imgUrl: '',
      shareShow: false
    }
  },
  head () {
    return {
      title: this.modalOpen ? `${this.singleSpeaker[0].name} | 講者 MOPCON 2021` : '講者陣容 | MOPCON 2021',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: this.modalOpen ? this.singleSpeaker[0].summary : ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: this.modalOpen ? `${this.singleSpeaker[0].name} | 講者 MOPCON 2021` : '講者陣容 | MOPCON 2021'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: this.modalOpen ? this.singleSpeaker[0].summary : ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: this.modalOpen ? `${process.env.BASE_URL}/2021/speaker/${this.singleSpeaker[0].speaker_id}` : `${process.env.BASE_URL}/2021/speaker`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: this.modalOpen ? `${process.env.BASE_URL}/2021/${this.singleSpeaker[0].img.web}` : `${process.env.BASE_URL}/2021/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: this.modalOpen ? `${this.singleSpeaker[0].name} | 講者 MOPCON 2021` : '講者陣容 | MOPCON 2021'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: this.modalOpen ? this.singleSpeaker[0].summary : ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: this.modalOpen ? `${this.singleSpeaker[0].name} | 講者 MOPCON 2021` : '講者陣容 | MOPCON 2021'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: this.modalOpen ? `${this.singleSpeaker[0].name} | 講者 MOPCON 2021` : '講者陣容 | MOPCON 2021'
        }
      ]
    }
  },
  computed: {
    filterSpeakers () {
      const vm = this
      let filterArr = this.speakerData
      if (vm.checkTag.length) {
        filterArr = filterArr.filter(speaker => speaker.tags.some(tag => vm.checkTag.includes(tag.name)))
      }
      return filterArr
    },
    singleSpeaker () {
      return this.speakerData.filter(speaker => speaker.speaker_id === this.activeSpeaker)
    },
    shareUrl () {
      return process.client ? `${window.location.origin}/2021/speaker/${this.singleSpeaker[0].speaker_id}` : ''
    }
  },
  methods: {
    parseContent (content) {
      return content.replace(/\n/gi, '<br>')
    },
    copylink () {
      navigator.clipboard.writeText(this.shareUrl).then(() => {
        this.copySuccess = true
        setTimeout(() => {
          this.copySuccess = false
        }, 1000)
      }).catch(() => {})
    },
    openModal (id) {
      const vm = this
      vm.modalOpen = false
      vm.activeSpeaker = 0
      vm.activeSpeaker = id
      vm.modalOpen = true
    },
    closeModal (show) {
      this.modalOpen = show
      this.shareShow = false
    }
  }
}
</script>
<style lang="scss" src='./style.scss' scoped></style>
