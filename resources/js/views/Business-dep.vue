<template>
  <div>
    <carousel :link="link" text="Bachelor of Business Administration" />
    <breadcrumb />
    <Vision  />
    <Business :data="Business" type="p" />
    <dote style="margin-top: 50px;" />

      <staff />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Business from '../components/front/temp.vue';
import Staff from '../components/front/BusinessAdministration/staff.vue';
import DoteShape from '../components/front/doteShape.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg',
                }
            ],
            Business: [
                {
                    title: 'Bachelor of Business Administration',
                    desc: 'The program aims to encourage students towards more understanding and experience in all fields related to business administration, and to improve their knowledge and skills about them. This is done with different teaching methods and various ideas that will help in developing their careers. The areas of work for this specialization include many departments including public relations, human resources departments within companies, project management, banks and financial institutions, marketing, planning departments in addition to supplier departments and other vital areas in governmental and non-governmental institutions.\n' +
                        '<br><br>' +
                        'The Bachelor of Business Administration degree allows students to specialize in one of the following four majors:\n' +
                        '<br><br>' +
                        '- Management.<br>' +
                        '- Marketing.<br>' +
                        '- Human Resource Management.<br>' +
                        '- Financing.'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: DoteShape,
    staff: Staff,
      Business: Business
  }
};
</script>
