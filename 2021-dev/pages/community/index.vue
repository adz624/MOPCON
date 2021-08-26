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
            class="mb-5 fz-5 fz-pad-6"
          >
            MOPCON 為締造人、知識與產業的連結，旨在實現三項目標：
          </li>
          <li
            class="mb-5 fz-5 fz-pad-6"
          >
            1.帶動南台灣高經濟產業循環
          </li>
          <li
            class="mb-5 fz-5 fz-pad-6"
          >
            2.培養高知識產值人才
          </li>
          <li
            class="mb-10 fz-5 fz-pad-6"
          >
            3.匯聚知識、人流、投資，促進創新創業機會。
          </li>
          <li class="fz-5 fz-pad-6 mb-pad-10">
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
              <p class="card-title col-sm-2 fz-5 fz-pad-6">
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
            <h3 class="fs-5 mb-3 mb-pad-5">
              介紹
            </h3>
            <p>{{ modalData.intro }}</p>
          </div>
        </Modal>
        <div class="line-deco-container">
          <div class="line-deco " />
        </div>
        </modal>
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
          intro: '社團法人台灣互動設計協會 - 我們是充滿熱情活力的開拓者，永遠在前方為設計開闢更寬廣的道路! IxDA 每年都會舉辦國際性研討活動，廣泛邀請世界各地從事產品與服務的設計者們與會(包括產品經理，創意總監，互動設計師，人機互動工程師，使用性工程師，使用者經驗與研究員，及學術先進等)。除了聆聽國際學者、專家最新的互動設計理論或實務發展外，也提供所有與會者直接交流的機會。IxDA Taiwan 於2010年成立，透過實體聚會、線上交流以及大型研討會的方式，專注於將互動設計推廣到台灣的各個角落，截至今日已經舉辦過15次公開活動，超過1000人實際參與，迄今亦有387位來自產官學界的菁英加入IxDA Taiwan的行列，形成一個互動設計的大家庭。去年4月舉行的互動設計大會，更讓台灣能與其他12個協辦國接軌，為台灣的互動設計劃下新的一頁。今年10月舉辦的 Interaction 13 也讓台灣互動設計及與會的專業人士跟國際大師產生更多交流！',
          fb: 'https://www.facebook.com/ixda.tw/',
          website: 'https://www.ixda.org.tw/'
        },
        {
          id: 1,
          name: 'PyCon Taiwan',
          name_ch: 'Python 年會',
          logo_file_name: 'pyConTaiwan',
          intro: 'PyCon，亦即 Python 年會，是全球 Python 社群的年度盛會。PyCon 由各地同好自發籌辦，而現在台灣也有自己的 Python 年會了。這個活動旨在聚集台灣各領域應用 Python 的組織與個人，交流彼此的經驗心得，分享最新的技術發展，並親身體驗社群獨有的熱情。對 Python 技術感到興趣嗎?我們致力籌辦一個高品質的技術聚會，除了竭誠歡迎你的參與，也請幫助我們，讓我們把台灣 Python 年會辦得更好。',
          fb: 'https://www.facebook.com/pycontw/',
          website: 'https://tw.pycon.org/2021/zh-hant'
        },
        {
          id: 2,
          name: '開放文化基金會',
          name_ch: '開放文化基金會',
          logo_file_name: 'ocf',
          intro: '2014年，多個開源、科技社群和活動組織聚在一起，共同發起「開放文化基金會」，期許能支援社群活耀發展，促進政府與民間在各領域有豐富的開放源碼、開放資料可取用，使公民科技趨於成熟，簡單來說就是要：用開源協作改造社會！',
          fb: 'https://www.facebook.com/www.ocf.tw/',
          website: 'https://ocf.tw/'
        },
        {
          id: 3,
          name: 'SITCON',
          name_ch: '學生計算機年會',
          logo_file_name: 'SITCON',
          intro: '學生計算機年會（SITCON）以學生為本、由學生自發舉辦，長期投身學生資訊教育與推廣開源精神，希望引領更多學子踏入資訊的殿堂，更冀望所有對資訊有興趣的學生，能夠在年會裏齊聚一堂，彼此激盪、傳承、啟發，達到「學以致用、教學相長」的實際展現。SITCON 也是一個屬於學生的舞台，讓學子們實踐、體驗開源社群精神：開放、分享、協作，貢獻一己之長一同讓 SITCON 更好。SITCON 也提供發表自身所學所長的舞台，讓更多人看見你的努力、你的改變！每年三月的研討會、暑期的夏令營、十二月的 Hour of Code，讓資訊更貼近生活，讓科技改變世界，改變，從你開始。讓我們一同翱遊在資訊的海洋！即使你不會寫程式，但總有你可以做的事！不要害羞，現在就加入我們吧！歡迎在各大社群媒體平台與我們互動！',
          fb: 'https://www.facebook.com/SITCONtw/',
          website: 'https://sitcon.org/'
        },
        {
          id: 4,
          name: 'Vue.js 台灣',
          name_ch: 'Vue.js Taiwan',
          logo_file_name: 'Vue',
          intro: '歡迎大家討論簡單好學的 Vue.js',
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
      vm.$axios.$get('volunteer.json')
        .then((data) => {
          vm.volunteerList = data
        })
    },
    getVolunteerData (name) {
      const vm = this
      vm.$axios.$get('volunteer-' + name + '.json')
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
