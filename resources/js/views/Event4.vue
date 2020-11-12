<template>
  <div>
    <carousel :link="link" text="The Russian role in the Middle East: the indications and motives" />
    <breadcrumb />
    <description style="margin-bottom: 70px;" />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import description from '../components/front/Event4/description.vue';

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
    description: description
  }
};
</script>
