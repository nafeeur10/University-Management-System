<template>
  <div class="container service">
    <h2>The Egyptian Russian University Opens a New Building for Technology and Artificial Intelligence Studies</h2>
    <p>
     The Egyptian Russian University Opens a New Building for Technology and Artificial Intelligence Studies.
<br>
The leaderships of the Egyptian Russian University celebrated the opening of the new building of the Faculty of Management, Professional Technology and Computers, and the start of studies in four new study programs in the college within the university’s plan to meet the community requirements of advanced programs that match the latest international study programs.
<br>
At the beginning of the celebration, Prof Sherif Fakhry Mohamed Abdel Nabi, President of the Egyptian Russian University, congratulated the attendees, the staff of the faculty and their assistants at the Faculty of Administration, Professional Technology and Computers, for the new academic year, wishing the new students success as well as congratulating them on starting the study in the new building of the college and starting the new programs in the college, namely; the Business Analysis and Management Information Systems programs in the field of Professional Business Information Technology and Data Science programs in the advanced computing specialization.
<br>
In a related context, Professor Altahra Alsayed Mohamed Hameyah, Dean of the Faculty of Management, Professional Technology and Computers, explained that these distinguished and modern programs are unique among private university colleges , adding that the two specializations “Professional Business Information Technology” and “Advanced Computing” have scientific regulations and contents that have been chosen very carefully; That allows the Faculty graduates to have a distinguished presence in the labor market, as industrial establishments and large companies rush to contract with them due to the scarcity of these specializations.
<br>
Moreover, Mrs. Ekram Abdel Hameed, Secretary General of the Egyptian Russian University, praised the students of the Faculty of Management, Professional Technology and Computers, who honored the name of their colleague "Ahmed Sami" with the presence of his family, who was chosen by God Almighty after a struggle with cancer, and was known for his excellence in study. He was aslo known among his colleagues for his well reputation. The students presented to the family of Ahmed an autograph with some kind words written about their late colleague and a portrait of his picture, and one of his artistic works was placed in the new building of the college.
<br>
In the same context, Professor Hana Abdel-Rahman, the pioneer of student activities at the Egyptian Russian University, invited all new students to the Faculty of Management, Professional Technology and Computers to participate in student activities at the university, and she highlighted all the precautions needed to face "Covid 19" epidemic and the importance of adhering to social distancing and wearing masks.
<br>

It is noteworthy that the faculty staff from the faculty specialties "Economics, Business Administration, Accounting, Political Science, Professional and Computer Technology, Artificial Intelligence, Data Science", has provided a simple explanation of the faculty's specializations and their importance.
<br>
Eventually, the students organized an entertainment party for new comers that includes some entertainment competitions putting into consideration a follow-up by the university administration with the precautionary measures and social distancing.
<a href="https://www.gomhuriaonline.com/%D8%A7%D9%84%D8%AC%D8%A7%D9%85%D8%B9%D8%A9%20%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A%D8%A9%20%D8%A7%D9%84%D8%B1%D9%88%D8%B3%D9%8A%D8%A9%20%D8%AA%D9%81%D8%AA%D8%AA%D8%AD%20%D8%A7%D9%84%D9%85%D8%A8%D9%86%D9%89%20%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF%20%D9%84%D8%AF%D8%B1%D8%A7%D8%B3%D8%A7%D8%AA%20%D8%A7%D9%84%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7%20%D9%88%D8%A7%D9%84%D8%B0%D9%83%D8%A7%D8%A1%20%D8%A7%D9%84%D8%A5%D8%B5%D8%B7%D9%86%D8%A7%D8%B9%D9%89%20%D8%A8%D8%A7%D9%84%D9%81%D9%8A%D8%AF%D9%8A%D9%88/711891.html" target="_blank">Link</a>


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
                            '/storage/img/news11-1.jpg',
                            '/storage/img/news11-2.jpg',
                            '/storage/img/news11-3.jpg',
                            '/storage/img/news11-4.jpg',
                            '/storage/img/news11-5.jpg',
                            '/storage/img/news11-6.jpg',
                            
                        ],
                        title: 'The Egyptian Russian University',
                        desc: 'Opens a New Building for Technology and Artificial Intelligence Studies. 20 Oct 2020' 
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