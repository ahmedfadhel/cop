<template>
    <div class="video mt-4">
      <b-card-group>
        <b-card no-body>
          <router-link :to="{ name: 'video', params: { videoSlug: video.slug }}">
          <b-card-img
            :src="video.photos[0].url"
            img-top
            alt="Video Image"
          ></b-card-img>
          </router-link>
          <b-card-body>
            <b-card-title>
              <router-link
                :to="{ name: 'video', params: { videoSlug: video.slug }}"
                v-b-tooltip.hover
                :title="video.title">{{video.title | trimTitle}}</router-link>
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
        return moment(value).fromNow()
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
