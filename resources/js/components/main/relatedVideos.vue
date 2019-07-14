<template>

    <b-row class="mt-4 related-video">
      <b-col sm="12">
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
                  <span class="icon-spinner11"></span>
                </span>
              </b-col>
            </b-row>
          </div>
              <b-row>
                  <b-col cols="6" sm="6" md="4" lg="3"  v-if="count < 16" v-for="count in videoAppear" :key="count" >
                      <video-thumbnail :video="relatedVideo[count]"></video-thumbnail>
                  </b-col>
              </b-row>

              <b-row>
                <b-col cols="12" class="mt-4">
                  <b-button class="mx-auto" variant="outline-secondary" @click="videoAppear += 4">Show more (+4)</b-button>
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
          videoAppear:8,
        }
    },
    components:{
        videoThumbnail
    },
    computed:{
      relatedVideo:function(){
        return this.$store.getters.getRelatedVideos
      },
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
