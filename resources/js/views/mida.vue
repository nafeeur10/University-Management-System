<template>
  <div>
    <carousel :link="link" text="Multimedia" />
    <breadcrumb />
    <mida  />
    <Accounting />
    <dote style="margin-top: 50px;" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import DoteShape from '../components/front/doteShape.vue';
import Mida from '../components/front/mida/mida.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg',
                }
            ],
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: DoteShape,
    mida: Mida
  }
};
</script>
