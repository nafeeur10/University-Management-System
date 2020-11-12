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
          <h4>Our Vision</h4>
          <p>The Quality Assurance Center seeks to be a center of excellence in the field of quality assurance through the continuous development of performance in all colleges of the university according to the mission and goals of each college and based on national and international evaluation strategies.</p>
        </div>
        <div class="cont" v-if="tabID == 2">
            <h4>Our Mission</h4>
            <p>Assisting the university in achieving competitive quality for all elements of the educational process, support processes and associated measures to achieve academic accreditation for its programs.</p>
        </div>
        <div class="cont" v-if="tabID == 3">
          <h4>Objectives of the Quality Assurance Center:</h4>
          <ul style="list-style: decimal;">
              <li>Spreading the culture of quality assurance and accreditation in the educational institutions of the Egyptian Russian University and its various departments.</li>
              <li>Spreading the culture of institutional, individual and individual evaluation in the university community.</li>
              <li>The institutional, team, and individual evaluation of the elements of the educational process at the university and the use of results to improve the quality of the educational process outputs.</li>
              <li>Developing the capabilities of faculty members and leaders to fulfill their role in applying quality concepts and principles.</li>
              <li>Supporting the establishment of quality assurance centers for all faculties of the university.</li>
              <li>Helping university colleges in implementing quality assurance schemes and preparing them to apply for accreditation.</li>
              <li>Analyzing and summarizing the results of periodic self-studies and annual reports from various university institutions to come up with a comprehensive annual report on the university’s status and the extent of its response to the external audit reports.</li>
              <li>Exchanging the experiences of developing the colleges of the university with other centers and quality units in Egyptian and foreign universities and benefiting from that in achieving the required development.</li>
              <li>Evaluating and developing the performance of the newly established educational systems, such as distance education and e-learning.</li>
          </ul>
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
      url: "/storage/img/tab-bg1.jpg",
      tabs: [
        {
          id: 1,
          title: "Vision",
          img: "/storage/img/tab-bg1.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 2,
          title: " Mission ",
          img: "/storage/img/tab-3.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 3,
          title: " Objectives ",
          img: "/storage/img/tab-4.jpg",
          icon: "fa fa-users"
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