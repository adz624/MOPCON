// SpeakerModal.js
import React, { Fragment } from "react";
import classes from "./SpeakerModal.module.css";
import ReactDOM from "react-dom";
import { ReactComponent as GithubIcon } from "../../../components/asset/Icon/github.svg";
import { ReactComponent as FBIcon } from "../../../components/asset/Icon/FB.svg";
import { ReactComponent as TwitterIcon } from "../../../components/asset/Icon/twitter.svg";
import { ReactComponent as SiteIcon } from "../../../components/asset/Icon/site.svg";
import { ReactComponent as CloseIcon } from "../../../components/asset/Icon/carbon_close-outline.svg";
import { ReactComponent as CalendarIcon } from "../../../components/asset/Icon/calendar.svg";
import { ReactComponent as ShareIcon } from "../../../components/asset/Icon/share.svg";

const SpeakerModal = (props) => {
  const { speaker, onClose } = props;

  const handleBackdropClick = (event) => {
    event.stopPropagation();
  };

  const hastag = speaker.hashTag.map((map) => {
    return (
      <span key={map} className={classes.hashtag}>
        {map}
      </span>
    );
  });

  const paragraphs = speaker.introductionToTheAgenda.split(/[\n]/);
  const agenda = paragraphs.map((content, index) => {
    return <p key={index}>{content}</p>;
  });

  const shareOnFacebook = () => {
    const shareUrl = "https://mopcon.org/2023/#/speaker";
    const mopcon = "MOPCON2023";
    const facebookShareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(
      shareUrl
    )}&hashtag=%23${mopcon}`;
    window.open(facebookShareUrl, "_blank");
  };

  const addToGoogleCalendar = () => {
    const calendarUrl =
      "https://www.google.com/calendar/render?action=TEMPLATE";
    const speakerName = speaker.name;
    const agendaName = speaker.agendaTopicName;
    const startTime = "20231111T010000Z";
    const endTime = "20231112T100000Z";
    const eventLocation = "高雄展覽館";
    const eventDetails = `講者：${speakerName}\n議程名稱：${agendaName}`;
    const googleCalendarUrl = `${calendarUrl}&text=${encodeURIComponent(
      agendaName
    )}&dates=${startTime}/${endTime}&details=${encodeURIComponent(
      eventDetails
    )}&location=${encodeURIComponent(eventLocation)}`;

    window.open(googleCalendarUrl, "_blank");
  };

  return (
    <Fragment>
      {ReactDOM.createPortal(
        <div className={classes.backdrop} onClick={onClose}>
          <div className={classes.warp} onClick={handleBackdropClick}>
            <button type="button" className={classes.btn} onClick={onClose}>
              <CloseIcon />
            </button>
            <div className={classes.container}>
              <div className={classes["speaker-container"]} key={speaker.name}>
                <div className={classes.social}>
                  <div className={classes["img-container"]}>
                    <img
                      src={`${process.env.PUBLIC_URL}${speaker.Img}`}
                      alt={speaker.name}
                    />
                  </div>
                  {/* <div className={classes["icon-container"]}>
                    <a href={speaker.fb} className={classes.icon}>
                      <FBIcon />
                    </a>
                    <a href={speaker.gitHub} className={classes.icon}>
                      <GithubIcon />
                    </a>
                    <a href={speaker.twitter} className={classes.icon}>
                      <TwitterIcon />
                    </a>
                    <a href={speaker.website} className={classes.icon}>
                      <SiteIcon />
                    </a>
                  </div> */}
                </div>
                <div>
                  <p className={classes.name}>{speaker.name}</p>
                  <p className={classes.job}>{speaker.jobTitle}</p>
                  <p className={classes.introudce}>{speaker.introduce}</p>
                </div>
              </div>
            </div>
            <div className={classes["angeda-container"]}>
              {hastag}
              <div className={classes.content}>
                <span className={classes.title}>議程主題名稱</span>
                <p>{speaker.agendaTopicName}</p>
              </div>
              <div className={classes.content}>
                <span className={classes.title}>議程簡介</span>
                {agenda}
              </div>
              {/* <div className={classes.content}>
                <span className={classes.title}>目標會眾</span>
                <p>{speaker.targetAudience}</p>
              </div>
              <div className={classes.content}>
                <span className={classes.title}>先備知識</span>
                <p>{speaker.priorKnowledge}</p>
              </div>
              <div className={classes.content}>
                <span className={classes.title}>會眾預期收穫</span>
                <p>{speaker.expectedHarvest}</p>
              </div>
              <div className={classes.content}>
                <span className={classes.title}>議程地點</span>
                <p>{speaker.agendaLocation}</p>
              </div> */}
              <div className={classes["button-container"]}>
                <button
                  className={classes.button}
                  onClick={addToGoogleCalendar}
                >
                  <CalendarIcon />
                  加入行事曆
                </button>
                <button className={classes.button} onClick={shareOnFacebook}>
                  <ShareIcon />
                  分享議程
                </button>
              </div>
            </div>
          </div>
        </div>,
        document.getElementById("overlays")
      )}
    </Fragment>
  );
};

export default SpeakerModal;
