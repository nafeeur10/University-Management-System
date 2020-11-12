<template>
  <div>
    <carousel :link="link" text="Pharmacology and toxicology department" />
    <breadcrumb />
    <description />
    <dote style="margin-top: 50px;" />
    <staff />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import description from '../components/front/Pharmacology/description.vue';
import DoteShape from '../components/front/doteShape.vue';
import Staff from '../components/front/Pharmacology/staff.vue';


export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/ti.jpeg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: DoteShape,
    staff: Staff,
    Description: description,
  }
};
</script>
