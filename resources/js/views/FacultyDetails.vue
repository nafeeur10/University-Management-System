<template>
  <div>
    <carousel :link="link" :text="facultyDetails.home_faculty_title" :images="facultyBannerImages" />
    <breadcrumb :title="facultyDetails.home_faculty_title" />
    <description :facultyDetails="facultyDetails" />
    <dote />
    <tabs />
    <dote style="margin-top: 50px;" />
    <departments style="margin-bottom: 70px;" />
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
        this.facultyBannerImages = res.data.bannerImages
      }).catch( (res) => {
        console.log("Error: ",res);
        alert("Problem in Faculty");
      })
    }
  },
  created() {
    this.getFacultyDetails();
  }
};
</script>
