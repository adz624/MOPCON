import { Fragment } from "react";
import classes from "./UnconfCard.module.css";
import { ReactComponent as PinIcon } from "../../components/asset/Icon/location.svg";

const UnconfCard = ({ UnconfData }) => {
  const cardList = UnconfData.map((item, index) => (
    <Fragment key={index}>
      <div
        className={`${
          item.share === "15:00 - 15:30" ? classes["card-reverse"] : ""
        } `}
      >
        <div
          className={`${
            item.share === "15:00 - 15:30" ? classes["share-border"] : ""
          } ${classes.share}`}
        >
          <span>{item.share}</span>
          <span>分享你的想法</span>
        </div>
        <section className={classes.container}>
          <p>{item.start}</p>
          <div className={classes.card}>
            <div className={classes.text}>
              <span>{item.title}</span>
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
        </section>
      </div>
    </Fragment>
  ));

  return (
    <div className={classes.wrap}>
      {cardList}
      <div className={classes.share}>
        <span>16:30 - 17:00</span>
        <span>分享你的想法</span>
      </div>
    </div>
  );
};

export default UnconfCard;
