<template>
    <div>
        <carousel :link="link" text="Login" />
        <breadcrumb />
        <b-container>
            <iframe src="https://admission.eru.edu.eg/Defaultapplicant.aspx" class="applyNow"></iframe>
        </b-container>
    </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Vido from '../components/front/about/vido.vue';
import Tabs from '../components/front/about/tabs.vue';
import Services from '../components/front/about/services.vue';
import Dote from '../components/front/doteShape.vue';

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
            breadcrumb: Breadcrumb,
            carousel: Carousel,
            vido: Vido,
            doteShape: Dote,
            tabs: Tabs,
            services: Services
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