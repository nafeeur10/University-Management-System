<template>
    <div class="container service">
        <h1>The Egyptian Russian University Facilities</h1>
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
            <b-row cols="2">
                <b-col
                    v-for="(i,b) in slider1"
                    :key="b"
                    @mouseover="i.show = 1"
                    @mouseleave="i.show = 0"
                    class=" p-3" >
                        <b-card
                            :title=" i.title "
                            :img-src="i.img"
                            img-alt="Image"
                            img-bottom
                            tag="article"
                            style="max-width: 20rem;"
                            class="mb-2"
                        >
                            <b-card-text>
                                {{i.desc}}
                            </b-card-text>
                        </b-card>
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
                title: 'Accommodation',
                desc: 'The University offers accomodation for female students in buildings close to the university. Resident students are supervised by social specialists all day and night. Supervisors are available to help students and take care of their needs.',
                img: '/storage/img/univercity-image1.jpg',
                show: 0
            },
            {
                id: 2,
                title: 'Sports Facilities',
                desc: 'The University offers wide spaces for the students to practice various sports activities.',
                img: '/storage/img/admission2.jpg',
                show: 0
            }
        ]
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      },
    }
  }
</script>

<style scoped>
.no-padding{
    padding:0;
    }
.service{
    text-align: center;
    }
    h1{
        font-weight: bolder;
        color: #c20000;
        }
    h6{
        padding: 0 220px;
        color: #333;
        }
.card{
    border: none;
    border-top: 4px solid #c20000;
    max-width: 100% !important;
    }
    .card-body{
        text-shadow: none;
        text-align: left;
        padding: 25px;
        background: #f5f5f5;
        min-height: 189px;
        }
    .card-title{
        font-weight: bolder;
        }
</style>
