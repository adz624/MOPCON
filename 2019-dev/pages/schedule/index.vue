<template>
    <div class="schedule">
        <div class="schedule__banner"></div>
        <section class="schedule__desc">
            <h1 class="title schedule__desc__title"><span>{ 每一場都讓你</span>收穫滿滿的<span class="color-primary">議程規劃</span> ; }</h1>
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
        </section>

        <!-- 課程標籤說明 -->
        <section class="schedule__tagDesc">
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
        <div class="schedule__timeList">
            <TimeList :contentType="session.event ? 'title': 'card'"
                :hasTime="session.started_at ? true : false"
                v-for="(session, index) in sessionData.period" :key="index">
                <template slot="time" v-if="session.started_at">{{(session.started_at * 1000) | moment("HH mm")}} - {{(session.ended_at * 1000) | moment("HH mm")}}</template>
                <template slot="content-title" v-if="session.event">{{session.event}}</template>
                <template slot="content-card" v-else>
                    <div v-if="session.room.All">一個 card</div>
                    <div v-else>多個 card</div>
                </template>
            </TimeList>
        </div>

        <SectionApp />
    </div>
</template>

<script>
import SectionApp from '~/components/SectionApp';
import TimeList from './TimeList';

export default {
    name: 'schedule',
    components: {
        SectionApp,
        TimeList,
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
                    id: 'Web',
                    name: 'web',
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
                    id: 'uiux',
                    name: 'UI/UX',
                    style: 'secondary',
                },
                {
                    id: 'startup',
                    name: 'Startup',
                    style: 'third',
                },
            ],
            sessionData: {
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
                                session_id: 1,
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
                                session_id: 1,
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
                                session_id: 1,
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
        };
    },
    computed: {
        formatData() {
            return;
        },
    },
    keywordActive(keywordId) {
        return this.checkKeywordExist(keywordId);
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
            const isExist = this.checkKeywordExist(keywordId);

            if (isExist) {
                // 已存在, 刪除
                const index = this.filterKeyword.findIndex(id => id === index);
                this.filterKeyword.splice(index, 1);
            } else {
                // 不存在, 新增
                this.filterKeyword.push(keywordId);
            }
        },
        handleDateClick(dateId) {
            this.filterDate = dateId;
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
