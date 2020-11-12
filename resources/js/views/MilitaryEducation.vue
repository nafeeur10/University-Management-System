<template>
  <div>
    <carousel :link="link" text="Military Education" />
    <breadcrumb />
    <vido />
    <dote />
    <services style="margin-bottom: 70px;" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Vido from '../components/front/MilitaryEducation/vido.vue';
import DoteShape from '../components/front/doteShape.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/Campus.jpeg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    vido: Vido,
    dote: DoteShape,
  }
};
</script>
