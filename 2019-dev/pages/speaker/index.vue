<template>
    <div class="speaker">
        <div class="speaker__banner"></div>
        <div class="section">
            <h2 class="title"><span>{ 驅動高速資訊交流圈</span><span class="color-primary">的佼佼者們</span><span>; }</span></h2>
            <p class="intro">每年我們都邀請了超過 25 位講師來到現場，包含知名的前端開發者、軟體工程師、資深架構師、設計師，以及專案經理等等，讓這場活動更加多元，也貫徹 MOPCON 的精神，使參與的會眾都能從中獲得養分，甚至達到近一步的交流。</p>
            <SectionMasterSpeaker id="sectionMasterSpeaker" />
        </div>
        <SectionApp />
    </div>
</template>

<script>
import SectionMasterSpeaker from "./SectionMasterSpeaker";
import SectionApp from '~/components/SectionApp';

export default {
    components: {
        SectionMasterSpeaker,
        SectionApp,
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
