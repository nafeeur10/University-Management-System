<template>
    <div>
        <carousel :link="link" text="Apply Now" />
        <breadcrumb />
        <b-container>
            <iframe src="https://admission.eru.edu.eg/UI/Adm/AdmMod_ApplicantRegCheck.aspx" class="applyNow"></iframe>
        </b-container>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                link: [
                    {
                        img: '/storage/img/logn.jpeg'
                    }
                ]
            }
        },
        components: {
            breadcrumb: require("../components/front/breadcrumb.vue").default,
            carousel: require("../components/front/carousel.vue").default,
            vido: require("../components/front/about/vido.vue").default,
            dote: require("../components/front/doteShape.vue").default,
            tabs: require("../components/front/about/tabs.vue").default,
            services: require("../components/front/about/services.vue").default
        }
    };
</script>

<style  scoped lang="sass">
    .applyNow
        width: 100%
        height: 35em
        margin-bottom: 3em
        border: none
</style>