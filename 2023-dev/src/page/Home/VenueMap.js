import classes from "./VenueMap.module.css";
import { LazyLoadImage } from "react-lazy-load-image-component";

const VenueMap = () => {
  return (
    <div className={classes.container}>
      <h2>會場地圖</h2>
      <div className={classes["location-img"]}>
        <LazyLoadImage
          effect="blur"
          src={process.env.PUBLIC_URL + "/assets/images/Home/VenueMap.png"}
          alt="Location"
        />
        <div className={classes.text}>
          <h1>COMING SOON</h1>
          <h2>我們正緊鑼密鼓的規劃中，敬請期待(*‘ v`*)</h2>
        </div>
      </div>
    </div>
  );
};

export default VenueMap;
