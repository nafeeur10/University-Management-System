<template>
  <div class="container service">
    <h2>The Egyptian Russian University celebrates the initiative of “Your eyes is in our eyes” and honors Good Makers Foundation and Orchidia</h2>
    <p>
      the Egyptian Russian University organized a special celebration to celebrate the initiative “Your eyes is in our eyes” for its outstanding efforts in eliminating the causes of blindness in Egypt. During the ceremony, ,  President of the Egyptian Russian University; Prof. Dr. Sherif Fakhry honored Professor Mustafa Zamzam, Chairman of the Board of Trustees of the Good Makers Foundation for Development, Dr. Osama Abbas, Chairman of the Board of Directors of Orchidia, and Dr. Hany Al Nazer, a consultant dermatologist and former head of the National Research Center, and Engineer Osama Hussein, Chairman of the Board consultant for the Good Makers Foundation.
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
                            '/storage/img/event8-1.jpg',
                            '/storage/img/event8-2.jpg',
                            '/storage/img/event8-3.jpg',
                            '/storage/img/event8-4.jpg',
                            '/storage/img/event8-5.jpg',
                            '/storage/img/event8-6.jpg',
                            '/storage/img/event8-7.jpg',
                            '/storage/img/event8-8.jpg',
                        ],
                        title: 'Your eyes is in our eyes',
                        desc: 'The Egyptian Russian University celebrates the initiative of “Your eyes is in our eyes” and honors Good Makers Foundation and Orchidia'
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