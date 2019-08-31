<template>
    <div class="schedule">
        <div class="schedule__banner"></div>
        <section class="schedule__desc">
            <h1 class="title schedule__desc__title"><span class="icon-brackets">{{$t('pages.schedule.title[1]')}}</span>{{$t('pages.schedule.title[2]')}}<span class="color-primary">{{$t('pages.schedule.title[3]')}}</span>; }</h1>
            <p class="schedule__desc__text">{{$t('pages.schedule.desc')}}</p>
        </section>

        <!-- 搜尋按鈕區 -->
        <section class="schedule__tool">

            <div class="schedule__tool__date">
                <div class="btn-group">
                    <button class="btn-primary"
                        :class="{active: checkDateExist(dateBtn.id)}"
                        @click="handleDateClick(dateBtn.id)"
                        v-for="dateBtn in filterDateBtns"
                        :key="dateBtn.id">{{dateBtn[`name${langPrefix}`]}}</button>
                </div>
            </div>

            <div class="schedule__tool__keyword">
                <div
                    :class="[`filter-btn-${keywordBtn.style}`, {active: checkKeywordExist(keywordBtn.id)}]"
                    @click="handleKeywordClick(keywordBtn.id)"
                    v-for="keywordBtn in filterKeywordBtns"
                    :key="keywordBtn.id">{{$t(`pages.schedule.tags.${keywordBtn.id.split(' ').join('')}`)}}</div>
            </div>

            <div v-if="filterKeyword.length > 0" class="schedule__tool__clear" @click="filterKeyword = []">清除篩選</div>
        </section>

        <!-- 課程標籤說明 -->
        <section class="schedule__tagDesc"
            v-if="sessionDisplayType === 'timelist' || (sessionDisplayType !== 'timelist' && selectSessionDateAndKeyword.length > 0)">
            <div class="schedule__tagDesc__item">
                <div class="schedule__tagDesc__item__tag"><span>Basic</span></div>
                <span class="schedule__tagDesc__item__text">{{$t('pages.schedule.levelDesc.basic')}}</span>
            </div>
            <div class="schedule__tagDesc__item">
                <div class="schedule__tagDesc__item__tag"><span>Normal</span></div>
                <span class="schedule__tagDesc__item__text">{{$t('pages.schedule.levelDesc.normal')}}</span>
            </div>
            <div class="schedule__tagDesc__item">
                <div class="schedule__tagDesc__item__tag"><span>Expert</span></div>
                <span class="schedule__tagDesc__item__text">{{$t('pages.schedule.levelDesc.expert')}}</span>
            </div>
        </section>

        <!--  議程時間表區塊 -->
        <section class="schedule__timeList" v-if="selectSessionDate && sessionDisplayType === 'timelist'">
            <TimeList :contentType="session.event ? 'title': 'card'"
                :hasTime="session.started_at ? true : false"
                v-for="(session, index) in selectSessionDate.period" :key="`sessionId-${index}`">
                <template slot="time" v-if="session.started_at">{{(session.started_at * 1000) | moment("HH mm")}} - {{(session.ended_at * 1000) | moment("HH mm")}}</template>
                <template slot="content-title" v-if="session.room.length === 0">{{session.event}}</template>
                <template slot="content-card" v-else>
                    <!-- 有議程內容，且是滿板一個內容 -->
                    <template v-if="session.isBroadCast">
                        <Card :cardData="session.room[0]"
                            :langPrefix="langPrefix"
                            @onTagClick="handleKeywordClick" />
                    </template>
                    <!-- 有議程內容，是多個議程內容 -->
                    <template v-else>
                        <Card v-for="room in session.room"
                            :cardData="room"
                            type="small"
                            :langPrefix="langPrefix"
                            :key="room.session_id"
                            @onTagClick="handleKeywordClick" />
                    </template>
                </template>
            </TimeList>
        </section>

        <!-- 議程搜尋結果列表 - 不使用 timelist 樣式 -->
        <section class="schedule__filter" v-if="selectSessionDate && selectSessionDateAndKeyword.length > 0 && sessionDisplayType !== 'timelist'">
            <Card v-for="sessionCard in selectSessionDateAndKeyword"
                class="schedule__filter__card"
                :cardData="sessionCard"
                type="small"
                :langPrefix="langPrefix"
                :key="sessionCard.session_id"
                @onTagClick="handleKeywordClick" />
        </section>

        <section class="schedule__empty" v-if="isEmpty">
            <div class="schedule__empty__bg"></div>
            <h3 class="schedule__empty__title">Oops！沒有符合篩選的議程哦！</h3>
        </section>

        <!-- 手機版時間切換鈕 -->
        <section class="schedule__tool mobile" v-if="!isEmpty">
            <div class="schedule__tool__date">
                <div class="btn-group">
                    <button class="btn-primary"
                        :class="{active: checkDateExist(dateBtn.id)}"
                        @click="handleDateClick(dateBtn.id)"
                        v-for="dateBtn in filterDateBtns"
                        :key="dateBtn.id">{{dateBtn.name}}</button>
                </div>
            </div>
        </section>

        <SectionApp />
    </div>
</template>

<script>
import SectionApp from '~/components/SectionApp';
import TimeList from './TimeList';
import Card from '~/components/Card';
import { mapGetters } from 'vuex';

