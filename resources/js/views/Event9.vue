<template>
  <div>
    <carousel :link="link" text="Electric Vehicle Manufacturing Rally (Ever 2020) competition" />
    <breadcrumb />
    <description style="margin-bottom: 70px;" />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import description from '../components/front/Event9/description.vue';

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
