<template>
  <div>
    <carousel :link="link" text="Registration" />
    <breadcrumb />
    <Registration />
    <dote style="margin-top: 50px" />
    <REStable/>
    <dote style="margin-top: 50px" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Registration from '../components/front/Registration/Registration.vue';
import REStable from '../components/front/Registration/table.vue';
import DoteShape from '../components/front/doteShape.vue';

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
    Registration: Registration,
    REStable: REStable,
    dote: DoteShape,
  }
};
</script>
