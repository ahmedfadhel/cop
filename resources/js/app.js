require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import {store} from './store/index'
import routes from './router';

window.moment = require('moment')

Vue.use(Vuex)
Vue.use(BootstrapVue)
Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
      return { x: 0, y: 0 }
    }
});
// Import General Vue Component Section Start
import headerSection from './components/general/headerSection.vue'
// Import General Vue Component Section End

// Import Main Section Vue Compoenent Start
import mainSection from './components/main/mainSection.vue'
// Import Main Section Vue Compoenent End
Vue.config.devtools = false
const app = new Vue({
    el: '#app',
    store,
    router,
    components:{
      // General Section Component
      headerSection,
      mainSection,
    }
});
