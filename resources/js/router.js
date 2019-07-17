import mainSection from './components/main/mainSection'
import displayVideo from './components/main/displayVideo'
import pageNotFound from './components/general/pageNotFound.vue'
import tagsSection from './components/main/tags/tagsSection.vue'
import tagVideoSection from './components/main/tags/tagVideoSection.vue'

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
    path: "*",
    component: pageNotFound
  }
]

export default routes
