<template>
    <div class="container">
        <div class="right_holder">
            <h1 class="title">
                WELCOME TO THE FACULTY OF PHARMACY (ERU)
            </h1>
            <div class="desc">
                Welcome all of you to Faculty of Pharmacy, Egyptian Russian University, along with my best congratulations for the occasion of starting the new academic year! We are delighted to be partnering with you! As you contribute in a thrilling educational expedition of exploration. In this stage, you will discover infinite opportunities to experience campus life positively by learning, discovering, and participating together. Besides, your participation in student activities will be mostly able to refine the spirit of group in you and make you have the required dedication for the advancement of society. I hope you benefit maximally from the expertise and capabilities of the college, and also, I hope that all of you can confirm superiority in excellence and meet our expectations scientifically and behaviourally, not only through your studies at college, but also through your commitment to the long-standing university values and traditions.
            </div>
            
            <button class="btn life" type="submit" onclick="window.open('storage/img/Students Guide Pharm D.pdf')">Students Guide Pharm D</button>
            <button class="btn us" type="submit" onclick="window.open('storage/img/Students Guide Pharm D Clinical.pdf')">Students Guide Pharm D Clinical</button>
            <button class="btn us" type="submit" onclick="window.open('storage/img/QAPharmacy.pdf')">Quality Assurance Unit</button>
            <button class="btn life" type="submit" onclick="window.open('storage/img/PharmacyOrganizationalStructure.pdf')">Organizational Structure</button>
            <router-link class="btn us" to="PharmacyCourses" exact>Courses</router-link>
        </div>
    </div>
</template>



<style scoped lang="sass">

.right_holder
    padding: 0px 200px 56px 200px
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
