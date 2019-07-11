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
        lastPage:null,
        showAlert:null,
        message:null,
        variant:null,
        page:null,
        api: 'http://127.0.0.1:8000/api/',
        url:'http://127.0.0.1:8000/admin/',
        index:'http://172.16.45.16',
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
      getLastPagt(state){
        return state.lastPage
      },
      getDisplayVideo(state){
        return state.displayVideo
      },
      getRelatedVideos(state){
        return state.relatedVideos
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
      setLastPage(state,payload){
        state.lastPage = payload
      },
      setMessage(state,payload){
        state.showAlert = payload.state
        state.message = payload.message
        state.variant = payload.variant
      },
    },
    actions:{
      fetchVideos:(context,payload)=>{
        context.state.page = payload || 1
        Axios.get(context.state.api + 'new?page='+ context.state.page)
          .then((response)=>{

            context.commit('setVideos',response.data.videos.data)
            context.commit('setLastPage', response.data.videos.last_page)
            if(response.data.videos.current_page === 1){
              context.commit('setFirstPage',1)
            }else{
              context.commit('setFirstPage',null)
            }
          })
          .catch((error=>{
            console.log(error)
        }))
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
          resolve(response.data.video.tags)
        }).catch(error=>{
          console.log(error)
        })
      })
    },
    fetchRelatedVideo(context,payload){
      Axios.get(context.state.api+'getrelated/'+payload).then(res=>{
        if(res.data.status === 'success'){
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
