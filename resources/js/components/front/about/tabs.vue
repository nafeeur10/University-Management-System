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
          <h4>ERU</h4>
          <p>the first Russian university in the Middle East, is the outcome of cooperation with seven of the best Russian universities, and thus provides an exceptional educational environment, including:</p>
          <ul>
            <li>High-standard academic programs are offered.Instruction in English.</li>
            <li>Well-qualified staff members are hired.</li>
            <li>Visiting professors from partner Russian universities are invited.</li>
            <li>Students have opportunities to do summer training, and/or study for one or more semesters in Russia.</li>
            <li>Lecture halls are air-conditioned and equipped with modern teaching tools.</li>
            <li>Laboratories have been designed and prepared to the highest technological standards.</li>
            <li>The library is well maintained, with growing collection of books and references. Students’ activities are given utmost care.</li>
            <li>Credit hour system included.</li>
          </ul>
        </div>
        <div class="cont" v-if="tabID == 2">
          <h4>Egyptian Russian University (ERU)</h4>
          The first and only Russian university in the middle east. It is indeed an exciting time to be a part of this dynamic society. Our academic programs are undergoing continuous quality reviews. <br>Our vision is simple: to be one of the best universities in the region.<br> We encourage you to learn more about the academic life at ERU, and to consider becoming a part of our success.<br> The university offers the opportunity for training and studying in Russia.<br><br>
          <em>
            <strong>Prof Sherif M.Helmy ERU Founder</strong>
          </em>
        </div>
        <div class="cont" v-if="tabID == 3">
          <h4>Our Mission</h4>
          <p>The Egyptian Russian University supports the integration of the educational and research processes and community services by providing unique academic programs that allow graduates of the ERU to compete in the job market, nationally and regionally, and to provide for advanced scientific research and community services, and to enrich the knowledge and establish the moral values and ethics of the society through a framework of professional responsibility and community partnership.</p>
          <h4>Our Vision</h4>
          <p>The Egyptian Russian University is well placed as a renowned educational and research institute among Egyptian, Arab, and international universities, and to be an essential component for the development of the Egyptian Russian cultural and scientific relationships.</p>
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
      url: "/storage/img/tab-bg1.jpg",
      tabs: [
        {
          id: 1,
          title: "Why ERU",
          img: "/storage/img/tab-bg1.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 2,
          title: " ERU President ",
          img: "/storage/img/tab-3.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 3,
          title: " Mission / Vision ",
          img: "/storage/img/tab-4.jpg",
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