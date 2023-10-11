import classes from "./TicketIntro.module.css";
import Ticket from "../../data/Ticket/Ticket.json";
import { ReactComponent as Disabled } from "../../components/asset/Icon/disabled.svg";
import { ReactComponent as Active } from "../../components/asset/Icon/active.svg";

const TicketIntro = () => {
  const TicketCard = Ticket.map((item) => {
    return (
      <div className={classes.card} key={item.key}>
        <div className={classes["Image-container"]}>
          <img src={`${process.env.PUBLIC_URL}${item.img}`} alt="ticket" />
        </div>
        <h4>{item.title}</h4>
        <p className={classes.content}>{item.content}</p>
        <span className={classes.text}>$ {item.price}元/張</span>
        <button
          className={`${classes.btn} ${
            item.disabled === true
              ? classes["btn-disabled"]
              : classes["btn-active"]
          }`}
          onClick={() => {
            window.open(item.link, "_blank");
          }}
          disabled={item.disabled}
        >
          {item.disabled === true ? <Disabled /> : <Active />}
          {item.text}
        </button>
      </div>
    );
  });

  return (
    <div className={classes.wrap}>
      <h2>票種介紹</h2>
      <div className={classes.container}>{TicketCard}</div>
    </div>
  );
};

export default TicketIntro;
