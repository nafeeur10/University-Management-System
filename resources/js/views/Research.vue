<template>
  <div>
    <carousel :link="link" :text="researchInfo.research_title" v-if="$store.getters.getLanguage == 'eng'"/>
    <carousel :link="link" :text="researchInfo.research_title_arabic" v-else/>
    <breadcrumb />
    <description />
    <dote style="margin-top: 50px;" />
    <steps />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/NewsCarousel';
import Description from '../components/front/Research/description.vue';
import Dote from '../components/front/doteShape.vue';
import steps from '../components/front/Research/steps.vue';


export default {
    data() {
        return {
            link: [
                {
                    img: '/images/common/quality.jpeg'
                }
            ],
            researchInfo: null
        }
    },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    description: Description,
    steps: steps,
    dote: Dote,
  },

  methods: {
    getResearch() {
      this.$http.get('api/get/home/research')
      .then( (res) => {
          this.researchInfo = res.data.research_homepage
          console.log(this.researchInfo);
      }).catch( (err) => {
          alert("Something wrong with Research Information. Please Check.");
      })
    }
  },
  created() {
    this.getResearch();
  }
};
</script>
