<template>
    <div class="schedule">
        <div class="schedule__banner"></div>
        <section class="schedule__desc">
            <h1 class="title schedule__desc__title"><span class="icon-brackets">每一場都讓你</span>收穫滿滿的<span class="color-primary">議程規劃</span>; }</h1>
            <p class="schedule__desc__text">MOPCON 目前已是南台灣最大技術社群研討會，成立宗旨為連結產業與資訊工程技術，以培養更多資訊科技人才，推動高雄產業創新發展，而沒有夥伴們的支持，這個願景就不可能成真！謝謝這 7 年來每一位夥伴的加入，和我們一起凝聚南臺灣的人才和知識，共同成長、學習！</p>
        </section>

        <!-- 搜尋按鈕區 -->
        <section class="schedule__tool">

            <div class="schedule__tool__date">
                <div class="btn-group">
                    <button class="btn-primary"
                        :class="{active: checkDateExist(dateBtn.id)}"
                        @click="handleDateClick(dateBtn.id)"
                        v-for="dateBtn in filterDateBtns"
                        :key="dateBtn.id">{{dateBtn.name}}</button>
                </div>
            </div>

            <div class="schedule__tool__keyword">
                <div
                    :class="[`filter-btn-${keywordBtn.style}`, {active: checkKeywordExist(keywordBtn.id)}]"
                    @click="handleKeywordClick(keywordBtn.id)"
                    v-for="keywordBtn in filterKeywordBtns"
                    :key="keywordBtn.id">{{keywordBtn.name}}</div>
            </div>

            <div v-if="filterKeyword.length > 0" class="schedule__tool__clear" @click="filterKeyword = []">清除篩選</div>
        </section>

        <!-- 課程標籤說明 -->
        <section class="schedule__tagDesc"
            v-if="sessionDisplayType === 'timelist' || (sessionDisplayType !== 'timelist' && selectSessionDateAndKeyword.length > 0)">
            <div class="schedule__tagDesc__item">
                <div class="schedule__tagDesc__item__tag"><span>Basic</span></div>
                <span class="schedule__tagDesc__item__text">外行人可以藉此入門</span>
            </div>
            <div class="schedule__tagDesc__item">
                <div class="schedule__tagDesc__item__tag"><span>Normal</span></div>
                <span class="schedule__tagDesc__item__text">歡迎略懂，有基礎的會眾</span>
            </div>
            <div class="schedule__tagDesc__item">
                <div class="schedule__tagDesc__item__tag"><span>Expert</span></div>
                <span class="schedule__tagDesc__item__text">建議在該領域中有研究經驗的人入場</span>
            </div>
        </section>

        <!--  議程時間表區塊 -->
        <section class="schedule__timeList" v-if="selectSessionDate && sessionDisplayType === 'timelist'">
            <TimeList :contentType="session.event ? 'title': 'card'"
                :hasTime="session.started_at ? true : false"
                v-for="(session, index) in selectSessionDate.period" :key="`${selectSessionDate.date}-sessionId-${index}`">
                <template slot="time" v-if="session.started_at">{{(session.started_at * 1000) | moment("HH mm")}} - {{(session.ended_at * 1000) | moment("HH mm")}}</template>
                <template slot="content-title" v-if="session.event">{{session.event}}</template>
                <template slot="content-card" v-else>
                    <!-- 有議程內容，且是滿板一個內容 -->
                    <template v-if="session.room.All">
                        <Card :cardData="session.room.All"
                            :tags="filterKeywordBtns" />
                    </template>
                    <!-- 有議程內容，是多個議程內容 -->
                    <template v-else>
                        <Card v-for="(room, index) in session.room"
                            :cardData="room"
                            type="small"
                            :tags="filterKeywordBtns"
                            :key="`${room.session_id}-${index}`" />
                    </template>
                </template>
            </TimeList>
        </section>

        <!-- 議程搜尋結果列表 - 不使用 timelist 樣式 -->
        <section class="schedule__filter" v-if="selectSessionDate && selectSessionDateAndKeyword.length > 0 && sessionDisplayType !== 'timelist'">
            <Card v-for="(sessionCard, index) in selectSessionDateAndKeyword"
                class="schedule__filter__card"
                :cardData="sessionCard"
                type="small"
                :tags="filterKeywordBtns"
                :key="`${sessionCard.session_id}-${index}`" />
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
    components: {
        SectionApp,
        TimeList,
        Card,
    },
    data() {
        return {
            filterKeyword: [],
            filterDate: '1571414400',
            filterDateBtns: [
                {
                    id: '1571414400',
                    name: '10/19 (六)',
                },
                {
                    id: '1571500800',
                    name: '10/20 (日)',
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
                    id: 'mobile',
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
            sessionDataTemp: [
                {
                    date: '1571414400',
                    period: [
                        {
                            started_at: '1571445000',
                            ended_at: '1571446800',
                            event: '報到',
                            room: {},
                        },
                        {
                            started_at: '1571446800',
                            ended_at: '1571447700',
                            event: '開幕',
                            room: {},
                        },
                        {
                            started_at: '1571447700',
                            ended_at: '1571450400',
                            event: '',
                            room: {
                                All: {
                                    session_id: 1,
                                    room: 'R2',
                                    location: '4F二廳',
                                    speaker_id: 1,
                                    name: 'Lennert Nijenbijvank',
                                    name_e: 'Hilbert Boyle',
                                    company: '大國集團公司',
                                    company_e: 'Da Kao',
                                    job_title: 'incidunt',
                                    job_title_e: 'incidunt',
                                    photo_for_session_web:
                                        'https://picsum.photos/200',
                                    photo_for_session_mobile:
                                        'https://picsum.photos/200',
                                    topic:
                                        '複合框架遷徙的正確姿勢 — AngularJS 到 React',
                                    topic_e: 'Est aliquid sed eum quae in.',
                                    started_at: '1571446800',
                                    ended_at: '1571450400',
                                    tags_tech: ['ai', 'cloud'],
                                    tags_design: ['UI/UX'],
                                    tags_other: [],
                                    is_keynote: true,
                                    is_sponsor_session: true,
                                    recordable: false,
                                    level: 'Basic',
                                },
                            },
                        },
                        {
                            started_at: '1571446800',
                            ended_at: '1571447700',
                            event: '休息',
                            room: {},
                        },
                        {
                            started_at: '1571447700',
                            ended_at: '1571450400',
                            room: {
                                R1: {
                                    session_id: 2,
                                    room: 'R1',
                                    location: '3F一廳',
                                    speaker_id: 1,
                                    name: '家佳',
                                    name_e: 'Hilbert Boyle',
                                    company: '大國集團公司',
                                    company_e: 'Da Kao',
                                    job_title: 'incidunt',
                                    job_title_e: 'incidunt',
                                    photo_for_session_web:
                                        'https://picsum.photos/200',
                                    photo_for_session_mobile:
                                        'https://picsum.photos/200',
                                    topic: 'Maxime nesciunt.',
                                    topic_e: 'Est aliquid sed eum quae in.',
                                    started_at: '1571447800',
                                    ended_at: '1571450400',
                                    tags_tech: ['ai', 'cloud'],
                                    tags_design: ['UI/UX'],
                                    tags_other: [],
                                    is_keynote: true,
                                    is_sponsor_session: true,
                                    recordable: true,
                                    level: 'Basic',
                                },
                                R2: {
                                    session_id: 3,
                                    room: 'R2',
                                    location: '4F二廳',
                                    speaker_id: 1,
                                    name: '家佳',
                                    name_e: 'Hilbert Boyle',
                                    company: '大國集團公司',
                                    company_e: 'Da Kao',
                                    job_title: 'incidunt',
                                    job_title_e: 'incidunt',
                                    photo_for_session_web:
                                        'https://picsum.photos/200',
                                    photo_for_session_mobile:
                                        'https://picsum.photos/200',
                                    topic: 'Maxime nesciunt.',
                                    topic_e: 'Est aliquid sed eum quae in.',
                                    started_at: '1571446800',
                                    ended_at: '1571450400',
                                    tags_tech: ['ai', 'cloud'],
                                    tags_design: ['UI/UX'],
                                    tags_other: [],
                                    is_keynote: true,
                                    is_sponsor_session: true,
                                    recordable: true,
                                    level: 'Basic',
                                },
                                R3: {
                                    session_id: 4,
                                    room: 'R2',
                                    location: '4F三廳',
                                    speaker_id: 1,
                                    name: '家佳',
                                    name_e: 'Hilbert Boyle',
                                    company: '大國集團公司',
                                    company_e: 'Da Kao',
                                    job_title: 'incidunt',
                                    job_title_e: 'incidunt',
                                    photo_for_session_web:
                                        'https://picsum.photos/200',
                                    photo_for_session_mobile:
                                        'https://picsum.photos/200',
                                    topic: 'Maxime nesciunt.',
                                    topic_e: 'Est aliquid sed eum quae in.',
                                    started_at: '1571446800',
                                    ended_at: '1571450400',
                                    tags_tech: ['ai', 'cloud'],
                                    tags_design: ['UI/UX'],
                                    tags_other: ['Startup'],
                                    is_keynote: true,
                                    is_sponsor_session: true,
                                    recordable: true,
                                    level: 'Basic',
                                },
                            },
                        },
                        {
                            started_at: '',
                            ended_at: '',
                            event: 'END',
                            room: {},
                        },
                        {
                            started_at: '',
                            ended_at: '',
                            event: '講者晚宴',
                            room: {},
                        },
                    ],
                },
                {
                    date: '1571500800',
                    period: [
                        {
                            started_at: '1571445000',
                            ended_at: '1571446800',
                            event: '報到10/20',
                            room: {},
                        },
                        {
                            started_at: '1571446800',
                            ended_at: '1571447700',
                            event: '開幕10/20',
                            room: {},
                        },
                        {
                            started_at: '1571447700',
                            ended_at: '1571450400',
                            event: '',
                            room: {
                                All: {
                                    session_id: 5,
                                    room: 'R2',
                                    location: '4F二廳',
                                    speaker_id: 1,
                                    name: 'Lennert Nijenbijvank',
                                    name_e: 'Hilbert Boyle',
                                    company: '大國集團公司',
                                    company_e: 'Da Kao',
                                    job_title: 'incidunt',
                                    job_title_e: 'incidunt',
                                    photo_for_session_web:
                                        'https://picsum.photos/200',
                                    photo_for_session_mobile:
                                        'https://picsum.photos/200',
                                    topic:
                                        '複合框架遷徙的正確姿勢 — AngularJS 到 React',
                                    topic_e: 'Est aliquid sed eum quae in.',
                                    started_at: '1571446800',
                                    ended_at: '1571450400',
                                    tags_tech: ['ai', 'cloud'],
                                    tags_design: ['UI/UX'],
                                    tags_other: [],
                                    is_keynote: true,
                                    is_sponsor_session: true,
                                    recordable: false,
                                    level: 'Basic',
                                },
                            },
                        },
                        {
                            started_at: '1571446800',
                            ended_at: '1571447700',
                            event: '休息',
                            room: {},
                        },
                        {
                            started_at: '1571447700',
                            ended_at: '1571450400',
                            room: {
                                R1: {
                                    session_id: 6,
                                    room: 'R1',
                                    location: '3F一廳',
                                    speaker_id: 1,
                                    name: '家佳',
                                    name_e: 'Hilbert Boyle',
                                    company: '大國集團公司',
                                    company_e: 'Da Kao',
                                    job_title: 'incidunt',
                                    job_title_e: 'incidunt',
                                    photo_for_session_web:
                                        'https://picsum.photos/200',
                                    photo_for_session_mobile:
                                        'https://picsum.photos/200',
                                    topic: 'Maxime nesciunt.',
                                    topic_e: 'Est aliquid sed eum quae in.',
                                    started_at: '1571446800',
                                    ended_at: '1571450400',
                                    tags_tech: ['ai', 'cloud'],
                                    tags_design: ['UI/UX'],
                                    tags_other: [],
                                    is_keynote: true,
                                    is_sponsor_session: true,
                                    recordable: true,
                                    level: 'Basic',
                                },
                                R2: {
                                    session_id: 7,
                                    room: 'R2',
                                    location: '4F二廳',
                                    speaker_id: 1,
                                    name: '家佳',
                                    name_e: 'Hilbert Boyle',
                                    company: '大國集團公司',
                                    company_e: 'Da Kao',
                                    job_title: 'incidunt',
                                    job_title_e: 'incidunt',
                                    photo_for_session_web:
                                        'https://picsum.photos/200',
                                    photo_for_session_mobile:
                                        'https://picsum.photos/200',
                                    topic: 'Maxime nesciunt.',
                                    topic_e: 'Est aliquid sed eum quae in.',
                                    started_at: '1571446800',
                                    ended_at: '1571450400',
                                    tags_tech: ['ai', 'cloud'],
                                    tags_design: ['UI/UX'],
                                    tags_other: [],
                                    is_keynote: true,
                                    is_sponsor_session: true,
                                    recordable: true,
                                    level: 'Basic',
                                },
                                R3: {
                                    session_id: 8,
                                    room: 'R2',
                                    location: '4F三廳',
                                    speaker_id: 1,
                                    name: '家佳',
                                    name_e: 'Hilbert Boyle',
                                    company: '大國集團公司',
                                    company_e: 'Da Kao',
                                    job_title: 'incidunt',
                                    job_title_e: 'incidunt',
                                    photo_for_session_web:
                                        'https://picsum.photos/200',
                                    photo_for_session_mobile:
                                        'https://picsum.photos/200',
                                    topic: 'Maxime nesciunt.',
                                    topic_e: 'Est aliquid sed eum quae in.',
                                    started_at: '1571446800',
                                    ended_at: '1571450400',
                                    tags_tech: ['ai', 'cloud'],
                                    tags_design: ['UI/UX'],
                                    tags_other: ['Startup'],
                                    is_keynote: true,
                                    is_sponsor_session: true,
                                    recordable: true,
                                    level: 'Basic',
                                },
                            },
                        },
                        {
                            started_at: '',
                            ended_at: '',
                            event: 'END',
                            room: {},
                        },
                        {
                            started_at: '',
                            ended_at: '',
                            event: '講者晚宴',
                            room: {},
                        },
                    ],
                },
            ],
        };
    },
    computed: {
        ...mapGetters(['sessionData']),
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
                if (!item.event && item.room) {
                    // 濾出 room 內的議程資訊
                    for (const session in item.room) {
                        sessions.push(item.room[session]);
                    }
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
            if (keywordIndex === -1) {
                return false;
            } else {
                return true;
            }
        },
        handleKeywordClick(keywordId) {
            if (!this.selectSessionDate) return;

            const isExist = this.checkKeywordExist(keywordId);

            if (isExist) {
                // 已存在, 刪除
                const index = this.filterKeyword.findIndex(
                    id => id === keywordId
                );
                this.filterKeyword.splice(index, 1);
            } else {
                // 不存在, 新增
                this.filterKeyword.push(keywordId);
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
                // 整理出當前議程的所有標籤到一個陣列
                const sessionTags = [
                    ...item.tags_tech,
                    ...item.tags_design,
                    ...item.tags_other,
                ];

                // 判斷是否有符合 tags
                return sessionTags.some(tag => {
                    return this.filterKeyword.some(tag2 => {
                        return tag.toLowerCase() === tag2.toLowerCase();
                    });
                });
            });

            return items;
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
