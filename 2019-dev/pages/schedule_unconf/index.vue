<template>
    <div class="schedule schedule-unconf">
        <div class="schedule__banner"></div>
        <h1>scheduleUnconf</h1>
        <SectionApp />
    </div>
</template>

<script>
import SectionApp from '~/components/SectionApp';

export default {
    name: 'scheduleUnconf',
    components: {
        SectionApp,
    },
    beforeRouteEnter: (to, from, next) => {
        if (!process.env.routeScheduleUnconf) return next('/');
        next();
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
