<template>
  <div>
    <carousel :link="link" text="Oral medicine, Diagnosis, Radiology, and Periodontology Department" />
    <breadcrumb />
    <description />
    <dote style="margin-top: 50px;" />
    <staff />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import description from '../components/front/Periodontology_Department/description.vue';
import DoteShape from '../components/front/doteShape.vue';
import Staff from '../components/front/Periodontology_Department/staff.vue';


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
