import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store  = new Vuex.Store({
    state:{
        videos:[],
        bestVideos:[],
        relatedVideos:[],
        relatedAlbums:null,
        tags:null,
        cats:null,
        stars:null,
        photos:null,
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
      getAllPhotos(state){
        return state.photos
      },
      getRelatedAlbums(state){
        return state.relatedAlbums
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
        document.title = payload + ' - Pornezium.com'
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
      setAllPhotos(state,payload){
        state.photos = payload
      },
      setRelatedAlbums(state,payload){
        state.relatedAlbums = payload
      },
      // Set Juicy Ads Script
      // Bottom leaderboard

      setJuicyAds(){
        let container = document.getElementById('juicy-ads');
        document.querySelectorAll('.leaderboard').forEach(ele=>{
          if(!ele.firstChild){
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
          ele.appendChild(script1)
          ele.appendChild(script2)
          ele.appendChild(ins)
          }
        })
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
        // axios.get(context.state.api+'allcats?page='+context.state.catPage).then((res)=>{
        axios.get(context.state.api+'allcats').then((res)=>{
          if(res.data.status === 'success'){
            context.commit('setAllCats',res.data.cats)
            if(res.data.cats.length < 16){
              resolve({
                total:1
              })
            }else{
              resolve({
                total:res.data.cats.length%16
              })
            }

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
        // axios.get(context.state.api+'allstars?page='+context.state.starPage)
        axios.get(context.state.api+'allstars')
          .then((res)=>{
          if(res.data.status === 'success'){
            context.commit('setAllStars',res.data.stars)
            if(res.data.stars.length < 16){
              resolve({
                total:1
              })
            }
            resolve({
              total:res.data.stars.length%16
            })
          }
        })
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
    fetchAllPhotos(context,payload){
      return new Promise((resolve,reject)=>{
        context.state.starPage = payload || 1
        axios.get(context.state.api+'allalbums')
          .then((res)=>{
          if(res.data.status === 'success'){
            context.commit('setAllPhotos',res.data.albums)
            if(res.data.albums.length < 16){
              resolve({
                total:1
              })
            }
            resolve({
              total:res.data.albums.length%16
            })
          }
        })
      })
    },
    fetchRelatedAlbum:(context,payload)=>{
      axios.get(context.state.api+'related/'+payload).then(res=>{
        if(res.data.status === 'success'){
          context.commit('setRelatedAlbums',res.data.albums)
        }
      })
    },
    // Juicy ad 250X250
    squerJuicyAda:(context)=>{
      document.querySelectorAll('.first-ad').forEach(container=>{
        if(!container.firstChild){
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
            script2.innerHTML = "(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':782950})"
          // ins
            let ins = document.createElement('ins')
            ins.setAttribute('id','782950')
            ins.setAttribute('data-width','250')
            ins.setAttribute('data-height','262')
            // Append to parent
            container.appendChild(script1)
            container.appendChild(script2)
            container.appendChild(ins)
        }
      })
    },
    squerJuicyAdb:(context)=>{
      document.querySelectorAll('.second-ad').forEach(container=>{
        if(!container.firstChild){
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
            script2.innerHTML = "(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':782975});"
          // ins
            let ins = document.createElement('ins')
            ins.setAttribute('id','782975')
            ins.setAttribute('data-width','250')
            ins.setAttribute('data-height','262')
            // Append to parent
            container.appendChild(script1)
            container.appendChild(script2)
            container.appendChild(ins)
        }
      })
    },
    squerJuicyAdc:(context)=>{
      let container = document.querySelectorAll('.third-ad').forEach(container=>{
        if(!container.firstChild){
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
            script2.innerHTML = "(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':782977})"
          // ins
            let ins = document.createElement('ins')
            ins.setAttribute('id','782977')
            ins.setAttribute('data-width','250')
            ins.setAttribute('data-height','262')
            // Append to parent
            container.appendChild(script1)
            container.appendChild(script2)
            container.appendChild(ins)
        }
      })

    },
    // Juicy ad 300X100 mobile ad
    mobileJuicyAd:(context)=>{
      let container = document.querySelector('.mobile-ad');
      if(!container.firstChild){
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
        script2.innerHTML = "(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':783146});"
      // ins
        let ins = document.createElement('ins')
        ins.setAttribute('id','783146')
        ins.setAttribute('data-width','300')
        ins.setAttribute('data-height','112')
        // Append to parent
        container.appendChild(script1)
        container.appendChild(script2)
        container.appendChild(ins)
      }
    },
    // juicy ad 125X125 image
    smallJuicyAd:(context)=>{
      let container = document.querySelector('.inline-ad');
      if(!container.firstChild){
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
        script2.innerHTML = "(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':782953});"
      // ins
        let ins = document.createElement('ins')
        ins.setAttribute('id','782953')
        ins.setAttribute('data-width','158')
        ins.setAttribute('data-height','180')
        // Append to parent
        container.appendChild(script1)
        container.appendChild(script2)
        container.appendChild(ins)
      }
    },
    logout:(context)=>{
      axios.post(context.state.url + 'logout').then(response=>{
        location.href = context.state.index
      })
    },
    // Links redirection of main website section
    starUrl(context,payload){
      window.location.href = context.state.index+'/pornstars/'+payload+'/videos'
    },
    catUrl(context,payload){
      window.location.href = context.state.index+'/category/'+payload+'/videos'
    },
    tagUrl(context,payload){
      window.location.href = context.state.index+'/tags/'+payload+'/videos'
    },
    displayVideoUrl(context,payload){
      window.location.href = context.state.index+'/videos/'+payload
    },
    // Ads Placeing methods
  }
})
