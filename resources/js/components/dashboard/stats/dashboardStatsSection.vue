<template>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            Pornezium Statistics
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                <div class="stats">
                  <strong>Total Uploaded Videos:</strong>
                  {{this.countv}}
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="stats">
                  <strong>Total Stars: </strong>
                  {{this.counts}}
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="stats">
                  <strong>Total Tags:</strong>
                  {{this.countt}}
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="stats">
                 <strong>Total Categories: </strong>
                  {{this.countc}}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <p class="stats-last mt-4">
                 <strong> Last Activites:</strong>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <b-table
                  :fields="videoFields"
                  :borderless="true"
                  :items="lastVideos"
                  striped
                  stacked="sm"
                  hover
                  :caption-top="true"
                  caption="Latest 5 Uploaded Videos"
                >
                  <template slot="image" slot-scope="row">
                    <b-media>
                        <b-img :src="row.item.photos[0].url" width="64" alt="placeholder"></b-img>
                    </b-media>
                  </template>
                  <template slot="title" slot-scope="row">
                    {{row.item.title | trimLength(25)}}
                  </template>
                 <template slot="updated_at" slot-scope="row">
                    {{row.item.updated_at | humanTime}}
                  </template>
                </b-table>
              </div>
              <div class="col-sm-12 col-md-6">
                <b-table
                  :fields="starFields"
                  :borderless="true"
                  :items="lastStars"
                  striped
                  stacked="sm"
                  hover
                  :caption-top="true"
                  caption="Latest 5 Uploaded Stars"
                >
                  <template slot="image" slot-scope="row">
                    <b-media>
                        <b-img  :src="row.item.photos[0].url"  width="64" alt="placeholder"></b-img>
                    </b-media>
                  </template>
                  <template slot="name" slot-scope="row">
                    {{row.item.name | trimLength(50)}}
                  </template>
                  <template slot="updated_at" slot-scope="row">
                    {{row.item.created_at | humanTime}}
                  </template>
                </b-table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props:[
    'countv',
    'counts',
    'countt',
    'countc',
    'videos',
    'stars'
  ],
  mounted(){
    console.log(this.counts)
  },
  data:()=>{
    return {
      videoFields: [
          { key:'id', label: "#", class: 'text-center'},
          { key:'image',label:'Thumbnail', class: 'text-center'},
          { key: 'title', label: 'Video Title', class: 'text-center' },
          { key: 'updated_at', label: 'Video Creation', class: 'text-center' },
        ],
        starFields:[
          { key:'id', label: "#", class: 'text-center'},
          { key:'image', label: "Thumbnail",class: 'text-center'},
          {key:'name',label:'Star Name',class: 'text-center'},
          { key: 'updated_at', label: 'Creation Time',class: 'text-center'},

        ]
    }
  },
  computed:{
    lastVideos:function(){
      return this.videos
    },
    lastStars:function(){
      return this.stars
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

<style scoped lang="scss">

</style>
