<template>
  <div class="row">
    <div class="col-6 col-sm-6 col-md-4 col-lg-3" v-for="(video,index) in videos" :key="index">
      <video-thumbnail :video="video"></video-thumbnail>
    </div>
  </div>

</template>

<script>
import videoThumbnail from './videoThumbnail'
export default {
  data:()=>{
    return {

    }
  },
  components:{
    videoThumbnail
  },
  computed:{
    videos:function(){
      return this.$store.getters.getVideos
    }
  }
}
</script>
