<template>
  <div>
    <carousel :link="link" text="contact us" />
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
    <div class="map">
      <ContactMap />
    </div>
  </div>
</template>


<script>
import Breadcrumb from '../components/front/breadcrumb.vue';
import Carousel from '../components/front/carousel.vue';
import Info from '../components/front/contact/info.vue';
import ContactForm from '../components/front/contact/form.vue';
import ContactMap from '../components/front/contact/map.vue';

export default {
  data() {
      return {
          link: [
              {
                img: '/storage/img/contact.jpeg'
              }
          ],
      }
  },
  components: {
      breadcrumb: Breadcrumb,
      carousel: Carousel,
      info: Info,
      ContactForm: ContactForm,
      ContactMap: ContactMap
  }
};
</script>
