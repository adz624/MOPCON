import classes from "./SponsorModal.module.css";
import ReactDOM from "react-dom";
import { Fragment } from "react";
import { ReactComponent as CloseIcon } from "../../../components/asset/Icon/carbon_close-outline.svg";
import { ReactComponent as FBIcon } from "../../../components/asset/Icon/FB.svg";
import { ReactComponent as SiteIcon } from "../../../components/asset/Icon/site.svg";

const SponsorModal = ({ selectedCard, onClose }) => {
  const handleBackdropClick = (event) => {
    event.stopPropagation();
  };

  const paragraphs = selectedCard.description.split(/[\n]/);
  const description = paragraphs.map((content, index) => {
    return <p key={index}>{content}</p>;
  });

  return (
    <Fragment>
      {ReactDOM.createPortal(
        <div className={classes.backdrop} onClick={onClose}>
          <div className={classes.wrap}>
            <div className={classes.card} onClick={handleBackdropClick}>
              <h3>{selectedCard.name}</h3>
              <CloseIcon className={classes["close-btn"]} onClick={onClose} />
              <div className={classes.content}>
                <div className={classes["img-container"]}>
                  <img
                    src={`${process.env.PUBLIC_URL}${selectedCard.Img}`}
                    alt="sponsor"
                  />
                </div>
                <div className={classes["icon-container"]}>
                  <a
                    href={selectedCard.facebook}
                    target="blank"
                    className={classes.icon}
                    style={selectedCard.facebook ? null : { display: "none" }}
                  >
                    <FBIcon />
                    <span>Facebook</span>
                  </a>
                  <a
                    href={selectedCard.site}
                    target="blank"
                    className={classes.icon}
                    style={selectedCard.site ? null : { display: "none" }}
                  >
                    <SiteIcon />
                    <span>Site</span>
                  </a>
                </div>
                <p style={{ "padding-bottom": "1rem" }}>
                  {description}
                  <a
                    className={`${classes.link} ${
                      selectedCard.link === "" ? classes.none : ""
                    }`}
                    href={selectedCard.link}
                    target="blank"
                  >
                    相關職缺
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>,
        document.getElementById("overlays")
      )}
    </Fragment>
  );
};

export default SponsorModal;
