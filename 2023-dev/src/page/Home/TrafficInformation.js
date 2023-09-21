import classes from "./TrafficInformation.module.css";
import { ReactComponent as ExternalIcon } from "../../components//asset/Icon/system-uicons_external.svg";
import Traffic from "./Traffic";
import { LazyLoadImage } from "react-lazy-load-image-component";
import "react-lazy-load-image-component/src/effects/blur.css";

const TrafficInformation = () => {
  return (
    <div className={classes.background}>
      <h2>會場資訊</h2>
      <div className={classes.container}>
        <section className={classes["location-information"]}>
          <div className={classes["location-img"]}>
            <LazyLoadImage
              effect="blur"
              src={process.env.PUBLIC_URL + "/assets/images/Home/location.png"}
              alt="Location"
            />
          </div>
          <div className={classes["loaction-text"]}>
            <p>
              高雄展覽館
              <br />
              Kaohsiung Exhibition Center
              <br />
              高雄市前鎮區成功二路39號
            </p>
            <a
              className={classes.btn}
              href="https://goo.gl/maps/KERub4DGSAztf57c7"
              target="blank"
            >
              <span>Google 地圖</span>
              <ExternalIcon className={classes.icon} />
            </a>
          </div>
        </section>
      </div>
      <Traffic />
    </div>
  );
};

export default TrafficInformation;
