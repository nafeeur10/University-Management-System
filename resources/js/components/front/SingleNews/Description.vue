<template>
  <div class="container service">
    <h2 v-if="$store.getters.getLanguage == 'eng'">{{ newsContent.news_single_title }}</h2>
    <h2 v-else>{{ newsContent.news_single_title_arabic }}</h2>

    <p v-if="$store.getters.getLanguage == 'eng'">{{ newsContent.news_description }}</p>
    <p v-else>{{ newsContent.news_description_arabic }}</p>
    <br>
    <!-- <button v-for="(b, i) in btns" @click="tapId = b.id" :key="i" class="btn"> {{ b.name }} </button> -->

    <!-- row Loop -->
    <div
        v-if="tapId == c.id"
        v-for="(c, k) in content"
        :key="k"
        class="row"
    >
      <div class="col-lg-3 no-padding">
        <div class="bake">
          <h1 v-if="$store.getters.getLanguage == 'eng'">{{ newsContent.news_single_title }}</h1>
          <h1 class="text-right" v-else>{{ newsContent.news_single_title_arabic }}</h1>
          <p v-if="$store.getters.getLanguage == 'eng'">{{ newsContent.news_slider_description }}</p>
          <p class="text-right" v-else>{{ newsContent.news_slider_description_arabic }}</p>
        </div>
      </div>
      <div class="col-lg-9 no-padding">
        <b-carousel
                id="carousel-fade"
                style="text-shadow: 0px 0px 2px #000"
                :interval="2500"
                controls
                indicators
                indicators
                img-width="1024"
                img-height="480"
        >
          <b-carousel-slide
            v-for="(i, km) in newsImages"
            :key="km"
            :img-src="'/images/news/' + i.latest_news_image"
          ></b-carousel-slide>

        </b-carousel>

      </div>
    </div>
    <!-- ./ row Loop -->


  </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                tapId: 1,
                btns: [
                    {
                        id: 1,
                        name: 'Clubs',
                    },
                    {
                        id: 2,
                        name: 'Cinemas',
                    },
                    {
                        id: 3,
                        name: 'Theater',
                    }
                ],
                content: [
                    {
                        id: 1,
                        imgs: [
                            '/storage/img/news15-1.jpg',
                            '/storage/img/news15-2.jpg',
                            '/storage/img/news15-3.jpg',
                            '/storage/img/news15-4.jpg',
                            '/storage/img/news15-5.jpg',
                            '/storage/img/news15-6.jpg',
                            '/storage/img/news15-7.jpg',
                            '/storage/img/news15-8.jpg',
                            '/storage/img/news15-9.jpg',
                            '/storage/img/news15-10.jpg',
                        ],
                        title: 'A visit to Al-Firdous school in Badr City',
                        desc: '1- 12 November 2020' 
                    },
                ],
                newsContent: [],
                newsImages: []
            }
        },
        methods: {
            getnewsDescription() {
            this.$http.get('/api/news/description/'+this.id)
            .then( (res) => {
                this.newsContent = res.data.newsDescription[0]
                this.newsImages = res.data.newsImages
            })
            }
        },
        filters: {
            cutDescription(value) {
                let firstPartOfDescription = value.substring(0, 100) + "...";
                return firstPartOfDescription;
            }
        },
        created() {
            this.getnewsDescription();
        }
    }
</script>

<style scoped lang="sass">
  .no-padding
    padding: 0
  .service
    text-align: center
    h2
      font-weight: bolder
      color: #c20000
    .btn
      background: #c20000
      color: #fff
      padding: 3px 30px
      border-radius: 0
      font-weight: bold
      font-size: 13px
      margin: 31px 29px 36px 0
      transition: all 0.3s ease-in-out
    .btn:hover
      background-color: #304770
      color: #fff
  .bake
    background: #c20000
    background-image: url(/storage/img/campus_slider_object.png)
    padding: 30px
    height: 100%
    color: #fff
    box-shadow: 18px -20px 11px #0000001c
    text-align: left
    h1
      font-size: 25px
    p
      font-size: 19px
      font-weight: 100
  .carousel
    padding: 40px 0 0 0
  .carousel-control-next-icon,
  .carousel-control-prev-icon
    padding: 23px

</style>