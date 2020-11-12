<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=lip >
                    <div class="back">
                        <h3>Vision</h3>
                        The Department of Pharmacology and Toxicology seeks to reach a distinguished level of high quality in education, research and to actively participate in community services as well as environment development. The Department also seeks to raise competitiveness ability at the national, regional and international levels.
                        <h3>Mission</h3>
                        Providing graduates with the necessary knowledge and skills to ensure the graduation of pharmacists with a high level of competence in the labor market and excellence in scientific research, and to actively participate in community services as well as environment development.
                        <div class="right_holder">
                            <button class="btn life" type="submit" onclick="window.open('storage/img/Organizational structure pharmacology.pdf')">Organizational Structure</button>
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
