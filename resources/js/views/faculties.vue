<template>
  <div>
    <carousel :link="link" text="Faculties" />
    <breadcrumb />
    <faculty />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../views/Breadcrumb/faculties';
import Faculty from '../components/front/faculty/faculty.vue';
import Dote from '../components/front/doteShape.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/images/common/faculties.jpg'
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
