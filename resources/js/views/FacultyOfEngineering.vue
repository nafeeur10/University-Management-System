<template>
  <div>
    <carousel :link="link" text="Faculty of engineering" />
    <breadcrumb />
    <description />
    <dote style="margin-top: 50px;" />
    <tabs />
    <dote style="margin-top: 50px;" />
    <departments style="margin-bottom: 70px;" />
    <dote style="margin-top: 50px;" />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Description from '../components/front/FacultyOfEngineering/description.vue';
import Tabs from '../components/front/FacultyOfEngineering/tabs.vue';
import Courses from '../components/front/faculty/courses.vue';
import Dote from '../components/front/doteShape.vue';
import Departments from '../components/front/FacultyOfEngineering/departments.vue';
import NewDepartments from '../components/front/FacultyOfEngineering/newDepartments.vue';
import Staff from '../components/front/FacultyOfEngineering/staff.vue';


export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/engineering.jpg'
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
    departments: Departments,
  }
};
</script>
