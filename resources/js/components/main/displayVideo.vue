<template>
    <b-container>
      <b-row>
        <b-col cols="12">
          <b-card
            :header="video.title"
            header-tag="header"
            class="mt-4"
            >
            <b-tabs content-class="mt-3">
              <b-tab v-for="(link,index) in video.links" :key="index"
                :title="link.server_name"
              >
                <b-row>
                  <b-col cols="12">
                   <b-embed
                      type="iframe"
                      aspect="16by9"
                      :src="link.url"
                      allowfullscreen
                    ></b-embed>
                  </b-col>
                </b-row>
                <b-row>
                  <b-col cols="12">
                    <h3 class="text-center mt-3 video-title">{{video.title}}</h3>
                  </b-col>
                </b-row>
                <b-row>
                  <b-col cols="6">
                    <p >
                      <strong>
                        Stars:
                      </strong>
                      <b-badge v-for="(star,index) in video.stars" :key="index" class="mr-1">
                        {{star.name}}
                      </b-badge>

                    </p>
                    <p >
                      <strong>
                        Categories:
                      </strong>
                      <b-badge v-for="(cat,index) in video.cats" :key="index" class="mr-1">
                        {{cat.name}}
                      </b-badge>

                    </p>
                    <p>
                      <strong>
                        Tags:
                      </strong>
                      <b-badge v-for="(tag,index) in video.tags" :key="index" class="mr-1">
                        {{tag.name}}
                      </b-badge>
                    </p>
                  </b-col>
                  <b-col cols="6">
                    <p>
                      <strong>
                         Uploaded at:
                      </strong>
                      {{video.updated_at}}
                    </p>
                    <p>
                      <strong>
                         Length:
                      </strong>
                      {{video.length}} m
                    </p>
                    <p>
                      <strong>
                         Views:
                      </strong>
                      {{video.views}}
                    </p>

                  </b-col>
                </b-row>

              </b-tab>
            </b-tabs>
          </b-card>
        </b-col>
      </b-row>
      <b-row>
        <b-col cols="12">
          <related-videos></related-videos>
        </b-col>
      </b-row>
      <b-row>
        <!-- {{searchTagValue}} -->
      </b-row>
    </b-container>

</template>

<script>
import relatedVideos from './relatedVideos.vue'
export default {
  created(){
    this.$store.dispatch('fetchDisplayedVideo',this.$route.params.videoId).then(res=>{
      this.$store.dispatch('fetchRelatedVideo',res[0].name)
    })

  },
  data:()=>{
    return {
      searchTag:null,
    }
  },
  computed:{
    video:function(){
      return this.$store.getters.getDisplayVideo
    },
    relatedVideos:function(){
      return this.$store.getters.getRelatedVideos
    },
    searchTagValue:function(){
      // return this.video.tags[Math.floor(Math.random() * this.video.tags.length)].name
    }
  },
  components:{
    relatedVideos
  }
}
</script>

<style scoped lang="scss">
.list-group-item{
    border: 0px;
    padding: 0.50rem 1.25rem;
}
</style>
