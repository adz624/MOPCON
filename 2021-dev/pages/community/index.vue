<template>
  <div id="community">
    <section class="slogan home-bg">
      <div class="container">
        <div class="vol10-mobile position-absolute" />
        <h2 class="slogan-title text-center position-relative">
          <div class="vol10-gray position-absolute" />
          我們在打造<br><span class="ml-8 ml-pad-0 fz-10 text-center">高速資訊交流圈</span>
        </h2>
        <ul class="slogan-content p-0 text-center">
          <li
            class="mb-5 fz-5 fz-pad-6 fz-sm-5"
          >
            MOPCON 為締造人、知識與產業的連結，旨在實現三項目標：
          </li>
          <li
            class="mb-5 fz-5 fz-pad-6 fz-sm-5"
          >
            1.帶動南台灣高經濟產業循環
          </li>
          <li
            class="mb-5 fz-5 fz-pad-6 fz-sm-5"
          >
            2.培養高知識產值人才
          </li>
          <li
            class="mb-10 fz-5 fz-pad-6 fz-sm-5"
          >
            3.匯聚知識、人流、投資，促進創新創業機會。
          </li>
          <li class="fz-5 fz-pad-6 mb-pad-10 fz-sm-5">
            <span>為使目標達成，</span><br>MOPCON 志在打造出一座「高速資訊交流圈」！
          </li>
        </ul>
        <p class="text-center fz-5">
          有興趣加入我們嗎？
        </p>
        <div class="btn-container">
          <button class="btn" @click="linkTo('https://www.facebook.com/mopcon')">
            ＋ 追蹤我們的 Facebook
          </button>
        </div>
      </div>
    </section>
    <section class="volunteer">
      <div class="container">
        <div class="volunteer-title">
          <div class="sopOne-icon" />
          <h2>MOPCON<br>志工團隊</h2>
        </div>
        <div class="volunteer-content">
          <div
            v-for="volunteer in volunteerList"
            :key="volunteer.id"
            class="group-box"
            :class="{
              'active': group === volunteer.id,
              'no-active': group !== volunteer.id && group !== null && groupExpand,
              'hide': groupChange}"
          >
            <div class="group-main" @click="expandGroup(volunteer.id)">
              <div :class="['image-' + volunteer.id ]" />
              <p class="group-title">
                {{ volunteer.name_e }}
              </p>
              <span class="group-name">“{{ volunteer.name }}”</span>
            </div>
            <div class="group-content">
              <div
                v-for="(team, teamIndex) in volunteerData.teams"
                :key="team.name"
                class="team-box"
              >
                <div class="team-title">
                  <span>{{ team.name }}</span>
                  <div
                    class="team-expand"
                    :class="{'team-expand-hide': !team.expand}"
                    @click="expandTeam(teamIndex)"
                  />
                </div>
                <div
                  class="team-content"
                  :class="{'team-content-hide': !team.expand && canHideTeam}"
                >
                  <span
                    v-for="member in team.members"
                    :key="member"
                  >
                    {{ member }}
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="line-deco-container">
          <div class="line-deco " />
        </div>
      </div>
    </section>
    <div class="line-gray-transform" />
    <section class="community">
      <div class="container">
        <div class="title-container">
          <div class="sopTwo-icon mr-5 " />
          <h2 class="fz-10 m-0">
            MOPCON<br>參與社群
          </h2>
        </div>
        <div class="community-list position-relative">
          <div class="vol10-gray position-absolute" />
          <div
            v-for="community in communityData"
            :key="community.name"
            class="col-3 col-pad-2 col-sm-1 mb-sm-6 p-10 p-sm-0"
          >
            <a href="#" class="card p-5 p-sm-3" @click.prevent="openModal(community.id)">
              <div class="card-pic col-sm-2 mr-sm-3" :class="`bg-${community.logo_file_name}`" />
              <p class="card-title col-sm-2 fz-5 fz-pad-6 fz-sm-5">
                {{ community.name }}
              </p>
            </a>
          </div>
        </div>
        <Modal :modal-open="modalOpen" @modal-close="closeModal">
          <div class="modal-body">
            <div class="modal-title-container mb-7">
              <div
                class="modal-pic mr-10"
                :class="`bg-${modalData.logo_file_name}`"
              />
              <h4 class="fz-5 fz-pad-6 fz-sm-5">
                {{ modalData.name }}
              </h4>
            </div>
            <h3 v-if="modalData.intro" class="fs-5 mb-3 mb-pad-5">
              介紹
            </h3>
            <p>{{ modalData.intro }}</p>
          </div>
        </Modal>
        <div class="line-deco-container">
          <div class="line-deco " />
        </div>
      </div>
    </section>
    <div class="line-gray" />
    <section class="rule">
      <div class="container">
        <div class="title-container">
          <div class="sopThree-icon mr-5" />
          <h2>MOPCON<br>行為準則</h2>
        </div>
        <div class="rule-content">
          <p class="col-2 col-pad-1 m-0 pr-4 pr-pad-0">
            有此次活動的聽眾、演講者、贊助商和志工，都必須同意遵守下列行為準則。而主辦單位也將嚴格地執行這些準則，我們期待所有參加者的合作，以確保大家能有一個安全友善的環境。
            騷擾包括有關性別，性別認同、年齡、性向、殘疾、外貌、體型、種族、宗教的攻擊性言語，或是在公共場合散播色情圖片、蓄意恐嚇、跟踪、騷擾性的攝影或錄影、多次打斷活動、不恰當的身體接觸，和讓人感到不舒服的性關注。參與者必須停止任何騷擾行為並且立即遵守行為準則。
            贊助商也必須遵守行為準則。贊助商不應該使用帶有性意味的圖像、活動，或其它材料。工作人員（包括志工）不該穿著帶有性意味的衣服/制服/裝扮，或是建立一個具有性意味的環境。
            如果參與者從事騷擾行為，工作人員會採取其認為適當的任何手段，包括警告或是請離會場，並且不會退費。
          </p>
          <p class="col-2 col-pad-1 m-0 pl-4 pl-pad-0">
            工作人員會很樂意幫助參與者聯繫酒店/場地警衛或當地警察、提供護送，或以其他方式幫助那些遇到騷擾的參與者感到安全。我們非常重視您的參與。
            我們希望參與者在各活動場合、會議有關的社群活動都能遵循這些規則。
            此行為準則是基於<span class="mx-1">Conference Code of Conduct</span>而訂定。
          </p>
        </div>
        <div class="line-deco-container">
          <div class="line-deco " />
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Modal from '~/components/Modal'

