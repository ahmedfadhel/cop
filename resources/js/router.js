import mainSection from './components/main/mainSection'
import displayVideo from './components/main/displayVideo'
import {store} from './store'
import pageNotFound from './components/general/pageNotFound.vue'
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
    path: "*",
    component: pageNotFound
  }
]

export default routes
