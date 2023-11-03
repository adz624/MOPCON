import { Fragment, useState } from "react";
import SponsorSection from "./SponsorSection";
// Icon
import { ReactComponent as GalaxyIcon } from "../../components/asset/sponsorIcon/galaxy.svg";
import { ReactComponent as PlanetIcon } from "../../components/asset/sponsorIcon/planet.svg";
import { ReactComponent as CometIcon } from "../../components/asset/sponsorIcon/comet.svg";
import { ReactComponent as EducationIcon } from "../../components/asset/sponsorIcon/cil_education.svg";
//Sponsor
import SponsorData from "../../data/Sponsor/Sponsor.json";
//Modal
import SponsorModal from "./Modal/SponsorModal";

const SponsorArea = () => {
  const [openModal, setOpenModal] = useState(false);
  const [selectedCard, setSelectedCard] = useState(null);

  const openModalHandle = (card) => {
    setSelectedCard(card);
    setOpenModal(true);
    document.body.style.overflow = "hidden";
  };

  const hideModalHandle = () => {
    setOpenModal(false);
    document.body.style.overflow = "auto";
  };
  const galaxy = SponsorData.Galaxy;
  const comet = SponsorData.Comet;
  const planet = SponsorData.Planet;
  const Education = SponsorData.Education;

  return (
    <Fragment>
      {openModal && (
        <SponsorModal selectedCard={selectedCard} onClose={hideModalHandle} />
      )}
      <h2>我們的夥伴們</h2>
      <SponsorSection
        Icon={<GalaxyIcon />}
        Content={galaxy}
        Level="銀河級"
        onCardClick={openModalHandle}
      />
      <SponsorSection
        Icon={<PlanetIcon />}
        Content={planet}
        Level="行星級"
        onCardClick={openModalHandle}
      />
      <SponsorSection
        Icon={<CometIcon />}
        Content={comet}
        Level="彗星級"
        onCardClick={openModalHandle}
      />
      <SponsorSection
        Icon={<EducationIcon />}
        Content={Education}
        Level="教育贊助"
        onCardClick={openModalHandle}
      />
      {/* <SponsorSection
        Icon={<ThanksIcon />}
        Content={SpecialThanksSponsor}
        Level="特別感謝"
        onCardClick={openModalHandle}
      /> */}
    </Fragment>
  );
};

export default SponsorArea;
