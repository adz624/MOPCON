<template>
    <div class="card" :class="type">
        <div class="card__head">{{cardData.room}}({{cardData.location}})</div>
        <div class="card__content">

            <!-- 課程類型標籤 -->
            <div class="card__content__tags">
                <template v-if="cardData.tags_tech.length > 0">
                    <div class="card__content__tag filter-btn-primary active"
                        v-for="tech in cardData.tags_tech"
                        :key="tech">
                        {{formatTagName(tech)}}
                    </div>
                </template>
                <template v-if="cardData.tags_design.length > 0">
                    <div class="card__content__tag filter-btn-secondary active"
                        v-for="design in cardData.tags_design"
                        :key="design">
                        {{formatTagName(design)}}
                    </div>
                </template>
                <template v-if="cardData.tags_other.length > 0">
                    <div class="card__content__tag filter-btn-third   active"
                        v-for="other in cardData.tags_other"
                        :key="other">
                        {{formatTagName(other)}}
                    </div>
                </template>
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
                    :src="cardData.photo_for_session_web"
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
        tags: {
            type: Array,
            required: true,
        },
    },
    methods: {
        formatTagName(val) {
            const tag = this.tags.find(tag => tag.id === val);
            return tag ? tag.name : val;
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
