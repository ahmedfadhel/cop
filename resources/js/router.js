import mainSection from './components/main/mainSection'
import displayVideo from './components/main/displayVideo'
import pageNotFound from './components/general/pageNotFound.vue'
import tagsSection from './components/main/tags/tagsSection.vue'
import tagVideoSection from './components/main/tags/tagVideoSection.vue'
import catSection from './components/main/categories/catSection.vue'
import catVideoSection from './components/main/categories/catVideoSection.vue'

const routes = [
  {
    path:'/',
    component:mainSection,
    name:'home'
  },
  {
    path: '/video/:videoId',
    name: 'video',
    component:displayVideo,
  },
  {
    path: '/tags/',
    name: 'tags',
    component:tagsSection,
  },
  {
    path: '/tags/:tagId',
    name: 'tagVideos',
    component:tagVideoSection,
  },
  {
    path: '/category/',
    name: 'category',
    component: catSection,
  },
  {
    path: '/category/:catId',
    name: 'catVideos',
    component:catVideoSection,
  },
  {
    path: "*",
    component: pageNotFound
  }
]

export default routes
