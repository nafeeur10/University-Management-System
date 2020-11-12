<template>
<b-container class="bv-example-row">
  <b-row class="justify-content-md-center">
    <b-col col lg="8">
        <div class="right_holder">
            <h1 class="title">
                WELCOME TO THE FACULTY OF ENGINEERING (ERU)
            </h1>
            <div class="desc">
                As a new academic year begins, I welcome new and returning students to the University. For new students, this is the right time to join the Faculty of Engineering at the Egyptian Russian University, to realize your future hopes of being a successful engineer who will benefit the community in the field of specialization that you prefers
                Our carefully selected distinguished programs make us one of the best engineering colleges in the region and our graduates are among the best engineering graduates with the ability to adapt and entrepreneurship to keep pace with advanced technologies and market requirements.
                Students, staff, faculty, board of directors, alumni and community friends have contributed to the implementation of this exciting academic environment.
                We are extremely proud of our students and the influence they have made in the places they work inside or outside Egypt. We are delighted that you have joined us as part of our engineering community and look forward to what we can achieve together.
                You can also follow us on our website to learn more about the quality, depth, and breadth of our programs.
            </div>
            <button class="btn life" type="submit" onclick="window.open('storage/img/Students Guide Engineering.pdf')">Students Guide</button>
            <button class="btn us" type="submit" onclick="window.open('storage/img/QAEngineering.pdf')">Quality Assurance Unit</button>
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
