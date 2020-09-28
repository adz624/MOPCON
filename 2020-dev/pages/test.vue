<template>
  <div class="test py-5 flex flex-col items-center px-4 sm:px-8 xl:px-24">
    <section class="max-w-screen-xl w-full">
      <schedule-table
        :model="formatted"
        :current-room="currentRoom"
        @handle-click="openDialog"
      />
      <schedule-dialog :visible.sync="dialogShow" :speaker="currentRoom" />
    </section>
  </div>
</template>

<script>
import { schedule } from '@/api/url'
import ScheduleTable from '@/components/Schedule/ScheduleTable'
import ScheduleDialog from '@/components/CommonDialog/ScheduleDialog'

export default {
  name: 'Test',
  components: {
    ScheduleTable,
    ScheduleDialog
  },
  async asyncData ({ $axios }) {
    try {
      const { data } = await $axios.get(schedule)
      return {
        schedules: data.data
      }
    } catch (err) {
      console.log(err)
    }
  },
  data () {
    return {
      schedules: [],
      dialogShow: false,
      currentRoom: null
    }
  },
  computed: {
    formatted () {
      return this.schedules[0].period.map(item => ({
        timeRange: this.$moment(item.started_at).format('HH:mm') + ' - ' + this.$moment(item.started_at).format('HH:mm'),
        event: item.event,
        room: item.room.sort((a, b) => +a.floor[0] - +b.floor[0])
      }))
    }
  },
  methods: {
    openDialog (room) {
      this.dialogShow = true
      this.currentRoom = room
    }
  }
}
</script>

<style lang="scss" scoped>
.test {
  min-height: 80vh;
  background-image: url('~@/assets/community/bg.png');
  background-size: 115px 100px;
}
</style>
