import classes from "./ScheduleCard.module.css";
import { ReactComponent as PinIcon } from "../../components/asset/Icon/location.svg";
import { Fragment } from "react";

const AgengaCard = ({ scheduleData }) => {
  // 透過傳遞進來的資料生成Card
  const card = scheduleData.map((timeSlot, index) => (
    <Fragment key={index}>
      <section key={index} className={classes.container}>
        <p>{timeSlot.start}</p>
        {/* 兩個不同的議程 */}
        {timeSlot.agenda.map((item, itemIndex) => (
          <div key={itemIndex} className={classes.card}>
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
    <div className={classes.wrap}>
      {card}
      <section className={classes.mopnight}>
        <div className={classes.break}>
          <span>18:30-</span>
          <span>MOPNight(講者晚宴)</span>
        </div>
      </section>
    </div>
  );
};

export default AgengaCard;
