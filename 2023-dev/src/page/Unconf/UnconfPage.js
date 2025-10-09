import Head from "../../helper/Helmet";
import Hero from "../../components/Layout/Hero";
import { Fragment, useState } from "react";
import UnconfData from "../../data/HeroContent/UnconfData.json";
import DateTab from "../../components/Tab/DateTab";
import ComAgendaCard from "./UnconfCard";
import UnconfDayOne from "../../data/Schedule/UnconfDayOne.json";
import UnconfDayTwo from "../../data/Schedule/UnconfDayTwo.json";

const UnconfPage = () => {
  const [selectedDate, setSelectedDate] = useState("Day1");

  const handDateClick = (date) => {
    setSelectedDate(date);
  };
  const contentData = selectedDate === "Day1" ? UnconfDayOne : UnconfDayTwo;
  return (
    <Fragment>
      <Head title="交流議程" page="schedule_unconf"></Head>
      <Hero {...UnconfData} />
      <DateTab selectedDate={selectedDate} onDateClick={handDateClick} />
      <ComAgendaCard UnconfData={contentData} />
    </Fragment>
  );
};

export default UnconfPage;
