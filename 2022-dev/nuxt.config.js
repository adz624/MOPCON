// import { Icon } from '@iconify/vue'

const path = require('path')
require('dotenv').config()

export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: '行動科技年會 2022 | Mobile / Open / Platform Conference',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/2022/favicon.ico' },
      { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css2?family=Material+Icons' }
    ],
    script: [
      {
        src: 'https://code.iconify.design/2/2.0.4/iconify.min.js'
      }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    '@/assets/styles/all.scss'
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    { src: '~/plugins/font-awesome' }
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
    '@nuxtjs/pwa',
    // 全域 sass 變數設定
    '@nuxtjs/style-resources',
    '@nuxtjs/i18n',
    'nuxt-fontawesome'
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
      '@/assets/styles/_variables.scss',
      '@/assets/styles/_mixin.scss'
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
    BASE_URL: process.env.BASE_URL || 'http://localhost:3000',
    route_speaker: process.env.SPEAKER !== 'false',
    route_schedule: process.env.SCHEDULE !== 'false',
    route_schedule_unconf: process.env.SCHEDULE_UNCONF !== 'false',
    route_sponsor: process.env.SPONSOR !== 'false',
    route_community: process.env.COMMUNITY !== 'false',
    route_ticket: process.env.TICKET !== 'false',
    route_guide: process.env.GUIDE !== 'false'
  },

  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {
    // Workaround to avoid enforcing hard-coded localhost:3000: https://github.com/nuxt-community/axios-module/issues/308
    baseURL: `${process.env.PROXY_URL}${process.env.BASE_URL}`
  },

  router: {
    base: path.resolve(__dirname, '/2022/'),
    middleware: 'route'
  },

  generate: {
    dir: path.resolve(__dirname, '../2022/')

  },

  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    manifest: {
      lang: 'en'
    }
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
