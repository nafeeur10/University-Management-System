<template>
  <div>
    <carousel :link="link" text="Biochemistry Department" />
    <breadcrumb />
    <description />
    <dote style="margin-top: 50px;" />
    <staff />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import DoteShape from '../components/front/doteShape.vue';
import description from '../components/front/Biochemistry_Department/description.vue';
import Staff from '../components/front/Biochemistry_Department/staff.vue';


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
