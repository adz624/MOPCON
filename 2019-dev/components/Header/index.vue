<template>
    <div class="header" :class="{active: isActive}">
        <div class="header__content">
            <div class="header__toggle" @click="toggleActive"></div>
            <nuxt-link to="/" class="header__logo"></nuxt-link>
            <nav class="header__nav" :class="{active: navSubItemActive}">
                <div class="header__nav__item"
                    :class="{active: nav.subIsOpen}"
                    v-for="(nav, index) in navList"
                    :key="index"
                    @click="toggleSubItem(nav)">
                    <div v-if="nav.subNav.length > 0"
                        class="header__nav__item__icon"
                        :class="{active: nav.subIsOpen}"></div>
                    <nuxt-link :to="nav.url" class="header__nav__item__name"><span>{{nav.name}}</span></nuxt-link>

                    <!-- 次選單 -->
                    <div class="header__nav__subItem" v-if="nav.subNav.length > 0">
                        <nuxt-link :to="subItem.url"
                            class="header__nav__subItem__name"
                            v-for="(subItem, subIndex) in nav.subNav"
                            :key="subIndex">
                            {{subItem.name}}
                        </nuxt-link>
                    </div>
                </div>
            </nav>
            <ul class="header__lang">
                <li class="header__lang__item" :class="{active: lang === 'zh_tw'}" @click="toggleLang('zh_tw')">中文</li>
                <li class="header__lang__item" :class="{active: lang === 'en'}" @click="toggleLang('en')">EN</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Header',
    data() {
        return {
            isActive: false,
            lang: 'zh_tw',
            navList: [
                {
                    name: 'MOPCON 2019',
                    url: '/',
                    subNav: [],
                    subIsOpen: false,
                },
                {
                    name: '主辦社群',
                    url: '/community',
                    subNav: [],
                    subIsOpen: false,
                },
                {
                    name: '議程介紹',
                    url: '/schedule',
                    subNav: [
                        {
                            name: '主要議程',
                            url: 'schedule',
                        },
                        {
                            name: '交流場次',
                            url: 'schedule_unconf',
                        },
                    ],
                    subIsOpen: false,
                },
                {
                    name: '講者陣容',
                    url: 'speaker',
                    subNav: [],
                    subIsOpen: false,
                },
                {
                    name: '贊助夥伴',
                    url: 'sponsor',
                    subNav: [],
                    subIsOpen: false,
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
    methods: {
        toggleActive() {
            this.isActive = !this.isActive;
        },
        toggleLang(val) {
            this.lang = val;
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
