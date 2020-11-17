<template>
  <div>
    <carousel v-if="$store.getters.getLanguage == 'eng'" :link="link" :id="id" :text="text[0].event_title" />
    <carousel v-if="$store.getters.getLanguage == 'arb'" :link="link" :id="id" :text="text[0].event_title_arabic" />
    
    <breadcrumb :id="id"/>
    <description style="margin-bottom: 70px;" :id="id" />
  </div>
</template>


<script>

import Breadcrumb from '../components/front/EventBreadcrumb.vue';
import Carousel from '../components/front/EventCarousel';
import description from '../components/front/Event/description.vue';

export default {
  props: ['id'],
  data() {
      return {
          link: [
              {
                  img: '/storage/slider/about.jpeg'
              }
          ],
          text: ''
      }
  },
  methods: {
    getEventTitle() {
      this.$http.get('/api/event/description/' + this.id)
      .then( (res) => {
        this.text = res.data.eventDescription
      })
    }
  },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    description: description
  },
  created() {
    this.getEventTitle();
  }
};
</script>
