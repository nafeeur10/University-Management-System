<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark upper_nav">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse upper_collapse" id="navbarSupportedContent">
          <ul class="navbar-nav upper_navbar_left nav5">
            <li class="nav-item upper_li">
              <router-link
                to="/"
                class="nav-link"
                exact
                title="Home"
              >
              <span v-if="lang === 'eng'">Home</span>
              <span v-else>منزل</span>
              
              </router-link>
            </li>
            <li class="nav-item upper_li">
              <a class="nav-link" href="/Events" v-if="lang==='eng'">Events</a>
              <a class="nav-link" href="/Events" v-else>الأحداث</a>
              
            </li>
            <li class="nav-item upper_li">
              <router-link
                to="/Faculties"
                class="nav-link"
                exact
                title="Faculties"
              >Faculties</router-link>
            </li>
            <li class="nav-item upper_li">
              <router-link
                to="/Campus"
                class="nav-link"
                exact
                title="Student-Life"
              >Campus Life</router-link>
            </li>
            <li class="nav-item upper_li">
              <router-link
                to="/Alumni"
                class="nav-link"
                exact
                title="Student-Life"
              >Alumni</router-link>
            </li>
            <li class="nav-item upper_li">
              <a 
                  class="nav-link"
                  href="https://admin.google.com/ac/accountchooser?continue=https://gsuite.google.com/dashboard"
                  target="_blank">E-learning</a>
            </li>
            <li class="nav-item upper_li">
              <router-link class="nav-link" to="Contact-us" exact>Contact Us</router-link>
            </li>
          </ul>

          <ul class="navbar-nav mr-auto upper_navbar_right">
            <li class="nav-item upper_li">
              <!-- <router-link class="nav-link" to="login" exact>login</router-link> -->
              <a 
                  class="nav-link"
                  href="https://admission.eru.edu.eg/Defaultapplicant.aspx"
                  target="_blank">login</a>
            </li>
            <li class="nav-item sepretor">
              <span>|</span>
            </li>
            <li class="nav-item upper_li">
              <a class="nav-link" href="#">Search</a>
            </li>

            <li class="nav-item">
              <select class="selectpicker mt-2" v-model="lang" @change="onChangeLanguage($event)">
                <option v-for="lang in language" :key="lang.value" :value="lang.value">{{ lang.title }}</option>
              </select>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light second_nav">
      <div class="container">
        <div class="nav_logo">
          <router-link to="/" exact title="ERU - Egyptian Russian University">
            <img src="/storage/logo/ERU-logo.jpg " alt="ERU" />
          </router-link>
        </div>
        <div class="" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto navbar_left n2ul">
            <li class="nav-item nav_li">
              <router-link to="About" exact>
                <h6 class="title">
                ABOUT ERU
                </h6>
                <div class="desc">Discover who we are and what we do</div>
              </router-link>
            </li>
            <li class="nav-item nav_li">
              <router-link to="Admission" exact title="Admission">
                <h6 class="title">
                  ADMISSION
                </h6>
                <div class="desc">Discover who we are and what we do</div>
              </router-link>
            </li>
            <li class="nav-item nav_li">

              <router-link to="/Academics" exact title="ACADEMIC">
                <h6 class="title">
                  ACADEMIC
                </h6>
                <div class="desc">Discover our academic system</div>
              </router-link>

            </li>
            <li class="nav-item nav_li">
              <router-link to="/Research" exact title="Research">
                <h6 class="title">
                  RESEARCH
                </h6>
                <div class="desc">View our scientific research</div>
              </router-link>
            </li>
            <li class="nav-item nav_li">
              <router-link to="/Quality" exact title="Quality Assurance">
                <h6 class="title">
                  QUALITY ASSURANCE
                </h6>
                <div class="desc">Discover our quality assurance</div>
              </router-link>
            </li>
          </ul>

          <a 
            style="color:#fff !important; "
            class="btn btn-danger Apply_now"
            href="https://admission.eru.edu.eg/UI/Adm/AdmMod_ApplicantRegCheck.aspx"
            target="_blank">Apply Now</a>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
    data() {
      return {
        greeting: 'Hello Gendy',
        lang: '',
        language: [
          { value: 'eng', title: 'English'},
          { value: 'arb', title: 'Arabic'}
        ]
      } 
    },
    methods: {

      languageSelection() {
        //localStorage.setItem('eru-lang', this.lang);

        this.lang = this.$store.getters.getLanguage

        if(this.lang == 'arb') {
          document.querySelector('html').classList.add('is-rtl')
          document.querySelector('.n2ul').classList.add('navbar_left-rtl')
          document.querySelector('.n2ul').classList.add('navbar-nav-rtl')
          document.querySelector('.nav5').classList.add('upper_navbar_left-rtl')
          document.querySelector('.carousel-caption').classList.add('carousel-caption-rtl')
          document.querySelector('.carousel-caption .btn').classList.add('caption-button-rtl')
        }
        else {
          document.querySelector('html').classList.remove('is-rtl')
          document.querySelector('.n2ul').classList.remove('navbar_left-rtl')
          document.querySelector('.n2ul').classList.remove('navbar-nav-rtl')
          document.querySelector('.nav5').classList.remove('upper_navbar_left-rtl')
          document.querySelector('.carousel-caption').classList.remove('carousel-caption-rtl')
          document.querySelector('.carousel-caption .btn').classList.remove('caption-button-rtl')
        }

      },

      onChangeLanguage(event) {
          this.lang = event.target.value;
          localStorage.setItem('eru-lang', this.lang);
          this.$store.commit('changeLanguage', this.lang);
          console.log("Instant Lang: ", this.$store.getters.getLanguage);
          this.languageSelection();
      },
      getLanguage() {
        this.lang = localStorage.getItem('eru-lang');
        // this.$store.commit('changeLanguage', this.lang)
      }
    },
    mounted() {

      if(!this.lang) {
        this.lang = 'eng';
      }

      this.$store.dispatch("changeLanguage");

      if(this.$store.getters.getLanguage == null) {
        localStorage.setItem('eru-lang', this.lang);
      }
      this.languageSelection();
    }
};
</script>


