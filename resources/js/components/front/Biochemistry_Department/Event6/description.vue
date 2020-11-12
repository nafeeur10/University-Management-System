<template>
  <div class="container service">
    <h2>Coordination between the Egyptian Russian University and the educational administration of Badr City and Al Shorouk</h2>
    <p>
      Under the patronage of Dr. Sherif Fakhry, President of the University, the Egyptian Russian University hosted a group of high school and middle school students in coordination between the university and the educational administration of Badr City and Al Shorouk to select the gifted and distinguished students.<br>
	They were nominated by a committee composed of Dr. Mahmoud Fahmy Al-Sabahi, Director of the Education Development and Scientific Research Center at the University, and Prof. Hana Abdel Rahman, Vice Dean of the College of Pharmacy for Community Service and Environmental Development Affairs. Professor Tariq Bilal, Chairman of the Board of Directors of Badr and Al-Shorouk Educational Cities, and Dr. Fatma Al-Qazzaz, Director of Strategic Planning for the Administration of Al-Shorouk Educational City. And Professor Mohamed Farouk, a teacher of chemistry in Al-Firdous schools.<br>
	The students who will receive adequate scientific care from the administration of the Egyptian Russian University have been selected to realize their research and ideas.

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
                            '/storage/img/event6-1.jpg',
                            '/storage/img/event6-2.jpg',
                            '/storage/img/event6-3.jpg',
                            '/storage/img/event6-4.jpg',
                        ],
                        title: 'Coordination between the Egyptian Russian University and the educational administration of Badr City and Al Shorouk',
                        desc: ''
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