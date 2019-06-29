<template>
    <div class="section sectionPastYears">
        <h2 class="title"><span>{ 歷年 </span><span class="color-primary">MOPCON</span><span> ; }</span></h2>

        <div v-swiper:mySwiper="swiperOption" class="slider-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" v-for="year in years" :key="year.id">
                    <nuxt-link :to="`#${year.year}`" class="swiper-slide__inner">
                        <div class="swiper-slide__image" :style="`background-image: url(${require(`./images/${year.image}`)})`"></div>
                    </nuxt-link>
                    <p class="swiper-slide__year">{{year.year}}</p>
                </div>
            </div>
        </div>

        <Btn class="sectionPastYears__btn">
            <a class="sectionPastYears__btn__link" href="https://www.youtube.com/channel/UCMyMchq3WLtN0DD9QE5gZww" target="_blank">
                <span class="icon-play"></span><span>2018 影片回顧</span>
            </a>
        </Btn>
    </div>
</template>

<script>
import Btn from "~/components/Btn";

export default {
    name: "sectionPastYears",
    components: {
        Btn
    },
    data() {
        return {
            years: [
                {
                    id: 0,
                    year: "2018",
                    image: "2018.jpg"
                },
                {
                    id: 1,
                    year: "2017",
                    image: "2017.jpg"
                },
                {
                    id: 2,
                    year: "2016",
                    image: "2016.jpg"
                },
                {
                    id: 3,
                    year: "2015",
                    image: "2015.jpg"
                },
                {
                    id: 4,
                    year: "2014",
                    image: "2018.jpg"
                },
                {
                    id: 5,
                    year: "2013",
                    image: "2017.jpg"
                },
                {
                    id: 6,
                    year: "2012",
                    image: "2016.jpg"
                },
                {
                    id: 7,
                    year: "2011",
                    image: "2015.jpg"
                }
            ],
            swiperOption: {
                slidesPerView: "auto",
                spaceBetween: 20
            }
        };
    }
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
