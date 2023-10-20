import classes from "./ScheduleCard.module.css";
import { ReactComponent as PinIcon } from "../../components/asset/Icon/location.svg";
import { Fragment, useState } from "react";
import SpeakerModal from "../SpeakerPage/Modal/SpeakerModal";
import SpeakerContent from "../../data/Speaker/SpeakerContent";

const AgengaCard = ({ scheduleData }) => {
  const [selectedSpeaker, setSelectedSpeaker] = useState(null);
  const [openModal, setOpenModal] = useState(false);

  //抓取 keynote speaker 資料
  const keynoteSpeakerClick = () => {
    const keynoteSpeakerData = SpeakerContent.find(
      (speaker) => speaker.agendaTopicName === "跨界創新：混出你的獨特價值"
    );
    setSelectedSpeaker(keynoteSpeakerData);
    setOpenModal(true);
    document.body.style.overflow = "hidden";
  };

  const handleSpeakerClick = (selectedSession) => {
    // 使用選定的議程名稱找到相對應的講者
    const matchingSpeaker = SpeakerContent.find(
      (speaker) => speaker.agendaTopicName === selectedSession.title
    );

    if (!matchingSpeaker) {
      return; // 如果沒有找到，直接返回
    }

    // 在組件的狀態中設置選定的講者
    setSelectedSpeaker(matchingSpeaker);
    setOpenModal(true);
    document.body.style.overflow = "hidden";
  };

  const hideModalHandle = () => {
    setOpenModal(false);
    document.body.style.overflow = "auto";
  };

  const day = scheduleData.map((item) => {
    return item.Day;
  });

  const keynote = day.includes("One") ? (
    <>
      <section className={classes.container}>
        <p>9:15 - 10:00</p>
        <div
          className={classes["card-keynote"]}
          onClick={() => keynoteSpeakerClick()}
        >
          <div className={classes.text}>
            <span>跨界創新：混出你的獨特價值</span>
            <span className={classes.tab}>Keynote</span>
          </div>
          <div className={classes.content}>
            <span>鄭鎧尹</span>
            <span className={classes.icon}>
              <PinIcon />
              <span></span>
            </span>
          </div>
        </div>
      </section>
      <div className={classes.break}>
        <span>10:00 - 10:15</span>
        <span>休息 Break</span>
      </div>
    </>
  ) : null;
  //透過傳遞進來的資料生成Card
  const card = scheduleData.map((timeSlot, index) => (
    <Fragment key={index}>
      <section key={index} className={classes.container}>
        <p>{timeSlot.start}</p>
        {/* 兩個不同的議程 */}
        {timeSlot.agenda.map((item, itemIndex) => (
          <div
            key={itemIndex}
            className={`${classes.card} ${
              item.name === "" ? classes.none : ""
            } `}
            onClick={() => handleSpeakerClick(item)}
          >
            <div className={classes.text}>
              <span>{item.title}</span>
              {/* 議程裡面的hashtag */}
              {item.tab.map((tab, tabIndex) => (
                <span key={tabIndex} className={classes.tab}>
                  {tab}
                </span>
              ))}
            </div>
            <div className={classes.content}>
              <span>{item.name}</span>
              <span className={classes.icon}>
                <PinIcon />
                <span>{item.location}</span>
              </span>
            </div>
          </div>
        ))}
      </section>
      <div key={index + "_break"} className={classes.break}>
        <span>{timeSlot.break}</span>
        <span>{timeSlot.text}</span>
      </div>
    </Fragment>
  ));

  return (
    <Fragment>
      {openModal && (
        <SpeakerModal speaker={selectedSpeaker} onClose={hideModalHandle} />
      )}
      <div className={classes.wrap}>
        {keynote}
        {card}
        {/* <section className={classes.mopnight}>
        <div className={classes.break}>
          <span>18:30-</span>
          <span>MOPNight(講者晚宴)</span>
        </div>
      </section> */}
      </div>
    </Fragment>
  );
};

export default AgengaCard;
