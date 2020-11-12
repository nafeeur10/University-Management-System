<template>
  <div class="container service">
    <h3>Campus Life</h3>
    <button v-for="(b, i) in btns" @click="tapId = b.id" :key="i" class="btn"> {{ b.name }} </button>

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
                        name: 'Accomodation ',
                    },
                    {
                        id: 2,
                        name: 'Buses',
                    },
                    {
                        id: 3,
                        name: 'Food Court',
                    },
                    {
                        id: 4,
                        name: 'Library',
                    },
                    {
                        id: 5,
                        name: 'Sports',
                    },
                    {
                        id: 6,
                        name: 'Rovers Activity',
                    }
                ],
                content: [
                    {
                        id: 1,
                        imgs: [
                            '/storage/img/accomodation2.jpg',
                            '/storage/img/accomodation4.jpg',
                            '/storage/img/accomodation5.jpg',
                            '/storage/img/accomodation6.jpg'
                        ],
                        title: 'Accomodation',
                        desc: 'The Egyptian Russian University announces accepting application for housing in the university dormitory at competitive prices. The enrollment begins with the priority of reservation, noting that the university dormitory is subject to full security supervision.  In addition to that, the university dormitory is equipped with 80 beds in double or single rooms as desired, with the periodic maintenance of all the utilities and appliances of the buildings, as well as a free Wi-Fi service.  More over there is a careful follow-up by the supervisors of the university buildings throughout the day with surveillance cameras, and taking all precautionary measures and sterilization continuously.'
                    },
                    {
                        id: 2,
                        imgs: [
                            '/storage/img/bus1.jpg',
                            '/storage/img/bus2.jpg',
                            '/storage/img/bus3.jpg',
                            '/storage/img/bus4.jpg',
                            '/storage/img/bus5.jpg',
                            '/storage/img/bus6.jpg',
                            '/storage/img/bus7.jpg'
                        ],
                        title: 'Buses',
                        desc: ''
                    },
                    {
                        id: 3,
                        imgs: [
                            '/storage/img/caf1.jpg',
                            '/storage/img/caf2.jpg',
                            '/storage/img/caf3.jpg',
                            '/storage/img/caf4.jpg',
                            '/storage/img/caf5.jpg',
                            '/storage/img/caf6.jpg'

                        ],
                        title: 'Food Court',
                        desc: 'The university has 5 cafeterias that serve high-quality food.  These cafeterias follow standards of hygiene, infection control, and the health and personal hygiene of workers are monitored, and cafeterias are also subject to periodic inspection by a committee at the university.'
                    },
                   {
                        id: 4,
                        imgs: [
                            '/storage/img/lib1.jpg',
                            '/storage/img/lib2.jpg',
                            '/storage/img/lib3.jpg',
                            '/storage/img/lib4.jpg',
                            '/storage/img/lib5.jpg'
                        ],
                        title: 'The Central Library of the Egyptian Russian University',
                        desc: 'The library consists of three floors: A- The first floor: is for the library management, control and monitoring devices, and the office for distributing textbooks to students. B- The second floor: for computers. C- The third floor: a hall for reading and studying. The library receives all students from 9.30 to 2.30 pm. The library has a capacity of 82 chairs, in addition to 20 computers, and work is underway to increase the capacity. The library includes (the reading room, which contains the scientific books - the computer hall, which facilitates entry to the (Egyptian Knowledge Bank). The library includes the offices of photocopiers.'
                    },
                   {
                        id: 5,
                        imgs: [
                            '/storage/img/sport1.jpg',
                            '/storage/img/sport2.jpg',
                            '/storage/img/sport3.jpg',
                            '/storage/img/sport4.jpg',
                            '/storage/img/sport5.jpg',
                            '/storage/img/sport6.jpg',
                            '/storage/img/sport7.jpg',
                            '/storage/img/sport8.jpg',
                            '/storage/img/sport9.jpg'
                        ],
                        title: 'Sports',
                        desc: 'Our belief that a healthy mind lies in a healthy body and increasing the base of practicing sports among students helps the university in providing the necessary playgrounds and tools for practicing sports for all students. Sports stadiums 1-The football field, 2-Basketball court, 3-Handball court, 4-Volleyball court, 5-Tennis court, 6-Table tennis hall, 7-Fitness hall. Through the university’s role in discovering sporting talents, internal tournaments are held through which distinguished figures are selected to participate in the name of the university in all the tournaments organized by the Egyptian University Sports Federation or by Egyptian universities. Sports teams: 1-Athletics, 2-Football, 3-Basketball, 4-Handball, 5-Volleyball, 6-Tennis, 7-Table tennis, 8-Speed ball, 9-Swimming, 10-Karate, 11-Judo, 12-Taekwondo, 13-Kung Fu, 14-Gymnastics'
                    }, 
                    {
                        id: 6,
                        imgs: [
                            '/storage/img/rover1.jpg',
                            '/storage/img/rover2.jpg',
                            '/storage/img/rover3.jpg',
                            '/storage/img/rover4.jpg',
                            '/storage/img/rover5.jpg'
                        ],
                        title: 'Rovers Activity',
                        desc: 'One of the most important activities of the university. Rovers activity began in the university since 2018 and developed rapidly and included four  clans of the faculties of (clans of engineering, clans of pharmacy, clans of dentistry, clans of business administration) worth remembering that’s Egyptian Russian university is the only private university officially accredited by the Egyptian Boys Scout Association. The slogan of the Egyptian Russian University’s rovers is (Towards a better Scout vision). The Egyptian Russian University’s Rovers activities didn’t stop even at a time of pandemic time of COVID19 and the most powerful "rovers forum" launched in may 2020  under the auspices of Prof. Dr. Sherif Fakhry, President of the Egyptian-Russian University, and his personal participation in the forum. The forum also included Egyptian boy scouting leaders as a lecturers in the forum Dr. Marco Fouad, is responsible for university Rovers he is a lecturer at the faculty of Oral and Dental medicine at the University and a member of the Board of Directors of the Egyptian Boys of Scouts (Cairo branch). Prof Dr Hana abdelrahman supervise to whole students activity in the university'
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
    h3
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
    padding: 16px
    height: 100%
    color: #fff
    box-shadow: 18px -20px 11px #0000001c
    text-align: left
    h1
      font-size: 25px
    p
      font-size: 13px
      font-weight: 200
  .carousel
    padding: 40px 0 0 0
  .carousel-control-next-icon,
  .carousel-control-prev-icon
    padding: 23px

</style>