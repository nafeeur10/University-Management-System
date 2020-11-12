<template>
<b-container class="bv-example-row">
  <b-row class="justify-content-md-center">
    <b-col col lg="8">
        <div class="right_holder">
            <h1 class="title">
                Scientific Research
            </h1>
            <div class="desc">
                Based on the importance of scientific research at the university, and in line with the strategic objectives of our beloved country, Plan 2030, the Egyptian Russian University supports the research process within the various faculties of the university, in various research fields. On the university’s page on the Scopus database until the month of 8-2020, we will find about 270 papers published in 21 different fields emanating from the university’s colleges. <br>
                <img src="/storage/img/PieChart.jpg" class="img-fluid" style="margin-top:64px" />
                <a 
                  class="btn life"
                  href="https://08105btjv-1105-y-https-www-scopus-com.mplbci.ekb.eg/affil/profile.uri?afid=60110581&offset=1&sid=d718b6c62af99c952f4826492cb83482&origin=AffiliationNamesList&txGid=b3748b80a58f1b58a4c36cc5c3482877"
                  target="_blank">Various examples of scientific research published in the years 2019-2020</a>
            </div>
            <button class="btn us" type="submit" onclick="window.open('storage/img/All-publications.pdf')">All publications</button>
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
