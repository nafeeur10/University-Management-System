<template>
  <div>
    <carousel :link="link" text="Facilities" />
    <breadcrumb />
    <courses style="" />
  </div>
</template>

<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Courses from '../components/front/Facilities/courses.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/fi.jpeg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    courses: Courses
  }
};
</script>
