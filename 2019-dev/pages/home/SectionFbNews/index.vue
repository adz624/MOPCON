<template>
    <section class="section section-fb-news">
        <h2 class="title">{ 最新動態 ; }</h2>
        <iframe src='https://www.juicer.io/api/feeds/mopcon/iframe' frameborder='0' width='1000' height='1000' style='display:block;margin:0 auto;'></iframe>
        <a class="section-fb-news__link" href="https://www.facebook.com/mopcon/" target="_blank">
            <span>VIEW MORE ON FACEBOOK</span>
            <IconLink class="section-fb-news__link__icon" />
        </a>
    </section>
</template>

<script>
import IconLink from './svg/icon-link.svg'

export default {
    name: 'fb-news',
    components: {
        IconLink
    }
}
</script>

<style lang="scss">
h1.referral {
    display: none !important;
}
</style>
<style lang="scss" src="./style.scss" scoped></style>
