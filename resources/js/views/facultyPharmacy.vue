<template>
  <div>
    <carousel :link="link" text="faculty of pharmacy" />
    <breadcrumb />
    <description />
    <dote />
    <tabs />
    <dote style="margin-top: 50px;" />
    <departments style="margin-bottom: 70px;" />
    <dote style="margin-top: 50px;" />
    <courses style="margin-bottom: 70px;" />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Description from '../components/front/faculty/description.vue';
import Tabs from '../components/front/faculty/tabs.vue';
import Dote from '../components/front/doteShape.vue';
import Departments from '../components/front/faculty/departments.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/pharmacy-bg.jpg'
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
    departments: Departments  }
};
</script>
