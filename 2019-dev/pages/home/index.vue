<template>
    <div class="index">
        <Navbar />

        <SectionHero id="sectionHero" />

        <!-- section image wall -->
        <SectionImageWall id="sectionImageWall" />

        <!-- section about -->
        <SectionAbout id="sectionAbout" />

        <!-- section place -->
        <SectionPlace id="sectionPlace" />

        <!-- section 贊助區塊 -->
        <SectionSponsor id="sectionSponsor" />

        <!-- section fb 動態牆 -->
        <SectionFbNews id="sectionFbNews" />

        <!-- section 歷年 MOPCON -->
        <SectionPastYears id="sectionPastYears" />
    </div>
</template>

<script>
import Navbar from "~/components/Navbar";
import SectionHero from "./SectionHero";
import SectionImageWall from "./SectionImageWall";
import SectionAbout from "./SectionAbout";
import SectionPlace from "./SectionPlace";
import SectionSponsor from "./SectionSponsor";
import SectionFbNews from "./SectionFbNews";
import SectionPastYears from "./SectionPastYears";

export default {
    name: "pageIndex",
    components: {
        Navbar,
        SectionHero,
        SectionImageWall,
        SectionAbout,
        SectionPlace,
        SectionSponsor,
        SectionFbNews,
        SectionPastYears
    }
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
