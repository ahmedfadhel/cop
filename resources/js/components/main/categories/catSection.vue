<template>
  <div class="container cat">
    <div id="juicy-ads" class="leaderboard mt-4"></div>
    <div class="row">
      <div class="col-12">
        <b-card
          class="mt-4"
          header="Categories"
          title="All Categories"
        >
          <div class="row">
            <div class="col-12">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control" v-model="searchedCat" placeholder="Tag for A Cateogory..." aria-label="Username" aria-describedby="addon-wrapping">
                <div class="input-group-append">
                  <span class="input-group-text" id="addon-wrapping" @click="searchedCat=null">Clear</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-6 col-lg-3 mt-4" v-for="(cat,index) in filteredCats" :key="index">
              <div class="card text-white">
                <img :src="cat.photos[0].url | imageUrl" class="card-img img-fluid" :alt="cat.name" >
                <div class="card-img-overlay">
                  <router-link
                    :to="{ name: 'catVideos', params: { name: cat.name }}"
                    class="card-title">{{cat.name.toLowerCase()}}</router-link>
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
    this.$store.dispatch('fetchAllCats').then(res=>{
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
      searchedCat:null,
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
    cats:function(){
      return this.$store.getters.getAllCats
    },
    filteredCats:function(){
      if(this.searchedCat){
        this.pageNumber = 1
        let filtered = this.cats.filter((cat)=>cat.name.toLowerCase().includes(this.searchedCat.toLowerCase()))

        return filtered.slice(this.start,this.size)
      }else{
        if(this.cats){
          return this.cats.slice(this.start,this.size)
        }

      }
    }
  },
  filters:{
    imageUrl:function(value){
      return '/storage/categories/'+value
    }
  }
}
</script>

<style>

</style>
