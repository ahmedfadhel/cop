<template>
  <div>
    <!-- Name Form input Section Start -->
    <b-form-group

      label="Video Title"
      label-for="title">
      <b-form-input
        id="title"
        name="title"
        v-model="$v.form.title.$model"
        :state="nameError"
        aria-describedby="title-feedback"
        placeholder="Video Title ..."
      ></b-form-input>

      <b-form-invalid-feedback id="title-feeadback">
        {{fromError.title}}
      </b-form-invalid-feedback>
    </b-form-group>
    <!-- Name Form input Section End -->


    <!-- Description Form input Section Start -->
    <b-form-group

      label="Video Description"
      label-for="description">
      <b-form-textarea
        id="description"
        name="description"
        placeholder="Video Description ..."
        v-model="$v.form.description.$model"
        :state="aliaError"
        aria-describedby="description-feedback"
        rows="3"
        max-rows="10"
      ></b-form-textarea>

      <b-form-invalid-feedback id="description-feedback">
        {{fromError.description}}
      </b-form-invalid-feedback>
    </b-form-group>
    <!-- Description Form input Section End -->

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
    <!-- Stars From Input Section Star -->
      <b-form-group
        label="Star "
        label-for="Stars"

      >
      <multiselect
        v-model="valueS"
        :options="stars"
        :multiple="true"
        :close-on-select="false"
        :clear-on-select="false"
        :preserve-search="true"
        placeholder="Pick some Stars"
        label="text"
        track-by="value"
        :preselect-first="true"

      >

      </multiselect>
      <input type="hidden" name="stars[]" :value="starsValue">
      </b-form-group>
    <!-- Stars From Input Section End -->
    <!-- Length Form input Section Start -->
    <b-form-group
      label="Video Length"
      label-for="length"

      >
      <b-form-input
        id="length"
        name="length"
        v-model="$v.form.length.$model"
        :state="legnthError"
        aria-describedby="length-feedback"
        placeholder="Video Length eg(23:23) ..."
      ></b-form-input>

      <b-form-invalid-feedback id="length-feeadback">
        {{fromError.length}}
      </b-form-invalid-feedback>
    </b-form-group>
    <!-- Length Form input Section End -->

    <!-- Servers Form Input Section Start -->
    <b-form-group
      label="Servers"
    >
    <!-- Select Servers Checkbox Section Start -->
      <b-form-checkbox
        id="openload-checkbox"
        v-model="servers.openload"
        value=true
      >
      Openload Server
      </b-form-checkbox>
      <b-form-checkbox
        id="vidlox-checkbox"
        v-model="servers.vidlox"
        value=true

      >
      Vidlox Server
      </b-form-checkbox>
      <b-form-checkbox
        id="verystream-checkbox"
        v-model="servers.verystream"
        value=true

      >
      VersyStream Server
      </b-form-checkbox>
    <!-- Select Servers Checkbox Section End -->
      <b-input-group prepend="Openload" class="mt-3" v-if="servers.openload">
        <b-form-input
          name="servers[openload]"
          value="null"
          v-model="$v.form.servers.openload.$model"
          :state="openloadError"
          aria-describedby="upload-feedback"
          placeholder="Openload Server Link"
        ></b-form-input>
        <b-form-invalid-feedback id="upload-feeadback">
        {{fromError.openload}}
        </b-form-invalid-feedback>
      </b-input-group>
      <b-input-group prepend="Vidlox" class="mt-3" v-if="servers.vidlox">
        <b-form-input
          name="servers[vidlox]"
          v-model="$v.form.servers.vidlox.$model"
          :state="vidloxError"
          aria-describedby="vidlox-feedback"
          placeholder="Vidlox Server Link eg(https://www.vidlox.cc)"
        ></b-form-input>
        <b-form-invalid-feedback id="vidlox-feeadback">
        {{fromError.vidlox}}
        </b-form-invalid-feedback>
      </b-input-group>
      <b-input-group prepend="Verystream" class="mt-3" v-if="servers.verystream">
        <b-form-input
          name="servers[verystream]"
          v-model="$v.form.servers.verystream.$model"
          :state="verystreamError"
          aria-describedby="verystream-feedback"
          placeholder="Verystream Server Link eg(https://www.verystream.cc)"
        ></b-form-input>
        <b-form-invalid-feedback id="verystream-feeadback">
        {{fromError.verystream}}
        </b-form-invalid-feedback>
      </b-input-group>
    </b-form-group>
    <!-- Servers Form Input Section End -->


    <!-- Image Form input Section Start -->
    <b-form-group
      label="Video Image"
      label-for="image">
      <b-row>
        <b-col sm="6" cols="12">
          <b-form-file
          v-model="form.file"
          placeholder="Choose a file..."
          drop-placeholder="Drop file here..."
          name="image"
        ></b-form-file>

        </b-col>
        <b-col sm="6" cols="12">
          <span>Old Image</span>
          <b-img  blank blank-color="#ccc" width="64" alt="placeholder" v-if="!$v.form.image.$model"></b-img>
          <b-img :src="$v.form.image.$model | imageUrl" fluid alt="Star Image" v-if="$v.form.image.$model"></b-img>
        </b-col>
      </b-row>
    </b-form-group>
    <!-- Image Form input Section End -->
    <b-button type="submit"  variant="outline-primary" :disabled="$v.form.$invalid">Save</b-button>
  </div>
