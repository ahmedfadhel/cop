<template>
  <div class="container" v-if="appear">
    <div class="row">
      <div class="col-12">
        <b-card
          class="mt-4"
          header="Tags"
          title="All Tags"
        >
          <div class="row">
            <div class="col-12">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control" v-model="searchTag" placeholder="Tag to Search..." aria-label="Username" aria-describedby="addon-wrapping">
                <div class="input-group-append">
                  <span class="input-group-text" id="addon-wrapping" @click="searchTag=null">Clear</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <ul class="tags mt-4">
                <li class="tag-item mr-3" v-for="(tag,index) in filteredTags" :key="index">
                  <router-link :to="{ name: 'tagVideos', params: { name: tag.name }}">
                    <span class="icon-tags"></span>
                    {{tag.name}}
                  </router-link>
                </li>
              </ul>
            </div>
          </div>
        </b-card>
      </div>
    </div>
  </div>
</template>

<script>
import { filter } from 'minimatch';
export default {
  mounted() {
    this.showCom()
    this.$store.dispatch('fetchAllTags')
    this.$store.commit('setJuicyAds')
    this.$store.commit('setJuicyPop')
  },
  data:()=>{
    return{
      appear:null,
      searchTag:null,
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
    allTags:function(){
      return this.$store.getters.getAllTags
    },
    filteredTags:function(){
      if(this.searchTag){
        let filtered = this.allTags.filter((tag)=>tag.name.includes(this.searchTag))
        return filtered
      }else{
        return this.allTags
      }
    }
  }
}
</script>
