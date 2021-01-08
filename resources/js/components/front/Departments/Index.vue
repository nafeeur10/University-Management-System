<template>
  <div>
    <carousel v-if="$store.getters.getLanguage == 'eng'" :link="link" :text="deptDetails[0].dept_name" />
    <carousel v-else :link="link" :text="deptDetails[0].dept_name_arabic" />
    <breadcrumb v-if="$store.getters.getLanguage == 'eng'" :link="link" :deptName="deptDetails[0].dept_name" />
    <breadcrumb v-else :link="link" :deptName="deptDetails[0].dept_name_arabic" />
    <!-- <Vision  /> -->
    <Business 
        v-if="$store.getters.getLanguage == 'eng'" 
        :data="deptDetails[0].dept_main_description" 
        type="p" 
        :deptName="deptDetails[0].dept_name"
        :bgImg="deptDetails[0].dept_image"
    />
    <Business 
        v-else 
        :data="deptDetails[0].dept_main_description_arabic" 
        type="p" 
        :deptName="deptDetails[0].dept_name_arabic"
        :bgImg="deptDetails[0].dept_image"
    />
    <dote style="margin-top: 50px;" />
    <staff v-if="$store.getters.getLanguage == 'eng'"  :id="deptDetails[0].id" :dept_name="deptDetails[0].dept_name" />
    <staff v-else :id="deptDetails[0].id" :dept_name="deptDetails[0].dept_name_arabic" />
  </div>
</template>


<script>
import Breadcrumb from './Details/breadcrumb';
import Carousel from './Details/carousel.vue';
import Business from './Details/Business';
import Staff from './Details/Staff.vue';
import DoteShape from '../../front/doteShape.vue';

export default {
    props: ['id'],
    data() {
        return {
            link: [
                {
                    img: '/images/common/quality.jpeg',
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
            ],
            deptDetails: null
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    dote: DoteShape,
    staff: Staff,
    Business: Business
  },
  methods: {
      getDeptDetails() {
        this.$http.get('/api/getdeptDetails/' + this.id)
        .then( (res) => {
            this.deptDetails = res.data.deptDetails
        }).catch( (err) => {
            alert("Something wrong in Welcome Info. Please Check.");
        })
      }
  },
  created() {
      this.getDeptDetails();
  }
};
</script>
