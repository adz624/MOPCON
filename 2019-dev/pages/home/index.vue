<template>
    <div class="index">
        <SectionHero id="sectionHero" />

        <!-- section image wall -->
        <SectionImageWall id="sectionImageWall" />

        <!-- section speaker -->
        <SectionSpeaker id="sectionSpeaker" />

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

        <Navbar :isReady="isReady" />
    </div>
</template>

<script>
import Navbar from '~/components/Navbar';
import SectionHero from './SectionHero';
import SectionImageWall from './SectionImageWall';
import SectionSpeaker from './SectionSpeaker';
import SectionAbout from './SectionAbout';
import SectionPlace from './SectionPlace';
import SectionSponsor from './SectionSponsor';
import SectionFbNews from './SectionFbNews';
import SectionPastYears from './SectionPastYears';

export default {
    name: 'pageIndex',
    computed: {
        isReady() {
            return this.$store.getters.homePageReady;
        },
    },
    components: {
        Navbar,
        SectionHero,
        SectionImageWall,
        SectionSpeaker,
        SectionAbout,
        SectionPlace,
        SectionSponsor,
        SectionFbNews,
        SectionPastYears,
    },
    mounted() {
        this.$store.commit('updateHomePageReady', true);
    },
    beforeDestroy() {
        this.$store.commit('updateHomePageReady', false);
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