export default {
  name: 'Community',
  components: {
    Modal
  },
  data () {
    return {
      innerWidth: null,
      group: null,
      groupExpand: false,
      groupChange: false,
      volunteerList: [],
      volunteerData: [],
      communityData: [
        {
          id: 0,
          name: 'IxDA Taiwan',
          name_ch: '社團法人台灣互動設計協會',
          logo_file_name: 'IxDA-Taiwan',
          intro: '社團法人台灣互動設計協會 - 我們是充滿熱情活力的開拓者，永遠在前方為設計開闢更寬廣的道路!IxDA 每年都會舉辦國際性研討活動，廣泛邀請世界各地從事產品與服務的設計者們與會(包括產品經理，創意總監，互動設計師，人機互動工程師，使用性工程師，使用者經驗與研究員，及學術先進等) 。除了聆聽國際學者、專家最新的互動設計理論或實務發展外，也提供所有與會者直接交流的機會。IxDA Taiwan 於2010年成立，透過實體聚會、線上交流以及大型研討會的方式，專注於將互動設計推廣到台灣的各個角落，截至今日已經舉辦過15次公開活動，超過1000人實際參與，迄今亦有387位來自產官學界的菁英加入IxDA Taiwan的行列，形成一個互動設計的大家庭。去年4月舉行的互動設計大會，更讓台灣能與其他12個協辦國接軌，為台灣的互動設計劃下新的一頁。今年10月舉辦的 Interaction 13 也讓台灣互動設計及與會的專業人士跟國際大師產生更多交流！',
          fb: 'https://www.facebook.com/ixda.tw/',
          website: 'https://www.ixda.org.tw/'
        },
        {
          id: 1,
          name: 'PyCon Taiwan',
          name_ch: 'Python 年會',
          logo_file_name: 'PyConTaiwan',
          intro: 'PyCon ，亦即 Python 年會，是全球 Python 社群年度盛會。PyCon 由各地同好自發籌辦，而現在台灣也有自己的 Python 年會了。這個活動旨在聚集台灣各領域應用 Python 的人，交流彼此的經驗心得，分享最新的技術發展，並親身體驗社群獨有的熱情。年會除了有從 Python 的語言特性到各方面應用案例實例的精彩演講之外，我們也很重視與會者之間的交流與促成開發者與廠商合作可能，提供創業者交流討論的園地，達到社群技能和發展的目的。',
          fb: 'https://www.facebook.com/pycontw/',
          website: 'https://tw.pycon.org/2021/zh-hant'
        },
        {
          id: 2,
          name: '開放文化基金會',
          name_ch: '開放文化基金會',
          logo_file_name: 'OCF',
          intro: '什麼是開放文化？開放原始碼的開發機制，讓軟體界快速蓬勃發展，至今深深影響每個人的生活。近年來，這套開放的機制跨出了軟體開發領域，往文藝、政治、教育等領域擴散，形成一股新興的文化，為許多社會議題帶來新的視野。開放文化基金會的起源。2014 年，多個台灣開源社群共同發起開放文化基金會（Open Culture Foundation，簡稱 OCF），期望以法人組織的力量推廣開放文化，在產、官、學、民之間激起開放協作的火花。提供社群支援、組織合作、國際交流、顧問諮詢的服務',
          fb: 'https://www.facebook.com/www.ocf.tw/',
          website: 'https://ocf.tw/'
        },
        {
          id: 3,
          name: 'SITCON',
          name_ch: '學生計算機年會',
          logo_file_name: 'SITCON',
          intro: '學生計算機年會（SITCON）是由學生自發舉辦，投身學生資訊教育與推廣開源精神的社群， 也是一個由學生主辦、學生擔任講者、以學生為主軸的資訊研討會，給學生們一個發表交流技術的舞台。除了技術研討之外，還有許多從學生角度出發的經驗分享、專題研究成果或探討學生相關議題等等議程。 我們也曾舉辦黑客松、工作坊，和各地學校社團舉辦聯合講座等等。',
          fb: 'https://www.facebook.com/SITCONtw/',
          website: 'https://sitcon.org/'
        },
        {
          id: 4,
          name: 'COSCUP',
          name_ch: 'COSCUP',
          logo_file_name: 'COSCUP',
          intro: 'COSCUP 是由台灣開放原始碼社群聯合推動的年度研討會，起源於 2006 年，是台灣自由軟體運動 (FOSSM) 重要的推動者之一。活動包括有講座、攤位、社團同樂會等，除了邀請國際的重量級演講者之外，台灣本土的自由軟體推動者也經常在此發表演說，會議的發起人、工作人員與講者都是志願參與的志工。COSCUP 的宗旨在於提供一個聯結開放原始碼開發者、使用者與推廣者的平台。希望藉由每年一度的研討會，來推動自由及開放原始碼軟體 (FLOSS)。由於有許多贊助商及熱心捐助者，所有議程都是免費參加，但因會場人數限制，通常在一開放網路報名後就會立刻額滿。',
          fb: 'https://www.facebook.com/groups/vuejs.tw/',
          website: ''
        },
        {
          id: 5,
          name: 'Vue.js 台灣',
          name_ch: 'Vue.js Taiwan',
          logo_file_name: 'Vue',
          intro: '',
          fb: 'https://www.facebook.com/groups/vuejs.tw/',
          website: ''
        }
      ],
      modaltype: '',
      modalOpen: false,
      modalData: ''
    }
  },
  computed: {
    canHideTeam () {
      return this.innerWidth > 1024
    }
  },
  created () {
    this.getVolunteerList()
  },
  mounted () {
    this.innerWidth = window.innerWidth
    window.addEventListener('resize', this.resize)
  },
  methods: {
    resize () {
      this.innerWidth = window.innerWidth
    },
    openWindow (url) {
      window.open(url)
    },
    linkTo (url) {
      window.open(url, '_blank')
    },
    getVolunteerList () {
      const vm = this
      vm.$axios.$get(process.env.BASE_URL + '/2021/volunteer.json')
        .then((data) => {
          vm.volunteerList = data
        })
    },
    getVolunteerData (name) {
      const vm = this
      vm.$axios.$get(process.env.BASE_URL + '/2021/volunteer-' + name + '.json')
        .then((data) => {
          vm.volunteerData = data
        })
    },
    expandGroup (group) {
      if (this.group === group) {
        this.groupChange = true
        setTimeout(() => {
          this.group = null
          this.groupExpand = false
          this.groupChange = false
        }, 500)
      } else {
        this.groupExpand = true
        this.getVolunteerData(group)
        if (this.group) {
          this.group = group
        } else {
          this.groupChange = true
          setTimeout(() => {
            this.group = group
            this.groupChange = false
          }, 500)
        }
      }
    },
    expandTeam (teamIndex) {
      this.volunteerData.teams[teamIndex].expand = !this.volunteerData.teams[teamIndex].expand
    },
    openModal (id) {
      const vm = this
      vm.modalOpen = true
      vm.modalData = vm.communityData[id]
    },
    closeModal (show) {
      this.modalOpen = show
    }
  }
}
</script>

<style lang="scss" src='./style.scss' scoped></style>
