<template>
    <div class="container">
        <Gallery :images="images" class="mida" ></Gallery>
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
                images: [
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/g1.jpeg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/sport2.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/sport3.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/bus1.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/lib1.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/sport1.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/caf1.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/accomodation1.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/sport9.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/accomodation2.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/lib3.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/caf3.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/bus3.jpg"
                    }, 
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/campus_slider2.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/campus_slider1.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/caf6.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/lib2.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/lib4.jpg"
                    },
                    {
                        title: "",
                        description: "",
                        href: "/storage/img/lib5.jpg"
                    },
                ],
            };
        },
    };
</script>

<style scoped>
    .more-btn:hover
    {
        background: #c20000 !important;
    }
</style>