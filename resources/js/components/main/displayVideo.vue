<template>
  <div class="container" v-if="appear">
    <div class="row">
      <div class="col-12">
        <b-card
          :header="video.title"
          header-tag="header"
          class="mt-4"
        >
          <b-tabs content-class="mt-3">
            <b-tab v-for="(link,index) in video.links" :key="index"
              :title="link.server_name"
            >
              <div class="row">
                <div class="col-12">
                <b-embed
                    type="iframe"
                    aspect="16by9"
                    :src="link.url"
                    allowfullscreen
                  ></b-embed>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h1 class="text-center mt-3 video-title">{{video.title}}</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-4" >
                  <p >
                    <strong>
                      Stars:
                    </strong>
                    <span v-for="(star,index) in video.stars" :key="index" class="mr-1 badge badge-secondary">
                      {{star.name}}
                    </span>
                  </p>
                  <p >
                    <strong>
                      Categories:
                    </strong>
                    <span v-for="(cat,index) in video.cats" :key="index" class="mr-1 badge badge-secondary">
                      <router-link
                      :to="{ name: 'catVideos', params: { name: cat.name }}"

                      >
                      {{cat.name}}
                      </router-link>
                    </span>
                  </p>
                  <p>
                    <strong>
                      Tags:
                    </strong>
                    <span v-for="(tag,index) in video.tags" :key="index" class="mr-1 badge badge-secondary">
                      <router-link
                      :to="{ name: 'tagVideos', params: { name: tag.name }}"

                      >
                      {{tag.name}}
                      </router-link>
                    </span>
                  </p>
                </div>
                <div class="col-12 col-md-4">
                  <p>
                    <strong>
                      Video Description:
                    </strong>
                    {{video.description}}
                  </p>
                </div>
                <div class="col-12 col-md-4">
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
                </div>
              </div>
            </b-tab>
          </b-tabs>
        </b-card>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <related-videos
          :tags="searchTags"
        ></related-videos>
      </div>
    </div>
  </div>
</template>

<script>
import relatedVideos from './relatedVideos.vue'
export default {
  mounted(){
    this.$store.dispatch('fetchDisplayedVideo',this.$route.params.videoSlug).then(res=>{
      let tag = res.tags[Math.floor(Math.random() * res.tags.length)];
      this.searchTags = res.tags
      this.$store.dispatch('fetchRelatedVideo',tag.name)
      this.$store.commit('setPageTitle',res.title)
      this.$store.commit('setPageDescription',res.desc)
      this.$store.commit('setPageKeywords',res.tags)
      this.showCom()
      this.$store.commit('setJuicyAds')
      this.$store.commit('setJuicyPop')
    })

  },
  data:()=>{
    return {
      searchTags:null,
      appear:false,
    }
  },
  beforeRouteUpdate (to, from, next) {
    let id = to.params.videoId
    this.$store.dispatch('fetchDisplayedVideo',id).then(res=>{
      let tag = res.tags[Math.floor(Math.random() * res.tags.length)];
      this.$store.dispatch('fetchRelatedVideo',tag.name)
      this.$store.commit('setPageTitle',res.title)
      this.$store.commit('setPageDescription',res.desc)
      this.$store.commit('setPageKeywords',res.tags)

    })
    next()
  },
  computed:{
    video:function(){
      return this.$store.getters.getDisplayVideo
    },
    relatedVideos:function(){
      return this.$store.getters.getRelatedVideos
    },
  },
  components:{
    relatedVideos,
  },
  methods:{
    showCom(){
      this.appear = true;
      let ele = document.querySelector('.loader')
      if(ele)
        {
          ele.parentNode.removeChild(ele)
        }
    }
  }
}
</script>

<style scoped lang="scss">
.list-group-item{
    border: 0px;
    padding: 0.50rem 1.25rem;
}
</style>
