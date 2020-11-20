<template>
  <div>
    <carousel :id="id" :link="link" :text="text" v-if="$store.getters.getLanguage == 'eng'"/>
    <carousel :id="id" :link="link" :text="textArabic" v-else/>
    <breadcrumb :id="id" />
    <description style="margin-bottom: 70px;" :id="id"/>
  </div>
</template>


<script>

import Breadcrumb from '../components/front/NewsBreadcrumb';
import Carousel from '../components/front/NewsCarousel';
import description from '../components/front/SingleNews/Description';

export default {
    props: ['id'],
    data() {
        return {
            link: [
                {
                    img: '/storage/slider/about.jpeg'
                }
            ],
            text: '',
            textArabic: ''
        }
    },
   methods: {
    getNewsTitle() {
      this.$http.get('/api/news/description/' + this.id)
      .then( (res) => {
        this.text = res.data.newsDescription[0].news_home_title
        this.textArabic = res.data.newsDescription[0].news_home_title_arabic
      })
    }
  },
  created() {
      this.getNewsTitle();
  },
  components: {
    breadcrumb: Breadcrumb,
    carousel: Carousel,
    description: description
  }
};
</script>
