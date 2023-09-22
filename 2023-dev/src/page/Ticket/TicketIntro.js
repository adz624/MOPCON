import classes from "./TicketIntro.module.css";
import Ticket from "../../data/Ticket/Ticket.json";

const TicketIntro = () => {
  const TicketCard = Ticket.map((item) => {
    return (
      <div className={classes.card} key={item.key}>
        <div className={classes["Image-container"]}>
          <img src={`${process.env.PUBLIC_URL}${item.img}`} alt="ticket" />
        </div>
        <h4>{item.title}</h4>
        <ul>
          {item.content.map((content) => {
            return <li>{content}</li>;
          })}
        </ul>
        <span className={classes.text}>$ {item.price}元/張</span>
        <a className={classes.btn} href={`${item.link}`}>
          立即購買
        </a>
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
