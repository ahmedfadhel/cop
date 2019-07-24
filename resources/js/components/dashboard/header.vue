<template>
  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-container>
      <b-navbar-brand href="#">NavBar</b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <b-nav-item href="/admin/stats" :active="stats" >Statistics</b-nav-item>
          <b-nav-item href="/admin/videos" :active="videos" >Videos</b-nav-item>
          <b-nav-item href="/admin/stars" :active="stars" >Stars</b-nav-item>
          <b-nav-item href="/admin/tags" :active="tags" >Tags</b-nav-item>
          <b-nav-item href="/admin/category" :active="category" >Categories</b-nav-item>


        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item-dropdown right>
            <!-- Using 'button-content' slot -->
            <template slot="button-content"><em>User</em></template>
            <!-- <b-dropdown-item href="#">Profile</b-dropdown-item> -->
            <b-dropdown-item @click="logout">Sign Out</b-dropdown-item>
          </b-nav-item-dropdown>
        </b-navbar-nav>
      </b-collapse>
    </b-container>
  </b-navbar>
</template>

<script>
export default {
  mounted(){
     switch (this.loc) {
        case 'videos':
          this.videos = true
          this.stars = false
          this.category = false
          this.tags = false
          this.stats = false

          break;
        case 'stars':
          this.stars = true
          this.videos = false
          this.category = false
          this.tags = false
          this.stats = false

          break;
        case 'tags':
          this.tags = true
          this.videos = false
          this.stars = false
          this.category = false
          this.stats = false
          break;
        case 'category':
          this.category = true
          this.videos = false
          this.stars = false
          this.tags = false
          this.stats = false

          break;
        case 'stats':
          this.category = false
          this.videos = false
          this.stars = false
          this.tags = false
          this.stats = true


          break;
        case 'sitemap':
          this.category = false
          this.videos = false
          this.stars = false
          this.tags = false
          this.stats = false
          break;
        default:
          break;
      }

  },
  data:()=>{
    return {
      loc :location.pathname.match(/([^\/]+)/gm)[1],
      videos:false,
      stars:false,
      tags:false,
      category:false,
      stats:false,
    }
  },
  methods:{
    logout(){
      this.$store.dispatch('logout')
    },

  },
  computed:{

  }
}
</script>

<style>

</style>
