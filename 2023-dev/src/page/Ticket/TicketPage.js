import Hero from "../../components/Layout/Hero";
import ticketHeroContent from "../../data/HeroContent/ticketHeroData";
import { Fragment } from "react";
import ComingSoon from "./ComingSoon";

const TicketPage = () => {
  return (
    <Fragment>
      <Hero {...ticketHeroContent} />
      <ComingSoon />
    </Fragment>
  );
};

export default TicketPage;
