<template>
  <div class="container">
    <div class="row" v-for="research in researchIndividual" :key="research.id">
      <div class="col-lg-6 col-sm-12">
        <div class="right_holder">
          <h1 class="title" v-if="$store.getters.getLanguage == 'eng'">{{ research.research_individual_title }}</h1>
          <h1 class="title" v-else>{{ research.research_individual_title_arabic }}</h1>
          <div class="desc" v-if="$store.getters.getLanguage == 'eng'" v-html="research.research_individual_description"></div>
          <div class="desc" v-else v-html="research.research_individual_description_arabic"></div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="back">
            <img :src="'images/research/individual/' + research.research_individual_image" class="img-fluid" style="margin-top:64px" />
        </div>
      </div>
      <dote style="margin-top: 50px;" class="widthOfImage" />
    </div>
  </div>
</template>

<script>

import Dote from '../../front/doteShape';

export default {
    data() {
        return {
            researchIndividual: null,
        }
    },
    components: {
      Dote
    },
    methods: {
        getResearch() {
            this.$http.get('api/get/research/individual')
            .then( (res) => {
                this.researchIndividual = res.data.research_individual
            }).catch( (err) => {
                alert("Something wrong with Research Information. Please Check.");
            })
        }
    },
    mounted() {
        this.getResearch();
    }
}
</script>

<style>
.widthOfImage img {
  width: 100%!important;
}
</style>
<style scoped lang="sass">
.right_holder
    padding: 30px
    padding-left: 0
    .title
        color: #c20000
        font-weight: bold
    .desc
        color: #777
    .life, .us
        background: #c20000
        color: #fff
        padding: 15px 50px
        border-radius: 0
        text-transform: uppercase
        font-weight: bold
        font-size: 15px
        border: #c20000 2px solid
        margin: 31px 29px 0 0
        transition: all .3s ease-in-out
    .us
        border-color: #304770
        background-color: #304770
    .life:hover
        background-color: #fff
        color: #c20000
    .us:hover
        background-color: #fff
        color: #304770
.back
  

</style>
