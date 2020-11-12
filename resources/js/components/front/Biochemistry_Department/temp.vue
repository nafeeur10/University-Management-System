<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=lip >
                    <div class="back">
                        <h3>{{ data[0].title }}</h3>
                        <ul v-if="type == 'ul'" style=" list-style: none ">
                            <li v-for="(i , k) in data" class="link" :key="k" >
                                <a v-bind:href="i.url" target="_blank">
                                    {{ i.lable }}
                                </a>
                            </li>
                        </ul>
                        <p v-else v-html="data[0].desc" ></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data', 'type'],
        data() {
            return {
                Organizations : [
                    {
                        url: 'http://tpu.ru',
                        lable: '1. Tomsk Polytechnic University (Tomsk, Russia)'
                    },
                    {
                        url: 'http://rudn.ru',
                        lable: '2. The Peoples’ Friendship University of Russia (Moscow, Russia)'
                    },
                    {
                        url: 'http://istu.ru',
                        lable: '3. Izhevsk State Technical University, ISTU (Izhevsk, Russia)'
                    },
                    {
                        url: 'http://ras.ru',
                        lable: '4. Russian Academy of science, ‘’ The Institute of Oriental Studies “(Moscow, Russia)'
                    },
                    {
                        url: 'http://rsuh.ru',
                        lable: '5. Russian State University for the Humanities (Moscow, Russia)'
                    },
                    {
                        url: 'http://aaru.edu.jo',
                        lable: '6. Association of Arab Universities'
                    },
                    {
                        url: 'http://naqaae.eg',
                        lable: '7. The National Authority for Quality Assurance and Accreditation'
                    },
                    {
                        url: 'http://eea.org.eg',
                        lable: '8. Engineering Syndicate'
                    },
                    {
                        url: 'http://eps-eg.org',
                        lable: '9. Egyptian Pharmacists Syndicate'
                    },
                    {
                        url: 'http://eds-eg.org',
                        lable: '10. Dental Association'
                    },
                    {
                        url: 'http://arabfedeng.org',
                        lable: '11. Federation of Arab Engineers'
                    },
                    {
                        url: 'http://hbrc.edu.eg',
                        lable: '12. The National Center for Housing and Construction Research'
                    },
                    {
                        url: 'http://eaea.org.eg',
                        lable: '13. Atomic Energy Commission'
                    },

                ]
            }
        }
    }
</script>

<style scoped lang="sass">

.lip
    background-image: url(/storage/img/cost_img1.jpg)
    background-size: cover
    width: 100%
    height: 28em
    margin-bottom: 100px
.back
    position: absolute
    background-image: url(/storage/img/campus_slider_object.png)
    background: #fceedd
    // height: 64%
    padding: 2em
    width: 55em
    right: 9em
    top: 5em
    h3 
        font-weight: bolder
    .link a
        text-decoration: none
        color: #c20000
        font-weight: bolder

</style>
