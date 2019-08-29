import Cookie from 'cookie';

// prettier-ignore
export default function({ isHMR, app, store, route, params, error, redirect, req }) {
  let isServer = process.server
  let defaultLocale = app.i18n.fallbackLocale

  // == build generate 時要將以下先註解關閉 Start
  // 在 serve 端才重新使用 cookie 判斷是否已經選擇過語言
  // if (isServer) {
  //   const cookies = Cookie.parse(req.headers.cookie || '')
  //   if (
  //     cookies['locale'] === 'undefined' ||
  //     cookies['locale'] === undefined ||
  //     cookies['locale'] === null ||
  //     !cookies['locale']
  //   ) {
  //     // 沒有 cookie 預設語言為預設值
  //     defaultLocale = app.i18n.fallbackLocale
  //   } else {
  //     defaultLocale = cookies['locale']
  //   }
  // }
  // == build generate 時要將以上先註解關閉 End

  // If middleware is called from hot module replacement, ignore it
  if (isHMR) return
  // Get locale from params
  const locale = params.lang || defaultLocale

  // Set locale
  store.commit('setLocale', locale)

  // 過濾掉語系前綴，取得原始網址並儲存到 vuex store
  function originURL()  {
    let url = route.fullPath
    store.state.locales.forEach(item => {
      if (!route.fullPath.indexOf(`/${item}/`)) {
        url = route.fullPath.replace(`/${item}/`, '/')
      }
    })
    return url
  }
  store.commit('setOriginUrl', originURL())

  app.i18n.locale = store.state.locale
  // If route is /<defaultLocale>/... -> redirect to /...
  if (locale === defaultLocale && route.fullPath.indexOf('/' + defaultLocale) === 0) {
    const toReplace = '^/' + defaultLocale + (route.fullPath.indexOf('/' + defaultLocale + '/') === 0 ? '/' : '')
    const re = new RegExp(toReplace)
    return redirect(route.fullPath.replace(re, '/'))
  }
}
