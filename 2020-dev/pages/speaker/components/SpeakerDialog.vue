<template>
  <Dialog
    v-if="speakerInfo"
    :visible="visible"
    @close="$emit('update:visible', false)"
    @click.native="btnListShow && (btnListShow = false)"
  >
    <div slot="body">
      <section class="info">
        <div class="img-wrap">
          <img :src="speakerInfo.img.web">
        </div>
        <div>
          <h3>{{ speakerInfo.name }}</h3>
          <p>{{ speakerInfo.company }}</p>
          <p>{{ speakerInfo.job_title }}</p>
        </div>
      </section>

      <ul class="contact">
        <li v-if="speakerInfo.link_fb">
          <a target="_blank" :href="speakerInfo.link_fb" class="logo logo-fb" />
        </li>
        <li v-if="speakerInfo.link_twitter">
          <a target="_blank" :href="speakerInfo.link_twitter" class="logo logo-twitter" />
        </li>
        <li v-if="speakerInfo.link_github">
          <a target="_blank" :href="speakerInfo.link_github" class="logo logo-git" />
        </li>
        <li v-if="speakerInfo.link_other">
          <a target="_blank" :href="speakerInfo.link_other" class="logo logo-web" />
        </li>
      </ul>

      <section class="about">
        <h2>介紹</h2>
        <p>{{ speakerInfo.bio }}</p>
      </section>

      <section class="topic">
        <h2>
          議程主題
          <ul class="tags-wrap">
            <li v-for="(tag, index) in speakerInfo.tags" :key="`tag-${index}`">
              <button class="btn-tag btn-tag-outline">
                {{ tag.name }}
              </button>
            </li>
          </ul>
        </h2>
        <h3>{{ speakerInfo.topic }}</h3>
        <div class="topic-info">
          <p v-if="speakerInfo.started_at !== ''">
            <span class="logo logo-calendar" />
            {{ $moment(speakerInfo.started_at).format('MM/DD HH:mm') }}
            ~
            {{ $moment(speakerInfo.end_at).format('HH:mm') }}
          </p>
          <p v-if="speakerInfo.floor !== ''">
            <span class="logo logo-location" />
            {{ speakerInfo.room }}({{ speakerInfo.floor }})
          </p>
        </div>
        <p v-html="parseSummary(speakerInfo.summary)" />
      </section>

      <!-- <section class="sponser">
        <h2>贊助廠商</h2>
        <img class="logo logo-kkbox">
      </section> -->
    </div>
    <div slot="footer">
      <button class="btn-share" @click.stop="btnListShow = !btnListShow">
        <span class="logo logo-share" />
        分享議程
      </button>
      <transition name="list-fade" mode="out-in">
        <ul v-if="btnListShow" class="share-list">
          <li>
            <client-only>
              <ShareNetwork
                :url="shareUrl"
                :title="`${speakerInfo.name} | 講者 MOPCON 2020`"
                :description="speakerInfo.summary"
                :quote="`${speakerInfo.name} | 講者 MOPCON 2020`"
                hashtags="MOPCON"
                network="facebook"
              >
                分享 Facebook
              </ShareNetwork>
            </client-only>
          </li>
          <li>
            <client-only>
              <ShareNetwork
                :url="shareUrl"
                :title="`${speakerInfo.name} | 講者 MOPCON 2020`"
                :description="speakerInfo.summary"
                :quote="`${speakerInfo.name} | 講者 MOPCON 2020`"
                hashtags="MOPCON"
                network="twitter"
              >
                分享 Twitter
              </ShareNetwork>
            </client-only>
          </li>
          <li @click="copylink">
            複製講者連結
          </li>
        </ul>
        <p v-if="copySuccess" class="copy-success">
          連結複製成功！
        </p>
      </transition>
    </div>
  </Dialog>
</template>

<script>
import Dialog from '@/components/Dialog'

