<template>
  <div>

    <carousel :link="link" text="none" v-if="renderComponent"/>

    <news style="margin-top: 60px" class="new_b"/>

    <faculty />

    <div class="events">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h1 class="title">Events</h1>
            <div class="card-deck">
              <div class="card">
                <img src="/storage/img/event12.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #fff solid; padding-left: 0;">
                      <span class="white">Sep</span>
                      <h1 class="white">19</h1>
                    </div>
                    <div class="col-sm-9">
                      <ul>
                        <li class="white">5:00 PM - 7:00 PM</li>
                      </ul>
                      <router-link to="/Event12" class="card-title" exact>The visit of specialized technical committee</router-link>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <img src="/storage/faculty/event2.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #fff solid; padding-left: 0;">
                      <span class="white">Oct</span>
                      <h1 class="white">31</h1>
                    </div>
                    <div class="col-sm-9">
                      <ul>
                        <li class="white">2:00 PM - 9:00 PM</li>
                      </ul>
                      <router-link to="/Event2" class="card-title" exact>Awareness Youth Campaign</router-link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="title">
              <router-link to="/Events" class="more white" exact title="Events"><small>VIEW ALL EVENTS</small></router-link>
            </div>
            <div class="right">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3" style="border-right: 1px #fff solid; padding-left: 0;">
                    <span class="white">Apr</span>
                    <h1 class="white">05</h1>
                  </div>
                  <div class="col-sm-9">
                    <ul>
                      <li class="white">5:00 PM - 7:00 PM</li>
                    </ul>
                    <router-link to="/Event3" class="card-title" exact>Competition for the best awareness video about Coronavirus</router-link>
                  </div>
                </div>
              </div>
              <hr style="margin: 0;border-color: #fff;" />
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3" style="border-right: 1px #fff solid; padding-left: 0;">
                    <span class="white">Aug</span>
                    <h1 class="white">08</h1>
                  </div>
                  <div class="col-sm-9">
                    <ul>
                      <li class="white">4:00 PM - 7:00 PM</li>
                    </ul>
                    <router-link to="/Event4" class="card-title" exact>The Russian role in the Middle East</router-link>
                  </div>
                </div>
              </div>
              <hr style="margin: 0;border-color: #fff;" />
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3" style="border-right: 1px #fff solid; padding-left: 0;">
                    <span class="white">May</span>
                    <h1 class="white">03</h1>
                  </div>
                  <div class="col-sm-9">
                    <ul>
                      <li class="white">5:00 PM - 7:00 PM</li>
                    </ul>
                    <router-link to="/Event5" class="card-title" exact>Electronic sports tournament</router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="news">
      <div class="container">
        <div class="row">
          <div class="col-sm-4" style="padding-right: 0;">
            <!-- {{-- sidpar --}} -->
            <div class="sidpar">
              <h3>CAMPUS LIFE</h3>
              <!-- {{-- Cafeteria --}} -->
              <hr style="margin: 40px 0; border-color: #fff;" />
              <div class="row">
                <div class="col-sm-2">
                  <img
                    src="/storage/img/cafeteris-icon.png"
                    alt="cafeteris-icon"
                    title="cafeteris-icon"
                    width="35"
                    height="27"
                  />
                </div>
                <div class="col-sm-10">
                  <h3 class="title white">Cafeteria</h3>
                  <div
                    class="desc white"
                  >The university has 5 cafeterias that serve high-quality food.<br><br></div>
                  <router-link
                          to="/Campus"
                          class="more white"
                          style="display: block;"
                          exact
                          title="Campus">
                    VIEW MORE
                    <i class="fa fa-arrow-right"></i>
                  </router-link>
                </div>
              </div>
              <!-- {{-- SPORTS --}} -->
              <hr style="margin: 40px 0; border-color: #fff;" />
              <div class="row">
                <div class="col-sm-2">
                  <img
                    src="/storage/img/ball-white1.png"
                    alt="cafeteris-icon"
                    title="cafeteris-icon"
                    width="35"
                    height="27"
                  />
                </div>
                <div class="col-sm-10">
                  <h3 class="title white">SPORTS</h3>
                  <div
                    class="desc white"
                  >Our belief that a healthy mind lies in a healthy body.<br><br></div>
                  <router-link
                          to="/Campus"
                          class="more white"
                          style="display: block;"
                          exact
                          title="Campus">
                    VIEW MORE
                    <i class="fa fa-arrow-right"></i>
                  </router-link>
                </div>
              </div>
              <!-- {{-- SPORTS --}} -->
              <hr style="margin: 40px 0; border-color: #fff;" />
              <div class="row">
                <div class="col-sm-2">
                  <img
                    src="/storage/img/acc-icon.png"
                    alt="cafeteris-icon"
                    title="cafeteris-icon"
                    width="35"
                    height="27"
                  />
                </div>
                <div class="col-sm-10">
                  <h3 class="title white">Accomodation</h3>
                  <div
                    class="desc white"
                  >The Egyptian Russian University announces accepting application for housing.<br><br></div>
                  <router-link
                          to="/Campus"
                          class="more white"
                          style="display: block;"
                          exact
                          title="Campus">
                    VIEW MORE
                    <i class="fa fa-arrow-right"></i>
                  </router-link>
                  <!-- <router-link
                          to="/Apply-now"
                          class="btn btn-lg btn-danger"
                          style="margin-top: 50px; background:#c20000"
                          exact
                          title="Apply Now">
                    Apply Now
                  </router-link> -->
                  <a 
                  style="margin-top: 50px; background:#c20000"
                  class="btn btn-lg btn-danger"
                  href="https://admission.eru.edu.eg/UI/Adm/AdmMod_ApplicantRegCheck.aspx"
                  target="_blank">Apply Now</a>
                </div>
              </div>
            </div>
            <!-- {{-- ./sidpar --}} -->
            <!-- {{-- Our Partners --}} -->
            <div class="Partners">
              <h1>Our Partners</h1>
              <img src="/storage/img/p1.png" class="card-img-top" alt="..." />
              <img src="/storage/img/p2.png" class="card-img-top" alt="..." />
              <img src="/storage/img/p3.png" class="card-img-top" alt="..." />
              <img src="/storage/img/p4.png" class="card-img-top" alt="..." />
            </div>
            <!-- {{-- ./Our Partners --}} -->
          </div>
          <div class="col-sm-8">
            <!-- {{-- Latest --}} -->
            <div class="latest">
              <div class="header">
                <h3>
                  <strong>LATEST NEWS</strong>
                  <small>
                    <router-link
                          to="/News"
                          class="more"
                          style="display: block;"
                          exact
                          title="Research">
                    VIEW ALL NEWS
                  </router-link>
                  </small>
                </h3>
              </div>
              <div class="row latest">
                <div class="col-sm-4 photo1" style="padding-left: 0;padding-right: 0;">
                  <img src="/storage/img/news1-h.jpg " class="card-img-top" alt="..." />
                </div>
                <div class="col-sm-4 desc1" style="padding-left: 0;padding-right: 0;">
                  <div class="desc">
                    <div class="date">April 13,2020</div>
                    <h4 class="title">Extravaganza</h4>
                    <div
                      class="cont"
                    >Online exhibition of medicinal plants at the Egyptian Russian University</div><br>
                    <router-link
                          to="/News1"
                          class="more"
                          style="display: block;"
                          exact
                          title="News">
                    READ MORE
                    <i class="fa fa-arrow-right"></i>
                  </router-link>
                  </div>
                </div>
                <div class="col-sm-4 photo2" style="padding-left: 0;padding-right: 0;">
                  <img src="/storage/img/news3-h.jpg " class="card-img-top" alt="..." />
                </div>
              </div>
              <div class="row latest">
                <div class="col-sm-4 desc2" style="padding-left: 0;padding-right: 0;">
                  <div class="desc">
                    <div class="date white">March 09,2020</div>
                    <h4 class="title">Jalabiya Party</h4>
                    <div
                      class="cont"
                    >Don't let Corona stop you ... Pharmacy students celebrated their graduation with "Jalabiya Party" online</div><br>
                    <router-link
                          to="/News2"
                          class="more white"
                          style="display: block;"
                          exact
                          title="News">
                    READ MORE
                    <i class="fa fa-arrow-right"></i>
                  </router-link>
                  </div>
                </div>
                <div class="col-sm-4 photo3" style="padding-left: 0;padding-right: 0;">
                  <img src="/storage/img/news2.jpg " class="card-img-top" alt="..." />
                </div>
                <div class="col-sm-4 desc3" style="padding-left: 0;padding-right: 0;">
                  <div class="desc">
                    <div class="date text-muted">February 01,2020</div>
                    <h4 class="title">The first sports forum</h4>
                    <div
                      class="cont"
                    >The Egyptian Russian University participates in the first sports forum for international students</div><br>
                    <router-link
                          to="/News3"
                          class="more"
                          style="display: block;"
                          exact
                          title="News">
                    READ MORE
                    <i class="fa fa-arrow-right"></i>
                  </router-link>
                  </div>
                </div>
              </div>
            </div>
            <!-- {{-- Latest --}} -->
            <!-- {{-- MULTIMEDIA --}} -->
            <div class="MULTIMEDIA">
              <div class="header">
                <h3>
                  <strong>MULTIMEDIA</strong>
                  <small>
                    <router-link
                          to="/Multimedia"
                          class="more"
                          style="display: block;"
                          exact
                          title="Research">
                    VIEW ALL MULTIMEDIA
                  </router-link>
                  </small>
                </h3>
              </div>
              <div class="row">
                <div class="col-sm-6 photo1" style="padding-left: 0;padding-right: 0;">
                  <img src="/storage/img/g1.jpeg" class="img-fluid" alt="..." />
                </div>

                 <div class="col-sm-6 photo1" style="padding-left: 0;padding-right: 0;">
                      <img src="/storage/img/g6.jpg " class="img-fluid" alt="..." />
                  </div>
              </div>
            </div>
            <!-- {{-- MULTIMEDIA --}} -->
            <!-- {{-- ERU’S --}} -->
            <div class="ERU’S">
              <div class="header">
                <h3>
                  <strong>ERU’S RESEARCH</strong>
                  <small>
                  <router-link
                          to="/Research"
                          class="more"
                          style="display: block;"
                          exact
                          title="Research">
                    VIEW ALL RESEARCH
                  </router-link>
                  </small>
                </h3>
              </div>
              <div class="row ERU’S">
                <div class="col-sm-6 photo1" style="padding-left: 0;padding-right: 0;">
                  <img src="/storage/img/last.jpeg " style="height: 24em;" class="card-img-top" alt="..." />
                </div>
                <div class="col-sm-6 desc1" style="padding-left: 0;padding-right: 0;">
                  <div class="desc">
                    <h2 class="title">RESEARCH</h2>
                    <p class="cont">
                      Based on the importance of scientific research at the university, and in line with the strategic objectives of our beloved country, Plan 2030, the Egyptian Russian University supports the research process within the various faculties of the university, in various research fields. On the university’s page on the Scopus database until the month of 8-2020, we will find about 270 papers published in 21 different fields emanating from the university’s colleges.
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- {{-- ERU’S --}} -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

import Carousel from '../components/front/carousel.vue';
import News from '../components/front/home/news.vue';
import Faculty from '../components/front/home/faculty.vue';

export default {
  data() 
  {
    return {
      link: [],
      renderComponent: true
    }
  },
  methods: {
    getSliders() {
      this.$http.get('api/sliders')
      .then( (res) => {
        this.link = res.data.sliders;
        console.log("Slider: ", res.data.sliders);
      })
    }
  },
  components: {
    carousel: Carousel,
    news: News,
    faculty: Faculty
  },
  mounted() {
    this.getSliders();
  }
};
</script>

<style scoped>
  .more
  {
    color:#333;
    font-weight:bold;
  }
  .more:hover
  {
    color: #c20000;
  }
  .desc p{
    color: white !important;
  }
  .white 
  {
    color:#fff;

  }
  .white:hover 
  {
    color:#ccc;

  }
</style>
