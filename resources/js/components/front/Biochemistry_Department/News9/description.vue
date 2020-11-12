<template>
  <div class="container service">
    <h2>The Egyptian Russian University is decorated with congratulatory banners to welcome new students</h2>
    <p>
     On the first day of the new academic year (2020-2021), the "Egyptian Russian University" witnessed the reception of new and old students. All the university’s buildings and faculties were decorated with congratulatory banners, and the new students were welcomed by the deans, faculty agents, faculty members and their assistants.
<br>
The university administration organized a number of introductory lectures in each college to clarify the academic system and the colleges’ general rules, so that students could adhere to them, besides introducing the various student activities and presenting the university’s plan of activities for the new academic year to encourage new students to enroll and actively participate in them.
<br>
<strong>Prof. Dr. Sherif Fakhry Mohamed Abdel-Nabi</strong>, President of the Egyptian Russian University, confirmed that the relevant departments at the university prepared a plan for safety and health controls for students, faculty members, administrators and workers in the various campus facilities, in accordance with the directives announced by the Ministry of Higher Education and Scientific Research and the procedures issued by "World Health Organization" regarding the "Corona" virus, through applying social distancing between students to preserve their health.
<br>
The President of the Egyptian Russian University explained that the plan includes prohibiting the presence of students and workers inside the university without the mask, and a heavy fine was imposed on everyone who violates this. in addition, the number of students in the lecture halls and practical lessons in laboratories and workshops will be limited. Furthermore, a medical declaration form for all students, employees and faculty members was prepared. All university employees are obligated to complete this form before starting the academic year.
<br>
<strong>Prof. Dr. Sherif Fakhry Muhammad Abd al-Nabi</strong> added that some restrictions have been placed on the university's cafeterias with regard to the absorbative capacity, to maintain physical distincing within two meters, standing signs have been put in front of cafeterias, single-use utensils have been used, and disinfection procedures for the place have been followed.
<br>
It is noteworthy that the representatives of the students ’union at the university spread in large numbers in various parts of the university’s colleges, to familiarize new students with the places of the colleges and their facilities such as“ the university presidency building, administration, library, medical clinics, food court, student affairs, mosque, laboratories and workshops.

<a href="https://www.gomhuriaonline.com/%D8%A7%D9%84%D8%AC%D8%A7%D9%85%D8%B9%D8%A9%20%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A%D8%A9%20%D8%A7%D9%84%D8%B1%D9%88%D8%B3%D9%8A%D8%A9%20%D8%AA%D8%B2%D9%8A%D9%86%D8%AA%20%D8%A8%D9%84%D8%A7%D9%81%D8%AA%D8%A7%D8%AA%20%D8%A7%D9%84%D8%AA%D9%87%D9%86%D8%A6%D8%A9%20%D9%84%D8%A5%D8%B3%D8%AA%D9%82%D8%A8%D8%A7%D9%84%20%D8%A7%D9%84%D8%B7%D9%84%D8%A7%D8%A8%20%D8%A7%D9%84%D8%AC%D8%AF%D8%AF%20%D8%A8%D8%A7%D9%84%D8%B5%D9%88%D8%B1/710386.html">Link</a>

    </p>
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
                            '/storage/img/news9-1.jpg',
                            '/storage/img/news9-2.jpg',
                            '/storage/img/news9-3.jpg',
                            '/storage/img/news9-4.jpg',
                            '/storage/img/news9-5.jpg',
                            '/storage/img/news9-6.jpg',
                            '/storage/img/news9-7.jpg',
                            '/storage/img/news9-8.jpg',
                            '/storage/img/news9-9.jpg',
                            '/storage/img/news9-10.jpg',
                            '/storage/img/news9-11.jpg',
                            '/storage/img/news9-12.jpg',
                            '/storage/img/news9-13.jpg',
                            '/storage/img/news9-14.jpg',
                            '/storage/img/news9-15.jpg',
                            '/storage/img/news9-16.jpg',
                            '/storage/img/news9-17.jpg',
                            
                        ],
                        title: 'The Egyptian Russian University',
                        desc: ' is decorated with congratulatory banners to welcome new students'
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