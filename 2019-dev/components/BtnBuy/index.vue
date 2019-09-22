<template>
    <a class="btnBuy" :href="link">
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
            default: 'ticket',
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
