<template>
  <div class="row related-video">
    <div class="col-12">
        <b-card>
          <div slot="header">
            <div class="row">
              <div class="col-6">
                <div>
                  Related Videos
                </div>
              </div>
              <div class="col-6">
                <span class=" float-right" v-b-tooltip.hover title="Refresh" @click="refreshRelatedVideos">
                  <span class="icon-spinner11"></span>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-6 col-sm-6 col-md-4" v-for="(video,index) in relatedVideo" :key="index" >
                <video-thumbnail :video="video" ></video-thumbnail>
              </div>
          </div>
        </b-card>
    </div>
  </div>
</template>

<script>
import videoThumbnail from './videoThumbnail.vue'
export default {
  props:['tags'],
  mounted() {
     this.$store.dispatch('squerJuicyAda')
  },
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
      },
      relatedVideosLength:function(){
        return this.$store.getters.getRelatedVideosLegnth
      }
    },
    methods:{
      refreshRelatedVideos(){
        let tag = this.tags[Math.floor(Math.random() * this.tags.length)]
        this.$store.dispatch('fetchRelatedVideo',tag.name)
      },
    }
}
</script>

<style scoped lang="scss">
span{
  display: inline-block;
}
</style>
