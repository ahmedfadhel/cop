<template>
  <div class="container">
    <div id="juicy-ads" class="leaderboard mt-4"></div>
    <div class="row">
      <div class="col-12 col-xl-10 mt-4">
        <b-card
          :header="display.title"
          header-tag="header"
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
                <div class="col-12 col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <div class="row">
                        <div class="col-6">
                          <p>
                            <strong>
                              Stars:
                            </strong>
                            <span v-for="(star,index) in display.stars" :key="index" class="mr-1 badge badge-secondary">
                            <a  @click="starLink(star.name)">{{star.name}}</a>
                            </span>
                          </p>
                        </div>
                        <div class="col-6">
                          <button class="btn btn-outline-secondary float-right" @click="download" v-if="allowDownload">Download</button>
                        </div>
                      </div>

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
            </b-tab>
          </b-tabs>
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
          <div class="col-12 d-xl-none">
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
    <b-modal ref="captcha" hide-footer>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="alert alert-danger" role="alert" v-if="captcha.failed">
              {{captcha.message}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <img :src="getCaptchaImage" alt="verystream.com Captcha" v-if="captcha.image">
          </div>
          <div class="col-12">
            <label for="basic-url">Enter Captcha</label>
            <div class="input-group ">
              <input type="text" v-model="captcha.value" class="form-control" placeholder="Enter Captcha" aria-label="Captcha" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="col-12 mt-4">
            <button class="btn btn-outline-secondary" @click="submitDownload" :disabled="!captcha.value" v-if="!captcha.failed">Download</button>
            <button class="btn btn-outline-secondary" @click="download" v-if="captcha.failed">Re-Download</button>
          </div>
        </div>
      </div>
    </b-modal>
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
      captcha:{
        image:null,
        ticket:null,
        value:null,
        success:null,
        failed:null,
        message:null
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
    },
    download:function(){
      this.captcha.failed = null
      this.captcha.message = null
      delete axios.defaults.headers.common["X-CSRF-TOKEN"];
      delete axios.defaults.headers.common["X-Requested-With"];
      axios.get('https://api.verystream.com/file/dlticket?file='+this.fileID).then(res=>{
        if(res.data.status ===200){
          this.$refs['captcha'].show()
          this.captcha.image = res.data.result.captcha_url
          this.captcha.ticket = res.data.result.ticket
        }
      })
    },
    submitDownload:function(){
      if(this.captcha.value){
        axios.get('https://api.verystream.com/file/dl?file='+this.fileID+'&ticket='+this.captcha.ticket+'&captcha_response='+this.captcha.value).then(res=>{
          if(res.data.status === 200){
            window.open(res.data.result.url,'_blank')
            this.captcha.success = true
            this.$refs['captcha'].hide()
          }else{
            this.captcha.failed = true
            this.captcha.message = res.data.msg
          }
        })
      }
      window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
      token = document.head.querySelector('meta[name="csrf-token"]');
      if (token) {
          window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
      }
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
