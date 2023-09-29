import Head from "../../helper/Helmet";
import Hero from "../../components/Layout/Hero";
import ticketHeroContent from "../../data/HeroContent/ticketHeroData";
import TicketIntro from "./TicketIntro";
import { Fragment } from "react";
import ComingSoon from "./ComingSoon";

const TicketPage = () => {
  return (
    <Fragment>
      <Head title="票種介紹" page="ticket"></Head>
      <Hero {...ticketHeroContent} />
      <TicketIntro />
      <ComingSoon />
    </Fragment>
  );
};

export default TicketPage;
