import classes from "./SwiperTimeMachine.module.css";
// Swiper
import { Swiper, SwiperSlide } from "swiper/react";
import { EffectCreative, Navigation } from "swiper/modules";
import { ReactComponent as SwiperNext } from "../../components/asset/Icon/swiper-next.svg";
import { ReactComponent as SwiperPrev } from "../../components/asset/Icon/swiper-prev.svg";
import "swiper/css/navigation";
import "swiper/css";
import "./CustomSwiperButton.css";

const SwiperTimeMachine = ({ img, year }) => {
  const swiperItem = img.map((item, index) => (
    <SwiperSlide key={index}>
      <div
        className={classes.container}
        style={{
          backgroundImage: `url( ${process.env.PUBLIC_URL}${item})`,
          backgroundRepeat: "no-repeat",
          backgroundSize: "cover",
          backgroundPosition: "center",
        }}
      ></div>
    </SwiperSlide>
  ));

  return (
    <div>
      <Swiper
        slidesPerView={1}
        centeredSlides={true}
        effect={"creative"}
        loop={true}
        navigation={{
          // 為每一個年份的button設置一的新的class讓他可以獨立操作
          nextEl: `.swiper-next-${year}`,
          prevEl: `.swiper-prev-${year}`,
        }}
        modules={[Navigation, EffectCreative]}
        breakpoints={{
          768: {
            slidesPerView: "2",
          },
        }}
        creativeEffect={{
          limitProgress: 1,
          prev: {
            translate: [300, 0, -280],
            scale: 0.75,
          },
          next: {
            translate: [-300, 0, -280],
            scale: 0.75,
          },
        }}
      >
        {swiperItem}
      </Swiper>
      <div
        className={`swiper-button-prev swiper-custome-prev  swiper-prev-${year}`}
      >
        <SwiperPrev />
      </div>
      <div
        className={`swiper-button-next swiper-custome-next  swiper-next-${year}`}
      >
        <SwiperNext />
      </div>
    </div>
  );
};

export default SwiperTimeMachine;
