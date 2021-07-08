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
      <div class="sopOne-bg">
        <div class="container">
          <div class="sopOne-area">
            <div class="sopOne-content">
              <div class="sopOne-icon" />
              <div class="title">
                今年相約線上見！
              </div>
              <p class="description">
                「堅持濁水溪以南」是 MOPCON 十年如一的口號，為了更安全的交流，今年我們將實體大會改以「預錄議程＋直播交流互動」形式呈現，保留多元議程的大會精神，影響力將更不受時空所限！
              </p>
            </div>
            <div class="sopOne-image-area">
              <div class="sopOne-image">
                <div class="image1" />
                <div class="image2" />
              </div>
              <p class="sopOne-image-content">
                2020 年論壇實影
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="sopTwo container" />
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

.sopOne{
  margin-top: 100px;
  @include screen(sm) {
    margin-top: 50px;
  }
  &:before {
    content: '';
    background-color: rgba(239, 234, 235, 0.3);
    width: 100%;
    height: calc(100% + 70px);
    top: -100px;
    left: -25%;
    position: absolute;
    @include screen(lg) {
      left: 5%;
      height: calc(100% + 100px);
    }
    @include screen(sm) {
      height: calc(100% + 170px);
    }
  }
  &-bg:before {
    content: '';
    background-color: #EFEAEB;
    width: 70%;
    height: calc(100% + 50px);
    top: -50px;
    position: absolute;
    @include screen(lg) {
      width: 75%;
      height: calc(100% + 80px);
    }
    @include screen(sm) {
      width: 100%;
    }
  }
  &-area {
    @include flex(space-between);
  }
  &-content {
    @include flex(normal, column);
    width: 410px;
    margin-left: calc((100% - 1000px) / 2 - 3%);
    @include screen(lg) {
      margin-left: calc((100% - 680px) / 2 - 3%);
    }
    @include screen(md) {
      width: 370px;
    }
    @include screen(pad) {
      margin-left: 0px;
      margin-right: 15px;
    }
    @include screen(sm) {
      width: 100%;
    }
    .title {
      color: $colorGrayDark;
      font-weight: 600;
      font-size: 40px;
      letter-spacing: 0.12em;
      margin-top: 32px;
    }
    .description {
      margin-top: 32px;
      font-size: 20px;
    }
  }
  &-icon {
    background-image: url('../../assets/home/sop01.svg');
    width: 67px;
    height: 48px;
  }
  &-image-area {
    @include flex(normal, column, flex-end);
    @include screen(sm) {
      display: none;
    }
  }
  &-image {
    @include flex;
    .image1 {
      background-image: url('../../assets/home/sop01-image1.png');
      width: 193px;
      height: 400px;
      border-radius: 8px;
      margin-right: 20px;
      @include screen(lg) {
        display: none;
      }
    }
    .image2 {
      background-image: url('../../assets/home/sop01-image2.png');
      width: 411px;
      height: 400px;
      border-radius: 8px;
      @include screen(lg) {
        width: 334px;
        height: 374px;
      }
      @include screen(pad) {
        width: 300px;
      }
    }
  }
  &-image-content {
    color: $colorGrayLight;
    font-size: 20px;
  }
}

.sopTwo {
  min-height: 50vh;
}
</style>
