<template>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="right_holder">
          <h1 class="title">ERU CAMPUS</h1>
          <div
            class="desc"
          >It is an Egyptian private university founded in 2006 to become the first private university in the Middle East that works in cooperation with the best Russian universities. The university certificates are accredited by the Egyptian Supreme Council of Universities. The ERU includes the Faculty of Engineering, Faculty of Pharmacy, Faculty of Oral and Dental Medicine, and the Faculty of Management, Professional Technology and Computers. The Egyptian Russian University aims to develop and enhance scientific, physical, social, cultural, and artistic skills for students to be qualified as outstanding graduates who meet the market needs, and to contribute to the development of our beloved country. For instance, the ERU Faculty of Oral and Dental Medicine provides excellent medical services for the community in Badr City. The Egyptian Russian University is offering, for the first time in the region, a unique program to empower students to secure scholarships for pursuing graduate studies (M.Sc. and Ph.D.) abroad. The university is equipped with advanced academic and scientific tools and professional personnel to guarantee the progress and advancement of the university through excellent programs. In 2019, the Faculty of Pharmacy has obtained the Academic Accreditation Certificate from the National Authority for Quality Assurance and Accreditation in Education (NAQAAE). Furthermore, a team from the ERU Faculty of Engineering won the second place in the final of the electric car rally, EVER-2019, that was organized by the Academy of Scientific Research and Technology.</div>
          <router-link class="btn us" to="MilitaryEducation" exact>Military Education</router-link><br><br><br><br><br>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="back"></div>
        <div class="vido">
          <div class="embed-responsive embed-responsive-16by9" style="height: 100%;width: 81%;">
            <iframe
              class="embed-responsive-item"
              src="https://www.youtube.com/embed/ovWk7-WHmAs"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped lang="sass">
.right_holder
    padding: 65px
    padding-left: 0
    .title
        color: #c20000
        font-weight: bold
    .desc
        color: #777
    .life, .us
        background: #c20000
        color: #fff
        padding: 15px 50px
        border-radius: 0
        text-transform: uppercase
        font-weight: bold
        font-size: 15px
        border: #c20000 2px solid
        margin: 31px 29px 0 0
        transition: all .3s ease-in-out
    .us
        border-color: #304770
        background-color: #304770
    .life:hover
        background-color: #fff
        color: #c20000
    .us:hover
        background-color: #fff
        color: #304770
.back
    background: #C20000
    background-image: url(/storage/img/campus_slider_object.png)
    height: 487px
    width: 426px
    position: absolute
    right: -14px
    top: 28px
.vido
    width: 552px
    height: 500px
    position: absolute
    top: -42px
    right: -58px
</style>
