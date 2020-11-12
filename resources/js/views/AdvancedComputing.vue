<template>
  <div>
    <carousel :link="link" text="Advanced Computing" />
    <breadcrumb />
    <Vision  />
    <Technology :data="Technology" type="p" />
    <dote style="margin-top: 50px;" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import DoteShape from '../components/front/doteShape.vue';
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
                    title: 'Advanced Computing',
                    desc:
                        'Artificial Intelligence (AI) and other technologies form core areas of Advanced Computing which focus on “man-made brainpower” & the foundations of the management and analysis of data in all its forms (massive volumes, complex, heterogeneous, uncertain) and concrete applications in key fields. As the knowledge in specialized areas of computing is increasingly in demand, the Department of Advanced Computing at the faculty of management, professional technology, and computers offers programs with a world-class understanding of smart technologies combining modern applications with state-of-the-art technological methods. The Department aims at giving students a solid grounding in Artificial Intelligence, data science and, high-performance computing technology. This will equip students with the skills necessary to apply these tools and techniques to solve complex scientific and business problems. For the time being, the department of Advanced Computing is pioneered to offer two programs that lead to the Bachelor of Science degree in either: 1. Artificial Intelligence (AI) 2. Data science (DS).'

                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: DoteShape,
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

