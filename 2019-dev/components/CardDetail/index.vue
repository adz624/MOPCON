<template>
    <div class="cardDetail">
        <div class="cardDetail__time">
            <span>{{formatFloorRoom}}</span>
            <span>{{(cardData.started_at * 1000) | moment("HH mm")}} - {{(cardData.ended_at * 1000) | moment("HH mm")}}</span>
        </div>

        <!-- 課程類型標籤 -->
        <div class="cardDetail__tags">
            <div class="cardDetail__tag filter-btn-primary active"
                :style="`backgroundColor: ${tag.color}`"
                v-for="tag in cardData.tags"
                :key="tag.name"
                @click="handleTagClick(tag.name)">
                {{tag.name}}
            </div>
        </div>

        <h2 class="cardDetail__title">{{cardData[`topic${langPrefix}`]}}</h2>
        <p class="cardDetail__desc">{{cardData[`summary${langPrefix}`]}}</p>

        <!-- 提示標籤 -->
        <div class="cardDetail__promptTags">
            <div class="tag-btn-secondary" v-if="cardData.sponsor_id">{{$t('pages.schedule.sponsor')}}</div>
            <div class="tag-btn-third" v-if="!cardData.recordable">{{$t('pages.schedule.noVedio')}}</div>
            <div class="tag-btn-primary" v-if="cardData.level">{{cardData.level}}</div>
        </div>

        <!-- 講者介紹 -->
        <div class="cardDetail__speaker">
            <img class="cardDetail__speaker__avatar"
                :src="cardData.img.mobile"
                :alt="cardData[`name${langPrefix}`]">
            <div class="cardDetail__speaker__info">
                <div class="cardDetail__speaker__info__name">{{cardData[`name${langPrefix}`]}}</div>
                <div class="cardDetail__speaker__info__company">{{cardData[`company${langPrefix}`]}}</div>
                <div class="cardDetail__speaker__info__job">{{cardData[`job_title${langPrefix}`]}}</div>
            </div>
        </div>
        <div class="cardDetail__btn"
            v-clipboard:copy="detailUrl"
            v-clipboard:success="onCopy"
            v-clipboard:error="onError">
            {{$t('pages.schedule.sharingSchedule')}}
        </div>
    </div>
</template>

<script>
export default {
    name: 'cardDetail',
    props: {
        langPrefix: {
            type: String,
            default: '',
        },
        detailUrl: {
            type: String,
            default: '',
        },
        cardData: {
            type: Object,
            default: true,
        },
    },
    computed: {
        formatFloorRoom() {
            const { floor, room } = this.cardData;
            if (!floor || !room) return;

            if (this.$i18n.locale === 'zh') {
                const roomTemp = room
                    .replace('R', '')
                    .replace('1', '一廳')
                    .replace('2', '二廳')
                    .replace('3', '三廳')
                    .replace('4', '四廳');
                return `${floor}${roomTemp}`;
            } else {
                return `${floor} ${room}`;
            }
        },
    },
    methods: {
        onCopy() {
            alert(this.$t('pages.schedule.scheduleCopySuccess'));
        },
        onError: function(e) {
            alert(this.$t('pages.schedule.scheduleCopyFail'));
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
