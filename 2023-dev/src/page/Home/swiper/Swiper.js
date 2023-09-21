// Import Swiper
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "./HomeCustomSwiperButton.css";
import { Navigation, Pagination, Autoplay } from "swiper/modules";

import classes from "./Swiper.module.css";
import { ReactComponent as SwiperNext } from "../../../components/asset/Icon/swiper-next-w.svg";
import { ReactComponent as SwiperPrev } from "../../../components/asset/Icon/swiper-prev-w.svg";

const SwiperPhoto = () => {
  return (
    <>
      <Swiper
        style={{
          "--swiper-pagination-color": "#fff",
        }}
        loop={true}
        navigation={{
          // 為每一個年份的button設置一的新的class讓他可以獨立操作
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        }}
        autoplay={{
          delay: 3000,
          disableOnInteraction: false,
        }}
        pagination={{
          clickable: true,
        }}
        modules={[Navigation, Pagination, Autoplay]}
        className="mySwiper"
        speed={1500}
      >
        <SwiperSlide>
          <div className={classes["photo-container"]}>
            <img
              loading="lazy"
              src={
                process.env.PUBLIC_URL +
                "/assets/images/Home/groupphoto/groupphoto_2015.jpg"
              }
              alt="photo2015"
            />
          </div>
        </SwiperSlide>
        <SwiperSlide>
          <div className={classes["photo-container"]}>
            <img
              loading="lazy"
              src={
                process.env.PUBLIC_URL +
                "/assets/images/Home/groupphoto/groupphoto_2016.jpg"
              }
              alt="photo2016"
            />
          </div>
        </SwiperSlide>
        <SwiperSlide>
          <div className={classes["photo-container"]}>
            <img
              loading="lazy"
              src={
                process.env.PUBLIC_URL +
                "/assets/images/Home/groupphoto/groupphoto_2017.jpg"
              }
              alt="photo2017"
            />
          </div>
        </SwiperSlide>
        <SwiperSlide>
          <div className={classes["photo-container"]}>
            <img
              loading="lazy"
              src={
                process.env.PUBLIC_URL +
                "/assets/images/Home/groupphoto/groupphoto_2018.jpg"
              }
              alt="photo2018"
            />
          </div>
        </SwiperSlide>
        <SwiperSlide>
          <div className={classes["photo-container"]}>
            <img
              loading="lazy"
              src={
                process.env.PUBLIC_URL +
                "/assets/images/Home/groupphoto/groupphoto_2019.jpg"
              }
              alt="photo2019"
            />
          </div>
        </SwiperSlide>
        <SwiperSlide>
          <div className={classes["photo-container"]}>
            <img
              loading="lazy"
              src={
                process.env.PUBLIC_URL +
                "/assets/images/Home/groupphoto/groupphoto_2020.jpg"
              }
              alt="photo2020"
            />
          </div>
        </SwiperSlide>
      </Swiper>

      <div className="swiper-button-prev swiper-button-prev-w">
        <SwiperPrev />
      </div>
      <div className="swiper-button-next swiper-button-next-w">
        <SwiperNext />
      </div>
    </>
  );
};

export default SwiperPhoto;
