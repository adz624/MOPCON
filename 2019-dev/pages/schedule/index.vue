<template>
    <div class="schedule">
        <div class="schedule__banner"></div>
        <div class="schedule__content">
        </div>
        <SectionApp />
    </div>
</template>

<script>
import SectionApp from '~/components/SectionApp';

export default {
    name: 'schedule',
    components: {
        SectionApp,
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
