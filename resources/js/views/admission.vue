<template>
  <div>
    <carousel :link="link" text="Admission" />
    <breadcrumb />
    <vido />
    <steps style="margin-top: 100px;" />
    <dote style="margin-top: 50px;" />
    <fees />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Vido from '../components/front/admission/vido.vue';
import Fees from '../components/front/admission/fees.vue';
import DoteShape from '../components/front/doteShape.vue';
import Steps from '../components/front/admission/steps.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/admission.jpeg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    vido: Vido,
    dote: DoteShape,
    steps: Steps,
    fees: Fees
  }
};
</script>
