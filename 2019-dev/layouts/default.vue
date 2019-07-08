<template>
    <div class="layout">
        <nuxt />
        <Footer />
    </div>
</template>

<script>
import Footer from "~/components/Footer";

export default {
    name: "layout",
    components: {
        Footer
    }
};
</script>

<style lang="scss">
.layout {
    overflow-x: hidden;
    background-color: $colorBg;
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
</style>
