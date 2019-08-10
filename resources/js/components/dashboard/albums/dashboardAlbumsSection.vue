<template>
<div>
  <b-alert v-model="alert" :variant="variant" dismissible>
     {{message}}
  </b-alert>
  <b-row>
    <b-col cols="6">
      <h3>Ablums Managment</h3>
    </b-col>
    <b-col cols="6">
      <b-button v-b-tooltip.hover title="Add New Album" class="float-right" @click="addNewAlbum()">
        <span class="icon-plus"></span>
      </b-button>
    </b-col>
  </b-row>
    <!-- <b-row>
    <b-col cols="12">
     <b-form-group  class="mb-4 mt-4">
        <b-input-group>
          <b-form-input v-model="filter" placeholder="Search For Star"></b-form-input>
          <b-input-group-append>
            <b-button :disabled="!filter" @click="filter = ''">Clear</b-button>
          </b-input-group-append>
        </b-input-group>
      </b-form-group>
    </b-col>
  </b-row> -->
  <b-row>
    <b-col cols="12">
      <b-table
      striped
      stacked="sm"
      hover
      :items="albumsItem"
      :fields="fields"
      per-page="5"
      :current-page="currentPage"
      @filtered="onFiltered"
      :filter="filter">
        <template slot="poster" slot-scope="row">
           <b-media>
              <b-img  :src="row.item.poster | posterUrl"  width="64" alt="placeholder"></b-img>
           </b-media>
        </template>
        <template slot="title" slot-scope="row">
          {{row.item.title | trimLength(50)}}
        </template>
        <template slot="alias_name" slot-scope="row">
          {{row.item.alias_name | trimLength(50)}}
        </template>
        <template slot="created_at" slot-scope="row">
          {{row.item.created_at | humanTime}}
        </template>
        <template slot="actions" slot-scope="row">
          <b-button-group>
            <b-button variant="outline-info"  @click="showAlbum(row.item)">
              <span class="icon-eye"></span>
            </b-button>
            <b-button variant="outline-success" @click="editAlbum(row.item)">
              <span class="icon-pencil"></span>
            </b-button>
            <b-button variant="outline-danger" @click="deleteAlbum(row.item)">
              <span class="icon-bin"></span>
            </b-button>
          </b-button-group>
        </template>
      </b-table>
    </b-col>
  </b-row>
  <b-row>
    <b-col cols="12">
      <b-pagination
        v-model="currentPage"
        :total-rows="totalRows"
        per-page="5"
      ></b-pagination>
    </b-col>
  </b-row>

  <b-modal size="lg" ref="viewAlbum" :title="album.title" ok-only>
    <b-container fluid>
      <b-row>
        <b-col cols="12">
          <b-carousel
              id="carousel-no-animation"
              style="text-shadow: 0px 0px 2px #000"
              no-animation
              img-width="200"
              img-height="200"
              controls
              indicators
            >
            <b-carousel-slide
              :caption="album.title"
              :img-src="album.poster | posterUrl"
            ></b-carousel-slide>
            <b-carousel-slide
              v-for="(photo,index) in album.photos" :key="index"
              :img-src="photo.url | albumUrls(album.id)"
            >
            </b-carousel-slide>
          </b-carousel>

        </b-col>
        <b-col cols="12">
          <p>
            <strong>Ablum Tags:</strong>
            <span v-for="(tag,index) in album.tags" :key="index" class="mr-2">{{tag.name}}</span>
          </p>
          <p>
            <strong>
              Album Categories:
            </strong>
             <span v-for="(cat,index) in album.cats" :key="index" class="mr-2">{{cat.name}}</span>
          </p>
        </b-col>
      </b-row>
    </b-container>
  </b-modal>
</div>


</template>

<script>
var axios = require('axios')
var moment = require('moment')
export default {
  props:['albums','success', 'failed',],
  mounted(){
    if(this.success){
      this.$store.commit('setMessage',{
      state: true,
      message: this.success,
      variant: 'success'
    })
    }
    if(this.failed){
      this.$store.commit('setMessage',{
        state: true,
        message: this.failed,
        variant: 'danger'
      })
    }
  },
  data() {
      return {
        filter:null,
        allAlbums:this.albums,
        fields: [
          { key:'id', label: "#"},
          { key:'poster', label: "Thumbnail"},
          {key:'title',label:'Album Name'},
          { key: 'created_at', label: 'Creation Time' },
          {key:'actions', label:'Control'}
        ],
        currentPage:1,
        album:{
          id:null,
          title:null,
          poster:null,
          tags:null,
          cats:null,
          photos:null
        }

      }
    },
    computed:{
      totalRows:function(){
        return this.albums.length
      },
      albumsItem:function(){
        return this.allAlbums
      },
      url:function(){
        return this.$store.getters.getUrl
      },
      alert(){
        return this.$store.getters.getShowAlert
      },
      message(){
        return this.$store.getters.getMessage
      },
      variant(){
        return this.$store.getters.getVariant
      },
    },
    methods:{
       onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
        this.currentPage = 1
      },
      addNewAlbum(){
        document.location.href=this.url + "album/create"
      },
      showAlbum(album){
        this.album.id = album.id
        this.album.title = album.title
        this.album.poster = album.poster
        this.album.tags = album.tags
        this.album.cats = album.cats
        this.album.photos = album.photos
        // this.category.image = category.photos[0].url
        this.$refs['viewAlbum'].show()
      },
      editAlbum(album){
        document.location.href= this.url + "album/"+album.id+'/edit'
      },
      deleteAlbum(album){
        axios.delete(this.url + 'album/'+album.id).then((res)=>{
          this.allAlbums = this.allAlbums.filter(x => {
            return x.id != album.id;
          })
          if(res.data.status === 'success'){
            this.$store.commit('setMessage',{
              state: true,
              message: res.data.message,
              variant: 'success'
            })
          }else{
         this.$store.commit('setMessage',{
            state: true,
            message: res.data.message,
            variant: 'danger'
            })
          }
        }).catch(error=>{
          console.log(error)
          if(error.response.status){
            this.$store.commit('setMessage',{
            state: true,
            message: error.response.data.message,
            variant: 'danger'
            })
          }
        })
      }
    },
    filters:{
      humanTime:function(val){
        return moment(val).fromNow()
      },
      trimLength:function(val,length){
        return val.substr(0,length)+'...'
      },
      posterUrl:function(value){
        return '/storage/posters/'+value
      },
      albumUrls:function(value,id){
        return '/storage/albums/'+id+'/'+value
      }
    }
}
</script>

<style>

</style>
