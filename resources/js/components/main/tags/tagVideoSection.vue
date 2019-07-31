<template>
   <div class="container mt-4">
     <div id="juicy-ads" class="leaderboard mt-4"></div>
     <div class="row">
       <div class="col-12">
         <b-card
          :header="tag"
         >
          <div class="row" v-if="loading">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3" v-for="count in displayed" :key="count">
              <video-thumbnail :video="videos[count-1]"></video-thumbnail>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12">
              <button class=" btn btn-outline-secondary" @click="showMore()" style="margin:auto" :disabled="disabled">{{showTest}}</button>
            </div>
          </div>
         </b-card>
       </div>
      </div>
   </div>
</template>

<script>
import videoThumbnail from '../videoThumbnail'

export default {
created(){

    this.$store.dispatch('fetchTagVideos',this.$route.params.name).then(res=>{
    this.keyword = res.tag.name
    this.totalvideos = res.total
  })
},
mounted() {
    this.showCom()
    this.$store.commit('setJuicyAds')
    this.$store.commit('setJuicyPop')
},
data:()=>{
  return {
    keyword:null,
    totalvideos:null,
    display:4,
    loading:false,
    disabled:null,
    showTest:'Show More Videos',
  }
},
components:{
  videoThumbnail
  },
  computed:{
    videos:function(){
      return this.$store.getters.getTagVideos
    },
    tag:function(){
      return 'Videos Related To ' + this.keyword
    },
    displayed:function(){
      if(this.display > this.totalvideos){
        return this.totalvideos
      }else{
        return this.display
      }
    }
  },
  methods:{
      showCom(){
      this.appear = true;
      let ele = document.querySelector('.loader')
      if(ele){
        ele.parentNode.removeChild(ele)
      }
    },
    showMore(){
      let dummy = 4
      if((dummy+this.display) > this.totalvideos){
        this.display = this.totalvideos
        this.disabled = true
        this.showTest = 'No More Videos'
      }else{
        this.display = this.display+4
      }
    }
  },
  watch: {
    videos:function(val){
      this.loading = true
    }
  },
}
</script>
