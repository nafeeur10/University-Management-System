<template>
  <div>

    <carousel :link="link" text="none" v-if="renderComponent"/>

    <news style="margin-top: 60px" class="new_b"/>

    <faculty />

    <div class="events">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h1 class="title" v-if="$store.getters.getLanguage == 'eng'">Events</h1>
            <h1 class="title" v-else>الأحداث</h1>
            <div class="card-deck">


              <div class="card" v-for="(event, index) in firstTwoEvents" :key="event.id">
                <img :src="'images/event/'+eventImages[index]" class="card-img-top" alt="..." />
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #fff solid; padding-left: 0;" :class="$store.getters.getLanguage == 'arb' ? 'text-right': '' ">
                      <span class="white">{{ event.event_date | monthFormat }}</span>
                      <h1 class="white">{{ event.event_date | dayFormat }}</h1>
                    </div>
                    <div class="col-sm-9">
                      <ul :class="$store.getters.getLanguage == 'arb' ? 'pr-0' : ''">
                        <li class="white" v-if="$store.getters.getLanguage == 'eng'">{{ event.event_start_time | timeFormat }} - {{ event.event_end_time | timeFormat }}</li>
                        <li class="white text-right" style="direction: ltr;" v-else>{{ event.event_start_time | timeFormat }} - {{ event.event_end_time | timeFormat }}</li>
                      </ul>
                      <router-link :to="{ name: 'Event', params: { id: event.id } }" class="card-title" exact v-if="$store.getters.getLanguage == 'eng'">{{ event.event_title }}</router-link>
                      <router-link :to="{ name: 'Event', params: { id: event.id } }" class="card-title" :class="$store.getters.getLanguage == 'arb' ? 'w-100 d-block text-right': ''" dir="rtl" exact v-else>{{ event.event_title_arabic }}</router-link>
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
              <div v-for="(event, index) in lastThreeEvents" :key="event.id">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #fff solid; padding-left: 0;" :class="$store.getters.getLanguage == 'arb' ? 'text-right' : ''">
                      <span class="white">{{ event.event_date | monthFormat }}</span>
                      <h1 class="white">{{ event.event_date | dayFormat }}</h1>
                    </div>
                    <div class="col-sm-9" :class="$store.getters.getLanguage == 'arb' ? 'text-right' : ''">
                      <ul>
                        <li class="white" style="direction: ltr;">{{ event.event_start_time | timeFormat }} - {{ event.event_end_time | timeFormat }}</li>
                      </ul>
                      <router-link :to="{ name: 'Event', params: { id: event.id } }" class="card-title" exact v-if="$store.getters.getLanguage == 'eng'">{{ event.event_title }}</router-link>
                      <router-link :to="{ name: 'Event', params: { id: event.id } }" class="card-title text-right" exact v-else>{{ event.event_title_arabic }}</router-link>
                    </div>
                  </div>
                </div>
                <hr style="margin: 0;border-color: #fff;" v-if="index!=2"/>
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
              <div class="row" v-for="campus in campusLife" :key="campus.id">
                <div class="col-sm-2">
                  <img
                    :src="'images/campuslife/' + campus.campus_life_icon"
                    alt="cafeteris-icon"
                    :title="campus.campus_life_title"
                    width="35"
                    height="27"
                  />
                </div>
                <div class="col-sm-10">
                  <h3 class="title white" v-if="$store.getters.getLanguage == 'eng'">{{ campus.campus_life_title }}</h3>
                  <h3 class="title white" v-else>{{ campus.campus_life_title_arabic }}</h3>
                  <div
                    class="desc white"
                    v-if="$store.getters.getLanguage == 'eng'"
                  >{{ campus.campus_life_home_description }}<br><br></div>

                  <div
                    class="desc white"
                    v-else
                  >{{ campus.campus_life_home_description_arabic }}<br><br></div>
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
            </div>
            <!-- {{-- ./sidpar --}} -->
            <!-- {{-- Our Partners --}} -->
            <div class="Partners">
              <h1 v-if="$store.getters.getLanguage == 'eng'">Our Partners</h1>
              <h1 class="text-right" v-else>شركاؤنا</h1>

              <transition-group name="fade" tag="div" mode="out-in">
                <a :href="partner.partner_link"
                    v-for="(partner, index) in ourPartnerImages.slice(0, 6)" 
                    :key="partner.id"
                    target="_blank"
                    class="d-block"
                >
                  <img
                    v-if="partnersInitialValue[index]"
                    :src="'images/partners/' + partner.partner_image" 
                    class="card-img-top" alt="..." />
                </a>
              </transition-group>
            </div>
            <!-- {{-- ./Our Partners --}} -->
          </div>
          <div class="col-sm-8">
            <!-- {{-- Latest News --}} -->
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
                  <img :src="'images/news/'+latestNewsImages[0]" class="card-img-top" alt="..." />
                </div>
                <div class="col-sm-4 desc1" style="padding-left: 0;padding-right: 0;">
                  <div class="desc">
                    <div class="date">{{ latestNews[0].news_date }}</div>
                    <h4 class="title" v-if="$store.getters.getLanguage == 'eng'">{{ latestNews[0].news_home_title }}</h4>
                    <h4 class="title" v-else>{{ latestNews[0].news_home_title_arabic }}</h4>
                    <div class="cont" v-if="$store.getters.getLanguage == 'eng'">{{ latestNews[0].news_home_description }}</div>
                    <div class="cont" v-else>{{ latestNews[0].news_home_description_arabic }}</div>
                    <br>
                    <router-link
                      :to="{ name: 'SingleNews', params: { id: latestNews[0].id } }"
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
                  <img :src="'images/news/'+latestNewsImages[1]" class="card-img-top" alt="..." />
                </div>
              </div>
              <div class="row latest">
                <div class="col-sm-4 desc2" style="padding-left: 0;padding-right: 0;">
                  <div class="desc">
                    <div class="date white">{{ latestNews[1].news_date }}</div>
                    <h4 class="title" v-if="$store.getters.getLanguage == 'eng'">{{ latestNews[1].news_home_title }}</h4>
                    <h4 class="title" v-else>{{ latestNews[1].news_home_title_arabic }}</h4>
                    <div class="cont" v-if="$store.getters.getLanguage == 'eng'">{{ latestNews[1].news_home_description }}</div>
                    <div class="cont" v-else>{{ latestNews[1].news_home_description_arabic }}</div>
                    <br>
                    <router-link
                          :to="{ name: 'SingleNews', params: { id: latestNews[1].id } }"
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
                  <img :src="'images/news/'+latestNewsImages[2]" class="card-img-top" alt="..." />
                </div>
                <div class="col-sm-4 desc3" style="padding-left: 0;padding-right: 0;">
                  <div class="desc">
                    <div class="date text-muted">{{ latestNews[1].news_date }}</div>
                    
                    <h4 class="title" v-if="$store.getters.getLanguage == 'eng'">{{ latestNews[2].news_home_title }}</h4>
                    <h4 class="title" v-else>{{ latestNews[2].news_home_title_arabic }}</h4>
                    
                    <div class="cont" v-if="$store.getters.getLanguage == 'eng'">{{ latestNews[2].news_home_description }}</div>
                    <div class="cont" v-else>{{ latestNews[2].news_home_description_arabic }}</div>
                    
                    <br>
                    <router-link
                          :to="{ name: 'SingleNews', params: { id: latestNews[2].id } }"
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
                <div class="col-md-6 photo1" style="padding-left: 0;padding-right: 0;" v-for="img in multimediaImages.slice(0, 2)" :key="img.href">
                  <img :src="img.href" class="img-fluid w-100" alt="..." />
                </div>
              </div>
            </div>
            <!-- {{-- MULTIMEDIA --}} -->
            <!-- {{-- ERU’S --}} -->
            <div class="ERU’S">
              <div class="header">
                <h3>
                  <strong v-if="$store.getters.getLanguage == 'eng'" class="mt-1">ERU’S RESEARCH</strong>
                  <strong class="mt-1" v-else>أبحاث ERU</strong>
                  <small class="mt-2">
                  <router-link
                    to="/Research"
                    class="more"
                    style="display: block;"
                    exact
                    title="Research"
                    v-if="$store.getters.getLanguage == 'eng'"
                  >
                    VIEW ALL RESEARCH
                  </router-link>
                  <router-link
                    to="/Research"
                    class="more"
                    style="display: block;"
                    exact
                    title="Research"
                    v-else
                  >
                    عرض كل الأبحاث
                  </router-link>
                  </small>
                </h3>
              </div>
              <div class="row ERU’S">
                <div class="col-sm-6 photo1" style="padding-left: 0;padding-right: 0;">
                  <img :src="'images/research/'+researchInfo.research_homepage_image" style="height: 24em;" class="card-img-top" alt="..." />
                </div>
                <div class="col-sm-6 desc1" style="padding-left: 0;padding-right: 0;">
                  <div class="desc research-desc">
                    <h2 class="title" v-if="$store.getters.getLanguage == 'eng'">{{ researchInfo.research_title }}</h2>
                    <h2 class="title text-right" v-else>{{ researchInfo.research_title_arabic }}</h2>
                    
                    <p v-if="$store.getters.getLanguage == 'eng'" class="cont white" v-html="researchInfo.research_description"></p>
                    <p v-else class="cont white text-right" v-html="researchInfo.research_description_arabic"></p>
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
      events: [],
      firstTwoEvents: [],
      lastThreeEvents: [],
      renderComponent: true,
      eventImages: [],

      latestNews: [],
      latestNewsImages: [],
      ourPartnerImages: [],

      tickerLocation: 0,
      partnersInitialValue: [],
      campusLife: [],
      researchInfo: null
    }
  },
  filters: {
    timeFormat(time) {

      let T = time.split(':');
      let mainTime = T[0];

      if(mainTime == '00') {
        return '12' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '01') {
        return '01' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '02') {
        return '02' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '03') {
        return '03' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '04') {
        return '04' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '05') {
        return '05' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '06') {
        return '06' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '07') {
        return '07' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '08') {
        return '08' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '09') {
        return '09' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '10') {
        return '10' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '11') {
        return '11' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '12') {
        return '12' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '13') {
        return '01' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '14') {
        return '02' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '15') {
        return '03' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '16') {
        return '04' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '17') {
        return '05' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '18') {
        return '06' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '19') {
        return '07' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '20') {
        return '08' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '21') {
        return '09' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '22') {
        return '10' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '23') {
        return '11' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '24') {
        return '12' + ':' + T[1] + ' '  + 'PM';
      }

    },
    monthFormat(value) {
      let dateValue = value.split('-');
      let month = dateValue[1];
      if(month == 1) return 'Jan';
      else if(month == 2) return 'Feb';
      else if(month == 3) return 'Mar';
      else if(month == 4) return 'Apr';
      else if(month == 5) return 'May';
      else if(month == 6) return 'Jun';
      else if(month == 7) return 'Jul';
      else if(month == 8) return 'Aug';
      else if(month == 9) return 'Sep';
      else if(month == 10) return 'Oct';
      else if(month == 11) return 'Nov';
      else return 'Dec';
    },
    dayFormat(value) {
      let dateValue = value.split('-');
      return dateValue[2];
    }
  },
  methods: {
    getSliders() {
      this.$http.get('api/sliders')
      .then( (res) => {
        this.link = res.data.sliders;
      })
    },
    getEvents() {
      this.$http.get('api/events')
      .then( (res) => {
        this.events = res.data.homeevents;

        this.firstTwoEvents = this.events.slice(0, 2);
        this.lastThreeEvents = this.events.slice(2, 5);

        for(let i = 0; i < 2; i++)
        {
          let eventID = this.events[i].id;
          this.$http.get('api/event/image/' + eventID)
          .then( (res) => {
              this.eventImages.push(res.data.image.event_image);
          });
        }
      })
    },
    getLatestNews() {
      this.$http.get('api/news')
      .then( (res) => {
        this.latestNews = res.data.latestNews;

        for(let i = 0; i < 3; i++)
        {
          let newsID = this.latestNews[i].id;
          this.$http.get('api/news/image/' + newsID)
          .then( (res) => {
              this.latestNewsImages.push(res.data.image.latest_news_image);
          });
        }
      })
    },
    getOurPartners() {
      this.$http.get('/api/partners')
      .then( (res) => {
        this.ourPartnerImages = res.data.partners
        this.partnersInitialValue = [...Array(this.ourPartnerImages.length)];
        this.partnersInitialValue.fill(false, 0, this.partnersInitialValue.length);
        this.partnersInitialValue.fill(true, 0, 5);
      })
    },
    updateTicker: function() {
      var removed = this.partnersInitialValue.pop();
      this.partnersInitialValue.unshift(removed);
    },
    getCampusLife() {
      this.$http.get('/api/getcampuslife')
      .then( (res) => {
        this.campusLife = res.data.campuslife
      })
    },
    getMultimedia() {
      this.$http.get('api/allMultimedia')
      .then( (res) => {
          this.multimediaImages = res.data.allMultimedia
      }).catch( (err) => {
          alert("Something wrong with Multimedia Image. Please Check.");
      })
    },
    getResearchHomepage() {
      this.$http.get('api/get/home/research')
      .then( (res) => {
          this.researchInfo = res.data.research_homepage
          console.log(this.researchInfo);
      }).catch( (err) => {
          alert("Something wrong with Research Information. Please Check.");
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
    this.getEvents();
    this.getOurPartners();
    setInterval(this.updateTicker, 5000);
    this.getCampusLife();
  },
  created() {
    this.getLatestNews();
    this.getMultimedia();
    this.getResearchHomepage();
  }
};
</script>

<style>
.research-desc p {
  color: white!important;
} 
</style>
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
    color: rgb(255, 255, 255) !important;
  }
  .white 
  {
    color:#fff;

  }
  .white:hover 
  {
    color:#ccc;

  }

  .white p {
    color: white!important;
  }
</style>
