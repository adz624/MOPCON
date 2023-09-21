import { Fragment, useState } from "react";
import SponsorSection from "./SponsorSection";
// Icon
import { ReactComponent as UniverseIcon } from "../../components/asset/sponsorIcon/universe.svg";
import { ReactComponent as GalaxyIcon } from "../../components/asset/sponsorIcon/galaxy.svg";
import { ReactComponent as PlanetIcon } from "../../components/asset/sponsorIcon/planet.svg";
import { ReactComponent as CometIcon } from "../../components/asset/sponsorIcon/comet.svg";
import { ReactComponent as EducationIcon } from "../../components/asset/sponsorIcon/cil_education.svg";
import { ReactComponent as ThanksIcon } from "../../components/asset/sponsorIcon/ph_hand-heart-thin.svg";
//Sponsor
import UniverseSponsor from "../../data/Sponsor/UniverseSponsor.json";
import GalaxySponsor from "../../data/Sponsor/GalaxySponosr.json";
import PlanetSponsor from "../../data/Sponsor/PlanetSponsor.json";
import CometSponsor from "../../data/Sponsor/CometSponsor.json";
import EducationSponsor from "../../data/Sponsor/EducationSponsor.json";
import SpecialThanksSponsor from "../../data/Sponsor/SpecialThanksSponsor.json";
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

  return (
    <Fragment>
      {openModal && (
        <SponsorModal selectedCard={selectedCard} onClose={hideModalHandle} />
      )}
      <h2>我們的夥伴們</h2>
      <SponsorSection
        Icon={<UniverseIcon />}
        Content={UniverseSponsor}
        Level="宇宙級"
        onCardClick={openModalHandle}
      />
      <SponsorSection
        Icon={<GalaxyIcon />}
        Content={GalaxySponsor}
        Level="銀河級"
        onCardClick={openModalHandle}
      />
      <SponsorSection
        Icon={<PlanetIcon />}
        Content={PlanetSponsor}
        Level="行星級"
        onCardClick={openModalHandle}
      />
      <SponsorSection
        Icon={<CometIcon />}
        Content={CometSponsor}
        Level="彗星級"
        onCardClick={openModalHandle}
      />
      <SponsorSection
        Icon={<EducationIcon />}
        Content={EducationSponsor}
        Level="教育贊助"
        onCardClick={openModalHandle}
      />
      <SponsorSection
        Icon={<ThanksIcon />}
        Content={SpecialThanksSponsor}
        Level="特別感謝"
        onCardClick={openModalHandle}
      />
    </Fragment>
  );
};

export default SponsorArea;
