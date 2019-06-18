<template>
    <div class="footer">
        <div class="footer__contact">
            <div class="subtitle">聯絡我們</div>
            <a href="mailto:contact@mopcon.org" target="_blank" class="subtitle email">contact@mopcon.org</a>
        </div>

        <div class="footer__social">
            <div class="subtitle">在這裡找到 #MOPCON</div>
            <div class="icons">
                <a href="#" class="svg-fb">
                    <IconFB />
                </a>
                <a href="#" class="svg-twitter">
                    <IconTwitter />
                </a>
                <a href="#" class="svg-ig">
                    <IconIg />
                </a>
                <a href="#" class="svg-aircraft">
                    <IconAircraft />
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import IconFB from "./svg/icon-fb.svg";
import IconIg from "./svg/icon-ig.svg";
import IconAircraft from "./svg/icon-aircraft.svg";
import IconTwitter from "./svg/icon-twitter.svg";

export default {
    name: "Footer",
    components: {
        IconFB,
        IconIg,
        IconAircraft,
        IconTwitter
    }
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
