import { Fragment } from "react";
import { Helmet } from "react-helmet";
import { ReactComponent as ExternalIcon } from "../../components/asset/Icon/system-uicons_external.svg";
import Hero from "../../components/Layout/Hero";
import Introduce from "./introduce";
import Core from "./Core";
import TrafficInformation from "./TrafficInformation";
import VenueMap from "./VenueMap";
import SponsorArea from "./SponsorArea";
import homeHeroContent from "../../data/HeroContent/homeHeroData";

const HomePage = () => {
  return (
    <Fragment>
      <Helmet>
        <title>行動科技年會 2023 | Mobile / Open / Platform Conference</title>
        <link rel="canonical" href="https://mopcon.org/2023/#/home" />
        <meta
          property="og:title"
          content="行動科技年會 2023 | Mobile / Open / Platform Conference"
        />
        <meta
          property="og:description"
          content="MOPCON 2023，堅持在濁水溪以南的行動科技年會。今年以「Implementation & Crossover」為主題，深入探討前沿技術的實際應用與跨界整合，從 AI 到跨平台、行動應用到雲服務，讓我們一起揮灑創意，共同塑造科技未來的精彩！"
        />
        <meta
          property="og:image"
          content={process.env.PUBLIC_URL + "/assets/images/Home/MOPCON-OG.jpg"}
        />
      </Helmet>
      <Hero {...homeHeroContent} btnIcon={<ExternalIcon />} />
      <Introduce />
      <Core />
      <TrafficInformation />
      <VenueMap />
      <SponsorArea />
    </Fragment>
  );
};
export default HomePage;
