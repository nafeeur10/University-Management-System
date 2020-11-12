<template>
  <div class="container service">
    <h2>Egyptian Russian University hosts the meeting of the Pharmaceutical Studies Sector of the Universities Higher Council</h2>
    <p>
     Faculty of Pharmacy - Egyptian Russian University in Badr City hosted the meeting of the committee of the Pharmaceutical Studies Sector of the Universities Higher Council in October. It is headed by Dr. Maher Eldemiaty.

<br>
This has been carried out within the frame of its continuous and permanent scientific activity as it is keen to make a field follow up through holding some of its meetings in different universities to recognize the activity performed by the faculties which are supervised by the sector. Dr Ehab Fatouh , the Dean of the Faculty of Pharmacy - Egyptian Russian University explained that the faculty is equipped with international high standard labs, halls and classrooms. He also mentioned that the faculty has an educational factory to produce medicine for the students practical training. IT is worth to mention that after the meeting Dr Ehab Fatouh accompanied the committee members to visit the building of the Faculty of Pharmacy, the labs and the educational medicine factory to show them the preparations for the new academic year.
<a href="https://www.gomhuriaonline.com/%D8%A7%D9%84%D8%AC%D8%A7%D9%85%D8%B9%D8%A9%20%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A%D8%A9%20%D8%A7%D9%84%D8%B1%D9%88%D8%B3%D9%8A%D8%A9%20%D8%AA%D8%B3%D8%AA%D8%B6%D9%8A%D9%81%20%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9%20%D9%82%D8%B7%D8%A7%D8%B9%20%D8%A7%D9%84%D8%AF%D8%B1%D8%A7%D8%B3%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B5%D9%8A%D8%AF%D9%84%D9%8A%D8%A9%20%D8%A8%D9%80%D8%A7%D9%84%D8%A3%D8%B9%D9%84%D9%89%20%D9%84%D9%84%D8%AC%D8%A7%D9%85%D8%B9%D8%A7%D8%AA%20%D8%A8%D8%A7%D9%84%D8%B5%D9%88%D8%B1/710950.html" target="_blank">Link</a>
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
                            '/storage/img/news10-1.jpg',
                            '/storage/img/news10-2.jpg',
                            
                        ],
                        title: 'The Egyptian Russian University',
                        desc: 'hosts the meeting of the Pharmaceutical Studies Sector of the Universities Higher Council'
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