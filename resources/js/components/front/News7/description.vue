<template>
  <div class="container service">
    <h2>The Egyptian Russian University offers transportation lines for the students at competitive prices</h2>
    <p>
     The Secretary General of the Egyptian Russian University, Mrs.  Ekram Mohammed Abdel Hamid, announced the start of accepting students wishing to reserve a seat in the university’s air-conditioned transport fleet, with reasonable and competitive prices. This is for the lines of the governorates of Cairo and Alsharkeya, provided that these students have been enrolled in one of the university’s faculties “Engineering, Pharmacy, Oral & Dental Medicine, Faculty of Management, Professional Technology and Computers". 
The Secretary-General of the Egyptian Russian University has revealed that a "shuttle or express bus" branded "Mercedes" has been provided free of charge to subscribed students in the transportation lines.  Meanwhile, it is provided at nominal price for non- subscribed students.  The itinerary of the "Shuttle Bus" is from the ERU campus to The Girls College metro station, starting from the university headquarters at 12:30 PM.
Mrs. Ekram Muhammed Abdel Hamid added that it is possible to provide any new line according to the students’ demands, provided that the number is appropriate to the cost of operating the line, and it will be under the supervision of the University’s Traffic Department. 
The bus subscription can be paid in two installments with the start of each term, a maximum of one week before the start of the term. Noting that the university administration follows the guidelines of the World Health Organization regarding the protective measures against Corona virus. 

The Secretary General of the Egyptian Russian University stated that the university has a large number of different lines, which are as follows:
Nasr City, Ain Shams, Heliopolis, Helwan, Maadi, Eltagamoa, Elrehab, Shobra, Mohandessin, Embaba,  Elwarak, Al Haram, Elmatareya, Kobry Elkoba, Sendewa, Al-Shorouk, Madenaty, Gesr el- Suez, Elnozha, May 15, Elobour, 6 October, Alzakazeek (qawmeya/mohafaza/elmahata), 10th of Ramadan. 
The Secretary General of the Egyptian Russian University explained that whoever wants to reserve in the transportation service, should go to The Department of Transportation in the university campus to contact the Transport Officer / Mr. Mohamed Hosni, or call for inquiries via the following numbers: Mobile or WhatsApp (01144764434 - 01003336491)

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
                            '/storage/img/bus1.jpg',
                            '/storage/img/bus2.jpg',
                            '/storage/img/bus3.jpg',
                            '/storage/img/bus4.jpg',
                            '/storage/img/bus5.jpg',
                            '/storage/img/bus6.jpg',
                            
                        ],
                        title: 'Buses',
                        desc: 'Transportation Lines'
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