<template>
  <div class>
    <div class="row">
      <div class="col-lg-3 no-padding">
        <img :src="url" class="img-fluid" alt="Responsive image" />
      </div>
      <div class="col-lg-3 no-padding tabs">
        <ul>
          <li
            @click="tabClicl(i)"
            :class="{tabHolder: i.id == tabID }"
            v-for="(i, b) in tabs"
            :key="b"
          >
            <i :class="i.icon" v-show="i.id == tabID" aria-hidden="true"></i>
            <div :class="{btnitem: i.id == tabID }">
              <h6 :class="{Clicked: i.id == tabID }">{{ i.title }}</h6>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 no-padding">
        <div class="cont" v-if="tabID == 1">
          <h4>Dear newcomers,</h4>
          <p>Welcome all of you to Faculty of Pharmacy, Egyptian Russian University, along with my best congratulations for the occasion of starting the new academic year! We are delighted to be partnering with you! As you contribute in a thrilling educational expedition of exploration. In this stage, you will discover infinite opportunities to experience campus life positively by learning, discovering, and participating together. Besides, your participation in student activities will be mostly able to refine the spirit of group in you and make you have the required dedication for the advancement of society. I hope you benefit maximally from the expertise and capabilities of the college, and also, I hope that all of you can confirm superiority in excellence and meet our expectations scientifically and behaviourally, not only through your studies at college, but also through your commitment to the long-standing university values and traditions.<br><br>
          <strong>Best wishes of luck and great success for you all.</strong></p>

        </div>
        <div class="cont" v-if="tabID == 2">
          <h4>Our Vision</h4>
          The Faculty of Pharmacy is looking forward to being a distinguished academic edifice in pharmaceutical education, scientific research and community service locally, regionally and internationally.
        </div>
        <div class="cont" v-if="tabID == 3">
          <h4>Our Mission</h4>
          <p>The Faculty of Pharmacy, Egyptian Russian University is committed to providing an academic, educational and research environment to prepare effective pharmacists who can compete in the labor market locally and regionally, preparing developed scientific researches. It is also committed to have a constructive engagement in serving the community and developing the environment within the framework of quality systems and professional ethical values to achieve sustainable development</p>
        </div>
        <div class="cont" v-if="tabID == 4">
          <h4>Our Values and Goals</h4>
          <ul>
            <li>Excellence in institutional performance within the framework of a quality system.</li>
            <li>Increasing the competitiveness of the university and its graduates.</li>
            <li>Achieving excellence in the fields of education, scientific research, community service and environmental development.</li>
            <li>Lecture halls are air-conditioned and equipped with modern teaching tools.</li>
            <li>trengthening ties with local, Russian and international community, education and scientific research institutions.</li>
            <li>Taking sustainable development as a method of development.</li>
          </ul>
        </div>
        <div class="cont" v-if="tabID == 5">
          <h4>Accreditation</h4>
          <p>
            <span style="font-family: 'Lato','serif';color: #555555">
              The B.Sc. degrees, granted to
              <strong>ERU</strong> graduates, have been accredited by the
              <strong>Supreme Council of Egyptian Universities and the Ministry of Higher Education.</strong>
            </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      tabID: 1,
      url: "/storage/img/tab-dean-pharmacy.jpg",
      tabs: [
        {
          id: 1,
          title: "Welcome",
          img: "/storage/img/tab-dean-pharmacy.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 2,
          title: " Vision ",
          img: "/storage/img/tab-vision-pharmacy.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 3,
          title: " Mission ",
          img: "/storage/img/tab-mission-pharmacy.jpg",
          icon: "fa fa-users"
        },
        {
          id: 4,
          title: " Values / Goals ",
          img: "/storage/img/tab-6.jpg",
          icon: "fa fa-building"
        },
        {
          id: 5,
          title: " Accreditation ",
          img: "/storage/img/tab-5.jpg",
          icon: "fa fa-edit"
        }
      ]
    };
  },
  computed: {},
  methods: {
    tabClicl(b) {
      this.tabID = b.id;
      this.url = b.img;
    }
  }
};
</script>

<style scoped lang="sass"> 
.tabs 
    ul
        list-style: none
        padding: 0
            // width: 72%
        li
            cursor: pointer    
.tabs ul li i
    padding: 13px
    color: #fff
.tabs ul li div
    display: inline-block
    width: 86%
    padding: 30.7px 0
    border: 1px solid #eee
    border-right: 0
.tabs ul li div h6
    padding: 5px 75px
    margin: 0
    color: #777
    transition: all .3s ease-in-out
    font-weight: bolder
.cont
  padding: 40px
  background: #eee
.no-padding
  padding: 0
.tabHolder
  background-color: #304770
    
.btnitem
  border-color: #304770 !important
.Clicked
  border-left: #c20000 3px solid
  color: #fff !important
  padding: 5px 25px !important

</style>