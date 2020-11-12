<template>
  <div class="container service">
    <h2>“Awareness Youth Campaign”
    <br>For the second successive year (13/10/2019 - 31/10/2019) 
    <br>(events inside and outside the university)
</h2>
    <p>
      It was held in cooperation with the Addiction, Treatment and Control Fund, Badr Businessmen and Investors Association & General Authority for Cultural Palaces. 
      The campaign aimed to guide and educate students and university staff, as well as the surrounding environment, about the harms of addiction, and treatment methods if necessary.
    </p>
    <br><br>
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
          <h1> {{ c.title }} </h1>
          <p> {{ c.desc }} </p>
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
                  v-for="(i, km) in c.imgs"
                  :key="km"
                  :img-src="i"
          ></b-carousel-slide>

        </b-carousel>

      </div>
    </div>
    <!-- ./ row Loop -->


  </div>
</template>

<script>
    export default {
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
                            '/storage/img/event2-1.jpg',
                            '/storage/img/event2-2.jpg',
                            '/storage/img/event2-3.jpg',
                            '/storage/img/event2-4.jpg',
                            '/storage/img/event2-5.jpg',
                            '/storage/img/event2-6.jpg',
                            '/storage/img/event2-7.jpg',
                            '/storage/img/event2-8.jpg',
                            '/storage/img/event2-9.jpg',
                            '/storage/img/event2-10.jpg',
                            '/storage/img/event2-11.jpg',
                            '/storage/img/event2-12.jpg',
                            '/storage/img/event2-13.jpg',
                            '/storage/img/event2-14.jpg',
                            '/storage/img/event2-15.jpg',
                            '/storage/img/event2-16.jpg',
                            '/storage/img/event2-17.jpg',
                            '/storage/img/event2-18.jpg',
                            '/storage/img/event2-19.jpg',
                            '/storage/img/event2-20.jpg',
                            '/storage/img/event2-21.jpg',
                        ],
                        title: 'Awareness Youth Campaign',
                        desc: '(events inside and outside the university)'
                    },
                ]
            }
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