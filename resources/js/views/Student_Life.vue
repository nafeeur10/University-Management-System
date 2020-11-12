<template>
  <div>
    <carousel :link="link" text="Student Life" />
    <breadcrumb />
    <StudentLife style="margin-bottom: 70px;" />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import StudentLife from '../components/front/Student_Life/StudentLife.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/slider/about.jpeg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    StudentLife: StudentLife
  }
};
</script>
