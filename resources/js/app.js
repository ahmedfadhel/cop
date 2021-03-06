require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import {NavbarPlugin,CardPlugin,PaginationNavPlugin,CarouselPlugin } from 'bootstrap-vue'
import VueRouter from 'vue-router'
import {store} from './store/index'
import routes from './router';

window.moment = require('moment')

Vue.use(CardPlugin)
Vue.use(PaginationNavPlugin)
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
import headerSection from './components/general/headerSection.vue'
const mainSection = () => import('./components/main/mainSection.vue')
const displayVideoSection = () => import('./components/main/displayVideo.vue')
const displayAlbumSection = () => import('./components/main/albums/displayAlbumSection.vue')
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
      displayAlbumSection,
    }
});


// Load External JS File

if(!document.getElementById('popcash')){
  let popCash = document.createElement('script')
  popCash.setAttribute('id','popcash')
  popCash.src = "//cdn.popcash.net/pop.js"
  popCash.type = "text/javascript"
  popCash.defer = true
  document.body.appendChild(popCash)
}

