<template>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <b-card
          :header="display.title"
          header-tag="header"
          class="mt-4"
        >
          <b-tabs content-class="mt-3">
            <b-tab v-for="(link,index) in display.links" :key="index"
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
                  <h1 class="text-center mt-3 video-title">{{display.title}}</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-4" >
                  <p >
                    <strong>
                      Stars:
                    </strong>
                    <span v-for="(star,index) in display.stars" :key="index" class="mr-1 badge badge-secondary">
                     <a  @click="starLink(star.name)">{{star.name}}</a>
                    </span>
                  </p>
                  <p >
                    <strong>
                      Categories:
                    </strong>
                    <span v-for="(cat,index) in display.cats" :key="index" class="mr-1 badge badge-secondary">
                       <a  @click="catLink(cat.name)">{{cat.name}}</a>
                    </span>
                  </p>
                  <p>
                    <strong>
                      Tags:
                    </strong>
                    <span v-for="(tag,index) in display.tags" :key="index" class="mr-1 badge badge-secondary">
                       <a  @click="tagLink(tag.name)">{{tag.name}}</a>
                    </span>
                  </p>
                </div>
                <div class="col-12 col-md-4">

                  <p>
                    <strong>
                      Video Description:
                    </strong>
                    {{display.description}}
                  </p>

                </div>
                <div class="col-12 col-md-4">
                  <p>
                    <strong>
                      Uploaded at:
                    </strong>
                    {{display.updated_at}}
                  </p>
                  <p>
                    <strong>
                      Length:
                    </strong>
                    {{display.length}} m
                  </p>
                  <p>
                    <strong>
                      Views:
                    </strong>
                    {{display.views}}
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
  props:[
    'display'
  ],
  mounted(){
    this.searchTags = this.display.tags
    this.tag = this.display.tags[Math.floor(Math.random() * this.display.tags.length)].name

     this.showCom()
     if(this.tag){
      this.$store.dispatch('fetchRelatedVideo',this.tag)
     }
      this.$store.commit('setJuicyAds')
      this.$store.commit('setJuicyPop')
  },
  data:()=>{
    return {
      searchTags:null,
      tag:null,
    }
  },

  computed:{

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
    },
    starLink(value){
      window.location.href="http://pornezium.com/pornstars/"+value+'/videos'
    },
    catLink(value){
      window.location.href="http://pornezium.com/category/"+value+"/videos"
    },
    tagLink(value){
      window.location.href="http://pornezium.com/tags/"+value+"/videos"
    },
  },
}
</script>

<style scoped lang="scss">
.list-group-item{
    border: 0px;
    padding: 0.50rem 1.25rem;
}
.video-thumbnail{
  height: 25rem;
  display: block;
  margin: auto
}
a{
  cursor: pointer;
}
</style>
