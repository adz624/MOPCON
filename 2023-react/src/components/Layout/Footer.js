import classes from "./Footer.module.css";
import { ReactComponent as FaceBook } from "../asset/Icon/facebook.svg";
import { ReactComponent as Twitter } from "../asset/Icon/twitter.svg";
import { ReactComponent as Instagram } from "../asset/Icon/instagram.svg";
import { ReactComponent as Telegram } from "../asset/Icon/Telegram.svg";

const Footer = () => {
  return (
    <footer className={classes.container}>
      <p className={classes.logo}>
        M<span className={classes.textcolor}>O</span>PC
        <span className={classes.textcolor}>O</span>N
      </p>{" "}
      <a href="mailto:contact@mopcon.org" target="blank">
        <p>contact@mopcon.org</p>
      </a>
      <div className={classes.social}>
        <a target="blank" href="https://www.facebook.com/mopcon?locale=zh_TW">
          <FaceBook />
        </a>
        <a target="blank" href="https://twitter.com/mopcon">
          <Twitter />
        </a>
        <a target="blank" href="https://www.instagram.com/mopcon.tw/">
          <Instagram />
        </a>
        <a target="blank" href="/Telegram">
          <Telegram />
        </a>
      </div>
    </footer>
  );
};
export default Footer;
