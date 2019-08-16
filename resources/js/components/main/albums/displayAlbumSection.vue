<template>
  <div class="container">
    <div id="juicy-ads" class="leaderboard mt-4"></div>
    <div class="row mt-4">
      <div class="col-12">
        <div class="top-main-ad d-flex justify-content-center ">
          <div id='nativeAds_1565860406807'></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-xl-10 mt-4">
        <b-card
          :header="album.title"
          header-tag="header"

        >
        <div class="row">
          <div class="col-12" v-if="album.photos.length === 0">
            <img
            class="img-fluid mx-auto d-block"
            :src="album.poster | posterUrl"
            :alt="album.title" >
          </div>
          <div class="col-12" v-else>
            <b-carousel
              id="carousel-fade"
              style="text-shadow: 0px 0px 2px #000"
              fade
              indicators
              img-width="100%"
              img-height="480"
              controls
              :interval=0
            >
              <b-carousel-slide
                :caption="album.title"
                :img-src="album.poster | posterUrl"

              ></b-carousel-slide>
              <b-carousel-slide
                v-for="(img,index) in album.photos"
                :key="index"
                :img-src="img.url | albumsUrl(album.id)"
              ></b-carousel-slide>

            </b-carousel>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1 class="text-center mt-3 video-title">{{album.title}}</h1>
          </div>
        </div>
        <div class="row">
                <div class="col-12 col-md-4" >
                  <p>
                    <strong>
                      Categories:
                    </strong>
                    <span v-for="(cat,index) in album.cats" :key="index" class="mr-1 badge badge-secondary">
                       <a  @click="catLink(cat.name)">{{cat.name}}</a>
                    </span>
                  </p>
                  <p>
                    <strong>
                      Tags:
                    </strong>
                    <span v-for="(tag,index) in album.tags" :key="index" class="mr-1 badge badge-secondary">
                       <a  @click="tagLink(tag.name)">{{tag.name}}</a>
                    </span>
                  </p>
                </div>
                <div class="col-12 col-md-4">
                  <p>
                    <strong>
                      Uploaded at:
                    </strong>
                    {{album.updated_at}}
                  </p>
                </div>
                <div class="col-12 col-md-4">
                 <div class="inline-ad mx-auto">

                 </div>
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
            <div class="ad mobile-ad">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12 col-xl-10">
        <b-card
          header="Related Photos"
        >
        <div class="row album">
          <div class="col-6 col-md-4 col-lg-3 mt-4" v-for="(photo,index) in related" :key="index">
            <div class="card text-white">
              <img :src="photo.poster | posterUrl" class="card-img img-fluid" :alt="photo.title" >
              <div class="card-img-overlay">
                  <a :href="photo.slug | albumUrl">{{photo.title}}</a>
              </div>
            </div>
          </div>
        </div>
        </b-card>
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

          <div class="col-6 col-md-4 col-xl-12 d-none d-sm-none d-md-block d-xl-none">
            <div class="ad third-ad">
            </div>
          </div>
          <div class="col-12">
            <div class="ad mobile-ad">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props:['album'],
  mounted() {
    this.showCom()
    this.$store.commit('setJuicyAds')
    this.$store.dispatch('squerJuicyAda')
    this.$store.dispatch('squerJuicyAdb')
    this.$store.dispatch('squerJuicyAdc')
    this.$store.dispatch('smallJuicyAd')
    this.$store.dispatch('mobileJuicyAd')
    if(this.album.cats.indexOf('comic') !== -1){
      this.$store.dispatch('fetchRelatedAlbum','comic')
    }else{
      let cat = this.album.cats[Math.floor(Math.random() * this.album.cats.length)]
      this.$store.dispatch('fetchRelatedAlbum',cat.name)
    }

  },
  methods: {
    showCom(){
      this.appear = true
      let ele = document.querySelector('.loader')
      if(ele){
        ele.parentNode.removeChild(ele)
      }
    },
  },
  computed:{
    related:function(){
      return this.$store.getters.getRelatedAlbums
    }
  },
  filters:{
    posterUrl:function(value){
      return '/storage/posters/'+value
    },
    albumsUrl:function(value,id){
      return '/storage/albums/'+id+'/'+value
    },
    albumUrl:function(value){
      return '/albums/'+value
    }
  },

}
</script>

<style>

</style>
