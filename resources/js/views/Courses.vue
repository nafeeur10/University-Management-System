<template>
  <div>
    <carousel :link="link" text="Courses Grading" />
    <breadcrumb />
    <Courses />
    <dote style="margin-top: 50px" />
    <REStable/>
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Courses from '../components/front/Courses/Courses.vue';
import ContactForm from '../components/front/Courses/table.vue';
import DoteShape from '../components/front/doteShape.vue';

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
    Courses: Courses,
    ContactForm: ContactForm,
    dote: DoteShape
  }
};
</script>