export default {
    name: 'schedule',
    scrollToTop: false,
    components: {
        SectionApp,
        TimeList,
        Card,
    },
    data() {
        return {
            filterKeyword: [],
            filterDate: 1571414400,
            filterDateBtns: [
                {
                    id: 1571414400,
                    name: '10/19 (六)',
                    name_e: '10/19 (Sat)',
                },
                {
                    id: 1571500800,
                    name: '10/20 (日)',
                    name_e: '10/20 (Sun)',
                },
            ],
            filterKeywordBtns: [
                {
                    id: 'ai',
                    name: '人工智慧',
                    style: 'primary',
                },
                {
                    id: 'investment',
                    name: '量化投資',
                    style: 'primary',
                },
                {
                    id: 'mobile app',
                    name: 'Mobile',
                    style: 'primary',
                },
                {
                    id: 'web',
                    name: 'Web',
                    style: 'primary',
                },
                {
                    id: 'cloud',
                    name: 'Cloud',
                    style: 'primary',
                },
                {
                    id: 'blockchain',
                    name: 'Blockchain',
                    style: 'primary',
                },
                {
                    id: 'devpps',
                    name: 'DevOps',
                    style: 'primary',
                },
                {
                    id: 'iot',
                    name: 'IoT',
                    style: 'primary',
                },
                {
                    id: 'ui/ux',
                    name: 'UI/UX',
                    style: 'secondary',
                },
                {
                    id: 'startup',
                    name: 'Startup',
                    style: 'third',
                },
            ],
        };
    },
    computed: {
        ...mapGetters(['sessionData', 'localeApiPrefix']),
        // 依據當前所選語系, 選擇對應的語系資料 (name, name_e)
        // zh => '',  en => '_e'
        langPrefix() {
            const apiPrefix = this.localeApiPrefix.find(
                item => item.lang === this.$i18n.locale
            );

            if (apiPrefix) return apiPrefix.prefix;
            return '';
        },
        // 議程內容顯示樣式 timelist(時間列表) / cardlist(卡片列表)
        sessionDisplayType() {
            if (this.filterKeyword.length === 0) return 'timelist';
            return 'cardlist';
        },
        // 議程 timelist 顯示資料格式
        selectSessionDate() {
            if (this.sessionData.length === 0) return;
            let temp = {};
            // 搜尋時間
            if (this.filterDate) {
                temp = this.sessionData.find(
                    session => session.date === this.filterDate
                );
                if (!temp) return;
            }

            return temp;
        },
        // 議程卡片 cardlist 顯示資料格式 回傳陣列
        selectSessionDateAndKeyword() {
            if (this.sessionData.length === 0) return;
            let temp = {};
            let sessions = [];

            // 搜尋時間
            if (this.filterDate) {
                temp = this.sessionData.find(
                    session => session.date === this.filterDate
                );
            }

            // 抓出有議程內容, 整理成陣列
            // event 無資訊表示為有議程內容;
            temp.period.forEach(item => {
                if (item.room && item.room.length > 0) {
                    sessions = [...sessions, ...item.room];
                }
            });

            // 篩選出當前選中議程 tag
            sessions = this.filterSessionKeyword(sessions);

            // 依時間排序 時間搓小 > 大
            sessions.sort((a, b) => a.started_at - b.started_at);

            return sessions;
        },
        isEmpty() {
            if (this.sessionData && this.sessionData.length > 0) {
                // 依據當前顯示樣式，判斷不同資料
                if (this.sessionDisplayType === 'timelist') {
                    if (this.selectSessionDate) return false;
                } else {
                    if (this.selectSessionDateAndKeyword.length > 0)
                        return false;
                }
            }
            return true;
        },
    },
    keywordActive(keywordId) {
        return this.checkKeywordExist(keywordId);
    },
    created() {
        this.$store.dispatch('getSessionData');
    },
    methods: {
        checkDateExist(dateId) {
            if (this.filterDate === dateId) return true;
            return false;
        },
        checkKeywordExist(keywordId) {
            const keywordIndex = this.filterKeyword.findIndex(
                id => id === keywordId
            );

            return keywordIndex !== -1;
        },
        handleKeywordClick(keywordId) {
            if (!this.selectSessionDate) return;

            const keyword = keywordId.toLowerCase();
            const isExist = this.checkKeywordExist(keyword);

            if (isExist) {
                // 已存在, 刪除
                const index = this.filterKeyword.findIndex(
                    id => id === keyword
                );
                this.filterKeyword.splice(index, 1);
            } else {
                // 不存在, 新增
                this.filterKeyword.push(keyword);
            }
        },
        handleDateClick(dateId) {
            const isExist = this.sessionData.some(item => item.date === dateId);
            if (!isExist) return;

            this.filterDate = dateId;
        },
        // 篩選出當前所選取的議程類型資訊
        filterSessionKeyword(sessions) {
            let items = [];

            items = sessions.filter(item => {
                // 判斷是否有符合 tags
                return item.tags.some(tag => {
                    return this.filterKeyword.some(tag2 => {
                        return tag.name.toLowerCase() === tag2.toLowerCase();
                    });
                });
            });

            return items;
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