export default {
  name: 'SpeakerDialog',
  components: {
    Dialog
  },
  props: {
    visible: {
      type: Boolean,
      default: false
    },
    speakerInfo: {
      type: [Object, undefined],
      default: () => {}
    }
  },
  data () {
    return {
      btnListShow: false,
      copySuccess: false
    }
  },
  computed: {
    shareUrl () {
      return `${window.location.origin}/2020/speaker/${this.speakerInfo.speaker_id}`
    }
  },
  methods: {
    copylink () {
      navigator.clipboard.writeText(this.shareUrl).then(() => {
        this.copySuccess = true
        setTimeout(() => {
          this.copySuccess = false
        }, 1000)
      }).catch(() => {})
    },
    parseSummary (summary) {
      return summary.replace(/\n/gi, '<br>')
    }
  }
}
</script>

<style lang="scss" scoped>
// logo
@import '~@/assets/styles/_mix';
$logo_map: (
  png: fb git twitter web,
  svg: calendar location share,
);
@include logo_map_mix(speaker);

h2 {
  @apply text-lg pl-4 relative mt-5;
  &::before {
    content: '\\\\';
    left: -5px;
    @apply absolute text-yellow-500 text-lg font-medium;
  }
}
p {
  @apply mt-3 text-gray-400;
}
.logo-kkbox {
  width: 72px;
  height: 72px;
  @apply bg-purple-300 mt-4;
}
.logo {
  @apply inline-block;
}

::v-deep .dialog {
  width: 90%;
  @screen md {
    width: 50%;
  }
}

// section
.info {
  @apply flex items-center flex-col text-center;
  .img-wrap {
    width: 115px;
    height: 115px;
    border-radius: 16px;
    transform: rotate(45deg);
    flex-shrink: 0;
    @apply border border-white mb-20 overflow-hidden;
  }
  img {
    object-fit: cover;
    transform: rotate(-45deg) scale(1.3);
  }
  h3 {
    @apply text-xl mb-3;
  }
  p {
    width: 80%;
    @apply inline-block mt-0 text-gray-400;
  }
  @screen md {
    @apply flex-row text-left;
    .img-wrap {
      @apply mr-16 ml-5 mb-0;
    }
  }
}

.contact {
  top: 215px;
  @apply flex absolute w-full justify-center left-0;
  li {
    @apply mx-2;
  }
  a {
    width: 24px;
    height: 24px;
  }
  @screen md {
    @apply mt-8 static w-auto justify-start;
    li {
      @apply mr-4
    }
  }
}

.topic {
  h2 {
    @apply flex items-center mt-8;
    .btn-tag-outline {
      @apply text-sm text-purple-400;
    }
  }
  .tags-wrap {
    @apply flex ml-4;
    li {
      @apply mr-2;
    }
  }
  h3 {
    letter-spacing: .5px;
    @apply text-2xl mt-3 font-bold;
  }
  &-info {
    @apply flex;
    p {
      @apply mr-4 mt-2;
    }
    .logo {
      height: 18px;
      width: 16px;
      transform: translateY(3px);
      @apply mr-1;
    }
  }
  @screen md {
    .tags-wrap {
      li {
        @apply mr-4;
      }
    }
  }
}

::v-deep .dialog-footer {
  @apply relative;
}
.share-list {
  bottom: -110px;
  border-radius: 4px;
  @apply py-2 right-0 absolute bg-blue-800 text-gray-400;
  li {
    @apply px-4 py-2 bg-blue-800;
    &:hover {
      filter: brightness(130%);
    }
  }
}
.btn-share {
  border-radius: 8px;
  @apply bg-yellow-500 py-3 w-full mt-8 text-blue-950 text-lg outline-none;
  .logo {
    width: 18px;
    height: 20px;
    transform: translateY(4px);
    @apply mr-1;
  }
  &:hover {
    opacity: .9;
  }
}
.copy-success {
  top: -10px;
  @apply absolute inset-x-0 text-center text-sm;
}

.list-fade-enter-active, .list-fade-leave-active {
  transition: opacity .3s;
}
.list-fade-enter, .list-fade-leave-to {
  opacity: 0;
}
</style>
