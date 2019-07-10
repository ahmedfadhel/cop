<template>

    <b-row class="mb-4">
      <b-col sm="12">
<!--    header="Best Videos"
          header-tag="header" -->
          <b-card

          >
          <div slot="header">
            <b-row>
              <b-col cols="6">
                <div >
                  Best Videos
                </div>
              </b-col>
              <b-col cols="6">
                <span class=" float-right" v-b-tooltip.hover title="Refresh" @click="refreshBestVideos">
                  <i class="fas  fa-sync" ></i>
                </span>
              </b-col>
            </b-row>
          </div>
              <b-row>
                  <b-col cols="6" sm="6" md="4" lg="3" v-for="(video,index) in bestVideos" :key="index">
                      <video-thumbnail :video="video"></video-thumbnail>
                  </b-col>
              </b-row>
          </b-card>

      </b-col>
    </b-row>
</template>

<script>
var moment = require('moment')
import videoThumbnail from './videoThumbnail.vue'
export default {
    created(){
      this.$store.dispatch('fetchBestVideos')
    },
    mounted(){

    },
    data:()=>{
        return{

        }
    },
    components:{
        videoThumbnail
    },
    computed:{
      bestVideos:function(){
        return this.$store.getters.getBestVideos
      }
    },
    methods:{
      refreshBestVideos(){
        this.$store.dispatch('fetchBestVideos')
      }
    }

}
</script>

<style scoped lang="scss">
span{
  display: inline-block;
}
</style>
