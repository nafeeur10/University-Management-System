<template>
  <div class="container service">
    <b-row cols="4">
      <b-col
        v-for="(i,b) in slider1"
        :key="b"
        @mouseover="i.show = 1"
        @mouseleave="i.show = 0"
        class="p-3"
        style="height: 18em;"
      >
        <img class="w-100 h-300" style="min-height: 255px;" :src="i.img" alt="image slot" />
        <div :class="i.show ? 'lm' : 'hover'">
          <i class="tsicon tsicon-ts-icons1" aria-hidden="true"></i>
          <h5>{{ i.title }}</h5>
          <router-link :to="i.to"  class="login">LOGIN NOW</router-link>
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
          title: "Engineering",
          to: 'EngineeringLogin',
          img: "/storage/img/engineering.jpeg",
          show: 0
        },
        {
          id: 2,
          title: "Pharmacy",
          to: 'PharmacyLogin',
          img: "/storage/img/event-1.jpg",
          show: 0
        },
        {
          id: 3,
          title: "Oral and Dental Medicine",
          to: 'OralLogin',
          img: "/storage/img/ORAL-MEDICINE-RADIOLOGY.jpeg",
          show: 0
        },
        {
          id: 3,
          title: "Management and Computer",
          to: 'ManagementLogin',
          img: "/storage/img/DATA_MANAGEMENT.jpg",
          show: 0
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
    padding: 30px;
    transition: all 0.5s ease-in-out;
    }
h5{
    font-size: 21px;
    margin-bottom: 20%;
    transition: all 0.5s ease-in-out;
    font-weight: bolder;
    }
.login{
    color: #fff !important;
    font-weight: bolder;
    font-size: 17px;
    text-decoration: underline;
    }
p{
    font-size: 14px;
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
    padding: 24px 42px;
    transition: all 0.5s ease-in-out;
    }
.link{
    color: rgb(238, 238, 238);
    margin-top: 50px;
    }
</style>
