<template>
  <div>
    <carousel :link="link" text="Business Professional Information Technology department" />
    <breadcrumb />
    <Vision  />
    <Technology :data="Technology" type="p" />
    <dote style="margin-top: 50px;" />
    <staff />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import DoteShape from '../components/front/doteShape.vue';
import Staff from '../components/front/technology/staff.vue';
import Economics from '../components/front/temp.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg',
                }
            ],
            Technology: [
                {
                    title: 'Business Professional Information Technology department',
                    desc:
                        'As the economy becomes an information base, the demand for business graduates who are knowledgeable about design, planning, developing, managing, and evaluating information systems technology continues to increase. The better decisions making, in uncertain business environments, also requires collecting and analyzing data using computational, statistical, and mathematical models. <br>The department of business professional information technology at the faculty of management, professional technology, and computers offers programs with a cross-disciplinary focus that integrates information technology (IT) techniques and concepts and data analytics into the field of study in business. It provides an academic / technical foundation for individuals preparing for positions in business and health careers using computer applications and administrative skills. Graduates will be equipped to adapt to the continual change that evolving technology demands. <br>For the time being, the department of business professional information technology offers two programs that lead to the Bachelor of Science degree in either: <br><br><a href="/storage/img/Business analytics.pdf" class="card-title" download>1. Business Analytics (BA)</a> <br><a href="/storage/img/management Information system (MIS).pdf" class="card-title" download>2. Management information system (MIS)</a>'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: DoteShape,
    staff: Staff,
      Technology: Economics
  }
};
</script>

<style scoped>
.card-title
  {
    color:#c20000 !important;
    font-weight: bold;
  }
</style>

