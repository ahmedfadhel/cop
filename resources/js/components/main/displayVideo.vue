<template>
  <div class="container">
    <div id="juicy-ads" class="leaderboard mt-4"></div>
    <div class="row">
      <div class="col-12 col-xl-10 mt-4">
        <b-card
          :header="display.title"
          header-tag="header"
        >
          <div class="row">
            <div class="col-12" v-for="(link,index) in display.links" :key="index">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe :src="link.url" allowfullscreen="allowfullscreen" class="embed-responsive-item">
                </iframe>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <h1 class="text-center mt-3 video-title">{{display.title}}</h1>
            </div>

          </div>
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="row">
                <div class="col-12">
                    <p>
                      <strong>
                        Stars:
                      </strong>
                      <span v-for="(star,index) in display.stars" :key="index" class="mr-1 badge badge-secondary">
                      <a  @click="starLink(star.name)">{{star.name}}</a>
                      </span>
                    </p>
                </div>
                <div class="col-12">
                  <p >
                    <strong>
                      Categories:
                    </strong>
                    <span v-for="(cat,index) in display.cats" :key="index" class="mr-1 badge badge-secondary">
                      <a  @click="catLink(cat.name)">{{cat.name}}</a>
                    </span>
                  </p>
                </div>
                <div class="col-12">
                  <p>
                    <strong>
                      Tags:
                    </strong>
                    <span v-for="(tag,index) in display.tags" :key="index" class="mr-1 badge badge-secondary">
                      <a  @click="tagLink(tag.name)">{{tag.name}}</a>
                    </span>
                  </p>
                </div>
              </div>
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
        </b-card>
      </div>
       <div class="col-12 col-xl-2 mt-4">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-xl-12">
            <div class="ad first-ad d-none d-sm-block">
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-xl-12 d-none d-sm-block">
            <div class="ad second-ad ">
            </div>
          </div>

          <div class="col-6 col-md-4 col-xl-12 d-none d-sm-none d-md-block">
            <div class="ad third-ad">
            </div>
          </div>
          <div class="col-12">
            <div id="mobile" class="ad mobile-ad">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="juicy-ads " class="leaderboard  d-none d-xl-block mt-4"></div>
    <div class="row">
      <div class="col-12 col-xl-10">
        <related-videos
          :tags="searchTags"
        ></related-videos>
      </div>
      <div class="col-12 col-xl-2">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-xl-12">
            <div class="ad first-ad d-none d-sm-block">
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-xl-12 d-none d-sm-block">
            <div class="ad second-ad ">
            </div>
          </div>

          <div class="col-6 col-md-4 col-xl-12 d-none d-sm-none d-md-block">
            <div class="ad third-ad">
            </div>
          </div>
        </div>
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
    this.$store.commit('setPageKeywords',this.display.tags)
    this.$store.commit('setPageDescription',this.display.description)
    this.$store.commit('setPageTitle',this.display.title)
     this.showCom()
     if(this.tag){
      this.$store.dispatch('fetchRelatedVideo',this.tag)
     }
      this.$store.commit('setJuicyAds')
      this.$store.dispatch('squerJuicyAda')
      this.$store.dispatch('squerJuicyAdb')
      this.$store.dispatch('squerJuicyAdc')
      this.$store.dispatch('mobileJuicyAd')
      this.display.links.forEach(link => {
        if(link.server_name === 'verystream'){
          this.fileID = link.url.split('/')[4]
        }
      });
  },
  data:()=>{
    return {
      searchTags:null,
      tag:null,
      fileID:null,
      url:'54.39.105.211:443',
      captcha:{
        image:null,
        ticket:null,
        value:null,
        failed:null,
        message:null,
        link:null,
        disable:true,
      }
    }
  },

  computed:{
    relatedVideos:function(){
      return this.$store.getters.getRelatedVideos
    },
    getCaptchaImage:function(){
      return this.captcha.image
    },
    allowDownload:function(){
      if(this.fileID){
        return true
      }else{
        return false
      }
    }
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
      this.$store.dispatch('starUrl',value)
    },
    catLink(value){
      this.$store.dispatch('catUrl',value)
    },
    tagLink(value){
      this.$store.dispatch('tagUrl',value)
    }
  },
  computed:{
    api:function(){
      return this.$store.getters.getApi
    },
    image:function(){
      return this.captcha.image
    }
  }


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
