<template>
  <div>
    <carousel :link="link" text="Academics" />
    <breadcrumb />
    <vido />
    <dote />
    <services style="margin-bottom: 70px;" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Vido from '../components/front/Academics/vido.vue';
import Services from '../components/front/Academics/services.vue';
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