</template>

<script>
  import { validationMixin } from 'vuelidate'
  import { required, minLength,maxLength,url } from 'vuelidate/lib/validators'
  import Multiselect from 'vue-multiselect'

  export default {
    mixins: [validationMixin],
    props:['errors','video','tags','cats','stars'],
    mounted(){
      // console.log(this.errors.servers['openload');
      this.$v.form.title.$model = this.video[0].title
      this.$v.form.description.$model = this.video[0].description
      this.valueT = this.video[0].tags
      this.valueC = this.video[0].cats
      this.value = this.video[0].stars
      this.$v.form.length.$model = this.video[0].length
      this.video[0].links.forEach(element=>{
        if(element.server_name === 'openload'){
          this.$v.form.servers.openload.$model = element.url
          this.servers.openload = true
        }
        if(element.server_name === 'vidlox'){
          this.$v.form.servers.vidlox.$model = element.url
          this.servers.vidlox = true
        }
        if(element.server_name === 'verystream'){
          this.$v.form.servers.verystream.$model = element.url
          this.servers.verystream = true
        }
      })
      this.$v.form.image.$model = this.video[0].photos[0].url
      console.log(this.errors)
    },
  components: {
    Multiselect
    },
    data() {
      return {
        valueT: [],
        valueC: [],
        valueS: [],
        valueV:null,
        selectedC:[],
        selectedCats:[],
        servers:{
          openload:false,
          vidlox:false,
          verystream:false
        },
        form: {
          title: null,
          description: null,
          length:null,
          image:null,
          servers:{
            openload:null,
            vidlox:null,
            verystream:null
          }
        },
        fromError:{
          title:'This is a required field and must be between 5 and 100',
          description:'This is a required field and must be between 10 and 250',
          length:'This is a required field',
          image: 'This is a required field and must be a valid URL',
          openload:'This field must be a valid upload URL',
          vidlox:'This field must be a valid upload URL',
          verystream:'This field must be a valid upload URL',
        }
      }
    },
    methods:{
      removeTag(id){
        this.selectedT = this.selectedT.filter(function(value){
          return value != id
        });
      },
      removeCat(id){
        this.selectedC = this.selectedC.filter(function(value){
          return value != id
        });
      },
    },
    validations: {
      form: {
        description: {
          required,
          minLength: minLength(20),

        },
        title: {
          required,
          minLength: minLength(20),
          maxLength: maxLength(100)
        },
        image:{
          required,

        },
        length:{
          required
        },
         servers:{
          openload:{
            url
          },
          vidlox:{
            url
          },
          verystream:{
            url
          },
        }
      }
    },
    computed:{
      nameError:function(){
        if(this.errors.title){
          this.fromError.title = this.errors.title[0]
          return false
        }else if(this.$v.form.title.$dirty)
        {
          return  !this.$v.form.title.$error
        }


        return null
      },
      aliaError:function(){
        if(this.errors.description){
          this.fromError.description = this.errors.description[0]
          return false
        }else if(this.$v.form.description.$dirty){
          return  !this.$v.form.description.$error
        }
        return null
      },
      legnthError:function(){
        if(this.errors.length){
          this.fromError.length = this.errors.length[0]
          return false
        }else if(this.$v.form.length.$dirty){
          return  !this.$v.form.length.$error
        }
        return null
      },
      openloadError:function(){
        if(this.$v.form.servers.openload.$dirty){
          return  !this.$v.form.servers.openload.$error
        }

        if(this.errors.servers['openload']){
          this.fromError.length = this.errors.length[0]
          return false
        }
        return null
      },
      vidloxError:function(){
        if(this.$v.form.servers.vidlox.$dirty){
          return  !this.$v.form.servers.vidlox.$error
        }
        return null
      },
      verystreamError:function(){
        if(this.$v.form.servers.verystream.$dirty){
          return  !this.$v.form.servers.verystream.$error
        }
        return null
      },
      catsSelected:function(){

        let arr = []
        if(this.selectedC.length !== -1){
            this.cats.forEach(element => {
            if(this.selectedC.includes(element.value)){
              arr.push(element)
            }
          });
        }

        return arr
      },
      tagsValues:function(){
        let result = []
        this.valueT.forEach(element => {
          result.push(element.value)
        });
        return result
      },
      catsValue:function(){
        let result = []
        this.valueC.forEach(element => {
          result.push(element.value)
        });
        return result
      },
      starsValue:function(){
        let result = []
        this.valueS.forEach(element => {
          result.push(element.value)
        });
        return result
      },
    },
    filters:{
      imageUrl:function(value){
        return '/storage/videos/'+value
      }
    }

  }
</script>

<style scoped lang="scss">
.custom-control{
  display: inline-block;
  margin-right: 1rem
}
</style>
