<template>
    <div class="header" :class="{active: isActive}">
        <div class="header__content">
            <div class="header__toggle" @click="toggleActive"></div>
            <a href="./" class="header__logo"></a>
            <nav class="header__nav" :class="{active: navSubItemActive}">
                <div class="header__nav__item"
                    :class="{active: nav.subIsOpen}"
                    v-for="(nav, index) in navList"
                    v-if="nav.open"
                    :key="index"
                    @click="toggleSubItem(nav)">
                    <div v-if="nav.subNav.length > 0"
                        class="header__nav__item__icon"
                        :class="{active: nav.subIsOpen}"></div>
                    <a :href="`.${nav.url}`"
                        class="header__nav__item__name"
                        :class="{disable: nav.subNav.length > 0}">
                        <span>{{$t(`navbar.${nav.name}`)}}</span>
                    </a>

                    <!-- 次選單 -->
                    <div class="header__nav__subItem" v-if="nav.subNav.length > 0">
                        <a
                            :href="`.${subItem.url}`"
                            class="header__nav__subItem__name"
                            v-for="(subItem, subIndex) in nav.subNav"
                            v-if="subItem.open"
                            :key="subIndex">
                            {{$t(`navbar.${subItem.name}`)}}
                        </a>
                    </div>
                </div>
            </nav>
            <ul class="header__lang">
                <li class="header__lang__item" :class="{active: $i18n.locale === 'zh'}" @click="toggleLang('zh')">中文</li>
                <li class="header__lang__item" :class="{active: $i18n.locale === 'en'}" @click="toggleLang('en')">EN</li>
            </ul>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
    name: 'Header',
    data() {
        return {
            isActive: false,
            navList: [
                {
                    name: 'home',
                    url: '/',
                    subNav: [],
                    subIsOpen: false,
                    open: true,
                },
                {
                    name: 'community',
                    url: '/community',
                    subNav: [],
                    subIsOpen: false,
                    open: process.env.routeCommunity,
                },
                {
                    name: 'schedule',
                    url: '/schedule',
                    subNav: [
                        {
                            name: 'scheduleMain',
                            url: '/schedule',
                            open: process.env.routeSchedule,
                        },
                        {
                            name: 'scheduleUnconf',
                            url: '/schedule_unconf',
                            open: process.env.routeScheduleUnconf,
                        },
                    ],
                    subIsOpen: false,
                    open:
                        process.env.routeSchedule || process.env.routeSchedule,
                },
                {
                    name: 'speaker',
                    url: '/speaker',
                    subNav: [],
                    subIsOpen: false,
                    open: process.env.routeSpeaker,
                },
                {
                    name: 'sponsor',
                    url: '/sponsor',
                    subNav: [],
                    subIsOpen: false,
                    open: process.env.routeSponsor,
                },
            ],
        };
    },
    computed: {
        // 判斷 nav 選單內是否有其一展開, 有就回傳 true
        navSubItemActive() {
            return this.navList.some(item => item.subIsOpen);
        },
    },
    watch: {
        // 監聽路由，有變化就將 active 狀態關閉，收合 navbar
        $route(to, from) {
            this.isActive = false;
        },
    },
    methods: {
        toggleActive() {
            this.isActive = !this.isActive;
        },
        toggleLang(lang) {
            this.$i18n.locale = lang;
            localStorage.setItem('locale', lang);
        },
        toggleSubItem(nav) {
            if (window.innerWidth < 1024 && nav.subNav.length > 0) {
                const targetNav = this.navList.find(item => item === nav);
                targetNav.subIsOpen = !targetNav.subIsOpen;
            }
        },
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
