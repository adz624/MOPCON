<template>
    <div class="index">
        <Navbar />

        <Hero id="sectionHero" />

        <!-- section image wall -->
        <SectionImageWall id="sectionImageWall" />

        <!-- section about -->
        <SectionAbout id="sectionAbout" />

        <!-- section place -->
        <SectionPlace id="sectionPlace" />

        <!-- section 贊助區塊 -->
        <SectionSponsor id="sectionSponsor" />

        <!-- section 歷年 MOPCON -->
        <SectionPastYears id="sectionPastYears" />
    </div>
</template>

<script>
import Navbar from "~/components/Navbar";
import Hero from "~/components/Hero";
import SectionImageWall from "~/components/SectionImageWall";
import SectionAbout from "~/components/SectionAbout";
import SectionPlace from "~/components/SectionPlace";
import SectionSponsor from "~/components/SectionSponsor";
import SectionPastYears from "~/components/SectionPastYears";

export default {
    name: "pageIndex",
    components: {
        Navbar,
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
