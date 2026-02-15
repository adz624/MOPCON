import classes from "./JoinSection.module.css";
import { ReactComponent as SponosrIcon } from "../../components/asset/sponsorIcon/sponsor.svg";

const JoinSection = () => {
  return (
    <div className={classes.wrap}>
      <h2>想加入我們嗎？</h2>
      <div className={classes.container}>
        <img
          src={process.env.PUBLIC_URL + "/assets/images/sponsorimage.png"}
          alt="img"
        />
        <section className={classes["content-container"]}>
          <p className={classes.content}>
            謝謝你願意成為全台最大行動科技領域社群研討會的參與者及貢獻者之一！
          </p>
          <a href="mailto:sponsor@mopcon.org" className={classes.mail}>
            sponsor@mopcon.org
          </a>
          <p>MOPCON 2023 贊助組 收</p>
          <a
            href="https://mopcon.kktix.cc/events/mopcon-2023-personal-sponsor"
            target="blank"
            className={classes.btn}
          >
            <SponosrIcon className={classes.icon} />
            <span>快來贊助我們吧~</span>
          </a>
        </section>
      </div>
    </div>
  );
};
export default JoinSection;
