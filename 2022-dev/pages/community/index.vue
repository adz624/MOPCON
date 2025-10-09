<template>
  <div>
    <section id="hero" class="bg">
      <div class="container hero-content">
        <div class="banner">
          <div class="pinkCircle">
            <h1>參與社群</h1>
          </div>
        </div>
        <div class="hero-intro ml-6 ml-md-0">
          <h2>
            取之社群 用之社群
          </h2>
          <p>
            過去十年，MOPCON 取自社群先進以及社群組織的養分，銳變成長。<br>
            每到十月，我們也邀請社群夥伴聚集到高雄，去年十月，受疫情影響，僅從線上獲得知識、互動及聚會。 <br>
            今年十月，MOPCON 用誠摯的心，邀請願意參與的社群，一起做推廣餵人點數，從技術聊到歲數，談議程歪樓鹽埕。
          </p>
        </div>
      </div>
    </section>
    <div class="content">
      <div class="container">
        <section class="participant">
          <h2 class="mt-0 pt-8">
            參與社群
          </h2>
          <ul class="participantList">
            <li v-for="data in participantData" :key="`participant${data.id}`">
              <a href="#" @click.prevent="openModal(data.id)">
                <div class="participantBg" :style="{ backgroundImage: 'url(' + data.photo.web + ')' }" />
                <h3>{{ data.name }}</h3>
              </a>
            </li>
          </ul>
        </section>
        <section class="rule">
          <h2>
            MOPCON行為準則
          </h2>
          <p>
            MOPCON 致力維護社群互動環境，旨在提供一個安全、友善並令人感到歡迎的環境，我們要求參與本活動的聽眾、演講者、贊助商和志工，都必須同意遵守下列行為準則，以打造一個所有人都享有安全及正向的參與者體驗。<br>
            <br>
            不得對任何與會者的恐嚇、騷擾、辱罵、歧視、貶損或貶低行為。  騷擾包括有關性別，性別認同、年齡、性向、殘疾、外貌、體型、種族、宗教的攻擊性言語，或是在公共場合散播色情圖片、蓄意恐嚇、跟踪、騷擾性的攝影或錄影、多次打斷活動、不恰當的身體接觸，和讓人感到不舒服的性關注。<br>
            <br>
            參與者必須停止任何騷擾行為並且立即遵守行為準則。 贊助商也必須遵守行為準則。贊助商不應該使用帶有性意味的圖像、活動，或其它材料。工作人員（包括志工）不該穿著帶有性意味的衣服/制服/裝扮，或是建立一個具有性意味的環境。<br>
            <br>
            如果參與者從事騷擾行為，工作人員會採取其認為適當的任何手段，包括警告或是請離會場，並且不會退費。<br>
            <br>
            MOPCON 會幫助參與者聯繫酒店/場地警衛或當地警察、提供護送，或以其他方式幫助那些遇到騷擾的參與者感到安全。我們非常重視您的參與。 我們希望參與者在各活動場合、會議有關的社群活動都能遵循這些規則。 此行為準則是基於 Conference Code of Conduct 而訂定。<br>
          </p>
        </section>
      </div>
    </div>
    <Modal :modal-open="modalOpen" @modal-close="closeModal">
      <div class="modal-content-wrap">
        <div class="modalBg" :style="{ backgroundImage: 'url(' + filterParticipant.photo?.web + ')' }" />
        <h3>{{ filterParticipant.name }}</h3>
        <div class="modal-community-icon mt-3">
          <client-only>
            <a v-if="filterParticipant.event" :href="filterParticipant.event" target="_blank"><span class="iconify fz-6 mr-2" data-icon="akar-icons:globe" /></a>
            <a v-if="filterParticipant.facebook" :href="filterParticipant.facebook" target="_blank"><span class="iconify fz-6 mr-2" data-icon="akar-icons:facebook-fill" /></a>
            <a v-if="filterParticipant.twitter" :href="filterParticipant.twitter" target="_blank"><span class="iconify fz-6 mr-2" data-icon="akar-icons:twitter-fill" /></a>
            <a v-if="filterParticipant.instagram" :href="filterParticipant.instagram" target="_blank"><span class="iconify fz-6" data-icon="akar-icons:instagram-fill" /></a>
          </client-only>
        </div>
        <p>{{ filterParticipant.introduction }}</p>
      </div>
    </Modal>
  </div>
