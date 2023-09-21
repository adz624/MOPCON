import Hero from "../../components/Layout/Hero";
import { ReactComponent as SmileIcon } from "../../components/asset/Icon/smile.svg";
import { Fragment } from "react";
import sponsorHeroContent from "../../data/HeroContent/sponsorHeroData.json";
import RewardSection from "./RewardSection";
import JoinSection from "./JoinSection";
import SponsorArea from "./SponsorArea";

const SponsorPage = () => {
  return (
    <Fragment>
      <Hero {...sponsorHeroContent} btnIcon={<SmileIcon />} />
      <SponsorArea />
      <RewardSection />
      <JoinSection />
    </Fragment>
  );
};

export default SponsorPage;
