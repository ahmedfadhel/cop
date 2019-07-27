import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store  = new Vuex.Store({
    state:{
        videos:[],
        bestVideos:[],
        relatedVideos:[],
        tags:null,
        cats:null,
        stars:null,
        tagVideos:null,
        catVideos:null,
        starVideos:null,
        displayVideo:{},
        showAlert:null,
        message:null,
        variant:null,
        siteDesc: 'Pornezium.com is free porn site ... ',
        page:null,
        starPage:null,
        catPage:null,
        api: 'http://www.pornezium.com/api/',
        url:'http://www.pornezium.com/admin/',
        index:'http://www.pornezium.com',
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
      getAllTags(state){
        return state.tags
      },

      getTagVideos(state){
        return state.tagVideos
      },
      getAllCats(state){
        return state.cats
      },
      getCatVideos(state){
        return state.catVideos
      },
      getAllStars(state){
        return state.stars
      },
      getStarVideos(state){
        return state.starVideos
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
      setAllTags(state,payload){
        state.tags = payload
      },
      setTagVideos(state,payload){
        state.tagVideos = payload
      },
      setAllCats(state,payload){
        state.cats = payload
      },
      setCatVideos(state,payload){
        state.catVideos = payload
      },
      setAllStars(state,payload){
        state.stars = payload
      },
      setStarVideos(state,payload){
        state.starVideos = payload
      },
      // Set Juicy Ads Script
      // Bottom leaderboard

      setJuicyAds(){
        let container = document.getElementById('juicy-ads');

        if(!container.firstChild){
          // Script one
          let script1 = document.createElement('script')
          script1.type="text/javascript"
          script1.src="https://adserver.juicyads.com/js/jads.js"
          script1.setAttribute('data-cfasync','false')
          script1.async = true
          // script 2
          let script2 =document.createElement('script')
          script2.type = "text/javascript"
          script2.setAttribute('data-cfasync','false')
          script2.async = true
          script2.innerHTML = "(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':778030});"
        // ins
          let ins = document.createElement('ins')
          ins.setAttribute('id','778030')
          ins.setAttribute('data-width','728')
          ins.setAttribute('data-height','102')
          // Append to parent
          container.appendChild(script1)
          container.appendChild(script2)
          container.appendChild(ins)
        }

      },
      // PopUp at top
      setJuicyPop(){
        let script = document.createElement('script')
        script.type = "text/javascript"
        script.src = "https://js.juicyads.com/jp.php?c=348423x2x264u4q2r2e4238414&u=http%3A%2F%2Fwww.juicyads.rocks"
        document.getElementById('juicy-pop').appendChild(script)
      }
    },
    actions:{
      fetchVideos:(context,payload)=>{
        return new Promise((resolve,reject)=>{
          context.state.page = payload || 1
          axios.get(context.state.api + 'new?page='+ context.state.page)
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
      axios.get(context.state.api + 'best')
      .then(response=>{
        context.commit('setBestVideos',response.data.best)
      })
    },
    fetchDisplayedVideo(context,payload){
      return new Promise((resolve,reject)=>{
        axios.get(context.state.api+'getvideo/'+payload).then(response=>{
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
      axios.get(context.state.api+'getrelated/'+payload).then(res=>{
        if(res.data.status === 'success'){
          context.commit('setRelatedVideos',res.data.videos)
        }
      }).catch(error=>{
        console.log(error)
      })
    },
    fetchAllTags(context,payload){
      axios.get(context.state.api+'alltags').then((res)=>{
        if(res.data.status === 'success'){
          context.commit('setAllTags',res.data.tags)
        }
      })
    },
    fetchTagVideos(context,payload){
      return new Promise((resolve,reject)=>{
        axios.get(context.state.api+'tagvideos/'+payload).then((res)=>{
          if(res.data.status === 'success'){
            context.commit('setTagVideos',res.data.videos)
            return resolve({
              tag:res.data.tag,
              total: res.data.videos.length
            })
          }
        }).catch((error)=>{
          console.log(error)
        })
      })
    },
    fetchAllCats(context,payload){
      return new Promise((resolve,reject)=>{
        context.state.catPage = payload || 1
        axios.get(context.state.api+'allcats?page='+context.state.catPage).then((res)=>{
          if(res.data.status === 'success'){
            context.commit('setAllCats',res.data.cats.data)
            resolve({
              total:res.data.cats.last_page
            })
          }
        })
      })

    },
    fetchCatVideos(context,payload){
      return new Promise((resolve,reject)=>{
        axios.get(context.state.api+'catvideos/'+payload).then((res)=>{
          if(res.data.status === 'success'){
            context.commit('setCatVideos',res.data.videos)
            return resolve({
              cat:res.data.cat,
              total: res.data.videos.length
            })
          }
        }).catch((error)=>{
          console.log(error)
        })
      })
    },
    // Stars Fetch Api
    fetchAllStars(context,payload){
      return new Promise((resolve,reject)=>{
        context.state.starPage = payload || 1
        axios.get(context.state.api+'allstars?page='+context.state.starPage)
          .then((res)=>{
          if(res.data.status === 'success'){
            console.log(res.data)
            context.commit('setAllStars',res.data.stars.data)
            resolve({
              total:res.data.stars.last_page
            })
          }
        });
      })

    },
    fetchStarVideos(context,payload){
      return new Promise((resolve,reject)=>{
        axios.get(context.state.api+'starvideos/'+payload).then((res)=>{
          if(res.data.status === 'success'){
            context.commit('setStarVideos',res.data.videos)
            return resolve({
              star:res.data.star,
              total:res.data.videos.length
            })
          }

        }).catch(error=>{
          console.log(error)
        })
      })
    },
    logout:(context)=>{
      axios.post(context.state.url + 'logout').then(response=>{
        location.href = context.state.index
      })
    },
  }
})
