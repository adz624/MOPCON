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

            <h3 class="card__content__name">{{cardData[`topic${langPrefix}`]}}</h3>

            <!-- 提示標籤 -->
            <div class="card__content__promptTags">
                <div class="tag-btn-secondary" v-if="cardData.is_sponsor_session">{{$t('pages.schedule.sponsor')}}</div>
                <div class="tag-btn-third" v-if="!cardData.recordable">{{$t('pages.schedule.noRecording')}}</div>
                <div class="tag-btn-primary" v-if="cardData.level">{{cardData.level}}</div>
            </div>

            <!-- 講者介紹 -->
            <div class="card__content__speaker">
                <img class="card__content__speaker__avatar"
                    :src="cardData.img.mobile"
                    :alt="cardData[`name${langPrefix}`]">
                <div class="card__content__speaker__name">{{cardData[`name${langPrefix}`]}}</div>
            </div>
        </div>
        <div class="card__btn" @click="handleShowDetail(cardData.session_id)"></div>
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
        langPrefix: {
            type: String,
            default: '',
        },
    },
    methods: {
        handleTagClick(id) {
            this.$emit('onTagClick', id);
        },
        handleShowDetail(id) {
            this.$emit('onShowDetail', id);
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
