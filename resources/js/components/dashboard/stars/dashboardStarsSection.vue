<template>
<div>
  <b-alert v-model="alert" :variant="variant" dismissible>
     {{message}}
  </b-alert>
  <b-row>
    <b-col cols="6">
      <h3>Stars Managment</h3>
    </b-col>
    <b-col cols="6">
      <b-button v-b-tooltip.hover title="Add New Star" class="float-right" @click="addNewStar()">
        <span class="icon-plus"></span>
      </b-button>
    </b-col>
  </b-row>
    <b-row>
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
  </b-row>
  <b-row>
    <b-col cols="12">
      <b-table
      striped
      stacked="sm"
      hover
      :items="starsItem"
      :fields="fields"
      per-page="5"
      :current-page="currentPage"
      @filtered="onFiltered"
      :filter="filter">
        <template slot="image" slot-scope="row">
           <b-media>
              <b-img  :src="row.item.photos[0].url"  width="64" alt="placeholder"></b-img>
           </b-media>
        </template>
        <template slot="name" slot-scope="row">
          {{row.item.name | trimLength(50)}}
        </template>
        <template slot="alias_name" slot-scope="row">
          {{row.item.alias_name | trimLength(50)}}
        </template>
        <template slot="created_at" slot-scope="row">
          {{row.item.created_at | humanTime}}
        </template>
        <template slot="actions" slot-scope="row">
          <b-button-group>
            <b-button variant="outline-info"  @click="showStar(row.item)">
              <span class="icon-eye"></span>
            </b-button>
            <b-button variant="outline-success" @click="editStar(row.item)">
              <span class="icon-pencil"></span>
            </b-button>
            <b-button variant="outline-danger" @click="deleteStar(row.item)">
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

  <b-modal size="lg" ref="viewStar" :title="star.name" ok-only>
    <b-container fluid>
      <b-row>
        <b-col cols="6">
          <b-img
            :src="star.image"
            fluid
            alt="Star Image"
          ></b-img>
        </b-col>
        <b-col cols="6">
          <p>
            Alias Name: <span>{{star.alias}}</span>
          </p>
          <p>
            Gender: <span>{{star.gender}}</span>
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
  props:['stars','success', 'failed'],
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
        allStars:this.stars,
        fields: [
          { key:'id', label: "#"},
          { key:'image', label: "Thumbnail"},
          {key:'name',label:'Star Name'},
          {key:'gender',label:'Gender'},
          { key: 'created_at', label: 'Creation Time' },
          {key:'actions', label:'Control'}
        ],
        currentPage:1,
        star:{
          name:'',
          alias:'',
          gender:'',
          image:''
        }

      }
    },
    computed:{
      totalRows:function(){
        return this.stars.length
      },
      starsItem:function(){
        return this.allStars
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
      addNewStar(){
        document.location.href=this.url + "stars/create"
      },
      showStar(star){
        this.star.name = star.name
        this.star.alias = star.alias_name
        this.star.gender = star.gender
        this.star.image = star.photos[0].url
        // this.category.image = category.photos[0].url
        this.$refs['viewStar'].show()
      },
      editStar(star){
        document.location.href= this.url + "stars/"+star.id+"/edit"
      },
      deleteStar(star){
        axios.delete(this.url + 'stars/'+star.id).then((res)=>{
          this.allStars = this.allStars.filter(x => {
            return x.id != star.id;
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
        return moment(val).fromNow()
      },
      trimLength:function(val,length){
        return val.substr(0,length)+'...'
      }
    }
}
</script>

<style>

</style>
