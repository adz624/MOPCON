<template>
    <div class="header" :class="{active: isActive}">
        <div class="header__content">
            <div class="header__toggle" @click="toggleActive"></div>
            <nuxt-link :to="$i18n.path('')" class="header__logo"></nuxt-link>
            <nav class="header__nav" :class="{active: navSubItemActive}">
                <div class="header__nav__item"
                    :class="{active: nav.subIsOpen}"
                    v-for="(nav, index) in navList"
                    :key="index"
                    @click="toggleSubItem(nav)">
                    <div v-if="nav.subNav.length > 0"
                        class="header__nav__item__icon"
                        :class="{active: nav.subIsOpen}"></div>
                    <nuxt-link
                        :to="$i18n.path(nav.url)"
                        class="header__nav__item__name"
                        :class="{disable: nav.subNav.length > 0}">
                        <span>{{$t(`navbar.${nav.name}`)}}</span>
                    </nuxt-link>

                    <!-- 次選單 -->
                    <div class="header__nav__subItem" v-if="nav.subNav.length > 0">
                        <nuxt-link
                            :to="$i18n.path(subItem.url)"
                            class="header__nav__subItem__name"
                            v-for="(subItem, subIndex) in nav.subNav"
                            :key="subIndex">
                            {{$t(`navbar.${subItem.name}`)}}
                        </nuxt-link>
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
                },
                {
                    name: 'community',
                    url: 'community',
                    subNav: [],
                    subIsOpen: false,
                },
                {
                    name: 'schedule',
                    url: 'schedule',
                    subNav: [
                        {
                            name: 'scheduleMain',
                            url: 'schedule',
                        },
                        {
                            name: 'scheduleUnconf',
                            url: 'schedule_unconf',
                        },
                    ],
                    subIsOpen: false,
                },
                {
                    name: 'speaker',
                    url: 'speaker',
                    subNav: [],
                    subIsOpen: false,
                },
                {
                    name: 'sponsor',
                    url: 'sponsor',
                    subNav: [],
                    subIsOpen: false,
                },
            ],
        };
    },
    computed: {
        ...mapGetters(['originUrl']),
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
            console.log('toggleLang');
            this.$i18n.locale = lang;
            document.cookie = 'locale=' + lang;
            this.changeUrl();
        },
        // 判斷當下語系並更新網址
        changeUrl() {
            if (this.$i18n.fallbackLocale === this.$i18n.locale) {
                this.$router.push(this.originUrl);
            } else {
                // 非預設語系 加上語系前綴
                this.$router.push('/' + this.$i18n.locale + this.originUrl);
            }
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
