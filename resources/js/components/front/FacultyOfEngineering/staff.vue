<template>
  <div class="container service">
    <h1>DEPARTMENT STAFF</h1>
    <h6>
      Faculty of Management, Professional Technology and Computers Major Staff
    </h6>
      <b-row cols="4">
        <b-col
          v-for="(i,b) in slider1"
          :key="b"
          @mouseover="i.show = 1"
          @mouseleave="i.show = 0"
          class=" p-3"
        >
          <div class="staffHolder" >

            <img class="w-100 h-100" :class="i.show ? 'staff' : ''" :src="i.img" alt="image slot" />
            <div class="staff" >
              <h5>{{ i.title }}</h5>
              <small v-html="i.cap" ></small>
            </div>

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
          title: "Prof. Mohsen Sami",
          cap: 'Professor',
          img: "/storage/img/avatar-man.png",
          show: 0
        },
        {
          id: 2,
          title: "Eng. Samir Ali",
            cap: 'Vice President',
          img: "/storage/img/avatar-man.png",
          show: 0
        },
        {
            id: 2,
            title: "Dr. Hussien Mohamed",
            cap: 'Collage Dean',
            img: "/storage/img/avatar-man.png",
            show: 0
        },
        {
            id: 2,
            title: "Dr. Ahmed Mohamed",
            cap: 'Vice President',
            img: "/storage/img/avatar-man.png",
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
  margin-bottom: 50px
  text-align: center
  h1
    font-weight: bolder
    color: #c20000
    h6
      padding: 0 220px
      color: #333

  .staffHolder
    overflow: hidden
    position: relative
    border-radius: 15px
  .staffHolder::before
    position: absolute
    content: ""
    top: 0px
    left: 0px
    background: -webkit-gradient(linear, left bottom, left top, from(#000), color-stop(60%, rgba(39, 60, 102, 0)))
    background: -o-linear-gradient(bottom, #000 0%, rgba(39, 60, 102, 0) 60%)
    background: linear-gradient(0deg, #000 0%, rgba(39, 60, 102, 0) 60%)
    width: 100%
    height: 100%
  .staff
    transform: scale(1.11)
    transition: all 0.3s ease-in-out
  .staff h5, .staff small
    color: #fff
  .staff h5
    margin: 0
    font-weight: bolder
  .staff small
    margin-bottom: 10px
    display: block


</style>
