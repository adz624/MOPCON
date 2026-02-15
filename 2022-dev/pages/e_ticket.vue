<template>
  <div class="e_ticket">
    <div class="container py-14 py-md-10">
      <div class="pb-md-10 pb-14">
        <h1 class="my-0">
          {{ $t('pages.e_ticket.title') }}
        </h1>
      </div>
      <p class="description text-center my-0">
        {{ $t('pages.e_ticket.subTitle.1') }}
      </p>
      <p class="description text-center my-0">
        {{ $t('pages.e_ticket.subTitle.2') }} <a class="link-primary" href="https://www.facebook.com/mopcon/" target="_blank"> {{ $t('pages.e_ticket.subTitle.3') }}</a> {{ $t('pages.e_ticket.subTitle.4') }}
      </p>
      <div class="ticket-area">
        <div class="ticket-img my-8">
          <img src="../assets/images/e_ticket/kktix_ticket_pic.jpeg" alt="">
        </div>
        <div class="input-group">
          <input v-model="ticketNo" type="text" class="input" placeholder="請輸入票號" @keyup="onlyNumber">
          <button class="btn btn-primary" :disabled="ticketNo === ''" @click.prevent="getTicketLink">
            {{ $t('pages.e_ticket.getTicket') }}
          </button>
        </div>
        <p v-if="ticketClickOnce && ticketError" class="error-hint">
          {{ $t('pages.e_ticket.error') }}
        </p>
        <div v-if="ticketClickOnce && !ticketError">
          <h2 class="subtitle">
            {{ $t('pages.e_ticket.download') }}
          </h2>
          <div class="download-link">
            <a :href="ticketResult.google" target="_blank">
              <img src="../assets/images/e_ticket/google_pay.svg" alt="">
            </a>
            <p class="mx-2 mx-sm-0 my-1">
              或
            </p>
            <a :href="ticketResult.apple" target="_blank">
              <img src="../assets/images/e_ticket/apple.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { eTicket } from '@/api/url'
export default {
  name: 'ETicketPage',
  data () {
    return {
      ticketNo: '',
      ticketClickOnce: false,
      ticketError: false,
      ticketResult: {
        apple: '',
        google: ''
      }
    }
  },
  methods: {
    onlyNumber () {
      this.ticketNo = this.ticketNo.replace(/[^0-9]+/g, '')
    },
    getTicketLink () {
      this.$axios.post(eTicket, { ticketNo: this.ticketNo }).then((res) => {
        this.ticketClickOnce = true
        if (res.status === 200) {
          this.ticketError = false
          this.ticketResult = res.data.data
        }
      }).catch(() => {
        this.ticketNo = ''
        this.ticketClickOnce = true
        this.ticketError = true
      })
    }
  }
}
</script>

<style lang="scss" scoped>
.e_ticket {
  background: $colorWhite;
  h1 {
    text-align: center;
    @include font(40px, $colorPrimary, bold);
  }
  .description {
    @include font(16px,$colorBlueLight,400);
  }
  .link-primary {
    color: $colorBlue;
    &:hover {
      color: $colorPink;
    }
  }
  .ticket-area {
    max-width: 590px;
    width: 100%;
    margin: auto;
  }
  .ticket-img {
    @include flex(center, row, center);
    img {
      max-width: 590px;
      width: 100%;
      border-radius: 10px;
    }
  }
  .input-group {
    @include flex(center, row, center);
    margin: 16px auto;
    max-width: 590px;
    .input {
      display: block;
      font-size: 1.25rem;
      margin-right: 13px;
      padding: 13px;
      padding-left: 24px;
      width: 100%;
      border-radius: 2rem;
      border: 2px solid $colorPrimary;
    }
    button {
      white-space: nowrap;
      @media (max-width: 568px) {
        width: 30%;
        padding: 5px 1rem;
      }
    }
  }
  .error-hint {
    @include font(16px,$colorPink, bold);
  }
  .subtitle {
    text-align: center;
    @include font(36px, $colorPrimary, bold);
  }
  .download-link {
    @include flex(center, row, center);
    @media (max-width: 568px) {
      flex-wrap: wrap;
      flex-direction: column;
    }
    img {
      display: block;
      height: 60px;
      width: 100%;
    }
    a {
      display: block;
      margin-bottom: 8px;
    }
  }
}
</style>
