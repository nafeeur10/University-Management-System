<template>
  <div class="container service">
    <h2>The visit of specialized technical committee</h2>
    <p>      
      Within the framework of the procedures of the Faculty of Management, Professional Technology and Computers to open a course program in the field of "Advanced Computing", starting from the academic year 2020/2021, in the specialization of artificial intelligence and in the specialization of data science. In this regard, the university welcomed the specialized technical committee formed by the Council of Private Universities and Al- Ahliyya Universities on 09/19/2020 which included  experiencied specialists in the field of computersfrom different universities to consider the start of study in the two programs and determine the numbers of the accepted students in them, noting that the two programs’ statues had previously obtained  the approval of the Committee of the Computer Science and Informatics Sector of the Supreme Council of Universities which allowed the commencement of study in them.
      The committee was briefed on the human and material capabilities allocated to the two programs, including the number of faculty members and their assistants, halls and specialized laboratories. The committee met the faculty members and expressed its satisfaction with the care it found in preparing for the start of study in the two programs. The start of the study in the two programs will be announced and applications will be accepted as once the ministerial decision is issued to start the study in the two programs
      The university seeks to open the two course programs mentioned within its plan to provide a set of distinguished study programs that are compatible with the vision of Egypt 2030, the requirements of the twenty-first century and the future requirements of the labor market in order to ensure qualifying the graduates of these programs with the information, competencies and skills that distinguish them in the labor market. 
      In addition come among these programms; the other new programs of the Clinical Pharmacy at the Faculty of Pharmacy and the two programs of Management Information Systems and Business Analytics Science at the Faculty of Management, Professional Technology and Computers.  
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
                            '/storage/img/event12-1.jpg',
                            '/storage/img/event12-2.jpg',
                            '/storage/img/event12-3.jpg',
                            '/storage/img/event12-4.jpg',
                            '/storage/img/event12-5.jpg',
                            '/storage/img/event12-6.jpg',
                            '/storage/img/event12-7.jpg',
                        ],
                        title: 'The visit of specialized technical committee',
                        desc: 'Within the framework of the procedures of the Faculty of Management, Professional Technology and Computers to open a course program in the field of "Advanced Computing", starting from the academic year 2020/2021, in the specialization of artificial intelligence and in the specialization of data science.'
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