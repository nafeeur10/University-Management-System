<template>
  <div>
    <carousel :link="link" text="Faculties" />
    <breadcrumb />
    <faculty />
    <!--<dote />-->
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Faculty from '../components/front/faculty/faculty.vue';
import Dote from '../components/front/doteShape.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/faculties.jpg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    faculty: Faculty,
    dote: Dote,
  }
};
</script>
