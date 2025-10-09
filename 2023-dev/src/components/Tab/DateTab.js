import React from "react";
import classes from "./DateTab.module.css";

const DateTab = ({ selectedDate, onDateClick }) => {
  return (
    <div className={classes.container}>
      <button
        className={`${classes.btn} ${
          selectedDate === "Day1" ? classes.active : ""
        }`}
        onClick={() => onDateClick("Day1")}
      >
        11/11 Day1
      </button>
      <button
        className={`${classes.btn} ${
          selectedDate === "Day2" ? classes.active : ""
        }`}
        onClick={() => onDateClick("Day2")}
      >
        11/12 Day2
      </button>
    </div>
  );
};

export default DateTab;
