<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=lip >
                    <div class="back">
                        <h3>Vision</h3>
                        Raise the level of pharmacy education in a way that qualifies the college graduate scientifically and skillfully for the labor market, and to participate in scientific research and community service.
                        <h3>Mission</h3>
                        The department specializes in teaching pharmaceutical courses in various fields related to pharmaceutical formulations of different pharmaceutical forms with high efficiency in terms of effectiveness, stability and safety, taking into account the rules of good manufacturing practice.

                        <div class="right_holder">
                            <button class="btn life" type="submit" onclick="window.open('storage/img/Organizational structure of Pharmaceutics Department.pdf')">Organizational Structure</button>
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
    height: 38em
    margin-bottom: 100px
.back
    position: absolute
    background: #fceedd
    background-image: url(/storage/img/campus_slider_object.png)
    height: 77%
    padding: 40px 2em 40px 40px
    width: 75%
    right: 9em
    top: 9em


</style>
