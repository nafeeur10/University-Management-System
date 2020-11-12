<template>
    <div class="">
        <div class="faculty">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thim-experience">
                            <h2 class="title">WELCOME TO THE EGYPTIAN RUSSIAN UNIVERSITY (ERU)</h2>
                            <div class="content">
                                <p>
                                    The first and only Russian university in the middle east. It is indeed an exciting time to be a part of this dynamic society. Our academic programs are undergoing continuous quality reviews.
                                    Our vision is simple: to be one of the best universities in the region. We encourage you to learn more about the academic life at ERU, and to consider becoming a part of our success. The university offers the opportunity for training and studying in Russia.
                                </p>
                                <img src="/storage/signature/signature.png" alt="signature-eru" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">

                        <b-carousel
                                id="carousel-1"
                                v-model="slide"
                                :interval="10000"
                                controls
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
                                    <div class="card-deck">

                                        <div v-for="(f , i) in slider1 " :key="i" class="card">
                                            <img :src="f.img" class="card-img-top" alt="..." />
                                            <div class="card-body">
                                                <router-link class="card-title" :to="f.to" >
                                                    <h5 > {{ f.title }} </h5>
                                                </router-link>
                                                <p class="card-text text-muted"> {{ f.desc }} </p>
                                            </div>
                                        </div>

                                    </div>
                                </template>
                            </b-carousel-slide>

                            <!--<b-carousel-slide>-->
                                <!--<template v-slot:img>-->
                                    <!--<div class="card-deck">-->

                                        <!--<div class="card">-->
                                            <!--<img src="/storage/faculty/Engineering-300x300.jpg " class="card-img-top" alt="..." />-->
                                            <!--<div class="card-body">-->
                                                <!--<router-link class="card-title" to="" >-->
                                                    <!--<h5 >Faculty of Engineering</h5>-->
                                                <!--</router-link>-->
                                                <!--<p-->
                                                        <!--class="card-text text-muted"-->
                                                <!--&gt;This is a longer card This content is a little bit longer.</p>-->
                                            <!--</div>-->
                                        <!--</div>-->


                                    <!--</div>-->
                                <!--</template>-->
                            <!--</b-carousel-slide>-->

                        </b-carousel>


                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                slide: 0,
                sliding: null,
                slider1: [
                    {
                        id: 1,
                        title: "FACULTY OF PHARMACY",
                        to : "/Faculty-OF-PHARMACY",
                        desc:
                            "Faculty of Pharmacy-ERU is committed to fulfill the National...",
                        img: "/storage/faculty/pharmacy-300x300.jpg",
                        show: 0
                    },
                    {
                        id: 2,
                        title: "FACULTY OF Oral &\n" +
                            "Dental Medicine",
                        to : "/FACULTY-OF-Oral&Dental-Medicine",
                        desc:
                            "We are pleased that you are interested in joining ...",
                        img: "/storage/img/facultyoforal.jpg",
                        show: 0
                    },
                    {
                        id: 3,
                        title: "FACULTY OF\n" +
                            "ENGINEERING",
                        to : "/Faculty-of-engineering",
                        desc:
                            "To be regionally and internationally a recognized It",
                        img: "/storage/faculty/Engineering-300x300.jpg",
                        show: 0
                    },
                    {
                        id: 3,
                        title: "FACULTY OF MANAGEMENT, PROFESSIONAL TECHNOLOGY AND COMPUTERS",
                        to: "/faculty-of-management-professional-technology-and-computers",
                        desc:
                            "To be regionally and internationally a recognized It",
                        img: "/storage/img/computer.jpeg",
                        show: 0
                    }
                ],
                slider2: [
                    {
                        id: 1,
                        title: "Pharmaceutics and Pharmaceutical Technology",
                        desc:
                            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
                        img: "/storage/img/department_image4.jpg",
                        show: 0
                    },
                    {
                        id: 1,
                        title: "Pharmaceutical Analytical Chemistry",
                        desc:
                            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
                        img: "/storage/img/department_image5.jpg",
                        show: 0
                    },
                    {
                        id: 1,
                        title: "Microbiology and Immunology",
                        desc:
                            "Our Markeaton Street site has a dedicated film and television studio space for teaching and student projects",
                        img: "/storage/img/department_image6.jpg",
                        show: 0
                    }
                ]
            };
        },
        methods: {
            onSlideStart(slide) {
                this.sliding = true;
            },
            onSlideEnd(slide) {
                this.sliding = false;
            }
        }
    };
</script>

<style scoped lang="css">
    /* fauclty */

    .faculty {
        padding-bottom: 20px;
    }

    .faculty .row .col-sm-4 {
        border-right: 1px #c7c7c7 solid;
    }

    .thim-experience {
        padding: 58px 40px 78px 0;
        text-align: center;
    }

    .faculty .title {
        color: #c20000;
        font-weight: bold;
        padding-bottom: 25px;
    }

    .faculty .content p {
        color: #777;
        font-size: 15px;
    }

    .faculty .card-deck {
        padding: 132px 0 0 50px;
    }

    .faculty .card {
        border: none;
        background: transparent;
    }

    .faculty .card-body {
        padding: 18px 0 !important;
    }

    .faculty .card-title {
        color: #333;
        text-decoration: none;
        text-transform: uppercase;
    }

    .faculty .card-title:hover {
        color: #c20000;
    }

    .faculty .card-title h5 {
        font-size: 16px
    }

    .card-body
    {
        text-shadow: none;
    }

    .card-deck .card
    {
        margin-right: 3px;
        margin-bottom: 0;
        margin-left: 3px;
    }

    /* fauclty */
</style>
