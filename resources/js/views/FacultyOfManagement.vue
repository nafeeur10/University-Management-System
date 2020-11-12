<template>
  <div>
    <carousel :link="link" text="faculty of management professional technology and computers" />

    <breadcrumb />

      <description />

    <dote style="margin-top: 50px;" />

      <tabs />

    <dote style="margin-top: 50px;" />

      <departments style="margin-bottom: 70px;" />

   

    <dote style="margin-top: 50px;" />

      <staff />

  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Description from '../components/front/FacultyOfManagement/description.vue';
import Tabs from '../components/front/FacultyOfManagement/tabs.vue';
import Courses from '../components/front/faculty/courses.vue';
import Dote from '../components/front/doteShape.vue';
import Departments from '../components/front/FacultyOfManagement/departments.vue';
import NewDepartments from '../components/front/FacultyOfManagement/newDepartments.vue';
import Staff from '../components/front/FacultyOfManagement/staff.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/management.jpg'
                }
            ]
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    description: Description,
    dote: Dote,
    tabs: Tabs,
    newDepartments: NewDepartments,
    departments: Departments,
    staff: Staff,

  }
};
</script>
