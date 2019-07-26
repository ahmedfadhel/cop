require('./bootstrap');
import Vue from 'vue'
// import BootstrapVue from 'bootstrap-vue'
import { VBTooltipPlugin,NavbarPlugin,CardPlugin,EmbedPlugin,PaginationNavPlugin,TabsPlugin } from 'bootstrap-vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import {store} from './store/index'
import routes from './router';

window.moment = require('moment')

Vue.use(Vuex)
// Vue.use(BootstrapVue)
Vue.use(VBTooltipPlugin)
Vue.use(CardPlugin)
Vue.use(PaginationNavPlugin)
Vue.use(EmbedPlugin)
Vue.use(TabsPlugin)
Vue.use(NavbarPlugin)
Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
      return { x: 0, y: 0 }
    }
});

// Import Main Section Vue Compoenent Start
import mainSection from './components/main/mainSection.vue'
import headerSection from './components/general/headerSection.vue'
// Import Main Section Vue Compoenent End
Vue.config.devtools = true
const app = new Vue({
    el: '#app',
    store,
    router,
    components:{
      // General Section Component
      mainSection,
      headerSection
    }
});
