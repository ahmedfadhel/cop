<template>
    <div class="video mt-4">
      <b-card-group>
        <b-card :img-src="video.photos[0].url" img-alt="Image" img-top>
            <a :href="video.url">
                <b-card-title>
                  <router-link :to="{ name: 'video', params: { videoId: video.id }}">{{video.title | trimTitle}}</router-link>
                </b-card-title>
            </a>

            <div slot="footer" v-if="!control">
                <b-row >
                    <b-col cols="4">
                        <div class="info">
                            <i class="fas fa-upload"></i>

                            <span>
                                 {{video.created_at | fromatTime}}
                            </span>
                        </div>
                    </b-col>
                    <b-col cols="4">
                        <div class="info">
                            <i class="far fa-clock"></i>
                            <span>
                                {{video.id}}
                            </span>
                        </div>
                    </b-col>
                    <b-col cols="4">
                        <div class="info">
                            <i class="fas fa-eye"></i>
                            <span>
                                {{video.views}}
                            </span>
                        </div>
                    </b-col>
                </b-row>
            </div>
            <b-row v-if="control">
                <b-col cols="12" class="mt-3" >
                        <b-button-toolbar>
                        <b-button-group  class="mx-auto">
                            <b-button variant="outline-primary" >
                                <i class="fas fa-eye"></i>
                            </b-button>
                            <b-button variant="outline-success">
                                <i class="far fa-edit"></i>
                            </b-button>
                            <b-button variant="outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </b-button>
                        </b-button-group>
                        </b-button-toolbar>
                </b-col>
            </b-row>
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
    filters:{
      trimTitle:function(value){
        return value.substr(0,25)
      },
      fromatTime: function(value){
        return moment(value).fromNow()
      }
    }
}
</script>
<style scoped lang="scss">


    .card-body{
        padding: 1rem 1.25rem;
    }
    .card-title{
        font-size:1rem;
        text-align:center;
    }
    .video {
        margin-top:1rem;
        .card-body{
            padding: 0.75rem 1rem;
            a{
                text-decoration: none;
                color:black;
            }
            .card-title{
                margin-bottom:0px
            }
        }
    }
    .info{
        text-align: center;
        font-size: 0.8rem;
         i,span{
        display: block
        }
    }
</style>
