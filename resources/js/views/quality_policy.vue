<template>
  <div>
    <carousel :link="link" text="ERU Quality Policy" />
    <breadcrumb />
    <quailty />
    <dote />
    <tabs />
    <dote style="margin-top: 50px" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Quailty from '../components/front/quality_policy/quailty.vue';
import DoteShape from '../components/front/doteShape.vue';
import Tabs from '../components/front/quality_policy/quailty.vue';

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
    quailty: Quailty,
    dote: DoteShape,
    tabs: Tabs,
  }
};
</script>
