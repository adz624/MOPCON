import { Fragment } from "react";
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
      <Hero {...homeHeroContent} btnIcon={<ExternalIcon />} />
      <Introduce />
      <Core />
      <TrafficInformation />
      <VenueMap />
      {/* <SponsorArea /> */}
    </Fragment>
  );
};
export default HomePage;
