<template>
  <div class>
    <div class="row">
      <div class="col-lg-3 no-padding">
        <img :src="'/images/faculty/tab/' + url" class="img-fluid" alt="Responsive image" />
      </div>
      <div class="col-lg-3 no-padding tabs">
        <ul>
          <li
            @click="tabClicl(i)"
            :class="{tabHolder: i.id == tabID }"
            v-for="(i, b) in facultyTabDetails"
            :key="b"
          >
            <div :class="{btnitem: i.id == tabID }">
              <h6 :class="{Clicked: i.id == tabID }">{{ i.faculty_tab_title }}</h6>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 no-padding">
        <div v-for="tab in facultyTabDetails" :key="tab.id">
          <div class="cont" v-if="tabID == tab.id">
            <div v-html="tab.faculty_tab_description"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['facultyTabDetails', 'imgUrl'],
  data() {
    return {
      tabID: 1,
      url: null,
      tabs: [
        {
          id: 1,
          title: "Welcome",
          img: "/storage/img/tab-dean-oral.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 2,
          title: " Vision ",
          img: "/storage/img/tab-vision-oral.jpg",
          icon: "fa fa-clock-o"
        },
        {
          id: 3,
          title: " Mission ",
          img: "/storage/img/tab-mission-oral.jpg",
          icon: "fa fa-users"
        }
      ]
    };
  },
  computed: {
    
  },
  methods: {
    tabClicl(b) {
      this.tabID = b.id;
      this.url = b.faculty_tab_image;
    },
    firstUrlForImage() {
      this.url = this.facultyTabDetails[0].faculty_tab_image
    }
  },
  mounted() {
    this.firstUrlForImage();
  },
  created() {
    this.tabClicl(this.facultyTabDetails[0]);
  }
};
</script>

<style scoped lang="sass"> 
.tabs 
    ul
        list-style: none
        padding: 0
            // width: 72%
        li
            cursor: pointer    
.tabs ul li i
    padding: 13px
    color: #fff
.tabs ul li div
    display: inline-block
    width: 86%
    padding: 30.7px 0
    border: 1px solid #eee
    border-right: 0
.tabs ul li div h6
    padding: 5px 75px
    margin: 0
    color: #777
    transition: all .3s ease-in-out
    font-weight: bolder
.cont
  padding: 40px
  background: #eee
.no-padding
  padding: 0
.tabHolder
  background-color: #304770
    
.btnitem
  border-color: #304770 !important
.Clicked
  border-left: #c20000 3px solid
  color: #fff !important
  padding: 5px 25px !important

</style>