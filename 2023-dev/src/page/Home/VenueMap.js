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
      </div>
    </div>
  );
};

export default VenueMap;
