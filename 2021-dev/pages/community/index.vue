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
          <button class="btn">
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
          <div class="col-3 col-pad-2 col-sm-1 mb-sm-6 p-10 p-sm-0">
            <a href="#" class="card p-5 p-sm-3">
              <div class="card-pic col-sm-2 mr-sm-3 bg-IxDA-Taiwan" />
              <p class="card-title col-sm-2 fz-5 fz-pad-6">
                IxDA Taiwan
              </p>
            </a>
          </div>
          <div class="col-3 col-pad-2 col-sm-1 mb-sm-6 p-10 p-sm-0">
            <a href="#" class="card p-5 p-sm-3">
              <div class="card-pic col-sm-2 mr-sm-3 bg-pyConTaiwan" />
              <p class="card-title col-sm-2 fz-5 fz-pad-6">
                PyCon Taiwan
              </p>
            </a>
          </div>
          <div class="col-3 col-pad-2 col-sm-1 mb-sm-6 p-10 p-sm-0">
            <a href="#" class="card p-5 p-sm-3">
              <div class="card-pic col-sm-2 mr-sm-3 bg-ocf" />
              <p class="card-title col-sm-2 fz-5 fz-pad-6">
                開放文化基金會
              </p>
            </a>
          </div>
          <div class="col-3 col-pad-2 col-sm-1 mb-sm-6 p-10 p-sm-0">
            <a href="#" class="card p-5 p-sm-3">
              <div class="card-pic col-sm-2 mr-sm-3 bg-SITCON" />
              <p class="card-title col-sm-2 fz-5 fz-pad-6">
                SITCON
              </p>
            </a>
          </div>
          <div class="col-3 col-pad-2 col-sm-1 mb-sm-6 p-10 p-sm-0">
            <a href="#" class="card p-5 p-sm-3">
              <div class="card-pic col-sm-2 mr-sm-3 bg-Vue" />
              <p class="card-title col-sm-2 fz-5 fz-pad-6">
                Vue.js 台灣
              </p>
            </a>
          </div>
        </div>
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
export default {
  name: 'Community',
  data () {
    return {
      innerWidth: null,
      group: null,
      groupExpand: false,
      groupChange: false,
      volunteerList: [],
      volunteerData: []
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
    }
  }
}
</script>
<style lang="scss" src='./style.scss' scoped></style>
