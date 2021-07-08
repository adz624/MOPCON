<template>
  <div>
    <section class="home-bg">
      <div class="main container">
        <div class="logo-vertival" />
        <div class="main-content">
          <div class="logo-mopcon" />
          <div class="slogan">
            <p>// 堅持濁水溪以南，</p>
            <p>最強科技研討會</p>
          </div>
          <div class="button-area">
            <button class="btn">
              ＋ 追蹤最新消息
            </button>
            <button class="btn">
              加入行事曆
            </button>
          </div>
          <div class="collect-area">
            <div class="btn-circle">
              <p>{ 講者 }</p>
              <p>募集中</p>
            </div>
            <div class="growing">
              <p>我們10歲囉</p>
              <span>_Growing With You</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sopOne">
    </section>
  </div>
</template>

<script>
export default {
  name: 'Home'
}
</script>

<style lang="scss" scoped>
.main {
  @include flex;
  min-height: 100vh;
  padding-top: 25vh;
  padding-bottom: 10vh;
  @include screen(pad) {
    min-height: unset;
    padding-top: 180px;
    padding-bottom: 50px;
  }
  @include screen(sm) {
    padding-top: 120px;
    padding-bottom: 70px;
  }
  &-content {
    width: 100%;
    margin-left: 6%;
    @include screen(pad) {
      margin-left: 2%;
    }
    .slogan {
      @include flex;
      margin-top: 28px;
      @include screen(pad) {
        margin-top: 8px;
      }
      @include screen(sm) {
        flex-direction: column;
        margin-top: 20px;
      }
      p {
        color: $colorOrange;
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 0px;
        margin-bottom: 0px;
      }
    }
    .button-area {
      margin-top: 48px;
      @include screen(pad) {
        margin-top: 35px;
      }
      @include screen(sm) {
        margin-top: 70px;
      }
    }
    .btn {
      & ~ .btn {
        margin-left: 16px;
        @include screen(sm) {
          margin-left: 0px;
        }
      }
      @include screen(sm) {
        margin-bottom: 16px;
      }
    }
    .collect-area {
      @include flex(space-between);
      margin-top: 20vh;
      @include screen(pad) {
        margin-top: 150px;
      }
      @include screen(sm) {
        @include flex(space-between, column);
        margin-top: 0px;
      }
      .btn-circle {
        @include screen(sm) {
          @include flex(center, row, center);
          width: 96%;
          line-height: 3rem;
          height: 3.4rem;
          p {
            font-weight: bold;
            font-size: 16px;
            & ~ p {
              margin-left: 5px;
            }
          }
        }
      }
      .growing {
        text-align: right;
        @include screen(pad) {
          padding-top: 35px;
        }
        @include screen(sm) {
          padding-top: 80px;
        }
        p {
          font-family: Noto Sans;
          font-weight: 600;
          font-size: 2.5rem;
          letter-spacing: 0.12em;
          margin-top: 8px;
          margin-bottom: 0px;
          color: $colorOrange;
          @include screen(pad) {
            font-size: 1.5rem;
          }
        }
        span {
          font-family: Noto Sans;
          font-weight: 600;
          font-size: 2.5rem;
          margin-top: 16px;
          margin-bottom: 16px;
          @include screen(pad) {
            font-size: 1.5rem;
          }
        }
      }
    }
  }
}

.sopOne {
  min-height: 500px;
}
</style>
