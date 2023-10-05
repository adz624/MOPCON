import classes from "./NavModal.module.css";
import ReactDOM from "react-dom";
import { Link } from "react-router-dom";
import { Fragment, useState } from "react";
import { ReactComponent as Close } from "../../asset/Icon/carbon_close-outline.svg";
import { ReactComponent as ArrowIcon } from "../../asset/Icon/ep_arrow-down.svg";

const NavModal = (props) => {
  const [showDropdown, setShowDropdown] = useState(false);

  const handleDropdownToggle = (event) => {
    event.stopPropagation();
    setShowDropdown(!showDropdown);
  };

  return (
    <Fragment>
      {ReactDOM.createPortal(
        <div className={classes.modalBackdrop} onClick={props.onClose}>
          <ul className={classes.container}>
            <li className={classes.nav}>
              <Link to="/community">主辦社群</Link>
            </li>
            <li
              className={`${classes.nav} ${showDropdown ? classes.active : ""}`}
              onClick={handleDropdownToggle}
            >
              <Link to="#">
                議程介紹
                <ArrowIcon style={{ stroke: "#ef7b4a" }} />
              </Link>
              {showDropdown && (
                <ul className={classes.dropdown}>
                  <li className={classes.menu}>
                    <Link to="/schedule" onClick={props.onClose}>
                      主要議程
                    </Link>
                  </li>
                  {/* <li className={classes.menu}>
                    <Link to="/schedule_unconf" onClick={props.onClose}>
                      交流議程
                    </Link>
                  </li> */}
                </ul>
              )}
            </li>
            <li className={classes.nav}>
              <Link to="/speaker">講者陣容</Link>
            </li>
            {/* <li className={classes.nav}>
              <Link to="/sponsor">贊助夥伴</Link>
            </li> */}
            <li className={classes.nav}>
              <Link to="/ticket">票種介紹</Link>
            </li>
            {/* <li className={classes.nav}>
              <Link to="#">共筆文件</Link>
            </li> */}
            <li className={classes.nav}>
              <Link to="/time-machine">時光機</Link>
            </li>
          </ul>

          <button className={classes.btn} onClick={props.onClose}>
            <Close />
          </button>
        </div>,
        document.getElementById("overlays")
      )}
    </Fragment>
  );
};
export default NavModal;
