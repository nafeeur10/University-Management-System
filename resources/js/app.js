require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router';
import { routes } from './routes';
import VueResource from 'vue-resource';
import BootstrapVue from "bootstrap-vue";
import Axios from 'axios'
import Vuex from 'vuex'
import store from './store/index'
// import storeData from './store/index'


Vue.use(Vuex)
Vue.prototype.$http = Axios;
Vue.use(VueResource);
Vue.use(VueRouter);
Vue.use(BootstrapVue);

// Vuex Store

// const store = new Vuex.Store({
//   storeData
// });

const router = new VueRouter({ 
    routes, 
    mode: 'history'
  });

Vue.component('main-app', require('./components/MainApp.vue').default);

const app = new Vue({
    router,
    store,
    el: '#app',
});
