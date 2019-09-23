<template>
    <div class="section section-sponsorCore">
        <h2 class="title"><span>{ 核心</span><span class="color-primary">贊助商夥伴</span><span>; }</span></h2>
        <ul class="sponsors">
            <li class="sponsors__item"
                v-for="(item, index) in sponsors"
                :key="index"
                :style="`background-image: url(${require(`./images/${item.img}`)})`">
                <div class="sponsors__item__tag">
                    <span>連續贊助</span>
                    <span> {{item.year}} </span>
                    <span>年</span>
                </div>
            </li>
        </ul>
        <a href="sponsor" class="section-sponsorCore__more">更多贊助商夥伴</a>
    </div>
</template>

<script>
export default {
    name: 'sectionSponsorCore',
    data() {
        return {
            sponsors: [
                {
                    img: 'kkbox.png',
                    year: '8',
                },
                {
                    img: 'verizon-media.png',
                    year: '3',
                },
                {
                    img: 'aws.png',
                    year: '2',
                },
                {
                    img: 'pumo.png',
                    year: '4',
                },
            ],
        };
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
