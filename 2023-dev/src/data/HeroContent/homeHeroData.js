import { Fragment } from "react";
import { ReactComponent as ExternalIcon } from "../../components/asset/Icon/system-uicons_external.svg";

const homeHeroContent = {
  title: (
    <Fragment>
      Implementation <span />X<span /> Crossover
    </Fragment>
  ),
  content: [
    "2023.11.11 Sat. - 2023.11.12 Sun.",
    <Fragment>
      <span>高雄展覽館</span> Kaohsiung Exhibition Center
    </Fragment>,
  ],
  btn: "前往購票",
  btnIcon: <ExternalIcon />,
  page: "Home",
  link: "https://mopcon.kktix.cc/events/mopcon-2023",
};

export default homeHeroContent;
