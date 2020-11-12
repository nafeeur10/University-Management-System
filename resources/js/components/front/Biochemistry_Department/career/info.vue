<template>
    <div class="info">
        <h2 class="title" >Available Vacancies</h2>
        <p>The Egyptian Russian University announces the vacancy of the university’s assistant secretary general position.</p>
        <span></span>
        <div class="myToggle">
            <div class="mb-3">
                <div class="toggleHolder">
                    <a v-b-toggle href="#Vacancy_1_title" @click.prevent> > University’s assistant secretary</a>
                    <b-collapse id="Vacancy_1_title">
                        <b-card>
                            The Egyptian Russian University announces the vacancy of the university’s assistant secretary general position.
                        </b-card>
                    </b-collapse><br>
                </div>
            </div>
        </div>
        <!-- <router-link
                to="/Apply-now"
                class="btn btn-danger Apply_now"
                exact
                style="color:#fff !important;"
                title="Apply Now">
            Apply Now
        </router-link> -->
        <br><a 
                  class="btn btn-danger Apply_now"
                  style="color:#fff !important;"
                  href="https://admission.eru.edu.eg/UI/Adm/AdmMod_ApplicantRegCheck.aspx"
                  target="_blank">Apply Now</a>
    </div>
</template>


<style scoped lang="sass">
    .info
        padding-bottom: 55px
        color: #777
        .title
            color: #c20000
            font-weight: bolder
        p
            margin-bottom: 12px
        span
            width: 49px
            background: #c20000
            height: 3px
            display: block
            margin-bottom: 30px
    .toggleHolder
        padding: 17px 17px 17px 0
        border-bottom: 1px solid #ccc
    .toggleHolder
        a
            color: #c20000
            font-weight: bold
        a:hover
            text-decoration: none
            color: #304770
        .collapse
            margin-top: 8px
    .Apply_now
        font-size: 13px !important
        padding: 7px 17px !important
        text-transform: uppercase !important
        background: #c20000 !important

</style>
