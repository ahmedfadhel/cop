<template>

        <b-form-group
          label="Image "
          label-for="images"
        >
          <b-row>
            <b-col cols="12">
              <b-form-file
                id="images"
                placeholder="Choose an Album Image..."
                name="images[]"
                @change="onFileChange"
                multiple
                v-model="$v.image.$model"
                aria-describedby="image-feedback"
                :state="error"
              ></b-form-file>
              <b-form-invalid-feedback id="image-feeadback">
                {{imageError}}
              </b-form-invalid-feedback>
            </b-col>
            <b-col cols="2" class="mt-4"  v-for="(img,index) in currentUrl"
                :key="index">
              <b-img

                class="img-thumbnail"
                width="200px"
                height="200px"
                :src="img.image"
                fluid alt="Album Image"
              >

              </b-img>
              <span  @click="removeMe(img.name)">x</span>
            </b-col>
          </b-row>
        </b-form-group>
</template>

<script>
import { validationMixin } from 'vuelidate'
import { required} from 'vuelidate/lib/validators'
export default {
  mixins: [validationMixin],
  mounted() {
  },
  props:['old','album'],
  data() {
    return {
      url:[],
      image:null,
      imageError:'This is required field'
    }
  },
  validations:{
    image:{
      required
    }
  },
  computed:{
    error:function(){
      if(this.$v.image.$dirty){
          return  !this.$v.image.$error
        }
        return null
      },
    currentUrl:function(){
      if(this.old && this.url.legnth !== 0){
        return '/storage/albums/'+this.album+'/'+this.old.url
      }else{
        return this.url
      }
    }
  },
  methods: {
    onFileChange(e){
        Array.from(e.target.files).forEach(file => {
          this.url.push({
            name:file.name,
            image:URL.createObjectURL(file)
          })
      });
    },
    removeMe(name){
      console.log(this.url)
      console.log(document.getElementById('images').files)
    }
  },
}
</script>

<style scope lang="scss">
  .custom-file{
    overflow: hidden;
  }
  span{
    cursor: pointer;
  }
</style>
