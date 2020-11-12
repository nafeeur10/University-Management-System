<template>
  <div>
    <carousel :link="link" text="Attendance" />
    <breadcrumb />
    <Attendance />
    <dote style="margin-top: 50px" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import DoteShape from '../components/front/doteShape.vue';
import Attendance from '../components/front/Attendance/Attendance.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    Attendance: Attendance,
    dote: DoteShape,
  }
};
</script>
