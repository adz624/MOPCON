import { Fragment } from "react";
import classes from "./TimeMachineSection.module.css";
import { ReactComponent as SitelIcon } from "../../components/asset/Icon/site.svg";
import SwiperTimeMachine from "./SwiperTimeMachine";

const TimeMachineSection = ({ content }) => {
  const timeMachine = content.map((item, index) => (
    <div className={classes.wrap} key={index}>
      <span className={classes.tab}>{item.year}</span>
      <section className={classes.container}>
        <div className={classes["slide-container"]}>
          <SwiperTimeMachine img={item.img} year={item.year} />
        </div>
        <div className={classes.content}>
          <h3>{item.topic}</h3>
          <p>{item.meaning}</p>
          <p>{item.desc}</p>
          <a href={item.site} className={classes.icon}>
            <SitelIcon />
            <span>site</span>
          </a>
        </div>
      </section>
    </div>
  ));

  return <Fragment>{timeMachine}</Fragment>;
};
export default TimeMachineSection;
