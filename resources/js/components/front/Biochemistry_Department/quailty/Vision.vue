<template>
  <div class="container">
    <div class="row">
    <h1 class="services-h">The Quality Assurance Center</h1>
    <p class="services-p">The Quality Assurance Center in the Egyptian Russian University aims at improving the quality of the educational process, developing its outputs, and creating the appropriate atmosphere for institutional and individual evaluation between faculty members, the assisting staff, and university workers. The center also assists and supports university colleges to apply for accreditation.</p>
      <div class="col-lg-6 col-sm-12">
        <div class="right_holder">
          <h3 class="title">Vision of the Quality Assurance Center</h3>
          <div class="desc">
            The Quality Assurance Center seeks to be a distinguished center in the field of quality assurance through the continuous development of performance in all colleges of the university according to the mission and objectives of each college and based on the national and international evaluation strategies.
          </div>
          <h3 class="title">Of the Quality Assurance Center Mission</h3>
          <div class="desc">
            Assisting the university to achieve competitive quality for all elements of the educational process, support processes and related measures to obtain academic accreditation for its programs.
          </div>
          <button class="btn life" type="submit" onclick="window.open('storage/img/Units of the QAC.pdf')">Units of the quality assurance center</button>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="back">
            <img src="/storage/img/quality.jpg" class="img-fluid" style="margin-top:20px" />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped lang="sass">
.right_holder
    padding: 30px
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
.services-h
  color:#c20000
  text-align:center
.services-p
  color:#777

</style>
