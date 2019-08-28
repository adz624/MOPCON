<template>
    <div class="card" :class="type">
        <div class="card__head">{{cardData.room}}({{cardData.floor}})</div>
        <div class="card__content">

            <!-- 課程類型標籤 -->
            <div class="card__content__tags">
                <div class="card__content__tag filter-btn-primary active"
                    :style="`backgroundColor: ${tag.color}`"
                    v-for="tag in cardData.tags"
                    :key="tag.name"
                    @click="handleTagClick(tag.name)">
                    {{tag.name}}
                </div>
            </div>

            <h3 class="card__content__name">{{cardData.topic}}</h3>

            <!-- 提示標籤 -->
            <div class="card__content__promptTags">
                <div class="tag-btn-secondary" v-if="cardData.is_sponsor_session">夥伴議程</div>
                <div class="tag-btn-third" v-if="!cardData.recordable">禁止攝影</div>
                <div class="tag-btn-primary" v-if="cardData.level">{{cardData.level}}</div>
            </div>

            <!-- 講者介紹 -->
            <div class="card__content__speaker">
                <img class="card__content__speaker__avatar"
                    :src="cardData.img.mobile"
                    :alt="cardData.name">
                <div class="card__content__speaker__name">{{cardData.name}}</div>
            </div>
        </div>
        <div class="card__btn"></div>
    </div>
</template>

<script>
export default {
    name: 'card',
    props: {
        type: {
            type: String,
            default: 'big',
        },
        cardData: {
            type: Object,
            required: true,
        },
    },
    methods: {
        handleTagClick(id) {
            this.$emit('onTagClick', id);
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
