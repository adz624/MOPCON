import classes from "./ComingSoon.module.css";
import img from "../../components/asset/TicketComingSoon.png";

const ComingSoon = () => {
  return (
    <>
      <div className={classes.container}>
        <h2>周邊商品</h2>
        <div className={classes.centeredImgStyle}>
          <img src={img} alt="COMING SOON"></img>
        </div>
        <h1>COMING SOON</h1>
        <h2>我們正緊鑼密鼓的規劃中，敬請期待(*‘ v`*)</h2>
      </div>
    </>
  );
};
export default ComingSoon;
