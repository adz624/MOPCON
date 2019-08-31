import Cookie from 'cookie';

// prettier-ignore
export default function({ isHMR, app, store, route, params, redirect }) {

  // If middleware is called from hot module replacement, ignore it
  if (isHMR) return

  app.i18n.locale = store.state.locale
}
