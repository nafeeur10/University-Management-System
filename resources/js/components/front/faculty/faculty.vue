<template>
    <div class="">
        <div class="faculty">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 no-padding">

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
                        to : "/FacultyOral",
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


    .faculty .content p {
        color: #777;
        font-size: 15px;
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

    .card-deck
    {
        margin: 0;
    }

    /* fauclty */
</style>
