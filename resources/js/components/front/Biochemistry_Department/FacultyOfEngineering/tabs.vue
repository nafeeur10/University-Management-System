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
            <h4><strong>Dean's Message</strong></h4>
            <p>
                As a new academic year begins, I welcome new and returning students to the University. For new students, this is the right time to join the Faculty of Engineering at the Egyptian Russian University, to realize your future hopes of being a successful engineer who will benefit the community in the field of specialization that you prefers
                <br>
                Our carefully selected distinguished programs make us one of the best engineering colleges in the region and our graduates are among the best engineering graduates with the ability to adapt and entrepreneurship to keep pace with advanced technologies and market requirements.<br>
                Students, staff, faculty, board of directors, alumni and community friends have contributed to the implementation of this exciting academic environment.
                We are extremely proud of our students and the influence they have made in the places they work inside or outside Egypt. We are delighted that you have joined us as part of our engineering community and look forward to what we can achieve together.
                You can also follow us on our website to learn more about the quality, depth, and breadth of our programs.
                I wish you every success in your studies in the coming year.
                <br><br>
                <strong>Prof. Dr. Alaa El-Butch</strong><br>
                Dean, Faculty of Engineering

            </p>
        </div>
        <div class="cont" v-if="tabID == 2">
            <h4>Our Vision</h4>
            <p>
                The Faculty of Engineering at the Egyptian Russian University seeks to be in a prestigious position among the Egyptian, Arab and international engineering faculties and to be one of the development elements of the Egyptian-Russian cultural and scientific relationships.
            </p>
        </div>
        <div class="cont" v-if="tabID == 3">
          <h4>Our Mission</h4>
            <p>
                The Faculty of Engineering at the Egyptian Russian University supports the integration of educational, research and service process through providing distinguished academic engineering programs that allow its graduates to compete in different fields of work both locally and regionally, as well as preparing advanced technological engineering researches and unique society and industrial services under the umbrella of global quality systems to contribute to the achievement of sustainable development, promote the production of knowledge, and establish the ethical values within a framework of professional responsibility and community partnership.
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
      url: "/storage/img/tab-dean-engineering.jpg",
      tabs: [
        {
          id: 1,
          title: " Welcome ",
          img: "/storage/img/tab-dean-engineering.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 2,
          title: " Vision ",
          img: "/storage/img/tab-vision-engineering.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 3,
          title: " Mission  ",
          img: "/storage/img/tab-mission-engineering.jpg",
          icon: "fa fa-clock-o"
        },
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