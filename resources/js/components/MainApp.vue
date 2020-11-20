<template>
  <main>
    <FrontHeader />
        <router-view></router-view>
    <FrontFooter />
  </main>
</template>

<script>

import { routes } from '../routes';
import Menu from '../components/shared/menu/Menu.vue';
import FrontFooter from '../components/front/footer.vue';
import FrontHeader from '../components/front/header.vue';

export default {

  components: {
    'meu-menu' : Menu,
    'FrontHeader': FrontHeader,
    'FrontFooter': FrontFooter
},
  
  data() {
    return {
      routes : routes.filter(route => route.menu)
    }
  }
}
</script>

<style>
.corpo {
    font-family: Helvetica, sans-serif;
    width: 96%;
    margin: 0 auto;
}

.pagina-enter, .pagina-leave-active {
    opacity: 0;
}

.pagina-enter-active, .pagina-leave-active {
    transition: opacity .4s;
}

.h4, h4 {
    font-size: 18px!important;
}
</style>
