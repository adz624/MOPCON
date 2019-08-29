<template>
    <section class="section section-image-wall">
        <div class="bg-cover bg-cover--1"></div>
        <div class="bg-cover bg-cover--2"></div>
        <div class="people-flashlight"></div>
        <h2 class="title"><span>{ 南台灣</span><span class="color-primary">最大行動科技年會</span><span>; }</span></h2>
        <p><span>聚集知識與人才</span><span class="symbol-x"></span><span>堅持濁水溪以南</span><span class="symbol-x"></span><span>放大科技創新力</span></p>
        <ul class="image-wall">
            <li class="image-wall__item image-wall__item--video" @click="galleryIndex = 0">
                <div class="icon-play"></div>
                <p class="image-wall__item__text">35 秒了解南台灣最狂研討會 </p>
                <div class="video-line video-line--left"></div>
                <div class="video-line video-line--right"></div>
            </li>
            <li class="image-wall__item"></li>
            <li class="image-wall__item"></li>
        </ul>
        <no-ssr>
            <gallery :images="galleryVideo" :index="galleryIndex" @close="galleryIndex = null"></gallery>
        </no-ssr>
    </section>
</template>

<script>
export default {
    name: "sectionImageWall",
    data() {
        return {
            galleryIndex: null,
            galleryVideo: [
                {
                    title: "MOPCON 2019 宣傳片",
                    href: "https://www.youtube.com/watch?v=OgS8GJSWHgc",
                    type: "text/html",
                    youtube: "OgS8GJSWHgc",
                    poster:
                        "https://scontent.ftpe8-4.fna.fbcdn.net/v/t1.0-9/64367484_2119386408187064_4329139962772455424_o.jpg?_nc_cat=111&_nc_ht=scontent.ftpe8-4.fna&oh=75605108075ccdb151e7971b3efea113&oe=5DBC6173"
                }
            ]
        };
    }
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
