import classes from "./SpeakerCard.module.css";

const SpeakerCard = (props) => {
  const { SpeakerContent, onOpenModal } = props;

  return (
    <section className={classes["speak-container"]}>
      {SpeakerContent.map((speaker) => (
        <div
          className={classes.card}
          key={speaker.name}
          onClick={() => onOpenModal(speaker)}
        >
          <div className={classes["img-container"]}>
            <img
              src={`${process.env.PUBLIC_URL}${speaker.Img}`}
              alt={speaker.name}
            />
          </div>
          <div>
            <p className={classes.name}>{speaker.name}</p>
            <p className={classes["job-title"]}>{speaker.jobTitle}</p>
            <p className={classes.tab}>{speaker.hashTag.join(" ")}</p>
          </div>
        </div>
      ))}
    </section>
  );
};

export default SpeakerCard;
