<template>
<div>
  <b-alert v-model="alert" :variant="variant" dismissible>
     {{message}}
  </b-alert>
  <b-row>
    <b-col cols="6">
      <h3>Videos Managment</h3>
    </b-col>
    <b-col cols="6">
      <b-button v-b-tooltip.hover title="Add New Video" class="float-right" @click="addNewVideo()">
        <span class="icon-plus"></span>
      </b-button>
    </b-col>
  </b-row>
    <b-row>
    <b-col cols="12">
     <b-form-group  class="mb-4 mt-4">
        <b-input-group>
          <b-form-input v-model="filter" placeholder="Search For Video"></b-form-input>
          <b-input-group-append>
            <b-button :disabled="!filter" @click="filter = ''">Clear</b-button>
          </b-input-group-append>
        </b-input-group>
      </b-form-group>
    </b-col>
  </b-row>
  <b-row>
    <b-col cols="12">
      <b-table
      striped
      stacked="sm"
      hover
      :items="displayVideos"
      :fields="fields"
      per-page="10"
      :current-page="currentPage"
      @filtered="onFiltered"
      :filter="filter">
        <template slot="image" slot-scope="row">
           <b-media>
              <b-img :src="row.item.photos[0].url" width="64" alt="placeholder"></b-img>
           </b-media>
        </template>
        <template slot="title" slot-scope="row">
          {{row.item.title | trimLength(25)}}
        </template>
        <template slot="description" slot-scope="row">
          {{row.item.title | trimLength(50)}}
        </template>
        <template slot="stars" slot-scope="row">
          <ul class="list-group list-group-flush">
            <li
              class="list-group-item"
              v-for="(star,index) in row.item.stars" :key="index"
            >
              {{star.name}}
            </li>
          </ul>
        </template>
        <template slot="created_at" slot-scope="row">
          {{row.item.created_at | humanTime}}
        </template>
        <template slot="actions" slot-scope="row">
          <b-button-group>
            <b-button variant="outline-info"  @click="showVideo(row.item)">
              <span class="icon-eye"></span>
            </b-button>
            <b-button variant="outline-success" @click="editVideo(row.item)">
              <span class="icon-pencil"></span>
            </b-button>
            <b-button variant="outline-danger" @click="deleteVideo(row.item)">
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
        per-page="10"
      ></b-pagination>
    </b-col>
  </b-row>

  <b-modal size="lg" ref="viewVideo" :title="video.title" ok-only>
    <b-container fluid>
      <b-row>
        <b-col cols="6">
          <b-img
            :src="video.image"
            fluid
            alt="video Image"
          ></b-img>
        </b-col>
        <b-col cols="6">
          <p>
            <strong>Description:</strong>
            {{video.description}}
          </p>
          <p>
            <strong>Tags:</strong>
            <b-badge v-for="(tag,index) in video.tags" :key="index">{{tag.name}}</b-badge>
          </p>
          <p>
            <strong>Categories:</strong>
            <b-badge v-for="(cat,index) in video.cats" :key="index">{{cat.name}}</b-badge>
          </p>
          <p>
            <strong>Porn Star:</strong>
            <b-badge v-for="(star,index) in video.stars" :key="index">{{star.name}}</b-badge>
          </p>

        </b-col>
      </b-row>
    </b-container>
  </b-modal>
</div>


</template>

<script>
var moment = require('moment')
export default {
  props:['videos','errors','success', 'failed'],
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
        allVideos:this.videos,
        fields: [
          { key:'id', label: "#"},
          {key:'image',label:'Thumbnail'},
          { key: 'title', label: 'Video Title' },
          { key: 'description', label: 'Video Description'},
          { key: 'stars', label: 'Stars In'},
          { key: 'length', label: 'Video Length'},
          { key: 'created_at', label: 'Video Creation' },
          {key:'actions', label:'Control'}
        ],
        currentPage:1,
        video:{
          title:null,
          description:null,
          stars:null,
          tags:null,
          cats:null,
          image:null,
          links:null,
        }
      }
    },
    computed:{
      totalRows:function(){
        return this.videos.length
      },
      displayVideos:function(){
        return this.allVideos;
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
      addNewVideo(){
        document.location.href=this.url + "videos/create"
      },
      showVideo(video){
        this.video.title = video.title
        this.video.description = video.description
        this.video.image = video.photos[0].url
        this.video.cats = video.cats
        this.video.tags = video.tags
        this.video.stars = video.stars
        this.video.links = video.links

        this.$refs['viewVideo'].show()
      },
      editVideo(video){
        document.location.href=this.url + "videos/"+video.id+"/edit"
      },
      deleteVideo(video){
        axios.delete(this.url + 'videos/'+video.id).then((res)=>{
          this.allVideos = this.allVideos.filter(x => {
            return x.id != video.id;
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
        return moment(val).fromNow(true)
      },
      trimLength:function(val,length){
        return val.substr(0,length)+'...'
      }
    }
}
</script>

<style lang="scss" scoped>
  .list-group-item {
    background-color: transparent;
    border: none;
    padding: 0.15rem;
}
</style>
