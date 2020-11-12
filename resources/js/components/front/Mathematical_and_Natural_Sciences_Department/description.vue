<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=lip >
                    <div class="back">
                        <h3>Department of Mathematical and Natural Sciences Vision</h3>
                        The department of Mathematical and Natural Sciences seeks to support and assist the various engineering programs in the faculty to occupy a prominent position among the Egyptian, Arab and international engineering programs.

                        <h3>Department of Mathematical and Natural Sciences Mission</h3>
                        Preparing and equipping students with the basic as well as engineering sciences required for all engineering programs in the college and contributing to prepare a graduate who is capable of competing in various fields of work locally and regionally, as well as achieving the objectives of the research plan and developing the various college programs.

                        <div class="right_holder">
                            <button class="btn life" type="submit" onclick="window.open('storage/img/studyplan-Mathematical.pdf')">Courses</button>
                            <button class="btn us" type="submit" onclick="window.open('storage/img/organizationalstructure-Mathematical.pdf')">Organizational Structure</button>
                            <button class="btn life" type="submit" onclick="window.open('storage/img/Preparatory.pdf')">Preparatory</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped lang="sass">
.right_holder
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
.lip
    background-image: url(/storage/img/cost_img1.jpg)
    background-size: cover
    width: 100%
    height: 48em
    margin-bottom: 100px
.back
    position: absolute
    background: #fceedd
    background-image: url(/storage/img/campus_slider_object.png)
    height: 77%
    padding: 40px 2em 40px 40px
    width: 85%
    right: 9em
    top: 9em


</style>
