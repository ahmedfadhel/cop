<template>
  <b-row >
    <b-col cols="6" sm="6" md="4" lg="3" v-for="(video,index) in videos" :key="index">
          <video-thumbnail :video="video"></video-thumbnail>
        <!-- {{video}} -->
    </b-col>
  </b-row>

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

<style scoped lang="scss">

</style>
