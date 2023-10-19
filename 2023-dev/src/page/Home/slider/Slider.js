import { Swiper, SwiperSlide } from "swiper/react";
import classes from "./Slider.module.css";
import SponosorItem from "../SponsorItem";
import "swiper/css";
import { v4 as uuidv4 } from "uuid";
import { Autoplay } from "swiper/modules";

const sponsor = [
  {
    key: uuidv4(),
    name: "祐生研究基金會",
    logo: "/assets/images/sponsor/Comet/祐生研究基金會.svg",
  },
  {
    key: uuidv4(),
    name: "奧義",
    logo: "/assets/images/sponsor/Comet/CyCraft 奧義智慧科技.svg",
  },
  {
    key: uuidv4(),
    name: "Dcard",
    logo: "/assets/images/sponsor/Comet/Dcard.svg",
  },
  {
    key: uuidv4(),
    name: "六角學院",
    logo: "/assets/images/sponsor/Education/hexschool.svg",
  },
  {
    key: uuidv4(),
    name: "一卡通",
    logo: "/assets/images/sponsor/Galaxy/iPass.svg",
  },
  {
    key: uuidv4(),
    name: "鈦坦科技",
    logo: "/assets/images/sponsor/Planet/titansoft.svg",
  },
  {
    key: uuidv4(),
    name: "精誠資訊",
    logo: "/assets/images/sponsor/Planet/精誠.svg",
  },
  {
    key: uuidv4(),
    name: "KKBOX",
    logo: "",
  },
  {
    key: uuidv4(),
    name: "咪卡",
    logo: "",
  },
  {
    key: uuidv4(),
    name: "捕夢網",
    logo: "",
  },
  {
    key: uuidv4(),
    name: "國泰",
    logo: "/assets/images/sponsor/Galaxy/國泰金控.svg",
  },
];

const Slider = () => {
  const sponsorList = sponsor.map((sponsor) => (
    <SwiperSlide key={sponsor.key}>
      <SponosorItem name={sponsor.name} logo={sponsor.logo} id={sponsor.id} />
    </SwiperSlide>
  ));

  return (
    <Swiper
      spaceBetween={28}
      slidesPerView={2}
      loop={true}
      autoplay={{
        delay: 0,
        disableOnInteraction: false,
      }}
      modules={[Autoplay]}
      speed="8000"
      style={{
        "--swiper-wrapper-transition-timing-function": "linear",
      }}
      breakpoints={{
        375: {
          slidesPerView: "2",
          spaceBetween: "28",
        },
        768: {
          slidesPerView: "4",
          spaceBetween: "28",
        },
        1024: {
          slidesPerView: "5",
        },
        1440: {
          slidesPerView: "6",
          spaceBetween: "24",
        },
      }}
    >
      <div className={classes["swiper-wrapper"]}>{sponsorList}</div>
    </Swiper>
  );
};

export default Slider;
