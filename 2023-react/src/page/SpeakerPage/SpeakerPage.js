import React, { Fragment, useState } from "react";
import Hero from "../../components/Layout/Hero";
import TabBtn from "../../components/Tab/TabBtn";
import SpeakerCard from "./SpeakerCard";
import SpeakerModal from "./Modal/SpeakerModal";
import speakerHeroContent from "../../data/HeroContent/speakerHeroData";
import ScheduleTab from "../../data/ScheduleTab";
import SpeakerContent from "../../data/Speaker/SpeakerContent.json";

const SpeakerPage = () => {
  const [selectedTab, setSelectedTab] = useState([]);
  const [openModal, setOpenModal] = useState(false);
  const [selectedSpeaker, setSelectedSpeaker] = useState(null);

  // 選取tab
  const handleTabClick = (tab) => {
    if (selectedTab.includes(tab.type)) {
      setSelectedTab((prevSelected) =>
        prevSelected.filter((s) => s !== tab.type)
      );
    } else {
      setSelectedTab((prevSelected) => [...prevSelected, tab.type]);
    }
  };

  // 點擊tab時篩選出對應hashTag的資料
  const filteredSpeakerContent = SpeakerContent.filter((speaker) => {
    if (selectedTab.length === 0) {
      // 如果沒選tab則傳入所有資料
      return SpeakerContent;
    } else {
      return selectedTab.some((tag) => speaker.hashTag.includes(tag));
    }
  });

  // 打開 modal 時取消背景滾動，取得對應的speaker資料
  const showModalHandle = (speaker) => {
    setSelectedSpeaker(speaker);
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
        <SpeakerModal speaker={selectedSpeaker} onClose={hideModalHandle} />
      )}
      <Hero {...speakerHeroContent} />
      <h2>講者陣容</h2>
      <TabBtn
        tab={ScheduleTab}
        selectedTab={selectedTab}
        onTabClick={handleTabClick}
      />
      <SpeakerCard
        SpeakerContent={filteredSpeakerContent}
        onOpenModal={showModalHandle}
      />
    </Fragment>
  );
};

export default SpeakerPage;
