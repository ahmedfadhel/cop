/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

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
import footerSection from './components/general/footerSection.vue'
import adsSection from './components/general/adsSection.vue'
// Import General Vue Component Section End

// Import Main Section Vue Compoenent Start
import mainSection from './components/main/mainSection.vue'
// Import Main Section Vue Compoenent End

// Import Dashboard components
import dashboardHeaderSection from './components/dashboard/header.vue'
// Dashboard Videos Section
import dashboardVideosSection from './components/dashboard/videos/dashboardVideosSection.vue'
import dashboardVideosFormSection from './components/dashboard/videos/dashboardVideosFormSection.vue'
import dashboardVideoEditFormSection from './components/dashboard/videos/dashboardVideoEditFormSection.vue'
// Dashbaord Categoroes Section
import dashboardCatsSection from './components/dashboard/categories/dashboardCatsSection.vue'
import catFormSection from './components/dashboard/categories/formSection.vue'
import catEditFormSection from './components/dashboard/categories/catEditForm.vue'

// Dashbaord Tags Section
import dashboardTagsSection from './components/dashboard/tags/dashboardTagsSection.vue'
import dashboardTagsFormSection from './components/dashboard/tags/dashboardTagsFormSection.vue'
import dashboardEditTagFormSection from './components/dashboard/tags/dashboardEditTagFormSection.vue'

// Dashboard Stars Section
 import dashboardStarsSection from './components/dashboard/stars/dashboardStarsSection.vue'
 import dashboardStarsFormSection from './components/dashboard/stars/dashboardStarsFormSection.vue'
 import dashboardStarsEditFormSection from './components/dashboard/stars/dashboardStarsEditFormSection.vue'
Vue.config.devtools = true;
const app = new Vue({
    el: '#app',
    store,
    router,
    components:{
      // General Section Component
      headerSection,
      footerSection,
      mainSection,
      adsSection,
      // Dashboard compoenent
      dashboardHeaderSection,
      dashboardVideosFormSection,
      dashboardVideoEditFormSection,
      dashboardVideosSection,
      dashboardCatsSection,
      catFormSection,
      catEditFormSection,
      dashboardTagsSection,
      dashboardTagsFormSection,
      dashboardEditTagFormSection,
      dashboardStarsSection,
      dashboardStarsFormSection,
      dashboardStarsEditFormSection
    }
});
