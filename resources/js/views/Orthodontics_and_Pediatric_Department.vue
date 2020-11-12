<template>
  <div>
    <carousel :link="link" text="Orthodontics and Pediatric Department" />
    <breadcrumb />
    <description />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import description from '../components/front/Orthodontics_and_Pediatric_Department/description.vue';


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
