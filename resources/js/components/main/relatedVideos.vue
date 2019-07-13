<template>

    <b-row class="mt-4 related-video">
      <b-col sm="12">
<!--    header="Best Videos"
          header-tag="header" -->
          <b-card

          >
          <div slot="header">
            <b-row>
              <b-col cols="6">
                <div >
                  Related Videos
                </div>
              </b-col>
              <b-col cols="6">
                <span class=" float-right" v-b-tooltip.hover title="Refresh" @click="refreshRelatedVideos">
                  <span class="icon-loop2"></span>
                </span>
              </b-col>
            </b-row>
          </div>
              <b-row>
                  <b-col cols="6" sm="6" md="4" lg="3" v-for="(video,index) in relatedVideo" :key="index">
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
  props:['tags'],

    data:()=>{
        return{

        }
    },
    components:{
        videoThumbnail
    },
    computed:{
      relatedVideo:function(){
        return this.$store.getters.getRelatedVideos
      }
    },
    methods:{
      refreshRelatedVideos(){
        let tag = this.tags[Math.floor(Math.random() * this.tags.length)]
        this.$store.dispatch('fetchRelatedVideo',tag.name)
      }
    }

}
</script>

<style scoped lang="scss">
span{
  display: inline-block;
}
</style>
