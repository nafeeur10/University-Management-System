<template>
<b-container class="bv-example-row">
  <b-row class="justify-content-md-center">
    <b-col col lg="8">
        <div class="right_holder">
            <h1 class="title" v-if="$store.getters.getLanguage == 'eng'">
                {{ researchInfo.research_title }}
            </h1>
            <h1 class="title" v-else>
                {{ researchInfo.research_title_arabic }}
            </h1>
            <div class="desc">
                <span v-if="$store.getters.getLanguage == 'eng'" v-html="researchInfo.research_description"></span>
                <span v-else  v-html="researchInfo.research_description_arabic"></span>
                <br>
                <img :src="'images/research/'+ researchInfo.research_details_main_image" class="img-fluid" style="margin-top:64px" />
                <a
                  v-for="link in researchLink"
                  :key="link.id"
                  class="btn life"
                  :href="link.research_link_url"
                  target="_blank">
                  <span v-if="$store.getters.getLanguage == 'eng'">{{ link.research_title }}</span>
                  <span v-else>{{ link.research_title_arabic }}</span>
                </a>
            </div>
            <button 
                class="btn us" 
                type="submit" 
                v-for="pdf in researchPdf"
                :key="pdf.id"
                @click.prevent="openFile(pdf.research_link_upload)">
                <span v-if="$store.getters.getLanguage == 'eng' ">{{ pdf.research_title }}</span>
                <span v-else>{{ pdf.research_title_arabic }}</span>
            </button>
        </div>
    </b-col>
  </b-row>

</b-container>
</template>

<script>
export default {
    data() {
        return {
            researchInfo: null,
            researchLink: null,
            researchPdf: null
        }
    },
    methods: {
        getResearch() {
            this.$http.get('api/get/home/research')
            .then( (res) => {
                this.researchInfo = res.data.research_homepage
            }).catch( (err) => {
                alert("Something wrong with Research Information. Please Check.");
            })
        },
        getLink() {
            this.$http.get('api/get/research/link')
            .then( (res) => {
                this.researchLink = res.data.research_links
            }).catch( (err) => {
                alert("Something wrong with Research Information. Please Check.");
            })
        },
        getPDF() {
            this.$http.get('api/get/research/pdf')
            .then( (res) => {
                this.researchPdf = res.data.research_pdfs
            }).catch( (err) => {
                alert("Something wrong with Research Information. Please Check.");
            })
        },
        openFile(file) {
             window.open("file/research/" + file, "_blank");
        }
    },
    mounted() {
        this.getResearch();
        this.getLink();
        this.getPDF();
    }
}
</script>

<style scoped lang="sass">

.right_holder
    // padding: 56px 200px
    text-align: center
    .title
        color: #c20000
        font-weight: bold
    .desc
        color: #777
    .life, .us
        background: #c20000
        color: #fff
        padding: 7px 21px
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


</style>
