<template>
  <div>
    <carousel :link="link" text="Bachelor of Accounting" />
    <breadcrumb />
    <Vision  />
    <Accounting :data="Accounting" type="p" />
    <dote style="margin-top: 50px;" />
    <staff />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Business from '../components/front/temp.vue';
import DoteShape from '../components/front/doteShape.vue';
import Staff from '../components/front/Accounting/staff.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg',
                }
            ],
            Accounting : [
                {
                    title: 'Bachelor of Accounting',
                    desc: 'The accounting program aims to prepare and qualify students of specialization in the preparation, presentation, analysis and review of financial reports for all companies and institutions in need, graduates of the accounting major in the college are qualified to work in investment companies, banks, accounting and auditing offices. They also have the opportunity to enroll for professional certificates (CPA-CMA-CFA) in the specialization easily because the college accredits most of the courses related to these certificates as their courses.'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: DoteShape,
    staff: Staff,
    Accounting: Business
  }
};
</script>
