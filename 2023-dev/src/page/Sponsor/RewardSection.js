import classes from "./RewardSection.module.css";
import { ReactComponent as BrandIcon } from "../../components/asset/sponsorIcon/brand.svg";
import { ReactComponent as SpeakerIcon } from "../../components/asset/sponsorIcon/employee.svg";
import { ReactComponent as PuzzleIcon } from "../../components/asset/sponsorIcon/puzzle.svg";
import { ReactComponent as MarketIcon } from "../../components/asset/sponsorIcon/marketing.svg";

const RewardSection = () => {
  return (
    <div className={classes.wrap}>
      <h2>最實質的收穫</h2>
      <section className={classes.container}>
        <div className={classes.card}>
          <BrandIcon />
          <p className={classes.content}>品牌曝光</p>
          <p className={classes.text}>
            接觸逾千名參與者的行動科技社群，是推廣服務及產品、曝光品牌的絕佳機會。
          </p>
        </div>
        <div className={classes.card}>
          <SpeakerIcon />
          <p className={classes.content}>與講者接觸</p>
          <p className={classes.text}>
            透過聚餐和厲害的講者們有更進一步的接觸，奠定日後合作關係。
          </p>
        </div>
        <div className={classes.card}>
          <PuzzleIcon />
          <p className={classes.content}>徵才媒合</p>
          <p className={classes.text}>
            接觸大量相關領域的高品質人才，大幅提升市場開發及徵才的效率及成功率。
          </p>
        </div>
        <div className={classes.card}>
          <MarketIcon />
          <p className={classes.content}>推廣產品</p>
          <p className={classes.text}>
            在活動中提升知名度，也將產品導入贊助廣告中。
          </p>
        </div>
      </section>
    </div>
  );
};

export default RewardSection;
