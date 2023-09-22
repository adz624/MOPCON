import { ReactComponent as BusIcon } from "../../components/asset/Icon/solar_bus-bold.svg";
import { ReactComponent as HSRIcon } from "../../components/asset/Icon/ri_train.svg";
import { ReactComponent as MRTIcon } from "../../components/asset/Icon/MRT.svg";
import classes from "./Traffic.module.css";

const Traffic = () => {
  return (
    <>
      <div className={classes.container}>
        <div className={classes.traffic}>
          <div className={classes["traffic-container"]}>
            <BusIcon width={32} height={32} />
            <div className={classes.content}>
              <span>公車</span>
              <div className={classes.square}>高雄展覽館</div>
              <span>搭乘紅21、紅22、168環狀東幹線至高雄展覽館站</span>
            </div>
          </div>
          <div className={classes["traffic-container"]}>
            <MRTIcon width={32} height={32} />
            <div className={classes.content}>
              <span>捷運</span>
              <div className={classes.square}>三多商圈站</div>
              <span>至三多商圈站步行約10分鐘即可抵達</span>
            </div>
          </div>
        </div>
        <div className={classes.traffic}>
          <div className={classes["traffic-container"]}>
            <HSRIcon width={32} height={32} />
            <div className={classes.content}>
              <span>高鐵</span>
              <div className={classes.square}>左營高鐵站</div>
              <span>從左營高鐵站搭乘捷運紅線至三多商圈站</span>
            </div>
          </div>
          <div className={classes["traffic-container"]}>
            <MRTIcon width={32} height={32} />
            <div className={classes.content}>
              <span>輕軌</span>
              <div className={classes.square}>軟體園區站</div>
              <span>至軟體園區站步行約5分鐘即可抵達</span>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};
export default Traffic;
