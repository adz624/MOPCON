<template>
    <div class="hero">
        <div class="hero__content">
            <div class="hero__logo"></div>
            <h2 class="subtitle">人工智慧<span class="icon-x"></span>量化投資</h2>
            <div class="hero__desc">
                <p>10/19（六）～ 10/20（日)<br>
                    高雄國際會議中心 ICCK</p>
            </div>
            <div class="hero__countdown hero__countdown--mobile">
                <span>{{countDownDay}}</span>
                <span class="day">天</span>
                <span>{{countDownHour}}</span>
                <span class="hour">小時</span>
                <span>{{countDownMin}}</span>
                <span class="min">分鐘</span>
            </div>
            <Btn class="hero__btn">
                <a href="https://www.facebook.com/mopcon/" target="_blank">追蹤粉絲專頁</a>
            </Btn>
        </div>
        <div class="hero__countdown hero__countdown--pc">
            <span>{{countDownDay}}</span>
            <span class="day">天</span>
            <span>{{countDownHour}}</span>
            <span class="hour">小時</span>
            <span>{{countDownMin}}</span>
            <span class="min">分鐘</span>
        </div>
    </div>
</template>

<script>
import Btn from "~/components/Btn";

export default {
    name: "hero",
    components: {
        Btn
    },
    data() {
        return {
            countdown: {
                day: 56,
                hour: 9,
                min: 0
            }
        };
    },
    computed: {
        countDownDay() {
            return `0${this.countdown.day}`.substr(-2);
        },
        countDownHour() {
            return `0${this.countdown.hour}`.substr(-2);
        },
        countDownMin() {
            return `0${this.countdown.min}`.substr(-2);
        }
    }
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
