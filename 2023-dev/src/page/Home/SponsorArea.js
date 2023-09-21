import classes from "./SponsorArea.module.css";
import Slider from "./slider/Slider";

const SponsorArea = () => {
  return (
    <div className={classes.container}>
      <p>贊助廠商</p>
      <Slider />
    </div>
  );
};

export default SponsorArea;
