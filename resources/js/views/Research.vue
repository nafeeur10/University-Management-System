<template>
  <div>
    <carousel :link="link" text="Scientific Research" />
    <breadcrumb />
    <description />
    <dote style="margin-top: 50px;" />
    <steps />
    <dote style="margin-top: 50px;" />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Description from '../components/front/Research/description.vue';
import Dote from '../components/front/doteShape.vue';
import steps from '../components/front/Research/steps.vue';


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
    steps: steps,
    dote: Dote,
  }
};
</script>
