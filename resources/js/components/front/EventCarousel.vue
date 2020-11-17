<template>
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="10000"
      indicators
      background="#ababab"
      img-width="1024"
      img-height="480"
      style="text-shadow: 1px 1px 2px #333; "
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <!-- Home slider -->
      <b-carousel-slide

              v-for="(l,i) in link" :key="i"
              :img-src="l.img"
              img-height
      >
          <template >
              <div v-if="text == 'none'" class="home" >

                  <img :src="l.title" style="" alt="..." />


                  <router-link v-if="l.label != 'Apply now'"
                      :to="l.to"
                      
                      class="btn btn-lg btn-danger">
                      {{ l.label }}
                  </router-link>

                <a v-if="l.label == 'Apply now'"
                  style="margin-top: 50px; background:#c20000"
                  class="btn btn-lg btn-danger"
                  href="https://admission.eru.edu.eg/UI/Adm/AdmMod_ApplicantRegCheck.aspx"
                  target="_blank">Apply Now</a>
              </div>

              <h1 v-else class="content" :class="$store.getters.getLanguage == 'arb' ? 'text-right border-left-0 mr-3 pr-3' : ''">{{ text }}</h1>

          </template>

      </b-carousel-slide>


    </b-carousel>

  </div>
</template>

<script>
    export default {
        props: ['link', 'text'],
        data() {
            return {
                slide: 0,
                sliding: null
            }
        },
        methods: {
            onSlideStart(slide) {
                console.log(this.link)
                this.sliding = true
            },
            onSlideEnd(slide) {
                this.sliding = false
            }
        }
    }
</script>



<style scoped >


  .inside{
    max-height: 17em;
  }

.slider-contint {
  position: absolute;
  top: 157px;
  left: 233px;
  color: #fff;
}

.slider-contint h1 {
  letter-spacing: 2px;
  font-size: 59px;
  font-weight: bold;
  max-width: 620px;
  font-family: sans-serif;
}

  .carousel-caption {
      bottom: 8em !important;
}

.content {
    color: white;
    border-left: 7px solid #c20000;
    padding-left: 25px;
    text-transform: uppercase;
    font-size: 37px !important;
    margin-left: -1.9em;
    text-align: left;
}

.border-left-0 {
  border-left: 0;
  border-right: 7px solid #c20000;
}
  .home{
      position: absolute;
      bottom: 3em;
      left: -6em;
  }

@media (max-width: 1050px) {
  .home{
      
      left: -3em !important;
  }
}
  .home img {
      display: block;
      max-width: 77%;
      margin-bottom: 10px;
  }

  .home a {
      margin-left: -33em;
      background: rgb(194, 0, 0);
  }



</style>
