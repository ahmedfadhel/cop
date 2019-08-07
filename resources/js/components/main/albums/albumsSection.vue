<template>
  <div class="container album">
    <div id="juicy-ads" class="leaderboard mt-4"></div>
    <div class="row">
      <div class="col-12">
        <b-card
          class="mt-4"
          header="Photos"
          title="All Photos"
        >
        <div class="row">
          <div class="col-6 col-lg-3 mt-4" v-for="(photo,index) in filteredPhotos" :key="index">
            <div class="card text-white">
              <img :src="photo.poster | posterUrl" class="card-img img-fluid" :alt="photo.title" >
              <div class="card-img-overlay">
                  <a :href="photo.slug | albumUrl">{{photo.title}}</a>
              </div>
            </div>

          </div>
        </div>
          <div class="row">
            <div class="mt-4" style="margin:auto">
              <div class="col-12">
                <b-pagination-nav
                  v-model="pageNumber"
                  :link-gen="linkGen"
                  :number-of-pages="totalPages"
                  @input='viewChange'
                  use-router
                ></b-pagination-nav>
              </div >
            </div>
          </div>
        </b-card>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  created() {
    this.$store.dispatch('fetchAllPhotos').then(res=>{
      this.totalPages = res.total
    })
  },
  mounted(){
    this.showCom()
    this.$store.commit('setJuicyAds')
  },
  data:()=>{
    return {
      pageNumber:null,
      // searchedCat:null,
      appear:false,
      totalPages:null,
      numberOfDisplay:16,
      start:0,
      size:0,
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
    linkGen(pageNum) {
      return pageNum === 1 ? '?' : `?page=${pageNum}`
    },
    viewChange(change){
      this.start = this.numberOfDisplay * (change-1)
      this.size = this.numberOfDisplay * change
    },
  },
  computed: {
    photos:function(){
      return this.$store.getters.getAllPhotos
    },
    filteredPhotos:function(){
      // if(this.searchedCat){
      //   this.pageNumber = 1
      //   let filtered = this.photos.filter((cat)=>cat.name.toLowerCase().includes(this.searchedCat.toLowerCase()))

      //   return filtered.slice(this.start,this.size)
      // }else{
      //   if(this.photos){
      //     return this.photos.slice(this.start,this.size)
      //   }

      // }
      if(this.photos){
          return this.photos.slice(this.start,this.size)
        }
    }
  },
  filters:{
    posterUrl:function(value){
      return '/storage/posters/'+value
    },
    albumUrl:function(value){
      return '/albums/'+value
    }
  }
}
</script>

<style>

</style>
