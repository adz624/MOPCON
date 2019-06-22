const path = require('path');

module.exports = {
  mode: 'universal',

  /*
   ** Headers of the page
   */
  head: {
    // 多語系
    htmlAttrs: {
      lang: 'zh-Hant',
    },
    title: '行動科技年會 2019 | Mobile / Open / Platform Conference',
    meta: [
      { charset: 'utf-8' },
      {
        name: 'viewport',
        content: 'width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0',
      },
      { 'http-equiv': 'X-UA-Compatible', content: 'ie=edge' },
      {
        hid: 'description',
        name: 'description',
        content: '行動科技年會 2019 | Mobile / Open / Platform Conference',
      },
      // fb seo
      {
        hid: 'og-title',
        property: 'og:title',
        content: '行動科技年會 2019 | Mobile / Open / Platform Conference',
      },
      {
        hid: 'og-description',
        property: 'og:description',
        content: '行動科技年會 2019 | Mobile / Open / Platform Conference',
      },
      { hid: 'og-type', property: 'og:type', content: 'website' },
      {
        hid: 'og-site_name',
        property: 'og:site_name',
        content: '行動科技年會 2019 | Mobile / Open / Platform Conference',
      },
      {
        hid: 'og-url',
        property: 'og:url',
        content: 'https://mopcon.org/2019/',
      },
      {
        hid: 'og-image',
        property: 'og:image',
        content: 'https://mopcon.org/2019/banner.png',
      },
      { hid: 'og-locale', property: 'og:locale', content: 'zh_tw' },
      // twitter seo
      { hid: 'twitter-card', name: 'twitter:card', content: 'app' },
      {
        hid: 'twitter-site',
        name: 'twitter:site',
        content: '行動科技年會 2019 | Mobile / Open / Platform Conference',
      },
      {
        hid: 'twitter-description',
        name: 'twitter:description',
        content: '行動科技年會 2019 | Mobile / Open / Platform Conference',
      },
      {
        hid: 'twitter-app:name:iphone',
        name: 'twitter:app:name:iphone',
        content: '行動科技年會 2019 | Mobile / Open / Platform Conference',
      },
      {
        hid: 'twitter-app:name:ipad',
        name: 'twitter:app:name:ipad',
        content: '行動科技年會 2019 | Mobile / Open / Platform Conference',
      },
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
      // 引入 google font 字體
      {
        rel: 'stylesheet',
        href: 'https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,500&display=swap&subset=chinese-traditional',
      },
      // 多語系 seo
      {
        rel: 'alternate',
        hreflang: 'z-default',
        href: 'https://mopcon.org/2019/',
      },
      {
        rel: 'alternate',
        hreflang: 'zh-Hant-TW',
        href: 'https://mopcon.org/2019/zh',
      },
      {
        rel: 'alternate',
        hreflang: 'en-us',
        href: 'https://mopcon.org/2019/en',
      },
    ],
  },

  /*
   ** Customize the progress-bar color
   */
  loading: { color: '#fff' },

  /*
   ** Global CSS
   */
  css: ['~assets/styles/normalize.css', '~assets/styles/global.scss'],

  /*
   ** Plugins to load before mounting the App
   */
  plugins: [{ src: '~/plugins/vue-gallery', ssr: false }],

  /*
   ** Nuxt.js modules
   */
  modules: [
    // Doc: https://github.com/nuxt-community/axios-module#usage
    '@nuxtjs/axios',
    'nuxt-svg-loader',
    // 全域 sass 變數設定
    '@nuxtjs/style-resources',
  ],
  // 全域 sass (變數、mixin、extend... ) 檔案引入設定
  styleResources: {
    scss: ['./assets/styles/variables.scss'],
  },
  /*
   ** Axios module configuration
   */
  axios: {
    // See https://github.com/nuxt-community/axios-module#options
  },

  /*
   ** Build configuration
   */
  build: {
    /*
     ** You can extend webpack config here
     */
    extend(config, ctx) {
      if (!ctx.isDev) {
      }
    },
  },
  router: {
    // base: '/2019/',
    base: path.resolve(__dirname, '/2019/'),
  },
  generate: {
    dir: path.resolve(__dirname, '../2019/'),
    // dir: '../2019',
  },
};
