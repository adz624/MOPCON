import classes from "./introduce.module.css";
import SwiperPhoto from "./swiper/Swiper";
import { ReactComponent as StarIcon } from "../../components/asset/Icon/Star.svg";

const Introduce = () => {
  return (
    <div className={classes.container}>
      <div>
        <h3>
          南台灣最大行動科技年會
          <StarIcon className={classes.icon} />
        </h3>
        <p className={classes.text}>
          <span>聚集知識與人才 X </span>
          <span>堅持濁水溪以南 X </span>
          <span>放大科技創新力</span>
        </p>
      </div>

      <div className={classes.album}>
        <SwiperPhoto />
      </div>
    </div>
  );
};
export default Introduce;
