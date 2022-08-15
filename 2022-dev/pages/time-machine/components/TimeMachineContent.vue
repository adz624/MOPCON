<template>
  <div>
    <div class="content">
      <h1>{{ year }}</h1>
      <h2>{{ title }}</h2>
      <p>{{ subtitle }}</p>
      <p class="text">{{ text }}</p>
    </div>

    <div class="button-area">
      <div v-if="album.length" ref="dropdownWrapper" class="mr-10 mr-md-4 mr-pad-2 mr-sm-0 mb-sm-6">
        <div @click="toggleDropdown" class="btn">
          <client-only><span class="iconify" data-icon="ep:arrow-down-bold" /></client-only>
          活動花絮
        </div>
        <div ref="dropdown" class="dropdown">
          <ul>
            <li v-for="data in album" :key="data.title" >
              <a @click="hideDropdown" :href="data.link" target="_blank">{{ data.title }}</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="btn btn-primary" @click="openWindow(websiteLink)">
        <client-only><span class="iconify" data-icon="fluent:cursor-click-24-filled" /></client-only>
        進入網站
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TimeMachineContent',
  props: {
    year: {
      type: Number,
      required: true
    },
    title: {
      type: String,
      required: true
    },
    subtitle: {
      type: String,
      required: true
    },
    text: {
      type: String,
      required: true
    },
    album: {
      type: Array,
      required: true
    },
    websiteLink: {
      type: String,
      required: true
    }
  },
  mounted () {
    window.addEventListener('click', this.clickEvent)
  },
  unmounted () {
    window.removeEventListener('click', this.clickEvent)
  },
  methods: {
    openWindow (url) {
      window.open(url)
    },
    hideDropdown () {
      const dropdown = this.$refs.dropdown
      dropdown.classList.remove('active')
    },
    toggleDropdown () {
      const dropdown = this.$refs.dropdown
      const isShowDropdown = dropdown.classList.contains('active')

      if (isShowDropdown) {
        return dropdown.classList.remove('active')
      }
      return dropdown.classList.add('active')
    },
    clickEvent (e) {
      const dropdownWrapper = this.$refs.dropdownWrapper
      const dropdown = this.$refs.dropdown

      if (!dropdownWrapper || !dropdown) {
        return
      }

      if (!dropdownWrapper.contains(e.target) && !dropdown?.classList?.contains('hidden')) {
        dropdown.classList.remove('active')
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.content {
  @include flex(normal, column, normal);

  & * {
    margin: 0;
  }

  h1 {
    font-size: 60px;
    font-weight: 700;
    line-height: 72px;
    margin-bottom: 16px;
  }

  h2 {
    font-size: 40px;
    font-weight: 700;
    line-height: 48px;
    margin-bottom: 16px;

    @media (max-width: 640px) {
      font-size: 32px;
    }
  }

  p {
    color: $colorBlueLight;
  }

  .text {
    min-height: 200px;
    margin-bottom: 14px;

    @include screen(md) {
      min-height: 240px;
    }

    @media (max-width: 640px) {
      font-size: 16px;
    }
  }
}

.button-area {
  @include flex(flex-end);
  .btn svg {
    font-size: 20px;
    top: 4px;
  }

  .dropdown {
    width: 100%;
    left: 0;
    position: absolute;
    border: #0074A2 solid 2px;
    border-radius: 2rem;
    background-color: white;
    z-index: 10;
    display: none;

    &.active {
      display: block;
    }

    ul {
      @include flex(normal, column, center);
      padding-left: 0;
      list-style: none;
      li {
        a {
          font-size: 1.25rem;
          color: $colorPrimary;
          &:hover {
            color: $colorPrimaryLight;
          }
        }
        & + li {
          margin-top: 0.5rem;
        }
      }
    }
  }
}

</style>
