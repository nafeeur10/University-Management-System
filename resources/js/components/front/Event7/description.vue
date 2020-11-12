<template>
  <div class="container service">
    <h2>Online Scout’s forum of the Egyptian Russian University <br>
    “Towards a better Scout vision” 1-3 May 2020 
    </h2>
    <p>
      The forum included 16 lecturers from the most powerful Scout leaders in the Egyptian country, with 18 training sessions over the course of three days; During which the forum was divided into two periods a day, the morning period, which is the Scout Excellence competition, and the evening period, training lectures for the Rover’s phase. There were an interaction with 2,657 rovers from different clans. And the clan of the Faculty of Engineering won the first place in the forum.<br>
The University President Prof. Dr. Sherif Fakhry honored the winners of the Scout Excellence competition, In the presence of Prof. Dr. Hana Abdel Rahman - Supervisor of Student Activities and Dr. Marco Fouad - Roving Officer at the Egyptian Russian University and Commissioner of the Advanced Stage, Cairo Boys. Also, the shield of the General Federation of Scouts and Guides was handed over by Mr. Mohamed Abbas - President of the General Federation of Scouts and Guides to Prof. Dr. Sherif Fakhry - President of the Egyptian University.


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
                            '/storage/img/event7-1.jpg',
                            '/storage/img/event7-2.jpg',
                            '/storage/img/event7-3.jpg',
                            '/storage/img/event7-4.jpg',
                            '/storage/img/event7-5.jpg',
                            '/storage/img/event7-6.jpg',
                            '/storage/img/event7-7.jpg',
                        ],
                        title: 'Towards a better Scout vision',
                        desc: '1-3 May 2020'
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