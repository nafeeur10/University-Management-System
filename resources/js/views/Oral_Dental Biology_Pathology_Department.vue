<template>
  <div>
    <carousel :link="link" text="Oral & Dental Biology & Pathology Department" />
    <breadcrumb />
    <description />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import description from '../components/front/Oral_Dental Biology_Pathology_Department/description.vue';


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
  }
};
</script>
