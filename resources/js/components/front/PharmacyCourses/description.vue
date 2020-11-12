<template>
    <div class="container">
        <div class="right_holder">
            <h1 class="title">
                COURSES DESCRIPTION
            </h1>
            <div class="desc">
                Welcome all of you to Faculty of Pharmacy, Egyptian Russian University,
                you can find here course description for Pharm D and Pharm D clinical.
            </div>
            
            <button class="btn life" type="submit" onclick="window.open('storage/img/CourseDescription-Pharm-D.pdf')">Pharm D</button>
            <button class="btn us" type="submit" onclick="window.open('storage/img/CourseDescription-PharmD-clinical.pdf')">Pharm D Clinical</button>
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
