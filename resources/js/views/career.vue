<template>
  <div>
    <carousel :link="link" text="Careers" />
    <breadcrumb />
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <info />
        </div>
        <div class="col-lg-6">
          <ContactForm />
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import ContactForm from '../components/front/career/form.vue';
import Info from '../components/front/career/info.vue';

export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/contact.jpeg'
                }
            ]
        }
    },
  components: {
      breadcrumb: Breadcrumb,
      carousel: Carousel,
      info: Info,
      ContactForm: ContactForm,
  }
};
</script>
