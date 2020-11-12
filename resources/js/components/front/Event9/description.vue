<template>
  <div class="container service">
    <h2>The Faculty of Engineering - The Egyptian Russian University participates in the 2020 Electric Vehicle Manufacturing Rally (Ever 2020) competition</h2>
    <p>
      Prof. Dr. Alaa Mohamed Al-Batsh - Dean of the Faculty of Engineering at the Egyptian Russian University announced the participation of the Neutrino Racing Team that consists of some students of the Mechatronics and Robotics Department,  in the competition organized by the Egyptian Scientific Research Academy under the supervision of the Ministry of Higher Education and Scientific Research to manufacture electric cars for the third successive year.<br>
      The participation in this competition dates back to 2018 when the Academy of Scientific Research announced the first Egyptian rally for the manufacture of electric cars with a single passenger capacity to localize this industry in Egypt, and to prepare and build Egyptian engineering cadres able to work in laying the foundation for the electric car industry, which represents the future of the industry. 
      In 2018, the faculty decided to participate by the Neutrino Racing Team consisting of 12 students from the second year of the Mechatronics and Robotics Department, where the team entered into competition with teams from 26 other Egyptian governmental and private universities to prepare the best designs. The jury consisting of a group of auto industry experts in Egypt examined the designs submitted by the contestants to select only 9 teams out of the 26 applicants for the competition in order to receive full support and funding from the Academy of Scientific Research to implement their designs on the ground and participate in the finals.<br>
      After months of work and effort, the Egyptian Russian University team was able to grab a seat from among the 9 seats who received support, so that the university would be the only one of private universities to receive support from the Academy of Scientific Research. The car was implemented by the team and participated until the last stages of the evaluation of that competition.<br>
      In 2019, the Neutrino Racing Team participated in the second edition of the competition (Ever 2019), and from its previous participation, it had acquired skills in designing, manufacturing and assembling electric cars. The competition was between 31 universities, of whom only 15 qualified for the finals, and among them was the Egyptian Russian University team.  The team obtained funding for the academy to manufacture the car and participated in all evaluation stages, so that the team ranked the second in the Republic in the rally, which was held in the New Administrative Capital in November the past. The team car was distinguished by its ability to travel a long distance without external charging of the batteries.<br>
      The team is now working to participate in the competition for the year 2020 (Ever 2020), hoping to continue achieving advanced positions in the competition, through the accumulation of experience and knowledge about the electric car industry and the transfer of that knowledge, scientific & practical experience to new students in the faculty to become a scientific center in this specialty.

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
                            '/storage/img/event9-1.jpg',
                            '/storage/img/event9-2.jpg',
                            '/storage/img/event9-3.jpg',
                            '/storage/img/event9-4.jpg',
                        ],
                        title: 'Electric Vehicle Manufacturing Rally (Ever 2020) competition',
                        desc: 'The Faculty of Engineering - The Egyptian Russian University participates in the 2020 Electric Vehicle Manufacturing Rally (Ever 2020) competition'
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