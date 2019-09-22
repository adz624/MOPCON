<template>
    <a class="btnBuy" v-if="!isHide" :href="link" target="_blank">
        <div class="btnBuy__text">
            我要<br>購票
        </div>
    </a>
</template>

<script>
export default {
    name: 'btnBuy',
    props: {
        link: {
            type: String,
            default:
                'https://kktix.com/events?utf8=%E2%9C%93&search=mopcon&start_at=2019%2F09%2F22',
        },
    },
    computed: {
        isHide() {
            return this.$route.name === 'ticket' ? true : false;
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
