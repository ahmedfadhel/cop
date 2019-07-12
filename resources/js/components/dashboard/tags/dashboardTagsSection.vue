<template>
<div>
  <b-alert v-model="alert" :variant="variant" dismissible>
     {{message}}
  </b-alert>
  <b-row>
    <b-col cols="6">
      <h3>Tags Managment</h3>
    </b-col>
    <b-col cols="6">
      <b-button v-b-tooltip.hover title="Add New Tag" class="float-right" @click="addNewTag()">
        <span class="icon-plus"></span>
      </b-button>
    </b-col>
  </b-row>
  <b-row>
    <b-col cols="12">
     <b-form-group  class="mb-4 mt-4">
        <b-input-group>
          <b-form-input v-model="filter" placeholder="Search For Tag"></b-form-input>
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
        :items="tagsItem"
        :fields="fields"
        per-page="5"
        :current-page="currentPage"
        @filtered="onFiltered"
        :filter="filter">
        <template slot="image" slot-scope="row">
           <b-media>
              <b-img :src="row.item.photos[0].url"  width="64" alt="placeholder"></b-img>
           </b-media>
        </template>
        <template slot="description" slot-scope="row">
          {{row.item.description | trimLength(50)}}
        </template>
        <template slot="created_at" slot-scope="row">
          {{row.item.created_at | humanTime}}
        </template>
        <template slot="actions" slot-scope="row">
          <b-button-group>
            <b-button variant="outline-info"  @click="showTag(row.item)">
              <span class="icon-eye"></span>
            </b-button>
            <b-button variant="outline-success" @click="editTag(row.item)">
              <span class="icon-pencil"></span>
            </b-button>
            <b-button variant="outline-danger" @click="deleteTag(row.item)">
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

  <b-modal size="lg" ref="viewTag" :title="tag.name" ok-only>
    <p>what Am I?</p>
    <p>I'm {{tag.description}}</p>
  </b-modal>
</div>


</template>

<script>
var axios = require('axios')
var moment = require('moment')
export default {
  props:['tags','success', 'failed'],
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
    this.totalRow = this.tags.length

  },
  data() {
      return {
        allTags:this.tags,
        filter:null,
        fields: [
          { key:'id', label: "#"},
          {key:'name',label:'Tag'},
          { key: 'description', label: 'Tag Description'},
          { key: 'created_at', label: 'Tag Creation' },
          {key:'actions', label:'Control'}
        ],
        currentPage:1,
        tag:{
          name:'',
          description:'',
        }

      }
    },
    computed:{
      totalRows:function(){
        return this.tags.length
      },
      tagsItem:function(){
        return this.allTags
      },
      url:function(){
        return this.$store.getters.getUrl;
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
      addNewTag(){
        document.location.href=this.url + "tags/create"
      },
      showTag(tag){
        this.tag.name = tag.name
        this.tag.description = tag.description

        this.$refs['viewTag'].show()
      },
      editTag(tag){
        document.location.href=this.url + "tags/"+tag.id+"/edit"
      },
      deleteTag(tag){
        axios.delete(this.url + 'tags/'+tag.id).then((res)=>{
          this.allTags = this.allTags.filter(x => {
            return x.id != tag.id;
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
