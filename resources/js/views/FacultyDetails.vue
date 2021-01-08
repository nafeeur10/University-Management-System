<template>
  <div>
    <carousel v-if="$store.getters.getLanguage == 'eng'" :link="link" :text="facultyDetails.home_faculty_title" :images="facultyBannerImages" />
    <carousel v-else :link="link" :text="facultyDetails.home_faculty_title_arabic" :images="facultyBannerImages" />
    <breadcrumb v-if="$store.getters.getLanguage == 'eng'" :title="facultyDetails.home_faculty_title" />
    <breadcrumb v-else :title="facultyDetails.home_faculty_title_arabic" />
    <description :facultyDetails="facultyDetails" />
    <dote />
    <tabs :imgUrl="facultyTabDetails[0].faculty_tab_image" :facultyTabDetails="facultyTabDetails" />
    <dote style="margin-top: 50px;" />
    <departments :id="facultyID" style="margin-bottom: 70px;" />
    <dote style="margin-top: 50px;" />
    <courses style="margin-bottom: 70px;" />
  </div>
</template>


<script>
import Breadcrumb from '../components/front/FacultyDetailsBreadcrumb.vue';
import Carousel from '../components/front/FacultyDetailsCarousel.vue';
import Description from '../components/front/FacultyDetails/description.vue';
import Tabs from '../components/front/FacultyDetails/tabs.vue';
import Dote from '../components/front/doteShape.vue';
import Departments from '../components/front/FacultyDetails/departments.vue';

export default {
  props: ['link'],
  data() {
      return {
          link: [
              {
                  img: '/storage/img/oral.jpg'
              }
          ],
          facultyDetails: null,
          facultyBannerImages: [],
          facultyTabDetails: [],
          facultyID: null
      }
  },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    description: Description,
    dote: Dote,
    tabs: Tabs,
    departments: Departments,
  },
  methods: {
    getFacultyDetails() {
      this.$http.get('/api/get-faculty-details/' + this.link)
      .then( (res) => {
        this.facultyDetails = res.data.facultyDetails,
        this.facultyID = res.data.facultyDetails.id,
        this.facultyBannerImages = res.data.bannerImages
      }).catch( (res) => {
        console.log("Error: ",res);
        alert("Problem in Faculty");
      })
    },
    getTabDetails() {
      this.$http.get('/api/get-faculty-tab/' + this.link)
      .then( (res) => {
        this.facultyTabDetails = res.data.tabInfo
      }).catch( (res) => {
        console.log("Error: ",res);
        alert("Problem in Faculty");
      })
    }
  },
  created() {
    this.getFacultyDetails();
    this.getTabDetails();
  }
};
</script>
