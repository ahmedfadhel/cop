<template>
    <div class="video mt-4">
      <b-card-group>
        <b-card :img-src="video.photos[0].url" img-alt="Image" img-top>
          <b-card-title>
            <router-link :to="{ name: 'video', params: { videoId: video.id }}">{{video.title | trimTitle}}</router-link>
          </b-card-title>

          <div slot="footer">
              <b-row >
                  <b-col cols="12" sm="6"  md="4">
                      <div class="info">
                        <i class="fas fa-upload"></i>

                        <span>
                          {{video.created_at | fromatTime}}
                        </span>
                      </div>
                  </b-col>
                  <b-col cols="12" sm="6" md="4">
                      <div class="info">
                          <i class="far fa-clock"></i>
                          <span>
                              {{video.length | removeHour}}
                          </span>
                      </div>
                  </b-col>
                  <b-col cols="12" sm="6" md="4">
                      <div class="info">
                          <i class="fas fa-eye"></i>
                          <span>
                              {{video.views}}
                          </span>
                      </div>
                  </b-col>
              </b-row>
          </div>
        </b-card>
        </b-card-group>
    </div>
</template>

<script>
var moment = require('moment');

export default {
    props:[
        'video',
        'control'
    ],
    data: ()=>{
      return {
        loading:null
      }
    },
    methods:{
      updateVideo(){
         this.$store.dispatch('fetchDisplayedVideo',this.video.id).then(res=>{
        let tag = res[Math.floor(Math.random() * res.length)];
        this.$store.dispatch('fetchRelatedVideo',tag.name)
        })
      }
    },
    filters:{
      trimTitle:function(value){
        return value.substr(0,50)
      },
      fromatTime: function(value){
        return moment.duration(value.split(' ')[1],'hours').humanize()
      },
      removeHour:function(value){
        let newvalue = value.split(':');
        if(parseInt(newvalue[0])){
          return moment.duration(value).hours() + 'h'
        }
        return moment.duration(value).minutes()+ 'm'
      }
    }
}
</script>
<style scoped lang="scss">

</style>
