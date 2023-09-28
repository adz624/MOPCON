import classes from "./Core.module.css";
import { LazyLoadImage } from "react-lazy-load-image-component";

const Core = () => {
  return (
    <div className={classes.wrap}>
      <LazyLoadImage
        src={process.env.PUBLIC_URL + "/assets/images/Home/Planet.png"}
        alt="Planet"
        effect="blur"
        className={classes.img}
      />
      <div className={classes.container}>
        <h2>MOPCON 核心價值</h2>
        <section className={classes["content-text"]}>
          <div>
            <p>持續舉辦</p>
            <p>
              <span className={classes["text-hightlight"]}>11</span>年
            </p>
          </div>
          <div>
            <p>精彩議程</p>
            <p>
              <span className={classes["text-hightlight"]}>30</span>場以上
            </p>
          </div>
          <div>
            <p>熱情會眾</p>
            <p>
              <span className={classes["text-hightlight"]}>1000</span>人以上
            </p>
          </div>
        </section>
        <section className={classes.content}>
          <p>
            MOPCON（Mobile Open Platform
            Conference）再度來襲！從2012年開始，我們已經度過11個年頭，從160人的小型聚會，逐漸成為1000人以上的科技盛宴！
            <br />
            MOPCON集結了獨立開發者、軟體工程師、UI/UX設計師、軟體資料科學家、自造者、專業經理人、創業家、相關科系學生等多元背景，在這裡，我們一同探索科技的無限可能，互相啟發、互動交流。MOPCON不僅是一場盛會，更是多元資訊技術交流的港口！這裡匯聚了來自不同背景和領域的專業人士，共同分享經驗和知識，拓寬視野，激發創意。
            2023 年，我們將以「Implementation & Crossover」
            為主題，深入探討前沿技術的實際應用與跨界整合
            ，從AI到跨平台、行動應用到雲服務，讓我們一起揮灑創意，共同塑造科技未來的精彩！ 準備好了嗎？讓我們一起在
            MOPCON 2023 掀起新一波科技的浪潮吧！
          </p>
          <LazyLoadImage
            src={process.env.PUBLIC_URL + "/assets/images/Home/coreSquare.png"}
            alt="CoreSquare"
            className={classes["core-square"]}
          />
        </section>
      </div>
    </div>
  );
};

export default Core;
