import { Swiper, SwiperSlide } from "swiper/react";
import classes from "./Slider.module.css";
import SponosorItem from "../SponsorItem";
import Logo from "../../../components/asset/mopcon.png";
import "swiper/css";
import { v4 as uuidv4 } from "uuid";
import { Autoplay } from "swiper/modules";

const sponsor = [
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
  },
  {
    key: uuidv4(),
    name: "敬請期待",
    logo: Logo,
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
