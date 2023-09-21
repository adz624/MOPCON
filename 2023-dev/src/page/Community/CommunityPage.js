import Hero from "../../components/Layout/Hero";
import { Fragment, useState } from "react";
import Card from "./Card";
import TabBtn from "../../components/Tab/TabBtn";
import Behaviour from "./Behaviour";
import communityContent from "../../data/hostCommunity/communityData.json";
import teamContent from "../../data/hostCommunity/teamData";
import communityHeroContent from "../../data/HeroContent/CommunityHeroData";
import { v4 as uuidv4 } from "uuid";
import { ReactComponent as FBIcon } from "../../components/asset/Icon/FB.svg";

const tab = [
  { text: "主辦團隊", type: "team", key: uuidv4(), page: "host" },
  { text: "參與社群", type: "community", key: uuidv4(), page: "host" },
];

// 初始 type 設定為 team
const HostCommunityPage = () => {
  const [selectedTab, setSelectedTab] = useState("team");

  // 取得對應的 type
  const handleTabClick = (tab) => {
    setSelectedTab(tab.type);
  };
  // 透過點擊 tab 傳遞相對應的資料進去 Card 裡面
  const contentData = selectedTab === "team" ? teamContent : communityContent;
  return (
    <Fragment>
      <Hero {...communityHeroContent} btnIcon={<FBIcon />} />

      <TabBtn tab={tab} selectedTab={selectedTab} onTabClick={handleTabClick} />
      {contentData.map((card) => (
        <Card {...card} selectedTab={selectedTab} />
      ))}

      <Behaviour />
    </Fragment>
  );
};

export default HostCommunityPage;
