<template>
  <div class="container service">
    <h1>DEPARTMENTS</h1>
    <h6>
        Faculty of Management, Professional Technology and Computers has submitted two new majors (Approval in progress by the Supreme Council of Universities) as follows:
    </h6>

    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="10000"

      indicators
      background="#fff"
      img-width="1300"
      img-height="480"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <b-carousel-slide>
        <template v-slot:img>
          <b-row cols="4">
            <b-col
              v-for="(i,b) in slider1"
              :key="b"
              @mouseover="i.show = 1"
              @mouseleave="i.show = 0"
              class=" p-3"
            >
              <img class="w-100 h-100" :src="i.img" alt="image slot" />
              <div :class="i.show ? 'lm' : 'hover'">
                <h5>{{ i.title }}</h5>
                <p v-show="i.show " v-html="i.desc" ></p>
                <router-link :to="i.to" class="white" style="color:#fff" v-show="i.show ">LEARN MORE</router-link>
              </div>
            </b-col>
          </b-row>
        </template>
      </b-carousel-slide>
    </b-carousel>
  </div>
</template>

<script>
export default {
  data() {
    return {
      slide: 0,
      sliding: null,
      slider1: [
        {
          id: 1,
          title: "Bachelor of Business Administration",
            to: '/Bachelor-of-Business-Administration',
          desc:
            "The program aims to encourage students towards more ...",
          img: "/storage/img/business-administration.jpg",
          show: 0
        },
        {
          id: 2,
          title: "Bachelor of Accounting",
            to: '/Bachelor-of-Accounting',
          desc:
            "The accounting program aims to prepare and qualify students of specialization in the preparation,..",
          img: "/storage/img/accounting.jpg",
          show: 0
        },
        {
            id: 2,
            title: "Bachelor of Economics",
            to: '/Bachelor-of-Economics',
            desc:
                "The economics program prepares students in the specialization of economics ...",
            img: "/storage/img/economics.jpg",
            show: 0
        },
        {
            id: 2,
            title: "Bachelor of political science",
            to: '/Bachelor-of-political-science',
            desc:
                "The political science program in the Department of Politics helps students cultivate perspective ...",
            img: "/storage/img/political-science.jpg",
            show: 0
        },
        {
          id: 1,
          title: "Advanced Computing",
          to: "/AdvancedComputing",
          desc:
              "Also, the faculty in the process of getting approval for Department of Advanced Computing including 2<br>programs:<br>• Artificial intelligence <br>• Data science",
          img: "/storage/img/artificial.jpg",
          show: 0
        },
        {
          id: 2,
          title: "Business Professional Information Technology",
          to: "/Business-Professional-Information-Technology-department",
          img: "/storage/img/information-technology.jpg",
          desc:
              "This department integrates the concepts and techniques of information technology and data analysis in the field of business study and graduates of this section contribute to all jobs related to the use of administrative skills and computer applications",
          show: 0
        },

      ],

    };
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    }
  }
};
</script>

<style scoped lang="sass">
.no-padding
  padding: 0
.service
  text-align: center
  h1
    font-weight: bolder
    color: #c20000
    h6
      padding: 0 220px
      color: #333
    button
      background: #c20000
      color: #fff
      padding: 3px 30px
      border-radius: 0
      font-weight: bold
      font-size: 13px
      margin: 31px 29px 36px 0
      transition: all 0.3s ease-in-out
    button:hover
      background-color: #304770
      color: #fff
.bake
  background: #c20000
  background-image: url(/storage/img/campus_slider_object.png)
  padding: 30px
  height: 100%
  color: #fff
  box-shadow: 18px -20px 11px #0000001c
  text-align: left
  h1
    font-size: 25px
.carousel
  padding: 20px 0
.carousel-control-next-icon,
.carousel-control-prev-icon
  padding: 23px
.lm
  position: absolute
  top: 44px
  width: 70.6%
  left: 16%
  background: rgba(194, 0, 0, 0.8901960784)
  color: #fff
  height: 87%
  padding: 14px 6px
  border-bottom: 5px #333 solid
  transition: all 0.5s ease-in-out
  h4
    font-size: 21px
    margin-bottom: 20%
    transition: all 0.5s ease-in-out
    button
      background: transparent
      border-color: #fff !important
      transition: all 0.5s ease-in-out
.hover
  position: absolute
  top: 224px
  width: 70.6%
  left: 16%
  background: rgba(51, 51, 51, 0.9)
  color: #fff
  height: 34%
  padding: 20px 42px
  border-bottom: 5px #c20000 solid
  transition: all 0.5s ease-in-out
</style>
