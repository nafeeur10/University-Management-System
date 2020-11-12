<template>
  <div>
    <carousel :link="link" text="faculty of pharmacy courses" />
    <breadcrumb />
    <description />
    <dote />
   
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Description from '../components/front/facultyPharmacyCourses/description.vue';
import Dote from '../components/front/doteShape.vue';

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
    description: Description,
    dote: Dote
  }
};
</script>
