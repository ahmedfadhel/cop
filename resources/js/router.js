import mainSection from './components/main/mainSection'
import pageNotFound from './components/general/pageNotFound.vue'
import tagsSection from './components/main/tags/tagsSection.vue'
import tagVideoSection from './components/main/tags/tagVideoSection.vue'
import catSection from './components/main/categories/catSection.vue'
import catVideoSection from './components/main/categories/catVideoSection.vue'
import starsSection from './components/main/stars/starsSection.vue'
import starVideoSection from './components/main/stars/starVideoSection.vue'
import albumsSection from './components/main/albums/albumsSection.vue'
const routes = [
  {
    path:'/',
    component:mainSection,
    name:'home'
  },
  {
    path: '/tags/',
    name: 'tags',
    component:tagsSection,
  },
  {
    path: '/tags/:name/videos',
    name: 'tagVideos',
    component:tagVideoSection,
  },
  {
    path: '/category/',
    name: 'category',
    component: catSection,
  },
  {
    path: '/category/:name/videos',
    name: 'catVideos',
    component:catVideoSection,
  },
  {
    path:'/pornstars',
    name:'pornstars',
    component:starsSection
  },
  {
    path:'/pornstars/:star/videos',
    name:'starVideos',
    component:starVideoSection
  },
  {
    path:'/albums',
    name:'albums',
    component:albumsSection
  },
  {
    path: "*",
    component: pageNotFound
  }
]

export default routes
