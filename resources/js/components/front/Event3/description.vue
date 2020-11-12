<template>
  <div class="container service">
    <h2>Competition for the best awareness video about Coronavirus</h2>
    <p>
      Complementing the university’s keenness to activate student activities remotely, after suspending studies, and resorting to distance education, the best awareness video competition on Coronavirus has been announced on the 5th April 2020.  Participation in the competition was closed on Wednesday 15/4, according to the competition schedule. <br>
      The videos that gained the highest marks from the jury were put for voting on the Student Union Page. Prof. Dr. Sherif Fakhry - President of the University presented prizes to the winners of the online video competition, which was the first of its kind in the university.<br>
      The President of the University expressed his happiness for the students 'participation in the competition, their creativity and awareness role in the community. Also expressed his sincere thanks to the Students' Union, the University Families Committee, and the members of the jury for their effective role in this competition.
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
                            '/storage/img/eventcomp-1.jpg',
                            '/storage/img/eventcomp-2.jpg',
                            '/storage/img/eventcomp-3.jpg',
                            '/storage/img/eventcomp-4.jpg',
                            '/storage/img/eventcomp-5.jpg',
                            '/storage/img/eventcomp-6.jpg',
                            '/storage/img/eventcomp-7.jpg',
                            '/storage/img/eventcomp-8.jpg',
                            '/storage/img/eventcomp-9.jpg',
                            '/storage/img/eventcomp-10.jpg',
                            '/storage/img/eventcomp-11.jpg',

                        ],
                        title: 'Competition for the best awareness video about Coronavirus',
                        desc: '5th April 2020'
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