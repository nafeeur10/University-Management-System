<template>
  <div>
    <carousel :link="link" :id="id" :text="text[0].event_title" v-if="$store.getters.getLanguage == 'eng'"/>
    <carousel :link="link" :id="id" :text="text[0].event_title_arabic" v-else/>
    
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
