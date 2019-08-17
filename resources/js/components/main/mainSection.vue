<template>
  <div class="container mt-4">
    <div id="juicy-ads" class="leaderboard mb-4"></div>
    <best-videos v-if="firstPage" ></best-videos>
    <div class="row">
      <div class="col-12">
        <b-card
          header="New Videos"
          header-tag="header"
        >
          <new-videos ></new-videos>
          <div class="row">
            <div class="mt-4" style="margin:auto">
              <div class="col-12">
                <b-pagination-nav
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
import newVideos from './newVideos.vue'
import bestVideos from './bestVideos.vue'
import { setTimeout } from 'timers';

export default {
    created(){
      this.$store.dispatch('fetchVideos').then(res=>{
        this.totalPages = res
      })
    },
     mounted() {
      this.showCom()
      this.$store.commit('setJuicyAds')
    },
    data:()=>{
        return{
          totalPages: null,
          appear:false,
        }
    },
    components:{
        newVideos,
        bestVideos,
    },
    methods: {
      linkGen(pageNum) {
        return pageNum === 1 ? '?' : `?page=${pageNum}`
      },
      viewChange(change){
        this.$store.dispatch('fetchVideos',change)
      },
      showCom(){
        this.appear = true;
        let ele = document.querySelector('.loader')
        if(ele){
          ele.parentNode.removeChild(ele)
        }
      }
    },
    computed:{
      firstPage(){
        return this.$store.getters.getFirstPage
      },
    }
}
</script>

<style>

</style>
