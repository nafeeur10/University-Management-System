<template>
  <div class="container service">
    <h2>Military Defense Forces educational symposium</h2>
    <p>
      The Popular and the military Defense Forces organized an educational symposium for students of the Egyptian Russian University, which came within the framework of the armed forces’s efforts to increase university students ’awareness of the heroic deeds of the armed forces to eradicate terrorism and their role in achieving comprehensive development.<br>
      The symposium included a speech given by Prof. Dr. Sherif Fakhry Abdel Nabi, President of the Egyptian Russian University in which he expressed the extent of the university's pride in the armed forces, whose heroes, in cooperation with brave policemen, are fighting fierce battles in the face of sinful terrorism, sacrificing their lives in order to defend the homeland, and spoke about the period of the revolution of 23 July 1952 and the role of the Popular and Military Defense Forces that time.<br>
      The commander of the People's Defense Forces and the military gave a lecture on the heroic combat actions of the armed forces in eliminating terrorism, as well as the role of the popular and military defense forces in raising the spirit of loyalty and belonging to sectors of civil society from awareness-raising to confront extremist ideology.<br>
      Major General / Naji Shehod , the Counselor at the Nasser Military Academy, gave a lecture on the plans that are being hatched in the region. <br>
      The university choir team also presented a wonderful patriotic song and then a paragraph for a student from the university in which they talked about the development of Egypt and the most important achievements of the Egyptian state in the recent period in various fields.<br>
      At the end of the symposium, the family of the martyr Dardiri, the family of the martyr Khaled Mughrabi Dababba, and the family of the martyr Ahmed Judah were honored in appreciation of the precious sacrifices they made for the elevation of the homeland, in addition to honoring a number of outstanding university students and a number of the symposium's organizers.

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
                            '/storage/img/event10-1.jpg',
                            '/storage/img/event10-2.jpg',
                            '/storage/img/event10-3.jpg',
                            '/storage/img/event10-4.jpg',
                            '/storage/img/event10-5.jpg',
                            '/storage/img/event10-6.jpg',
                        ],
                        title: 'Military Defense Forces educational symposium',
                        desc: 'The Popular and the military Defense Forces organized an educational symposium for students of the Egyptian Russian University'
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