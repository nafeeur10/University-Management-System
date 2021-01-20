<template>
    <div class="container">
        <Gallery :images="images" class="mida"></Gallery>
    </div>
</template>

<script>
    import Gallery from "vue-cover-gallery"
    export default {

        name: "Example",
        components: {
            Gallery
        },
        data() {
            return {
                images: [],
            };
        },
        methods: {
            getMultimedia() {
                this.$http.get('api/allMultimedia')
                .then( (res) => {
                    this.images = res.data.allMultimedia
                    // console.log(this.images);
                }).catch( (err) => {
                    alert("Something wrong with Multimedia Image. Please Check.");
                })
            }
        },
        created() {
            this.getMultimedia();
        }
    };
</script>

<style scoped>
    .more-btn:hover
    {
        background: #c20000 !important;
    }
</style>