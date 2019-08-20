<template>
    <div class="video mt-4">
      <b-card-group>
        <b-card no-body>
            <a :href="`/videos/${video.slug}`">
              <v-lazy-image
              :src="`/videos/img300/${video.photos[0].url}`"
              :src-placeholder="`/videos/img150/${video.photos[0].url}`"
              class="card-img"
              :alt="video.title"
              />
            </a>
          <b-card-body>
            <b-card-title>
              <a :href="`/videos/${video.slug}`">{{video.title}}</a>
            </b-card-title>
          </b-card-body>

          <div slot="footer">
              <ul class="info">
                <li class="info_item">
                  <span class="icon-clock"></span>
                  <span>
                    {{video.length | removeHour}}
                  </span>
                </li>
                <li class="info_item">
                  <span class="icon-eye"></span>
                  <span>
                    {{video.views}}
                  </span>
                </li>
                <li class="info_item">
                  <span class="icon-upload2"></span>
                  <span>
                    {{video.created_at | fromatTime}}
                  </span>
                </li>
              </ul>

          </div>
        </b-card>
        </b-card-group>
    </div>
</template>

<script>
const VLazyImage = ()=> import('v-lazy-image')
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
      },
      displayVideo(value){
        this.$store.dispatch('displayVideoUrl',value)
      }

    },
    computed:{
      baseUri:function(){
        return this.$store.getters.getBaseUri
      }
    },
    filters:{
      trimTitle:function(value){
        return value.substr(0,50)
      },
      fromatTime: function(value){
        return moment(value).fromNow()
      },
      removeHour:function(value){
        let newvalue = value.split(':');
        if(parseInt(newvalue[0])){
          return moment.duration(value).hours() + 'h'
        }
        return moment.duration(value).minutes()+ 'm'
      },
      imageUrl:function(value){
        return 'storage/videos/'+value
      },
      imageUrlSmall:function(value){
        return '/videos/img128/'+value
      },
    },
    components:{
      VLazyImage
    }
}
</script>

