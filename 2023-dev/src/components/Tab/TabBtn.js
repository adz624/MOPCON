import classes from "./TabBtn.module.css";

const TabBtn = ({ selectedTab, onTabClick, tab }) => {
  const tabList = tab.map((tab) => (
    <button
      type="button"
      key={tab.key}
      className={`
      ${classes.btn}
       ${
         selectedTab === "community"
           ? classes["btn-community-default"]
           : classes["btn-default"]
       }
       ${
         selectedTab === "community" && tab.type === "community"
           ? classes["btn-community-active"]
           : ""
       }
      ${
        selectedTab.includes(tab.type)
          ? classes["btn-active"]
          : classes["btn-default"]
      }
      ${tab.page === "speaker" ? classes["btn-speaker"] : ""}`}
      onClick={() => onTabClick(tab)}
    >
      {tab.text}
    </button>
  ));
  const hasSpeakerPage = tab.some((tab) => tab.page === "speaker");

  return (
    <div>
      <div
        className={`${classes["tab-menu"]} ${
          hasSpeakerPage ? classes["tab-menu-speaker"] : ""
        }`}
      >
        {tabList}
      </div>
    </div>
  );
};

export default TabBtn;
