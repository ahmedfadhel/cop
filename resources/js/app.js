require('./bootstrap');
import Vue from 'vue'
// import BootstrapVue from 'bootstrap-vue'
import {NavbarPlugin,CardPlugin,EmbedPlugin,PaginationNavPlugin,TabsPlugin,CarouselPlugin } from 'bootstrap-vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import {store} from './store/index'
import routes from './router';

window.moment = require('moment')

Vue.use(Vuex)
Vue.use(CardPlugin)
Vue.use(PaginationNavPlugin)
Vue.use(EmbedPlugin)
Vue.use(TabsPlugin)
Vue.use(NavbarPlugin)
Vue.use(CarouselPlugin)
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
import displayVideoSection from './components/main/displayVideo.vue'
import displayAlbumSection from './components/main/albums/displayAlbumSection.vue'

// Import Main Section Vue Compoenent End
Vue.config.devtools = false
const app = new Vue({
    el: '#app',
    store,
    router,
    components:{
      // General Section Component
      mainSection,
      headerSection,
      displayVideoSection,
      displayAlbumSection
    }
});


