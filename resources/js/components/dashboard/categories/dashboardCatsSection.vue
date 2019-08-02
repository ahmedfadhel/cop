<template>
<div>
  <b-alert v-model="alert" :variant="variant" dismissible>
     {{message}}
  </b-alert>
  <b-row>
    <b-col cols="6">
      <h3>Categories Managment</h3>
    </b-col>

    <b-col cols="6">
      <b-button v-b-tooltip.hover title="Add New Category" class="float-right" @click="addNewCat()">
        <span class="icon-plus"></span>
      </b-button>
    </b-col>

  </b-row>
  <b-row>
    <b-col cols="12">
     <b-form-group  class="mb-4 mt-4">
        <b-input-group>
          <b-form-input v-model="filter" placeholder="Search For Category"></b-form-input>
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
      hover
      stacked="sm"
      :items="categories"
      :fields="fields"
      per-page="15"
      :current-page="currentPage"
      @filtered="onFiltered"
      :filter="filter">
        <template slot="image" slot-scope="row">
           <b-media>
              <b-img v-if="row.item.photos.length"  :src="row.item.photos[0].url | imageUrl"  width="64" alt="placeholder"></b-img>
              <b-img v-else slot="aside" blank blank-color="#ccc" width="64" alt="placeholder"></b-img>
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
            <b-button variant="outline-info"  @click="showCategory(row.item)">
               <span class="icon-eye"></span>
            </b-button>
            <b-button variant="outline-success" @click="editCategory(row.item)">
              <span class="icon-pencil"></span>
            </b-button>
            <b-button variant="outline-danger" @click="deleteCategory(row.item)">
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
        per-page="15"
      ></b-pagination>
    </b-col>
  </b-row>
  <b-modal size="lg" ref="viewCategory" :title="category.name" ok-only>
    <b-contain fluid>
      <b-row>
        <b-col cols="6">
          <b-img
            :src="category.image"
            fluid
            alt="Categroy Image"
          ></b-img>
        </b-col>
        <b-col cols="6">
          <p class="my-4">
            <strong>
              Category Description:
            </strong>
            {{category.description}}
          </p>
        </b-col>
      </b-row>
    </b-contain>
  </b-modal>
</div>


</template>

<script>
import { stringify } from 'querystring';
var axios = require('axios')
var moment = require('moment')
export default {
  props:['cats','success','failed'],
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
        allcats:this.cats,
        fields: [
          { key:'id', label: "#"},
          { key:'image', label: "Thumbnail"},
          {key:'name',label:'Category'},
          { key: 'description', label: 'Category Description'},
          { key: 'created_at', label: 'Category Creation' },
          {key:'actions', label:'Control'}
        ],
        currentPage:1,
        category:{
          name:'',
          description:'',
          image:''
        }

      }
    },
    computed:{
      totalRows:function(){
        return this.cats.length
      },
      categories:function(){
        return this.allcats
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
      addNewCat(){
        document.location.href=this.url + "category/create"
      },
      showCategory(category){
        this.category.name = category.name
        this.category.description = category.description
        this.category.image = category.photos[0].url
        this.$refs['viewCategory'].show()
      },
      editCategory(cat){
        document.location.href=this.url + "category/"+cat.id+"/edit"
      },
      deleteCategory(cat){
        axios.delete(this.url+'category/'+cat.id,{
          accept: 'application/json'
        }).then((res)=>{
          this.allcats = this.allcats.filter(x => {
            return x.id != cat.id;
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
          // stringify
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
      imageUrl:function(value){
        return '/storage/categories/'+value
      }
    }
}
</script>

<style>

</style>
