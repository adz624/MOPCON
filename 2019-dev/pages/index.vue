<template>
    <div class="index">
        <Hero />

        <!-- section image wall -->
        <SectionImageWall />

        <!-- section about -->
        <SectionAbout />

        <!-- section place -->
        <SectionPlace />

        <!-- section 贊助區塊 -->
        <SectionSponsor />

        <!-- section 歷年 MOPCON -->
        <SectionPastYears />
    </div>
</template>

<script>
import Hero from "~/components/Hero";
import SectionImageWall from "~/components/SectionImageWall";
import SectionAbout from "~/components/SectionAbout";
import SectionPlace from "~/components/SectionPlace";
import SectionSponsor from "~/components/SectionSponsor";
import SectionPastYears from "~/components/SectionPastYears";

export default {
    name: "pageIndex",
    components: {
        Hero,
        SectionImageWall,
        SectionAbout,
        SectionPlace,
        SectionSponsor,
        SectionPastYears
    }
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
