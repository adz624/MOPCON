import classes from "./SponsorItem.module.css";

const SponosorItem = (props) => {
  return (
    <div>
      <div className={classes.sponsor}>
        <img
          src={`${process.env.PUBLIC_URL}${props.logo}`}
          alt={props.logo}
          className={classes.img}
        ></img>
      </div>
      <span>{props.name}</span>
    </div>
  );
};

export default SponosorItem;
