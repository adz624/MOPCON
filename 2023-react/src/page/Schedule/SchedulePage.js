import Hero from "../../components/Layout/Hero";
import React, { Fragment, useState } from "react";
import TabBtn from "../../components/Tab/TabBtn";
import ScheduleTab from "../../data/ScheduleTab";
import ScheduleData from "../../data/HeroContent/ScheduleData.json";
import DateTab from "../../components/Tab/DateTab";
import ScheduleCard from "./ScheduleCard";
import ScheduleDayOne from "../../data/Schedule/ScheduleDayOne.json";
import ScheduleDayTwo from "../../data/Schedule/ScheduleDayTwo.json";

const SchedulePage = () => {
  const [selectedTab, setSelectedTab] = useState([]);
  const [selectedDate, setSelectedDate] = useState("Day1");

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

  // 點擊tab取得相對應的日期
  const handleDateClick = (date) => {
    setSelectedDate(date);
  };

  // 透過日期取得對應的資料傳入Card
  const contentData = selectedDate === "Day1" ? ScheduleDayOne : ScheduleDayTwo;

  const filteredAgendas = contentData.map((timeSlot) => {
    if (selectedTab.length === 0) {
      // 如果沒選tab則傳入所有資料
      return {
        ...timeSlot,
        agenda: timeSlot.agenda,
      };
    } else {
      // 選擇的tab篩選資料
      return {
        ...timeSlot,
        agenda: timeSlot.agenda.filter((item) =>
          selectedTab.some((tab) => item.tab.includes(tab))
        ),
      };
    }
  });

  return (
    <Fragment>
      <Hero {...ScheduleData} />
      <TabBtn
        tab={ScheduleTab}
        selectedTab={selectedTab}
        onTabClick={handleTabClick}
      />
      <DateTab selectedDate={selectedDate} onDateClick={handleDateClick} />
      <ScheduleCard scheduleData={filteredAgendas} />
    </Fragment>
  );
};

export default SchedulePage;
