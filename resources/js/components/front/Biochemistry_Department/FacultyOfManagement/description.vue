<template>
<b-container class="bv-example-row">
  <b-row class="justify-content-md-center">
    <b-col col lg="8">
        <div class="right_holder">
            <h1 class="title">
                WELCOME TO THE FACULTY OF MANAGEMENT, PROFESSIONAL TECHNOLOGY AND COMPUTERS (ERU)
            </h1>
            <div class="desc">
                The Faculty of Management, Professional Technology and Computers, is one of the faculties of the Egyptian Russian University. The Ministerial approval to start the study from the start of the academic year 2018/2019 offers undergraduate students with a wide range of majors, minors and elective courses in the fields of business Administration, Accounting, Economics, Political Science, professional technology and computers. The faculty aims at providing unique programs of high quality education; serving as a starting point for potential career development. The faculty programs provide the faculty graduates with the needs of a highly competitive labor market.
            </div>
            <button class="btn life" type="submit" onclick="window.open('storage/img/Management-StudentGuide.pdf')">Student Guide</button>
            <button class="btn us" type="submit" onclick="window.open('storage/img/Faculty-of-management-Organizational structure.pdf')">Organizational Structure</button> 
            <button class="btn life" type="submit" onclick="window.open('storage/img/Management-Courses.pdf')">COURSES</button>
        </div>
    </b-col>
  </b-row>

</b-container>
</template>


<style scoped lang="sass">

.right_holder
    // padding: 56px 200px
    text-align: center
    .title
        color: #c20000
        font-weight: bold
    .desc
        color: #777
    .life, .us
        background: #c20000
        color: #fff
        padding: 7px 21px
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


</style>
