<template>
  <div>
    <carousel :link="link" text="Courses" />
    <breadcrumb />
    <description />
    <dote style="margin-top: 50px;" />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Description from '../components/front/PharmacyCourses/description.vue';
import Dote from '../components/front/doteShape.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/pharmacy-bg.jpg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    description: Description  }
};
</script>
