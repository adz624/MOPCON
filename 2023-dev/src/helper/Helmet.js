import { Helmet } from "react-helmet";

function Head({ title, page }) {
  return (
    <Helmet>
      <title>{title} | MOPCON 2023</title>
      <meta
        name="description"
        content="MOPCON 2023，堅持在濁水溪以南的行動科技年會。今年以「Implementation & Crossover」為主題，深入探討前沿技術的實際應用與跨界整合，從 AI 到跨平台、行動應用到雲服務，讓我們一起揮灑創意，共同塑造科技未來的精彩！"
      />
      <link rel="canonical" href={`https://mopcon.org/2023/#/${page}`} />
      <meta property="og:title" content={title} />
      <meta
        property="og:description"
        content="MOPCON 2023，堅持在濁水溪以南的行動科技年會。今年以「Implementation & Crossover」為主題，深入探討前沿技術的實際應用與跨界整合，從 AI 到跨平台、行動應用到雲服務，讓我們一起揮灑創意，共同塑造科技未來的精彩！"
      />
      <meta
        property="og:image"
        content={process.env.PUBLIC_URL + "/assets/images/MOPCON-OG.jpg"}
      />
      <meta
        data-n-head="ssr"
        data-hid="description"
        name="description"
        content="MOPCON 2023，堅持在濁水溪以南的行動科技年會。今年以「Implementation & Crossover」為主題，深入探討前沿技術的實際應用與跨界整合，從 AI 到跨平台、行動應用到雲服務，讓我們一起揮灑創意，共同塑造科技未來的精彩！"
      />
      <meta
        data-n-head="ssr"
        data-hid="og-title"
        property="og:title"
        content="行動科技年會 2023 | Mobile / Open / Platform Conference"
      />
      <meta
        data-n-head="ssr"
        data-hid="og-description"
        property="og:description"
        content="MOPCON 2023，堅持在濁水溪以南的行動科技年會。今年以「Implementation & Crossover」為主題，深入探討前沿技術的實際應用與跨界整合，從 AI 到跨平台、行動應用到雲服務，讓我們一起揮灑創意，共同塑造科技未來的精彩！"
      />
      <meta
        data-n-head="ssr"
        data-hid="og-type"
        property="og:type"
        content="website"
      />
      <meta
        data-n-head="ssr"
        data-hid="og-site_name"
        property="og:site_name"
        content="行動科技年會 2023 | Mobile / Open / Platform Conference"
      />
      <meta
        data-n-head="ssr"
        data-hid="og-url"
        property="og:url"
        content="https://mopcon.org/2023/"
      />
      <meta
        data-n-head="ssr"
        data-hid="og-image"
        property="og:image"
        content="/2023/assets/images/MOPCON-OG.jpg"
      />
      <meta
        data-n-head="ssr"
        data-hid="og-locale"
        property="og:locale"
        content="zh_tw"
      />
      <meta
        data-n-head="ssr"
        data-hid="twitter-card"
        name="twitter:card"
        content="app"
      />
      <meta
        data-n-head="ssr"
        data-hid="twitter-site"
        name="twitter:site"
        content="行動科技年會 2023 | Mobile / Open / Platform Conference"
      />
      <meta
        data-n-head="ssr"
        data-hid="twitter-description"
        name="twitter:description"
        content="MOPCON 2023，堅持在濁水溪以南的行動科技年會。今年以「Implementation & Crossover」為主題，深入探討前沿技術的實際應用與跨界整合，從 AI 到跨平台、行動應用到雲服務，讓我們一起揮灑創意，共同塑造科技未來的精彩！"
      />
      <meta
        data-n-head="ssr"
        data-hid="twitter-app:name:iphone"
        name="twitter:app:name:iphone"
        content="行動科技年會 2023 | Mobile / Open / Platform Conference"
      />
      <meta
        data-n-head="ssr"
        data-hid="twitter-app:name:ipad"
        name="twitter:app:name:ipad"
        content="行動科技年會 2023 | Mobile / Open / Platform Conference"
      />
      <meta
        data-n-head="ssr"
        data-hid="apple-mobile-web-app-title"
        name="apple-mobile-web-app-title"
        content="行動科技年會 2023 | Mobile / Open / Platform Conference"
      />
      <meta
        data-n-head="ssr"
        data-hid="og:title"
        name="og:title"
        content="行動科技年會 2023 | Mobile / Open / Platform Conference"
      />
      <meta
        data-n-head="ssr"
        data-hid="og:site_name"
        name="og:site_name"
        content="行動科技年會 2023 | Mobile / Open / Platform Conference"
      />
      <meta data-n-head="ssr" data-hid="charset" charset="utf-8" />
      <meta
        data-n-head="ssr"
        data-hid="mobile-web-app-capable"
        name="mobile-web-app-capable"
        content="yes"
      />
      <meta
        data-n-head="ssr"
        data-hid="og:type"
        name="og:type"
        property="og:type"
        content="website"
      />
      <base href="/2023/" />
    </Helmet>
  );
}

export default Head;