<style scoped>
.navbar-dark .navbar-toggler
{
    margin-left: 12em;
}
.navbar-dark .navbar-nav .nav-link
{
  color: #fff;
}
.router-link-active {
  color: #c20000 !important;
}
.upper_nav {
  font-weight: 400;
  padding-bottom: 0px;
  padding-top: 0px;
  background: #333;
}

.upper_collapse {
  color: #fff;
  font-size: 13px;
}

.upper_navbar_left {
  padding-left: 171px;
  width: 75%;
}

.upper_navbar_right {
  padding-left: 3em !important;
}

.upper_navbar_right li:first-child {
  padding: 0;
}

.upper_navbar_right .sepretor {
  color: #939989;
  padding: 0;
  line-height: 2.6;
}

.upper_li {
  min-width: 12%;
  transition: all 0.5s ease-in-out;
}



@media (min-width: 768px) {
  .navbar {
      border-radius: 4px;
  }
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}


@media (min-width: 768px) {
  .navbar-nav {
      float: left;
      margin: 0;
  }
}



.upper_collapse {
    color: #fff;
    font-size: 13px;
}

@media (min-width: 768px)
{
  .navbar-nav>li {
      float: left;
  }
}

/* End upper nav */

/* Start nav */


@media (max-width: 1050px) {
  .navbar_left {
    padding-left: 105px !important;
    width: 90%;
    margin-right: 0px !important;
  }

  .nav_li{
    max-width: 26% !important;
    padding: 2px !important;
  }
}


.navbar_left {
  padding-left: 179px;
  width: 88%;
  margin-right: 0px !important;
}


.nav_li {
  max-width: 16%;
  padding: 14px 3px 14px 14px;
  border-right: 1px #33333324 solid;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
}

.nav_li:hover,
.nav_li:focus {
  background: #eee;
}

.nav_li a {
  text-decoration: none;
}

.nav_li a .title  {
  color: #333;
  font-weight: bolder;
  text-decoration: none;
  background-color: transparent;
  font-size: 13px;
}

.nav_li a .desc {
  line-height: 1;
  color: #a29e9e;
  font-size: 11px;
}

.nav_logo {
  position: absolute !important;
  top: -60px !important;
}

.nav_logo {
  z-index: 1 !important;
}

.Apply_now {
  font-size: 13px !important;
  padding: 7px 17px !important;
  text-transform: uppercase !important;
  background: #c20000 !important;
  margin-top: 15px;
}
.navbar{
  margin-bottom: 0px !important;
}
/* End nav */
</style>
