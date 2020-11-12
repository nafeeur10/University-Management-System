<template>
  <div class="container service">
    <b-row cols="4">
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
          title: "Be a Mentor",
          desc:
            "To the present students providing them guidance and advice and sharing your experiences.",
          img: "/storage/img/service_image1.jpg",
          show: 0
        },
        {
          id: 2,
          title: "Help Secure an Internship",
          desc:
            "You know how difficult it is to secure a relevant internship, make an inquiry where ever you are working. Could your company take an intern? If not, find out from other contacts that you may have.",
          img: "/storage/img/service_image2.jpg",
          show: 0
        },
        {
          id: 3,
          title: "Be a Guest Speaker",
          desc:
            "Come and share your expertise and experience, you have been there and done that. Share it with the current batch at your institution.",
          img: "/storage/img/speaker.jpg",
          show: 0
        },
        {
          id: 3,
          title: "Courses",
          desc:
            "As you grow older and wiser you realize how much impact your alma mater has had on you and your career, it is a time that you have an impact. You can give back to your institution and contribute to the institution as a whole.",
          img: "/storage/img/service_image3.jpg",
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
    margin-bottom: 10px;
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
    padding: 42px;
    padding-top: 25px;
    transition: all 0.5s ease-in-out;
    }
.link{
    color: rgb(238, 238, 238);
    margin-top: 50px;
    }
</style>