</template>
<script>
import { participant } from '@/api/url'
import Modal from '~/components/Modal'

export default {
  name: 'ParticipantPage',
  components: {
    Modal
  },
  async asyncData ({ $axios }) {
    try {
      const { data } = await $axios.get(participant)

      const config = {
        participantData: data.data.participant
      }
      return config
    } catch (err) {}
  },
  data () {
    return {
      modalOpen: false,
      participantData: [],
      filterParticipant: []
    }
  },
  head () {
    return {
      title: '參與社群 | MOPCON 2022',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: this.modalOpen ? this.filterParticipant.name : ''
        },
        // fb
        {
          hid: 'og-title',
          property: 'og:title',
          content: '參與社群 | MOPCON 2022'
        },
        {
          hid: 'og-description',
          property: 'og:description',
          content: ''
        },
        {
          hid: 'og-url',
          property: 'og:url',
          content: `${process.env.BASE_URL}/2022/community`
        },
        {
          hid: 'og-image',
          property: 'og:image',
          content: `${process.env.BASE_URL}/2022/og-image.png`
        },
        // twitter seo
        {
          hid: 'twitter-site',
          name: 'twitter:site',
          content: '參與社群 | MOPCON 2022'
        },
        {
          hid: 'twitter-description',
          name: 'twitter:description',
          content: this.modalOpen ? this.filterParticipant.name : ''
        },
        {
          hid: 'twitter-app:name:iphone',
          name: 'twitter:app:name:iphone',
          content: '參與社群 | MOPCON 2022'
        },
        {
          hid: 'twitter-app:name:ipad',
          name: 'twitter:app:name:ipad',
          content: '參與社群 | MOPCON 2022'
        }
      ]
    }
  },
  methods: {
    openModal (id) {
      this.$axios
        .$get(`/api/2022/community/participant/${id}`)
        .then(({ success, data, message }) => {
          if (success) {
            this.filterParticipant = data
          } else {
            console.log('error', message)
          }
        })
        .catch((error) => {
          console.log(error)
        })
      this.modalOpen = true
    },
    closeModal (show) {
      this.modalOpen = show
      this.filterParticipant = []
    }
  }
}
</script>
<style lang="scss" scoped>
#hero{
  .hero-content{
    @include flex(space-between,row,center);
    padding-bottom: 72px;
    @include screen(md){
      flex-direction: column;
    }
  }
  .banner{
    width: 50%;
    @include flex(center,row,center);
    @include screen(md){
      width: 100%;
    }
  }
  .hero-intro{
    width: 50%;
    @include flex(center,column,flex-start);
    @include screen(md){
      width: 100%;
    }
    @include screen(sm){
      align-items: center;
    }
  }
  h2{
    @include font(40px,$colorWhite,700);
    @include screen(sm){
      font-size: 28px;
      text-align: center;
    }
  }
  p{
    @include font (16px,$colorWhite,500);
  }
}
.content{
  background-color: $colorWhite;
}
.participant{
  padding-bottom: 64px;
  @include screen(sm){
    margin-bottom: 24px;
  }
  h2{
    @include font (40px,$colorPrimary,700);
      text-align: center;
    @include screen(sm){
      font-size: 32px;
    }
  }
}
.participantList{
  @include flex(center,row,center);
  flex-wrap: wrap;
  li{
    @include flex(center,row,center);
    width: 33.333%;
    margin-bottom: 64px;
    @include screen(md){
      width: 50%;
    }
    @include screen(sm){
      width: 100%;
      margin-bottom: 40px;
    }
  }
  a{
    @include flex(center,column,center);
    display: inline-flex;
    .participantBg{
      @include bgCenter(240px,240px);
      background-size: contain;
    }
    h3{
      @include font(20px,#004973,500);
    }
  }
}
.rule{
  padding-bottom: 64px;
  h2{
    @include font (40px,$colorPrimary,700);
    @include screen(sm){
      font-size: 32px;
    }
  }
  p{
    color:#5D6160;
  }
}
.modal-content-wrap{
  @include flex(center,column,center);
  margin-top: 16px;
  .modalBg{
    @include bgCenter(240px,240px);
    background-size: contain;
  }
  h3{
    @include font(20px,#004973,500);
  }
  .modal-community-icon{
    a, svg{
      color:$colorPrimaryLight;
    }
    a:hover{
      opacity: 0.8;
    }
  }
  p{
    @include font(16px,#5d6160,400)
  }
}
</style>
