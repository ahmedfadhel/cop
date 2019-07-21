<template>
  <div class="container cat" v-if="appear">
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
                <img :src="cat.photos[0].url" class="card-img img-fluid" :alt="cat.name" >
                <div class="card-img-overlay">
                  <router-link
                    :to="{ name: 'catVideos', params: { name: cat.name }}"
                    class="card-title">{{cat.name.toLowerCase()}}</router-link>
                </div>
              </div>

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
    this.$store.dispatch('fetchAllCats')
  },
  mounted(){
    this.showCom()
    this.$store.commit('setJuicyAds')
    this.$store.commit('setJuicyPop')
  },
  data:()=>{
    return {
      searchedCat:null,
      appear:false
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
  computed: {
    cats:function(){
      return this.$store.getters.getAllCats
    },
    filteredCats:function(){
      if(this.searchedCat){
        let filtered = this.cats.filter((cat)=>cat.name.toLowerCase().includes(this.searchedCat.toLowerCase()))
        return filtered
      }else{
        return this.cats
      }
    }
  },
}
</script>

<style>

</style>
