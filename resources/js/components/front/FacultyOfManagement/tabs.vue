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
            <h4>Welcome</h4>
            <p>
                The Faculty of Management, Professional Technology and Computers, is one of the faculties of the Egyptian Russian University. The Ministerial approval to start the study from the start of the academic year 2018/2019 offers undergraduate students with a wide range of majors, minors and elective courses in the fields of business Administration, Accounting, Economics, Political Science, professional technology and computers. The faculty aims at providing unique programs of high quality education; serving as a starting point for potential career development. The faculty programs provide the faculty graduates with the needs of a highly competitive labor market. 
            </p>
        </div>
        <div class="cont" v-if="tabID == 2">
            <h4>Our Vision</h4>
            <p>
                To be a distinguished higher education institution locally, regionally, and globally, providing values and effectively involved in the research & development to shape the future of business and society.
            </p>
        </div>
        <div class="cont" v-if="tabID == 3">
          <h4>Our Mission</h4>
            <p>
                The faculty's Mission is to serve society by delivering high quality academic and vocational education. The faculty contributes in the qualification of the human capital and entrepreneurs who will be future ready and socially responsible through putting together rigorous curriculum and advanced academic programs. To involve students and faculty in innovative education and research projects linked with industry, academic and research institutions in Egypt and abroad. The faculty intends to invest in the future of Egypt through providing it with specialists and professionals equipped with knowledge and know-how.
            </p>
        </div>
        <div class="cont" v-if="tabID == 4">
            <h4>Offered Programs and Awarded Degrees</h4>
            <p>The faculty currently, consists of the following departments:</p>
            <ul>
                <li>Business Administration Department.</li>
                <li>Accounting Department.</li>
                <li>Economics Department.</li>
                <li>Political Science Department.</li>
                <li>Advanced Computing.</li>
                <li>Business Professional Information Technology.</li>
            </ul>
            <p>
                Each department is in charge of teaching programs connected with its field of specialization.
            </p>
        </div>
        <div class="cont" v-if="tabID == 5">
          <h4>The faculty offers the following four academic degrees:</h4>
          <ul style="list-style: decimal;">
            <li>
                Bachelor of Science in Business Administration (B. Sc. in BA):
                <br>
                With Concentrations:
                <ul>
                    <li>Management</li>
                    <li>Marketing</li>
                    <li>Human resource management</li>
                    <li>Finance</li>
                </ul>
            </li>
            <li>Bachelor of Science in Accounting (B. Sc. in ACC)</li>
            <li>Bachelor of Science in Economics (B. Sc. in ECO).</li>
            <li>Bachelor of Science in Political Science (B. Sc. in POL).</li>
            <li>Bachelor of Advanced Computing.</li>
            <li>Bachelor of Business Professional Information Technology.</li>
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
      url: "/storage/img/tab-dean-management.jpg",
      tabs: [
        {
          id: 1,
          title: " Welcome ",
          img: "/storage/img/tab-dean-management.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 2,
          title: " Vision ",
          img: "/storage/img/tab-vision-management.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 3,
          title: " Mission  ",
          img: "/storage/img/tab-mission-management.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 4,
          title: " Programs  ",
          img: "/storage/img/tab-mangement-programs.jpg",
          icon: "fa fa-users"
        },
        {
          id: 5,
          title: "  Academic degrees  ",
          img: "/storage/img/tab-academic-management.jpg",
          icon: "fa fa-building"
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