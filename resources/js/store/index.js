import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios';
import { resolve } from 'url';

Vue.use(Vuex)

export const store  = new Vuex.Store({
    state:{
        videos:[],
        bestVideos:[],
        relatedVideos:[],
        displayVideo:{},
        showAlert:null,
        message:null,
        variant:null,
        totalRelatedVideos:null,
        siteDesc: 'Pornezium.com is free porn site ... ',
        page:null,
        api: 'http://pornezium.com/api/',
        url:'http://pornezium.com/admin/',
        index:'http://pornezium.com',
        firstPage:null
    },
    getters:{
      getUrl(state){
        return state.url
      },
      getVideos(state){
        return state.videos
      },
      getBestVideos(state){
        return state.bestVideos
      },
      getFirstPage(state){
        return state.firstPage
      },
      getDisplayVideo(state){
        return state.displayVideo
      },
      getRelatedVideos(state){
        return state.relatedVideos
      },
      getTotalRelatedVideos(state){
        return state.totalRelatedVideos
      },
      getShowAlert(state){
        return state.showAlert
      },
      getMessage(state){
        return state.message
      },
      getVariant(state){
        return state.variant
      },

    },
    mutations:{
      setVideos(state,payload){
        state.videos = payload
      },
      setBestVideos(state,payload){
        state.bestVideos = payload
      },
      setDisplayVideo(state,payload){
        state.displayVideo = payload
      },
      setRelatedVideos(state,payload){
        state.relatedVideos = payload
      },
      setFirstPage(state,payload){
        state.firstPage = payload
      },
      setTotalRelatedVideos(state,payload){
        state.totalRelatedVideos = payload
      },
      setMessage(state,payload){
        state.showAlert = payload.state
        state.message = payload.message
        state.variant = payload.variant
      },
      setPageTitle(state,payload){
        document.title = payload
      },
      setPageKeywords(state,payload){
        let keywords = payload.map(x=>x.name).join();
        document.querySelector('meta[name="keywords"]').content = keywords
      },
      setPageDescription(state,payload){
        document.querySelector('meta[name="description"]').content = state.siteDesc + payload.substr(0,84)
      },
    },
    actions:{
      fetchVideos:(context,payload)=>{
        return new Promise((resolve,reject)=>{
          context.state.page = payload || 1
          Axios.get(context.state.api + 'new?page='+ context.state.page)
            .then((response)=>{

              context.commit('setVideos',response.data.videos.data)
              resolve(response.data.videos.last_page)
              if(response.data.videos.current_page === 1){
                context.commit('setFirstPage',1)
              }else{
                context.commit('setFirstPage',null)
              }
            })
            .catch((error=>{
              console.log(error)
          }))
        })

      },
    fetchBestVideos:(context,payload)=>{
      Axios.get(context.state.api + 'best')
      .then(response=>{
        context.commit('setBestVideos',response.data.best)
      })
    },
    fetchDisplayedVideo(context,payload){
      return new Promise((resolve,reject)=>{
        Axios.get(context.state.api+'getvideo/'+payload).then(response=>{
          context.commit('setDisplayVideo',response.data.video)
          resolve({
            tags:response.data.video.tags,
            title:response.data.video.title,
            desc: response.data.video.description
          })
          resolve(response.data.video.tags)
        }).catch(error=>{
          console.log(error)
        })
      })
    },
    fetchRelatedVideo(context,payload){
      Axios.get(context.state.api+'getrelated/'+payload).then(res=>{
        if(res.data.status === 'success'){
          context.commit('setTotalRelatedVideos',res.data.videos.length)
          context.commit('setRelatedVideos',res.data.videos)
        }
      }).catch(error=>{
        console.log(error)
      })
    },
    logout:(context)=>{
      Axios.post(context.state.url + 'logout').then(response=>{
        location.href = context.state.index
      })
    },
  }
})
