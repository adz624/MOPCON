const path = require('path')
require('dotenv').config()

module.exports = {
  // Target: https://go.nuxtjs.dev/config-target
  target: 'static',

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    htmlAttrs: {
      lang: 'zh-Hant'
    },
    title: '行動科技年會 2021 | Mobile / Open / Platform Conference',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0' },
      { hid: 'description', name: 'description', content: 'MOPCON 2021 堅持濁水溪以南，南台灣最大行動科技年會，為了更安全的交流，今年我們將實體大會改以「預錄議程＋直播交流互動」形式呈現，保留多元議程的大會精神，影響力將更不受時空所限！' },
      // fb seo
      {
        hid: 'og-title',
        property: 'og:title',
        content: '行動科技年會 2021 | Mobile / Open / Platform Conference'
      },
      {
        hid: 'og-description',
        property: 'og:description',
        content:
          'MOPCON 2021 堅持濁水溪以南，南台灣最大行動科技年會，為了更安全的交流，今年我們將實體大會改以「預錄議程＋直播交流互動」形式呈現，保留多元議程的大會精神，影響力將更不受時空所限！'
      },
      { hid: 'og-type', property: 'og:type', content: 'website' },
      {
        hid: 'og-site_name',
        property: 'og:site_name',
        content: '行動科技年會 2021 | Mobile / Open / Platform Conference'
      },
      {
        hid: 'og-url',
        property: 'og:url',
        content: 'https://mopcon.org/2021/'
      },
      {
        hid: 'og-image',
        property: 'og:image',
        content: '/2021/og-image.png'
      },
      { hid: 'og-locale', property: 'og:locale', content: 'zh_tw' },
      // twitter seo
      { hid: 'twitter-card', name: 'twitter:card', content: 'app' },
      {
        hid: 'twitter-site',
        name: 'twitter:site',
        content: '行動科技年會 2021 | Mobile / Open / Platform Conference'
      },
      {
        hid: 'twitter-description',
        name: 'twitter:description',
        content:
          'MOPCON 2021 堅持濁水溪以南，南台灣最大行動科技年會，為了更安全的交流，今年我們將實體大會改以「預錄議程＋直播交流互動」形式呈現，保留多元議程的大會精神，影響力將更不受時空所限！'
      },
      {
        hid: 'twitter-app:name:iphone',
        name: 'twitter:app:name:iphone',
        content: '行動科技年會 2021 | Mobile / Open / Platform Conference'
      },
      {
        hid: 'twitter-app:name:ipad',
        name: 'twitter:app:name:ipad',
        content: '行動科技年會 2021 | Mobile / Open / Platform Conference'
      }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    '~assets/styles/all.scss'
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    { src: '~/plugins/font-awesome' },
    { src: '~/plugins/pixel', mode: 'client' },
    { src: '~/plugins/ga', mode: 'client' }
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/eslint
    '@nuxtjs/eslint-module',
    '@nuxtjs/svg'
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    // https://go.nuxtjs.dev/pwa
    // '@nuxtjs/pwa',
    // 全域 sass 變數設定
    '@nuxtjs/style-resources',
    'nuxt-fontawesome',
    '@nuxtjs/i18n'
  ],
  i18n: {
    locales: [
      {
        code: 'en',
        name: 'English',
        file: 'en.json'
      }, {
        code: 'zh',
        name: 'Chinese',
        file: 'zh.json'
      }
    ],
    defaultLocale: 'zh',
    langDir: 'locales/'
  },

  // 全域 sass (變數、mixin、extend... ) 檔案引入設定
  styleResources: {
    scss: [
      './assets/styles/_variables.scss',
      './assets/styles/_mixin.scss'
    ]
  },
  fontawesome: {
    // icon 的標籤使用 <fa>，這邊不設定就會依照 plugin 裡的設定<font-awesome-icon>
    component: 'fa',
    imports: [
      // 引入 fas 所有的icon
      {
        set: '@fortawesome/free-solid-svg-icons',
        icons: ['fas']
      }
    ]
  },

  env: {
    BASE_URL: process.env.BASE_URL || 'http://localhost:3000'
  },

  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {},

  router: {
    base: path.resolve(__dirname, '/2021/'),
    middleware: 'route'
  },

  generate: {
    dir: path.resolve(__dirname, '../2021/')
  },

  // PWA module configuration: https://go.nuxtjs.dev/pwa
  // pwa: {
  //   manifest: {
  //     lang: 'en'
  //   }
  // },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
