<template>
  <div class="container service">
    <h1>STUDENT’S GUIDE</h1>

    <b-row cols="3">
      <b-col
        v-for="(i,b) in slider1"
        :key="b"
        @mouseover="i.show = 1"
        @mouseleave="i.show = 0"
        class="ml-md-auto p-3"
      >
        <img class="w-100 h-100" :src="i.img" alt="image slot" />
        <div :class="i.show ? 'lm' : 'hover'">
          <i class="tsicon tsicon-ts-icons1" aria-hidden="true"></i>
          <h5>{{ i.title }}</h5>
          <p v-show="i.show ">{{ i.desc }}</p>
          <router-link :to="i.link" class="link" v-show="i.show  ">LEARN MORE</router-link>
        </div>
      </b-col>
    </b-row>
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
          title: "Registration",
          desc:
            "At the beginning of each semester, you must see the academic advisor and register for the courses to take.",
          img: "/storage/img/service_image1.jpg",
          show: 0,
          link: '/Registration'
        },
        {
          id: 2,
          title: "Attendance",
          desc:
            "You should attend at least 75% of the contact time of each course, about 10 lectures/tutorials in Fall/Spring.",
          img: "/storage/img/service_image2.jpg",
          show: 0,
          link: '/Attendance'
        },
        {
          id: 3,
          title: "Courses Grading",
          desc:
            "The grade in a course is based on some or all of several grading components:class work (quizzez, reports, …),",
          img: "/storage/img/service_image3.jpg",
          show: 0,
          link: '/Courses'
        }
      ]
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

<style scoped>
.no-padding{
  padding: 0;
  }
.service{
  text-align: center;
  }
  h1{
    font-weight: bolder;
    color: #c20000;
}
    button{
      background: #c20000;
      color: #fff;
      padding: 3px 30px;
      border-radius: 0;
      font-weight: bold;
      font-size: 13px;
      margin: 31px 29px 36px 0;
      transition: all 0.3s ease-in-out;
      }
    button:hover{
      background-color: #304770;
      color: #fff;
      }
    h1{
      font-size: 25px;
      }
.carousel{
  padding: 20px 0;
  }
.carousel-control-next-icon,
.carousel-control-prev-icon{
  padding: 23px;
  }
.lm{
  position: absolute;
  bottom: 16px;
  width: 91.6%;
  left: 4.4%;
  background: rgb(194 0 0);
  background-image: url(/storage/img/campus_slider_object.png);
  color: #fff;
  height: 92.5%;
  padding: 42px;
  transition: all 0.5s ease-in-out;
  }
  h5{
    font-size: 21px;
    margin-bottom: 20%;
    transition: all 0.5s ease-in-out;
  }
    button{
      background: transparent;
      border-color: #fff !important;
      transition: all 0.5s ease-in-out;
      }

.hover{
  position: absolute;
  bottom: 16px;
  width: 91.6%;
  left: 4.4%;
  background: rgb(51 51 51);
  background-image: url(/storage/img/campus_slider_object.png);
  border-radius: 100px 100px 0px 0px;
  color: #fff;
  height: 30%;
  padding: 42px;
  transition: all 0.5s ease-in-out;
  }
.link {
    color: rgb(238, 238, 238);
    margin-top: 50px;
    }
</style>
