<template>
    <div class="container service">
        <h1>Courses</h1>
        <h6>
          The first and only Russian university in the middle east. It is indeed an exciting time to be a part of this dynamic society. Our academic programs
        </h6>
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
                    class="ml-md-auto p-3" >
                        <b-card
                            :title=" i.title "
                            img-src="https://picsum.photos/600/300/?image=25"
                            :src="i.img"
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

      <b-carousel-slide>
        <template v-slot:img>
            <b-row cols="3">
                <b-col
                    v-for="(i,b) in slider2"
                    :key="b"
                    @mouseover="i.show = 1"
                    @mouseleave="i.show = 0"
                    class="ml-md-auto p-3" >
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
                title: 'Course one',
                desc: 'Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects',
                img: 'https://picsum.photos/600/300/?image=25',
                show: 0
            },
            {
                id: 2,
                title: 'Course tow',
                desc: 'Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects',
                img: 'https://picsum.photos/600/300/?image=25',
                show: 0
            },
            {
                id: 3,
                title: 'Course three',
                desc: 'Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects',
                img: 'https://picsum.photos/600/300/?image=25',
                show: 0
            }
        ],
        slider2: [
             {
                id: 1,
                title: 'Course four',
                desc: 'Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects',
                img: 'https://picsum.photos/600/300/?image=25',
                show: 0
            },
            {
                id: 2,
                title: 'Course five',
                desc: 'Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects',
                img: 'https://picsum.photos/600/300/?image=25',
                show: 0
            },
            {
                id: 3,
                title: 'Course six',
                desc: 'Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects',
                img: 'https://picsum.photos/600/300/?image=25',
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
    }
    .card-body{
        text-shadow: none;
        text-align: left;
        padding: 25px;
        background: #f5f5f5;
        }
    .card-title{
        font-weight: bolder;
        }
</style>
