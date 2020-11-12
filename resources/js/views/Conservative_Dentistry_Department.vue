<template>
  <div>
    <carousel :link="link" text="Conservative Dentistry Department" />
    <breadcrumb />
    <description />
    <dote style="margin-top: 50px;" />
    <staff />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import description from '../components/front/Conservative_Dentistry_Department/description.vue';
import DoteShape from '../components/front/doteShape.vue';
import Staff from '../components/front/Conservative_Dentistry_Department/staff.vue';


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
    Description: description,
    dote: DoteShape,
    staff: Staff,
  }
};
</script>
