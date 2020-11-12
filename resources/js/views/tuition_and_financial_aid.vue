<template>
  <div>
    <carousel :link="link" text="Tuition and Financial Aid" />
    <breadcrumb />
    <tuitionAndFinancialAid />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import tuitionAndFinancialAid from '../components/front/tuition_and_financial_aid/tuition_and_financial_aid.vue';


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
    tuitionAndFinancialAid: tuitionAndFinancialAid
  }
};
</script>
