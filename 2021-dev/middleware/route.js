export default function ({ route, redirect, env }) {
  const routeMap = Object.entries(env).filter(([key, value]) => key.includes('route'))
  const name = route.path.replace(/\//g, '')

  let valid = routeMap.every(([key, value]) => key.endsWith(name) ? value : true)
  if (name === '') {
    valid = true
  } else if (!valid) {
    redirect('/')
  }
}
