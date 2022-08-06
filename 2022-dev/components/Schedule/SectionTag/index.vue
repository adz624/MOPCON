<template>
  <div>
    <ul class="schedule-tags">
      <li v-for="(tag,i) in tags" :key="tag" class="mr-4 mb-3">
        <input
          :id="`tag-${i}`"
          type="checkbox"
          class="mr-1"
          :value="tag"
          @click="selectedTag()"
        >
        <label :for="`tag-${i}`">{{ tag }}</label>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  name: 'SectionTag',
  props: {
    tags: {
      type: Array,
      default: () => []
    }
  },
  methods: {
    selectedTag () {
      const data = document.querySelectorAll('input[type="checkbox"]:checked')
      const checkTag = []
      data.forEach((item) => { checkTag.push(item.value) })
      this.$emit('checkTag', checkTag)
    }
  }
}
</script>

<style lang="scss" scoped>
h1{
  @include font(20px,$colorPrimary,500);
  text-align: center;
  border-bottom: 4px solid $colorPink;
}
.schedule-tags{
  padding: 56px 88px;
  @include flex(center,row,center);
  flex-wrap:wrap;
  @include screen(md){
    padding: 40px 40px;
  }
  li{
    display: inline-block;
  }
  label{
    display: inline-block;
    background-color: $colorPrimaryLight;
    border-radius: 32px;
    padding: 7px 16px;
    color:$colorWhite;
    cursor:pointer;
    &:hover{
      background-color: #0074A2;
    }
  }
  input[type='checkbox']{
    display: none;
  }
  input[type='checkbox'] + label:before{
    content:'';
    display: inline-block;
    height: 15px;
  }
  input[type='checkbox']:checked + label:before {
    content: '';
    vertical-align: middle;
    height: 15px;
    width: 15px;
    background-image: url(~/assets/images/schedule/check.svg);
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    margin-right: 4px;
  }
  input[type='checkbox']:checked + label {
    background-color: #0074a2;
    opacity: 1;
  }
}
</style>
