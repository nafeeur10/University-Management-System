<template>
  <div>
    <carousel :link="link" text="about eru" />
    <breadcrumb />
    <vido />
    <dote />
    <tabs />
    <dote style="margin-top: 50px;" />
    <services style="margin-bottom: 70px;" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Vido from '../components/front/about/vido.vue';
import Tabs from '../components/front/about/tabs.vue';
import Services from '../components/front/about/services.vue';
import DoteShape from '../components/front/doteShape.vue';

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
    vido: Vido,
    dote: DoteShape,
    tabs: Tabs,
    services: Services
  }
};
</script>
