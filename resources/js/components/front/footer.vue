<template>
  <!-- {{-- Footer --}} -->
  <div class="footer">
    <div class="row">
      <div class="col-sm-4">
        <div class="r1">
          <img
            src="/images/logo/ERU-logo-Footer.png"
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
            <li style="border: 1px solid;padding: 3px 12px;">
              <span v-if="$store.getters.getLanguage == 'eng'">Total Uesrs</span> 
              <span v-else>إجمالي المستخدمين</span> 
              {{ totalVisitors }}
            </li> 
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="r4">
          <h4 class="title white" style="text-transform: uppercase;" v-if="$store.getters.getLanguage == 'eng'">Newsletter</h4>
          <h4 class="title white" style="text-transform: uppercase;" v-else>النشرة الإخبارية</h4>
          <h6 class="desc" v-if="$store.getters.getLanguage == 'eng'">Sign Up now and get ERU’s latest news.</h6>
          <h6 class="desc" v-else>اشترك الآن واحصل على آخر أخبار ERU.</h6>

          <b-form @submit="onSubmit">

            <div v-if="newsletter_success">
              <div class="alert alert-success" role="alert">
                Thank you! You have registered successfully!
              </div>
            </div>
            
            <div class="d-flex">
              <b-form-input 
                class="border-right-0" 
                style="margin-top: 20px; background-color: #343434;border: 1px solid #5b5959; border-top-right-radius: 0; border-bottom-right-radius: 0; color: white;" 
                placeholder="your email here" 
                v-model="newsletterEmail"
                type="email"
              ></b-form-input>
              <b-button type="submit" variant="primary" class="border-left-0" style="margin-top: 20px; border-top-left-radius: 0; border-bottom-left-radius: 0;">Submit</b-button>
            </div>
          </b-form>

          <h4 class="title white" style="margin-top: 20px" v-if="$store.getters.getLanguage == 'eng'">CONNECT WITH US</h4>
          <h4 class="title white" style="margin-top: 20px" v-else>اتصل بنا</h4>
            <div class="icones">
                <a v-for="media in socialMedias" :key="media.id" :href="media.link" target="_blank" class="mr-2"><i :class="media.icon" aria-hidden="true"></i></a>
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
    .fab
        margin-right: 3px
    .fa-facebook-square
        color: #3b5998
    .fa-twitter-square
        color: #1da1f2
    .fa-youtube-square
        color: #c20000
    .fa-linkedin
        color: #0077b5
    .fa-instagram-square
        color: #3F729B


</style>

<script>
export default {
  data() {
    return {
      newsletter_success: false,
      totalVisitors: [],
      activeVisitors: [],
      socialMedias: [],
      newsletterEmail: ''
    }
  },
  methods: {
    getVisitors() {
      this.$http.get('api/visitors')
      .then( (res) => {
        this.totalVisitors = res.data.totalVisitors
        this.activeVisitors = res.data.activeVisitors
      })
    },
    getSocialMedias() {
      this.$http.get('api/contact/socialmedia')
      .then( (res) => {
        this.socialMedias = res.data.social_medias
      })
    },
    onSubmit(event) {

      event.preventDefault();

      this.$http.post('newsletter', { newsletter_email: this.newsletterEmail }, 
      { 
        headers: {
          'Content-Type': 'application/json', 
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
        } 
      }).then( (res) => {
        this.newsletter_success = true;
        setTimeout(() => {
          this.newsletter_success = false;
          this.newsletterEmail = ''
        }, 3000);
        console.log(res.data.newsletter_success)
      }).catch( (err) => {
        console.log(err);
      })
    },
  },
  mounted() {
    this.getVisitors();
    this.getSocialMedias();
  }
};
</script>