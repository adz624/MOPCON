const path = require('path')
require('dotenv').config()

module.exports = {
  mode: 'universal',
  /*
  ** Headers of the page
  */
  head: {
    htmlAttrs: {
      lang: 'zh-Hant'
    },
    title: '行動科技年會 2020 | Mobile / Open / Platform Conference',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0' },
      { 'http-equiv': 'X-UA-Compatible', content: 'ie=edge' },
      { hid: 'description', name: 'description', content: 'MOPCON 2020 堅持濁水溪以南，南台灣最大行動科技年會，10/24 -10/25 高雄國際會議中心與您見面。持續匯集知識與人才，打造高速資訊交流圈，提升個人與團隊價值，讓知識影響正向循環。' },
      // fb seo
      {
        hid: 'og-title',
        property: 'og:title',
        content: '行動科技年會 2020 | Mobile / Open / Platform Conference'
      },
      {
        hid: 'og-description',
        property: 'og:description',
        content:
          'MOPCON 2020 堅持濁水溪以南，南台灣最大行動科技年會，10/24 -10/25 高雄國際會議中心與您見面。持續匯集知識與人才，打造高速資訊交流圈，提升個人與團隊價值，讓知識影響正向循環。'
      },
      { hid: 'og-type', property: 'og:type', content: 'website' },
      {
        hid: 'og-site_name',
        property: 'og:site_name',
        content: '行動科技年會 2020 | Mobile / Open / Platform Conference'
      },
      {
        hid: 'og-url',
        property: 'og:url',
        content: 'https://mopcon.org/2020/'
      },
      {
        hid: 'og-image',
        property: 'og:image',
        content: '/2020/og-image.png'
      },
      { hid: 'og-locale', property: 'og:locale', content: 'zh_tw' },
      // twitter seo
      { hid: 'twitter-card', name: 'twitter:card', content: 'app' },
      {
        hid: 'twitter-site',
        name: 'twitter:site',
        content: '行動科技年會 2020 | Mobile / Open / Platform Conference'
      },
      {
        hid: 'twitter-description',
        name: 'twitter:description',
        content:
          'MOPCON 2020 堅持濁水溪以南，南台灣最大行動科技年會，10/24 -10/25 高雄國際會議中心與您見面。持續匯集知識與人才，打造高速資訊交流圈，提升個人與團隊價值，讓知識影響正向循環。'
      },
      {
        hid: 'twitter-app:name:iphone',
        name: 'twitter:app:name:iphone',
        content: '行動科技年會 2020 | Mobile / Open / Platform Conference'
      },
      {
        hid: 'twitter-app:name:ipad',
        name: 'twitter:app:name:ipad',
        content: '行動科技年會 2020 | Mobile / Open / Platform Conference'
      }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/2020/favicon.ico' },
      { rel: 'stylesheet', href: 'https://fonts.googleapis.com/icon?family=Material+Icons' }
    ]
  },
  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },
  /*
  ** Global CSS
  */
  css: [
    '~assets/styles/all.scss'
  ],
  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    { src: '~/plugins/vue-awesom-swiper', ssr: false },
    { src: '~/plugins/route' }
  ],
  /*
  ** Nuxt.js dev-modules
  */
  buildModules: [
    // Doc: https://github.com/nuxt-community/eslint-module
    '@nuxtjs/eslint-module',
    '@nuxtjs/style-resources',
    '@nuxtjs/tailwindcss'
  ],
  styleResources: {
    scss: ['./assets/styles/variables.scss']
  },
  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    '@nuxtjs/pwa',
    // Doc: https://github.com/nuxt-community/dotenv-module
    '@nuxtjs/dotenv',
    '@nuxtjs/proxy'
  ],
  env: {
    BASE_URL: process.env.BASE_URL || 'http://localhost:3000',
    routeSpeaker: process.env.SPEAKER !== 'false',
    routeSchedule: process.env.SCHEDULE !== 'false',
    routeScheduleUnconf: process.env.SCHEDULE_UNCONF !== 'false',
    routeSponsor: process.env.SPONSOR !== 'false',
    routeCommunity: process.env.COMMUNITY !== 'false',
    routeTicket: process.env.TICKET !== 'false',
    routeNote: process.env.NOTE !== 'false',
    buyTicketUrl: ''
  },
  /*
  ** Axios module configuration
  ** See https://axios.nuxtjs.org/options
  */
  axios: {
    baseURL: `${process.env.PROXY_URL}${process.env.BASE_URL}`
  },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    extend (config, ctx) {
    // Run ESLint on save
      if (ctx.isDev && ctx.isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    }
  },
  router: {
    // base: '/2020/',
    base: path.resolve(__dirname, '/2020/')
  },
  generate: {
    dir: path.resolve(__dirname, '../2020/')
  }
}
