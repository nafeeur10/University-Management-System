<template>
  <div>
    <carousel :link="link" text="Alumni" />
    <breadcrumb />
    <vido />
    <services style="margin-bottom: 70px;" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Services from '../components/front/Alumni/services.vue';
import Vido from '../components/front/Alumni/vido.vue';
import DoteShape from '../components/front/doteShape.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/logn.jpeg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    vido: Vido,
    dote: DoteShape,
    services: Services
  }
};
</script>
