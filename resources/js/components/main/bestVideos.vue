<template>
    <div class="row mb-4">
      <div class="col-12">
        <b-card>
          <!-- Best Videos Section Header -->
          <div slot="header">
            <div class="row">
              <div class="col-6">
                <div>
                  Best Videos
                </div>
              </div>
              <div class="col-6">
                <span class="float-right" v-b-tooltip.hover title="Refresh" @click="refreshBestVideos">
                  <span class="icon-spinner11"></span>
                </span>
              </div>
            </div>
          </div>
          <!-- Best Videos Display template iteration -->
          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3" v-for="(video,index) in bestVideos" :key="index">
              <video-thumbnail
                :video="video"
              ></video-thumbnail>
            </div>
          </div>
        </b-card>
      </div>
    </div>
</template>

<script>
import videoThumbnail from './videoThumbnail.vue'
export default {
    created(){
      this.$store.dispatch('fetchBestVideos')
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
