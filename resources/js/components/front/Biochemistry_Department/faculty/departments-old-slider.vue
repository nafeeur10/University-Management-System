<template>
  <div class="container service">
    <h1>DEPARTMENTS</h1>
    <h6>The first and only Russian university in the middle east. It is indeed an exciting time to be a part of this dynamic society.</h6>
    <!-- <button v-for="i in 5" :key="i" class="btn">Clubs</button> -->

    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="10000"
      controls
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
                <h5>{{ i.title }}</h5>
                <p v-show="i.show ">{{ i.desc }}</p>
                <b-button v-show="i.show  ">READ MORE</b-button>
              </div>
            </b-col>
          </b-row>
        </template>
      </b-carousel-slide>

      <b-carousel-slide>
        <template v-slot:img>
          <b-row cols="3">
            <b-col
              v-for="(i,b) in slider2"
              :key="b"
              @mouseover="i.show = 1"
              @mouseleave="i.show = 0"
              class="ml-md-auto p-3"
            >
              <img class="w-100 h-100" :src="i.img" alt="image slot" />
              <div :class="i.show ? 'lm' : 'hover'">
                <h5>{{ i.title }}</h5>
                <p v-show="i.show ">{{ i.desc }}</p>
                <b-button v-show="i.show">READ MORE</b-button>
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
          title: "Biochemistry Department",
          desc:
            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
          img: "/storage/img/Biochemistry-img1.jpg",
          show: 0
        },
        {
          id: 2,
          title: "Microbiology department",
          desc:
            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
          img: "/storage/img/department_image2.jpg",
          show: 0
        },
        {
          id: 3,
          title: "Pharmaceutical Chemistry department",
          desc:
            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
          img: "/storage/img/department_image3.jpg",
          show: 0
        }
      ],
      slider2: [
        {
          id: 1,
          title: "Pharmaceutics Department",
          desc:
            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
          img: "/storage/img/department_image4.jpg",
          show: 0
        },
        {
          id: 1,
          title: "Pharmacognosy department",
          desc:
            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
          img: "/storage/img/department_image5.jpg",
          show: 0
        },
        {
          id: 1,
          title: "Pharmacology department",
          desc:
            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
          img: "/storage/img/department_image6.jpg",
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
  top: 60px
  width: 70.6%
  left: 16%
  background: rgba(194, 0, 0, 0.8901960784)
  color: #fff
  height: 87%
  padding: 42px
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
  top: 300px
  width: 70.6%
  left: 16%
  background: rgba(51, 51, 51, 0.9)
  color: #fff
  height: 34%
  padding: 42px
  border-bottom: 5px #c20000 solid
  transition: all 0.5s ease-in-out
</style>
