import classes from "./Hero.module.css";
import { Fragment } from "react";

const Hero = (props) => {
  return (
    <Fragment>
      <div className={classes.layout}>
        <div className={classes.content}>
          <p
            className={`${classes.title} ${
              props.page === "Home" ? classes["home-title"] : ""
            } `}
          >
            {props.title}
          </p>
          {props.content.map((text, i) => (
            <p
              target="blank"
              className={`${
                props.page === "Home" ? classes["home-text"] : classes.text
              } ${props.page === "host" ? classes["text-left"] : ""}`}
              key={i}
            >
              {text}
            </p>
          ))}
          <a
            target="blank"
            href={props.link}
            className={`${classes.btn} ${
              props.btn === "" ? classes["btn-none"] : ""
            } ${props.page === "Home" ? "" : classes["btn-reverse"]}`}
          >
            {props.btn}
            <span className={classes.icon}>{props.btnIcon}</span>
          </a>
        </div>
      </div>
    </Fragment>
  );
};

export default Hero;
