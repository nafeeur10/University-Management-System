<template>
  <div>
    <carousel :link="link" text="E-Learning" />
    <breadcrumb />
    <ELearning style="margin-bottom: 70px;" />
  </div>
</template>


<script>
export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg '
                }
            ]
        }
    },
  components: {
    breadcrumb: require("../components/front/breadcrumb.vue").default,
    carousel: require("../components/front/carousel.vue").default,
    ELearning: require("../components/front/E-Learning/E-Learning.vue").default
  }
};
</script>
