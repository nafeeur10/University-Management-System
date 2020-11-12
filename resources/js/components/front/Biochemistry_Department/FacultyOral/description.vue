<template>
    <div class="container">
        <div class="right_holder">
            <h1 class="title">
                WELCOME TO THE FACULTY OF ORAL AND DENTAL MEDICINE (ERU)
            </h1>
            <div class="desc">
                The study of Oral & Dental Medicine combines between science and art, it also integrate theoretical studies and manual skills. You will always get the support and assistance needed to accomplish the educational and practical required levels as we have the most recent facilities at the laboratories, clinics and lecture halls to keep both, the theoretical and practical educational process on track.
                We are keen to adhere to ethical standards and punctuality of social relations and I believe you will follow the same path.
                Eventually, I would like to welcome all new students and to wish you a happy, fruitful and successful new academic year.
            </div>
            <button class="btn life" type="submit" onclick="window.open('storage/img/Oral Students Guide.pdf')">Students Guide</button>
            <button class="btn us" type="submit" onclick="window.open('')">Organizational Structure</button>
            <button class="btn life" type="submit" onclick="window.open('storage/img/5 course description.pdf')">Courses</button>
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
