<template>
  <b-container class="mt-4" >
    <b-row >
      <b-col sm="12">
        <best-videos v-if="firstPage"></best-videos>
        <b-card
          header="New Videos"
          header-tag="header"
        >
          <new-videos></new-videos>
          <b-row>
            <div class="mt-4" style="margin:auto">
              <b-col sm="12">
                <b-pagination-nav
                  :link-gen="linkGen"
                  :number-of-pages="totalPages"

                  @input='viewChange'
                  use-router
                ></b-pagination-nav>
              </b-col>
            </div>
          </b-row>
        </b-card>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
import newVideos from './newVideos.vue'
import bestVideos from './bestVideos.vue'

export default {
    created(){
      this.$store.dispatch('fetchVideos').then(res=>{
        this.totalPages = res
      })
    },
     mounted() {
       this.$store.commit('setJuicyAds')
       this.$store.commit('setJuicyPop')
    },
    data:()=>{
        return{
          totalPages: null,
        }
    },
    components:{
        // videoThumbnail,
        newVideos,
        bestVideos,
    },
    methods: {
      linkGen(pageNum) {
        return pageNum === 1 ? '?' : `?page=${pageNum}`
      },
      viewChange(change){
        this.$store.dispatch('fetchVideos',change)

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
