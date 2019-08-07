<template>
  <div>
    <!-- Name Form input Section Start -->
    <b-form-group
      label="Ablum Title"
      label-for="title">
      <b-form-input
        id="title"
        v-model="$v.form.title.$model"
        name="title"
        :state="titleError"
        aria-describedby="title-feedback"
      ></b-form-input>

      <b-form-invalid-feedback id="title-feeadback">
        {{fromError.title}}
      </b-form-invalid-feedback>
    </b-form-group>
    <!-- Name Form input Section End -->

    <!-- Poster Image Form input Section Start -->
    <b-form-group
      label="Album Poster"
      label-for="poster"
    >
      <b-row>
        <b-col sm="6" cols="12" class="my-auto">
          <b-form-file
            id="poster"
            placeholder="Choose a Poster File..."
            drop-placeholder="Drop file here..."
            v-model="$v.form.poster.$model"
            name="poster"
            @change="onFileChange"
            aria-describedby="poster-feedback"
            :state="posterError"
          ></b-form-file>
          <b-form-invalid-feedback id="poster-feeadback">
            {{fromError.poster}}
          </b-form-invalid-feedback>
        </b-col>
        <b-col sm="6" cols="12" class="my-auto">
          <b-img
            v-if="poster"
            :src="poster "
            fluid alt="Album Poster Image"
            class="img-thumbnail"
            width="200px"
            height="200px"
          >
          </b-img>
        </b-col>
      </b-row>
    </b-form-group>
    <!-- Poster Image Form input Section End -->
    <!-- Tags From Input Section Star -->
      <b-form-group
        label="Tags"
        label-for="tags"

      >
      <multiselect
        v-model="valueT"
        :options="tags"
        :multiple="true"
        :close-on-select="false"
        :clear-on-select="false"
        :preserve-search="true"
        placeholder="Pick some Tags"
        label="text"
        track-by="value"
        :preselect-first="true"
      >

      </multiselect>
      <input type="hidden" name="tags[]" :value="tagsValues">
      </b-form-group>
    <!-- Tags From Input Section End -->
    <!-- Categories From Input Section Star -->
      <b-form-group
        label="Categories"
        label-for="categories"

      >
      <multiselect
        v-model="valueC"
        :options="cats"
        :multiple="true"
        :close-on-select="false"
        :clear-on-select="false"
        :preserve-search="true"
        placeholder="Pick some Category"
        label="text"
        track-by="value"
        :preselect-first="true"
      >

      </multiselect>
      <input type="hidden" name="cats[]" :value="catsValue">
      </b-form-group>
    <!-- Categories From Input Section End -->
    <!-- Albums Image Form input Section Start -->
    <b-row>
      <b-col cols="6">
       <h5>Album Images</h5>
       <hr>

      </b-col>
      <!-- <b-col cols="6">
        <b-button v-b-tooltip.hover title="Add New Image" class="float-right " variant="outline-success" @click="addNewImage()">
          <span >Add</span>
        </b-button>
         <b-button v-b-tooltip.hover title="Add New Image" class="float-right mr-2" variant="outline-danger" @click="removeImage()">
          <span >Remove</span>
        </b-button>
      </b-col> -->

    </b-row>
    <!-- Album image form individully start -->
    <b-row>
      <!-- <b-col cols="12" v-for="input in countImages" :key="input">
        <image-fields :old="album.photos[input-1]" :album="album.id"></image-fields>
      </b-col> -->
      <b-col cols="12">
        <image-fields></image-fields>
      </b-col>
    </b-row>
    <hr>
    <b-row>
      <b-col cols="12">
        <h5>Old Images</h5>
      </b-col>
      <b-col cols="2" v-for="(image,index) in album.photos" :key="index">
        <img :src="image.url | imageUrl(album.id)" width="200px" height="200px" class="img-thumbnail">
      </b-col>
    </b-row>
    <!-- Album image form individully start -->

    <b-button type="submit"  variant="outline-primary" :disabled="$v.form.$invalid" class="mt-4">Save</b-button>
  </div>
</template>

<script>
  import { validationMixin } from 'vuelidate'
  import { required, minLength,maxLength,url } from 'vuelidate/lib/validators'
  import imageFields from './imageFields'
  import Multiselect from 'vue-multiselect'
export default {
  mixins: [validationMixin],
  props:['album','tags','cats','errors'],
  mounted() {
    console.log(this.album)
    this.$v.form.title.$model = this.album.title
    this.poster = '/storage/posters/'+this.album.poster
    this.valueT = this.album.tags
    this.valueC = this.album.cats
    // this.countImages = this.album.photos.length
  },
  components:{
    imageFields,
    Multiselect
  },
  data() {
    return {
      valueC: [],
      valueT: [],
      countImages:0,
      poster:null,
      form: {
          title:  null,
          poster: null,
        },
        fromError:{
          title:'This is a required field and must be between 2 and 10',
          poster: 'This is a required field',

        }
    }
  },
  validations: {
    form: {
      title: {
        required,
        minLength: minLength(3),
        maxLength: maxLength(30)
      },
      poster:{
        required
      }

    }
  },
  methods: {
    onFileChange(e){
      const file = e.target.files[0];
      this.poster = URL.createObjectURL(file);
    },
    addNewImage(){
      this.countImages  = this.countImages + 1
    },
    removeImage(){
      this.countImages = this.countImages - 1
    }
  },
  computed:{
    titleError:function(){
      if(this.$v.form.title.$dirty){
        return  !this.$v.form.title.$error
      }
      if(this.errors.title){
        this.fromError.title = this.errors.title[0]
        return false
      }
      return null
    },
    posterError:function(){
      if(this.$v.form.poster.$dirty){
          return  !this.$v.form.poster.$error
      }
      if(this.errors.poster){
        this.fromError.poster = this.errors.poster[0]
        return false
      }
      return null
    },
    catsValue:function(){
      let result = []
      this.valueC.forEach(element => {
        result.push(element.value)
      });
      return result
    },
    tagsValues:function(){
      let result = []
      this.valueT.forEach(element => {
        result.push(element.value)
      });
      return result
    },
  },
  filters:{
    posterUrl:function(value){
      return '/storage/posters/'+value
    },
    imageUrl:function(value,id){
      return '/storage/albums/'+id+'/'+value
    }
  }
}
</script>

<style>

</style>
