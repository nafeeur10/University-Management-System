<template>
  <div>
    <carousel :link="link" text="Related Organizations" />
    <breadcrumb />
    <Vision  />
    <Organizations :data="Organizations" type="ul" />
    <dote style="margin-top: 50px;" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Dote from '../components/front/doteShape.vue';
import Organizations from '../components/front/temp.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg',
                }
            ],

            Organizations : [
                {
                    title: 'Related Organizations',
                },
                {
                    url: 'http://tpu.ru',
                    lable: '1. Tomsk Polytechnic University (Tomsk, Russia)'
                },
                {
                    url: 'http://rudn.ru',
                    lable: '2. The Peoples’ Friendship University of Russia (Moscow, Russia)'
                },
                {
                    url: 'http://istu.ru',
                    lable: '3. Izhevsk State Technical University, ISTU (Izhevsk, Russia)'
                },
                {
                    url: 'http://ras.ru',
                    lable: '4. Russian Academy of science, ‘’ The Institute of Oriental Studies “(Moscow, Russia)'
                },
                {
                    url: 'http://rsuh.ru',
                    lable: '5. Russian State University for the Humanities (Moscow, Russia)'
                },
                {
                    url: 'http://aaru.edu.jo',
                    lable: '6. Association of Arab Universities'
                },
                {
                    url: 'http://naqaae.eg',
                    lable: '7. The National Authority for Quality Assurance and Accreditation'
                },
                {
                    url: 'http://eea.org.eg',
                    lable: '8. Engineering Syndicate'
                },
                {
                    url: 'http://eps-eg.org',
                    lable: '9. Egyptian Pharmacists Syndicate'
                },
                {
                    url: 'http://eds-eg.org',
                    lable: '10. Dental Association'
                },
                {
                    url: 'http://arabfedeng.org',
                    lable: '11. Federation of Arab Engineers'
                },
                {
                    url: 'http://hbrc.edu.eg',
                    lable: '12. The National Center for Housing and Construction Research'
                },
                {
                    url: 'http://eaea.org.eg',
                    lable: '13. Atomic Energy Commission'
                },

            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: Dote,
    Organizations: Organizations
  }
};
</script>
