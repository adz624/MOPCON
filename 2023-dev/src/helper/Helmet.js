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
        content={process.env.PUBLIC_URL + "/assets/images/Home/MOPCON-OG.jpg"}
      />
    </Helmet>
  );
}

export default Head;
