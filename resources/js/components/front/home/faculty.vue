<template>
    <div class="">
        <div class="faculty">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thim-experience">
                            <h2 class="title" v-if="$store.getters.getLanguage == 'eng'">{{ welcomeInfo[0].welcome_message_title }}</h2>
                            <h2 class="title" v-else>{{ welcomeInfo[0].welcome_message_title_arabic }}</h2>
                            <div class="content">
                                <p v-if="$store.getters.getLanguage == 'eng'">{{ welcomeInfo[0].welcome_description }}</p>
                                <p v-else>{{ welcomeInfo[0].welcome_description_arabic }}</p>
                                <img :src="'images/signature/'+welcomeInfo[0].welcome_signature" alt="signature-eru" />
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

                                    <div v-for="(f , i) in facultyInfo " :key="i" class="card">
                                        <img :src="'images/faculty/'+f.home_faculty_image" class="card-img-top" alt="..." />
                                        <div class="card-body">
                                            <router-link class="card-title" :to="{ name: 'FacultyDetails', params: { link: f.home_faculty_link } }">
                                                <h5 v-if="$store.getters.getLanguage == 'eng'"> {{ f.home_faculty_title }} </h5>
                                                <h5 v-else> {{ f.home_faculty_title_arabic }} </h5>
                                            </router-link>
                                            <p class="card-text text-muted" v-if="$store.getters.getLanguage == 'eng'"> {{ f.home_faculty_description }} </p>
                                            <p class="card-text text-muted text-right" dir="rtl" v-else> {{ f.home_faculty_description_arabic }} </p>
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
                ],
                welcomeInfo: [],
                facultyInfo: []
            };
        },
        methods: {
            onSlideStart(slide) {
                this.sliding = true;
            },
            onSlideEnd(slide) {
                this.sliding = false;
            },
            getwelcomeinfo() {
                this.$http.get('api/getwelcomeinfo')
                .then( (res) => {
                    this.welcomeInfo = res.data.welcomeinfo
                }).catch( (err) => {
                    alert("Something wrong in Welcome Info. Please Check.");
                })
            },
            getAllFaculty() {
                this.$http.get('api/getallfaculty')
                .then( (res) => {
                    this.facultyInfo = res.data.faculties
                }).catch( (res) => {
                    alert("Something Wrong in Faculty");
                })
            }
        },
        mounted() {
            this.getwelcomeinfo();
            this.getAllFaculty();
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
