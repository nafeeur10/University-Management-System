<template>
  <div>
    <carousel :link="link" text="QUALITY ASSURANCE" />
    <breadcrumb />
    <Vision  />
    <dote style="margin-top: 50px;" />
    <objectives />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Quailty from '../components/front/quality_policy/quailty.vue';
import DoteShape from '../components/front/doteShape.vue';
import Vision from '../components/front/quailty/Vision.vue';
import Objectives from '../components/front/quailty/objectives.vue';

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
    dote: DoteShape,
    Vision: Vision,
    objectives: Objectives
  }
};
</script>
