<template>
  <div class="container">
    <div id="juicy-ads" class="leaderboard mt-4"></div>
    <div class="row">
      <div class="col-12">
         <b-card
          class="mt-4"
          header="Porn Stars"
          title="Porn Stars List:"
        >
          <div class="row">
            <div class="col-12">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control" v-model="searchStar" placeholder="Porn Star to Search..." aria-label="Username" aria-describedby="addon-wrapping">
                <div class="input-group-append">
                  <span class="input-group-text" id="addon-wrapping" @click="searchStar=null">Clear</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mt-4"  v-for="(star,index) in filteredStars" :key="index">
              <div class="card bg-inverse">
                <img class="card-img" :src="star.photos[0].url | imageUrl" :alt="star.name">
                <router-link :to="{name:'starVideos', params:{star:star.name}}">
                  <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                    <h4 class="card-title">{{star.name}}</h4>
                  </div>
                </router-link>
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
  mounted() {
    this.$store.dispatch('fetchAllStars').then(res=>{
      this.totalPages = res.total
    })
    this.showCom()
    this.$store.commit('setJuicyAds')

  },
  data() {
    return {
      pageNumber:null,
      appear:null,
      searchStar:null,
      totalPages:null,
      numberOfDisplay:16,
      size:0,
      start:0,
    }
  },
  computed:{
    allStars:function(){
      return this.$store.getters.getAllStars
    },
    filteredStars:function(){

      if(this.searchStar){
        this.pageNumber =1
        let filtered = this.allStars.filter((star)=>{
          if(star.name.toLowerCase().includes(this.searchStar.toLowerCase())){
            return star
          }
          })
        return filtered.slice(this.start,this.size)

      }else{
        if(this.allStars){
          return this.allStars.slice(this.start,this.size)
        }
      }
    },
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
  filters:{
    imageUrl:function(value){
      return '/storage/stars/'+value
    }
  }

}
</script>

<style scoped lang="scss">
.card{
  border: 0px;
  img{
    height: 300px;
  }
}
.card-img-overlay{
  text-align: center;
  padding: 0px;
  .card-title{
    color: white;
    background-color: #fa93bb;
    height: 3rem;
    line-height: 3rem;
    font-size: 1.5rem;
    border-radius: 2px;
    margin-right: 0px;
    opacity: 0.9;
    margin-bottom: 0px;
  }
  a,a:hover{
    color: white;
    text-decoration: none;
  }
}
</style>
