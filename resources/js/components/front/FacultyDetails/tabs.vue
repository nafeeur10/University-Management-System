<template>
  <div class>
    <div class="row">
      <div class="col-lg-3 no-padding">
        <img :src="url" class="img-fluid" alt="Responsive image" />
      </div>
      <div class="col-lg-3 no-padding tabs">
        <ul>
          <li
            @click="tabClicl(i)"
            :class="{tabHolder: i.id == tabID }"
            v-for="(i, b) in tabs"
            :key="b"
          >
            <i :class="i.icon" v-show="i.id == tabID" aria-hidden="true"></i>
            <div :class="{btnitem: i.id == tabID }">
              <h6 :class="{Clicked: i.id == tabID }">{{ i.title }}</h6>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 no-padding">
        <div class="cont" v-if="tabID == 1">
          <strong>Dear Students,</strong><br><br>
                First of all, I would like to congratulate each one of you on your outstanding success and your choice to study at the Faculty of Oral & Dental Medicine.
                You are now embarking a brand new and fresh start, your very first steps of the university stage, in other words, you are about to lay the foundation of you future career. Consequently, I encourage you to maintain your supremacy and your magnificent performance in every step of the way in order to achieve the highest educational and professional levels.
                The study of Oral & Dental Medicine combines between science and art, it also integrate theoretical studies and manual skills. You will always get the support and assistance needed to accomplish the educational and practical required levels as we have the most recent facilities at the laboratories, clinics and lecture halls to keep both, the theoretical and practical educational process on track.
                We are keen to adhere to ethical standards and punctuality of social relations and I believe you will follow the same path.
                Eventually, I would like to welcome all new students and to wish you a happy, fruitful and successful new academic year.<br><br>
                Dean of the Faculty of Oral and Dental Medicine <br>
                <strong>Prof, Khaled Tawfik</strong>

        </div>
        <div class="cont" v-if="tabID == 2">
          <h4>Our Vision</h4>
          Reaching by the technical and scientific skills of the graduate to the international standards in the fields of education and scientific research with introducing distinguished therapeutic services in the dental fields.
        </div>
        <div class="cont" v-if="tabID == 3">
          <h4>Our Mission</h4>
          Preparing graduates to be able to compete in the national and regional market through updated educational and technical manners in teaching and scientific research in the dental field with commitment toward community responsibility.
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      tabID: 1,
      url: "/storage/img/tab-dean-oral.jpg",
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
  computed: {},
  methods: {
    tabClicl(b) {
      this.tabID = b.id;
      this.url = b.img;
    }
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