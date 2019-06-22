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
</style>
