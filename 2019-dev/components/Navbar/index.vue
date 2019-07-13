<template>
    <div class="navbar">
        <div class="navbar__items">
            <div class="navbar__item"
                :class="[`nav__${item.name} ${nextStatus}`, {active: item.id === currentActive}]"
                v-for="item in sections"
                :key="item.id"
                @click="gotoSection(item)">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "navbar",
    props: {
        isReady: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {
            currentActive: 0,
            nextStatus: "",
            stopScrollMagic: false,
            sections: [
                {
                    id: 0,
                    name: "sectionHero"
                },
                {
                    id: 1,
                    name: "sectionImageWall"
                },
                {
                    id: 2,
                    name: "sectionAbout"
                },
                {
                    id: 3,
                    name: "sectionPlace"
                },
                {
                    id: 4,
                    name: "sectionSponsor"
                },
                {
                    id: 5,
                    name: "sectionFbNews"
                },
                {
                    id: 6,
                    name: "sectionPastYears"
                }
            ],
            scrollController: null
        };
    },
    watch: {
        isReady(val) {
            if (val) this.scrollMagicInit();
        }
    },
    methods: {
        handleUpdateActive(id) {
            this.updatNextStatus(id);
            this.currentActive = id;
        },
        updatNextStatus(newId) {
            if (newId === this.currentActive) return;
            if (this.currentActive > newId) {
                this.nextStatus = "prev";
            } else {
                this.nextStatus = "next";
            }
        },
        gotoSection(item) {
            if (item.id === this.currentActive) return;
            this.handleUpdateActive(item.id);
            const _this = this;
            this.stopScrollMagic = true;
            TweenLite.to(window, 1, {
                scrollTo: {
                    y: `#${item.name}`,
                    autoKill: false
                },
                onComplete() {
                    _this.stopScrollMagic = false;
                }
            });
        },
        scrollMagicInit() {
            // scrollMagic 設定
            this.scrollController = new _ScrollMagic.Controller({
                globalSceneOptions: {
                    duration: 0,
                    offset: 0
                }
            });
            this.scrollMagicTrigger();
        },
        scrollMagicTrigger() {
            const sectionHero = new _ScrollMagic.Scene({
                triggerElement: ".hero__btn"
            })
                .on("start", event => {
                    if (!this.stopScrollMagic) this.handleUpdateActive(0);
                })
                .addTo(this.scrollController);

            const sectionImageWall = new _ScrollMagic.Scene({
                triggerElement: "#sectionImageWall"
            })
                .on("start", event => {
                    if (!this.stopScrollMagic) this.handleUpdateActive(1);
                })
                .addTo(this.scrollController);

            const sectionAbout = new _ScrollMagic.Scene({
                triggerElement: "#sectionAbout"
            })
                .on("start", () => {
                    if (!this.stopScrollMagic) this.handleUpdateActive(2);
                })
                .addTo(this.scrollController);

            const sectionPlace = new _ScrollMagic.Scene({
                triggerElement: "#sectionPlace"
            })
                .on("start", () => {
                    if (!this.stopScrollMagic) this.handleUpdateActive(3);
                })
                .addTo(this.scrollController);

            const sectionSponsor = new _ScrollMagic.Scene({
                triggerElement: "#sectionSponsor"
            })
                .on("start", () => {
                    if (!this.stopScrollMagic) this.handleUpdateActive(4);
                })
                .addTo(this.scrollController);

            const sectionFbNews = new _ScrollMagic.Scene({
                triggerElement: "#sectionFbNews"
            })
                .on("start", () => {
                    if (!this.stopScrollMagic) this.handleUpdateActive(5);
                })
                .addTo(this.scrollController);

            const sectionPastYears = new _ScrollMagic.Scene({
                triggerElement: "#sectionPastYears"
            })
                .on("start", () => {
                    if (!this.stopScrollMagic) this.handleUpdateActive(6);
                })
                .addTo(this.scrollController);
        }
    }
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
