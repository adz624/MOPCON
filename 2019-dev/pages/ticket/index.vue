<template>
    <div class="ticket">
        <div class="ticket__banner"></div>
        <section class="ticket__desc">
            <h1 class="title ticket__desc__title">
                <span class="span-s icon-brackets">{{$t('pages.ticket.title[1]')}}</span>
                <span class="color-primary">{{$t('pages.ticket.title[2]')}}</span>
                ; }</h1>
            <p class="ticket__desc__text">{{$t('pages.ticket.desc')}}</p>
        </section>

        <section class="ticket__kind">
            <h2 class="title">
                <span>{ </span><span class="color-secondary">{{$t('pages.ticket.ticketType[1]')}}</span><span>{{$t('pages.ticket.ticketType[2]')}} ; }</span>
            </h2>
            <div class="ticket__kind__block ticket__kind__block--left">
                <CardTicket v-for="ticket in ticketSecondary" :key="ticket.id" v-bind="ticket" @onTicketClick="handleTicketClick" />
            </div>
            <div class="ticket__kind__block ticket__kind__block--right">
                <CardTicket v-for="ticket in ticketPrimary" :key="ticket.id" v-bind="ticket" @onTicketClick="handleTicketClick" />
            </div>
        </section>

        <section class="ticket__studentKind">
            <h2 class="title">
                <span>{ {{$t('pages.ticket.areYouStudent[1]')}}</span><span class="color-third">{{$t('pages.ticket.areYouStudent[2]')}}</span><span>{{$t('pages.ticket.areYouStudent[3]')}} ; }</span>
            </h2>
            <p class="text">{{$t('pages.ticket.text')}}</p>
            <div class="ticket__kind__block">
                <CardTicket v-for="ticket in ticketThird" :key="ticket.id" v-bind="ticket" @onTicketClick="handleTicketClick" />
            </div>
            <ul class="ticket__studentKind__remarks">
                <li class="ticket__studentKind__remark">*{{$t('pages.ticket.student.remarks[1]')}}</li>
                <li class="ticket__studentKind__remark">*{{$t('pages.ticket.student.remarks[2]')}}</li>
            </ul>
        </section>
    </div>
</template>

<script>
import SectionApp from '~/components/SectionApp';
import CardTicket from '~/components/CardTicket';

export default {
    name: 'ticket',
    components: {
        SectionApp,
        CardTicket,
    },
    data() {
        return {
            ticketData: [
                {
                    title: '老鳥票',
                    id: 0,
                    status: 1, // 0 => 敬請期待, 1 => 顯示價格, 2 => 已完售
                    count: 0, // 限量張數
                    price: 700, // 票價
                    beEngaged: false,
                    type: 'secondary', //三種風格 primary / secondary / third
                    lists: [
                        // 項目說明
                        '兩日議程',
                        '下午茶點心',
                    ],
                    link: 'https://lihi1.com/r0L6T',
                },
                {
                    title: '會眾票',
                    id: 1,
                    status: 1,
                    count: 700,
                    price: 800,
                    beEngaged: false,
                    type: 'secondary',
                    lists: ['兩日議程', '下午茶點心'],
                    link: 'https://lihi1.com/r0L6T',
                },
                {
                    title: '相揪團購票',
                    id: 2,
                    status: 1,
                    count: 300,
                    price: 700,
                    beEngaged: false,
                    type: 'secondary',
                    lists: ['兩日議程', '下午茶點心'],
                    desc: '適用 5 人企業團購<br>超過 15 人（ 16 人以上）請來信詳談',
                    link: 'https://lihi1.com/r0L6T',
                },
                {
                    title: 'Beengaged 醞釀之夜',
                    id: 3,
                    status: 1,
                    count: 30,
                    price: 800,
                    beEngaged: false,
                    type: 'secondary',
                    desc: '會眾票＆老鳥票可在 KKTIX 加購 10/19 晚餐聚會通行證',
                    lists: [],
                    link: 'https://lihi1.com/RZ8LF',
                },
                {
                    title: '豪華獨享票',
                    id: 4,
                    status: 1,
                    count: 20,
                    price: 2600,
                    beEngaged: false,
                    type: 'primary',
                    lists: [
                        '兩日議程',
                        '精緻午餐、下午茶點心',
                        '紀念 T',
                        '快速通關',
                        'Beengaged 醞釀之夜',
                    ],
                    link: 'https://lihi1.com/d9LlC',
                },
                {
                    title: '尊爵不凡票',
                    id: 5,
                    status: 1,
                    count: 10,
                    price: 3200,
                    beEngaged: false,
                    type: 'primary',
                    lists: [
                        '兩日議程',
                        '精緻午餐、下午茶點心',
                        '紀念 T',
                        '快速通關',
                        'Beengaged 醞釀之夜',
                        'MOPCON 2019 獨家紀念品',
                    ],
                    link: 'https://lihi1.com/d9LlC',
                },

                {
                    title: '學生票',
                    id: 6,
                    status: 2,
                    count: 130,
                    price: 100,
                    beEngaged: false,
                    type: 'third',
                    lists: ['兩日議程', '下午茶點心'],
                    link: 'https://mopcon.kktix.cc/events/2019registerstudent',
                },
                {
                    title: '菁英學生票',
                    id: 7,
                    status: 2,
                    count: 20,
                    price: 300,
                    beEngaged: false,
                    type: 'third',
                    lists: ['兩日議程', '下午茶點心', '醞釀之夜通行證'],
                    link: 'https://mopcon.kktix.cc/events/2019registerstudent',
                },
            ],
        };
    },
    computed: {
        // Secondary 樣式票卡, 老鳥票、會眾票、Beengaged 醞釀之夜
        ticketSecondary() {
            return this.ticketData.filter(
                ticket => ticket.type === 'secondary'
            );
        },
        // Primary 樣式票卡, VIP票、VVIP票
        ticketPrimary() {
            return this.ticketData.filter(ticket => ticket.type === 'primary');
        },
        // Third 樣式票卡, 學生票、菁英學生票
        ticketThird() {
            return this.ticketData.filter(ticket => ticket.type === 'third');
        },
    },
    methods: {
        handleTicketClick(ticketName, ticketPrice) {
            fbq('trackCustom', 'Purchase', {
                ticketName: ticketName,
                value: ticketPrice,
                currency: 'TWD'
            });
        },
    },
    beforeRouteEnter: (to, from, next) => {
        if (!process.env.routeTicket) return next('/');
        next();
    },
};
</script>

<style lang="scss" src="./style.scss" scoped></style>
