import classes from "./SponsorSection.module.css";

const SponsorSection = ({ Icon, Content, Level, onCardClick }) => {
  const sponsorList = Content.map((item) => (
    <div
      className={classes.card}
      key={item.id}
      onClick={() => onCardClick(item)}
    >
      <div className={classes.img}>
        <img src={`${process.env.PUBLIC_URL}${item.Img}`} alt="sponsor" />
      </div>
      <p>{item.name}</p>
    </div>
  ));

  return (
    <section className={classes.wrap}>
      <h3 className={classes.title}>
        {Icon}
        <span>{Level}</span>
      </h3>
      <div className={classes.container}>{sponsorList}</div>
    </section>
  );
};

export default SponsorSection;
