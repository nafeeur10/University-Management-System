<template>
  <!-- {{-- Footer --}} -->
  <div class="footer">
    <div class="row">
      <div class="col-sm-4">
        <div class="r1">
          <img
            src="/storage/logo/ERU-logo-Footer.png"
            alt="cafeteris-icon"
            title="cafeteris-icon"
            width="340"
          />
          <h1 class="title">WHY CHOOSE ERU</h1>
          <h6
            class="desc"
          >Our rich history is the foundation for our values. Join us to make your college experience unforgettable.</h6>
          <hr />
          <h6 class="desc">
            Copyright © 2020
            <span>ERU</span> | All rights reserved.
          </h6>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="r2">
          <h4 class="title white" >QUICK LINKS</h4>
          <ul>
            <li>
              <router-link
                      to="/tuition_and_financial_aid"
                      exact
                      title="tuition_and_financial_aid"
              >Tuition & Financial Aid</router-link>
            </li>
            <li>
              <router-link
                      to="/Campus"
                      exact
                      title="Campus-Life"
              >Campus Life</router-link>

            </li>
            <li>
              <router-link
                      to="/Facilities"
                      exact
                      title="Facilities"
              >Facilities</router-link>
            </li>
            <li>
              <router-link
                      to="/Careers"
                      exact
                      title="Facilities"
              >Careers</router-link>
            </li>
            <li style="border: 1px solid;padding: 3px 12px;">Active Uesrs {{ activeVisitors }}</li> 
          </ul>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="r2">
          <h4 class="title white" >SUPPORT</h4>
          <ul>
            <li>
              <router-link
                      to="/Multimedia"
                      exact
                      title="Multimedia"
              >Multimedia</router-link>
            </li>
            <li>
              <router-link
                to="/Quality"
                exact
                title="quality Assurance"
              >Quality Assurance</router-link>
            </li>
            <li>
              <router-link
                      to="/Related-Organizations"
                      exact
                      title="Related Organizations"
              >Related Organizations</router-link>
            </li>
            <li>
              <router-link
                      to="/News"
                      exact
                      title="News"
              >News</router-link>
            </li>
            <li style="border: 1px solid;padding: 3px 12px;" >Total Uesrs {{ totalVisitors }}</li> 
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="r4">
          <h4 class="title white" style="text-transform: uppercase;" >Newsletter</h4>
          <h6 class="desc">Sign Up now and get ERU’s latest news.</h6>
          <b-form-input  style="margin-top: 20px; background-color: #343434;border: 1px solid #5b5959;" placeholder="your email here"></b-form-input>
          <h4 class="title white" style="margin-top: 20px" >CONNECT WITH US</h4>
            <div class="icones">
                <a href="https://www.facebook.com/eru.university" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://twitter.com/ERU90621078" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCix3cUdsa5GFNDe15uuWpdA/videos" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/eru-university-701b761b6/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/egyptian_russian_university_er/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- {{-- ./Footer --}} -->
</template>

<style scoped lang="sass">

.r2 ul li a
    color: #999
    text-decoration: none

.r2 ul li a:hover
    color: #eee

.icones
    font-size: 1.5em
    cursor: pointer
    .fa
        margin-right: 3px
    .fa-facebook-square
        color: #3b5998
    .fa-twitter-square
        color: #1da1f2
    .fa-youtube-play
        color: #c20000
    .fa-linkedin-square
        color: #0077b5
    .fa-instagram
        color: #3F729B


</style>

<script>
export default {
  data() {
    return {
      totalVisitors: [],
      activeVisitors: []
    }
  },
  methods: {
    getVisitors() {
      this.$http.get('api/visitors')
      .then( (res) => {
        this.totalVisitors = res.data.totalVisitors
        this.activeVisitors = res.data.activeVisitors
      })
    }
  },
  mounted() {
    this.getVisitors();
  }
};
</script>