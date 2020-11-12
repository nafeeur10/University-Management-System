<template>
  <div>
    <carousel :link="link" text="Bachelor of Economics" />
    <breadcrumb />
    <Vision  />
    <Economics :data="Economics" type="p" />
    <dote style="margin-top: 50px;" />
    <staff />
    
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import DoteShape from '../components/front/doteShape.vue';
import Staff from '../components/front/Economics/staff.vue';
import Economics from '../components/front/temp.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg',
                }
            ],
            Economics : [
                {
                    title: 'Bachelor of Economics',
                    desc: 'The economics program prepares students in the specialization of economics for the requirements of the labor market, especially in the economic and financial markets. It also assists students of the department in understanding economic theories and global economic development. College graduates in the specialization of economics are qualified to work in the field of the stock market, financial markets, banks, investment companies and economic feasibility studies, as well as The department qualifies them to understand the movement of markets and the requirements that are required to establish individual or group investment projects.'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: DoteShape,
    staff: Staff,
    Economics: Economics
  }
};
</script>
