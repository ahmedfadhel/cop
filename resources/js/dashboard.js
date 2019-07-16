require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import Vuex from 'vuex'
import {store} from './store/index'

window.moment = require('moment')

Vue.use(Vuex)
Vue.use(BootstrapVue)

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
 // Dashboard Statistics Section
 import dashboardStatsSection from './components/dashboard/stats/dashboardStatsSection'
 Vue.config.devtools = false
 const app = new Vue({
  el: '#app',
  store,
  components:{
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
    dashboardStarsEditFormSection,
    dashboardStatsSection
  }
});
