<template>
  <div class="container service">
    <h2>Egyptian Russian University is organizing a ceremony entitled "My country is a land of pride and dignity</h2>
    <p>      
      The "Egyptian Russian University" witnessed a celebration marking the 47th anniversary of the glorious victories of the 6th of October War, under the slogan "My country is a land of pride and dignity."
<br>
<strong>It is worth noting that the ceremony was attended by:</strong><br>
• Prof. Karam Gabr - Chairman of the National Authority for Press and Information, Major General / El-Sayed El-Borai - the former Governor of Assiut. <br>
• Major General Staff of War / Nagy Shuhoud - Adviser at Nasser Military Academy, Prof. Khaled Miri - Editor-in-Chief of Al-Akhbar Newspaper. <br>
• Prof. Dr. / Taya Abdullatif - Adviser to the Minister of Higher Education for Student Activities. <br>
• Brigadier General /Muhammad Abu Shanab (Deputy for Major General Doctor / Khaled Shukry - Director of the College of Military Medicine).<br>
• Prof. Dr. Mahmoud Ibrahim, one of the scholars of Al-Azhar Al-Sharif.<br> 
• Ms. Ola Shousha - Presenter of the Soura program on Al-Nahar channel.<br> 
• Ms. Naglaa Al-Bayoumi - Presenter in the Egyptian TV.<br>
• Mr. Ayman Adly - head of the training and educational committee of the Media Syndicate.<br>
• Mr. Amr Nassar - the journalist at Al-Ahram.<br> 
• Dr./ Maysa Al-Ashmawy - Chairman of the Board of Trustees of the Leaders Foundation for Administrative Sciences And Development.<br> 
• Dr. Mustafa Al-Adwar - Chairman of the Board of Directors and Managing Director of the Arab Academy of Arts.<br> 
• Dr. Mahmoud Abdel Aziz - Chairman of the Youth Committee at the Leaders Foundation for Administrative Sciences and Development, and the Coordinator of Political Communication and National Security for Community Service Work.<br> 
<br>
At the end of the ceremony, a large group of guests participating in the ceremony were honored.
<br>
  <a href="https://www.youtube.com/watch?v=rDR2AIkKn0U&feature=youtu.be" target="_blank"><strong>Link of the cermony</strong></a>
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
                            '/storage/img/event13-1.jpg',
                            '/storage/img/event13-2.jpg',
                            '/storage/img/event13-3.jpg',
                            '/storage/img/event13-4.jpg',
                            '/storage/img/event13-5.jpg',
                            '/storage/img/event13-6.jpg',
                            '/storage/img/event13-7.jpg',
                            '/storage/img/event13-8.jpg',
                            '/storage/img/event13-9.jpg',
                            '/storage/img/event13-10.jpg',
                            '/storage/img/event13-11.jpg',
                            '/storage/img/event13-12.jpg',
                            '/storage/img/event13-13.jpg',
                            '/storage/img/event13-14.jpg',
                            '/storage/img/event13-15.jpg',
                        ],
                        title: 'Egyptian Russian University',
                        desc: ' is organizing a ceremony entitled "my homeland is the land of pride and dignity.'
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