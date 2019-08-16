<template>
    <div class="layout">
        <Header />
        <nuxt />
        <Footer />
    </div>
</template>

<script>
import Footer from '~/components/Footer';
import Header from '~/components/Header';

export default {
    name: 'layout',
    components: {
        Footer,
        Header,
    },
};
</script>

<style lang="scss">
.layout {
    overflow-x: hidden;
    background-color: $colorBg;
    padding-top: 67px;
    @include rwd(pad) {
        padding-top: 47px;
    }
}

.section {
    width: 100%;
    max-width: 1020px;
    margin: 0 auto;
    padding: 0 25px;
    .title {
        @include rwd(pad) {
            font-size: 32px;
            letter-spacing: 1.6px;
        }
    }
}

// 頁面切換轉場效果
.page-enter-active,
.page-leave-active {
    transition: all 0.6s;
}

.page-enter,
.page-leave-active {
    opacity: 0;
    filter: blur(3px);
    @include rwd(pad) {
        filter: none;
    }
}

.fb-share__btn {
    display: inline-block;
    min-width: 211px;
    min-height: 65px;
    padding: 0 30px;
    backface-visibility: hidden;
    transition: all 0.15s;
    line-height: 65px;
    text-align: center;
    user-select: none;
    outline: none;
    -webkit-user-drag: none;
    cursor: pointer;
    z-index: 1;
    @include rwd(pad) {
        min-width: 146px;
        min-height: 45px;
        line-height: 45px;
    }
    &:hover {
        transform: translate(3px, 3px);
        @include rwd(pad) {
            transform: translate(2px, 2px);
        }
        &:after {
            transform: translate(0, 0);
        }
    }
    &:hover:active {
        &:before {
            background-color: #17273e;
        }
    }
    &:before,
    &:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 14px;
        @include rwd(pad) {
            border-radius: 8px;
        }
    }
    &:after {
        transform: translate(10px, 13px);
        transition: all 0.15s;
        background-color: $colorPrimary;
        opacity: 0.19;
        z-index: -2;
        @include rwd(pad) {
            transform: translate(6px, 8px);
        }
    }
    &:before {
        border: solid 1px $colorPrimary;
        background-color: $colorBg;
        z-index: -1;
    }
}
</style>
