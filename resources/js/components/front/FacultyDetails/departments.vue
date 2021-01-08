<template>
  <div class="container service">
    <h1 v-if="$store.getters.getLanguage == 'eng'">DEPARTMENTS</h1>
    <h1 v-else>الأقسام العلمية</h1>
    <h6 v-if="$store.getters.getLanguage == 'eng'">
        The first and only Russian university in the middle east. It is indeed an exciting time to be a part of this dynamic society.
    </h6>
    <h6 v-else>الجامعة الروسية الأولى والوحيدة في الشرق الأوسط. إنه حقًا وقت مثير أن تكون جزءًا من هذا المجتمع الديناميكي</h6>

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
              v-for="(i,b) in deptSlider"
              :key="b"
              @mouseover="i.show = 1"
              @mouseleave="i.show = 0"
              class=" p-3"
            >
              <img class="w-100 h-100" :src="'/images/faculty/dept/' + i.	img" alt="image slot" />
              <div :class="i.show ? 'lm' : 'hover'">
                <h5 v-if="$store.getters.getLanguage == 'eng'">{{ i.title }}</h5>
                <h5 v-else>{{ i.title_arabic }}</h5>
                <p v-show="i.show" v-if="$store.getters.getLanguage == 'eng'">{{ i.desc }}</p>
                <p v-show="i.show" v-else>{{ i.desc_arabic }}</p>
                <router-link :to="{ name: 'DepartmenBasic', params: { id: i.link } }" class="white" style="color:#fff" v-show="i.show">READ MORE</router-link>
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
  props: ['id'],
  data() {
    return {
      slide: 0,
      sliding: null,
      allDepts: [],
      deptSlider: [],
    };
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    },
    getDept() {
        this.$http.get('/api/getalldepts/' + this.id)
        .then( (res) => {
            this.allDepts = res.data.alldepts;
            this.allDepts.forEach( (elem) => {
              let obj = {
                id: elem.id,
                title: elem.dept_name,
                title_arabic: elem.dept_name_arabic,
                to: elem.dept_url,
                desc: elem.dept_short_description,
                desc_arabic: elem.dept_short_description,
                img: elem.dept_faculty_image,
                link: elem.dept_url,
                show: 0
              }
              this.deptSlider.push(obj);
              elem.show = 0
            });
            console.log("YES::::", this.allDepts);
        }).catch( (err) => {
            alert("Something wrong in Welcome Info. Please Check.");
        })
    },
    changeShow(b, i) {
      
      i.show = 1

      console.log(b.show + ' ' + i.show);

    }
  },
  created() {
    this.getDept();
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
