<template>
  <div>
    <carousel :link="link" text="News" />

    <breadcrumb />

      <description />

    <dote style="margin-top: 50px;" />

      <staff />

  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Description from '../components/front/News/description.vue';
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
    dote: Dote,

  }
};
</script>