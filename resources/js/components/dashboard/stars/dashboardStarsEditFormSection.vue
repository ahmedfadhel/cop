<template>
  <div>
    <!-- Name Form input Section Start -->
    <b-form-group
      label="Star Name"
      label-for="name">
      <b-form-input
        id="name"
        name="name"
        v-model="$v.form.name.$model"
        :state="nameError"
        aria-describedby="name-feedback"
      ></b-form-input>

      <b-form-invalid-feedback id="name-feeadback">
        {{fromError.name}}
      </b-form-invalid-feedback>
    </b-form-group>
    <!-- Name Form input Section End -->

    <!-- Alias Name Form input Section Start -->
    <b-form-group
      label="Star Alias Name"
      label-for="alias">
      <b-form-input
        id="alias"
        name="alias"
        v-model="$v.form.aliasName.$model"
        :state="aliaError"
        aria-describedby="alias-feedback"
      ></b-form-input>

      <b-form-invalid-feedback id="alias-feedback">
        {{fromError.aliasName}}
      </b-form-invalid-feedback>
    </b-form-group>
    <!-- Alias Name Form input Section End -->
    <!-- Gender Section Star -->
    <b-form-group label="Star Gender">
      <b-form-radio-group
        v-model="$v.form.gender.$model"
        name="gender"
        :options="genderOptions"
        :state="genderError"
        aria-describedby="gender-feedback"
      >
       <b-form-invalid-feedback id="gender-feedback" :state="genderError">
        {{fromError.gender}}
      </b-form-invalid-feedback>
      </b-form-radio-group>

    </b-form-group>
    <!-- Gender Section End -->
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

    <b-button type="submit"  variant="outline-primary" :disabled="$v.form.$invalid">Update</b-button>
  </div>
</template>

<script>
import { validationMixin } from 'vuelidate'
  import { required, minLength,maxLength } from 'vuelidate/lib/validators'

  export default {
    mixins: [validationMixin],
    props:['errors','star'],
    mounted(){
      console.log(this.$v)
      this.$v.form.name.$model = this.star.name
      this.$v.form.aliasName.$model = this.star.alias_name
      this.$v.form.gender.$model = this.star.gender
      this.$v.form.image.$model = this.star.photos[0].url
    },
    data() {
      return {
        genderOptions:[
          {text: 'Male', value:'male'},
          {text: 'Female', value:'female'},
        ],
        form: {
          name: null,
          aliasName: null,
          image:null,
          gender:null,
        },
        fromError:{
          name:'This is a required field and must be between 3 and 30',
          aliasName:'This field must be between 3 and 30',
          image: 'This is a required field and must be a valid URL',
          gender: 'This is a required field'
        }
      }
    },
    methods:{

    },
    validations: {
      form: {
        aliasName: {
          minLength: minLength(3),
          maxLength: maxLength(20)
        },
        name: {
          required,
          minLength: minLength(3),
          maxLength: maxLength(20)
        },
        image:{
          required,
        },
        gender:{
          required,

        }
      }
    },
    computed:{
      nameError:function(){
        if (this.errors.name) {
          this.fromError.name = this.errors.name[0]
          return false
        } else if(this.$v.form.name.$dirty)
        {
          return  !this.$v.form.name.$error
        }

        return null
      },
      aliaError:function(){
        if (this.errors.alias) {
          this.fromError.aliasName = this.errors.alias[0]
          return false
        } else if(this.$v.form.aliasName.$dirty)
        {
          return  !this.$v.form.aliasName.$error
        }

        return null
      },
      imageError:function(){
        if (this.errors.image) {
          this.fromError.image = this.errors.image[0]
          return false
        } else if(this.$v.form.image.$dirty)
        {
          return  !this.$v.form.image.$error
        }
        return null
      },
      genderError:function(){
        if (this.errors.gender) {
          this.fromError.gender = this.errors.gender[0]
          return false
        } else if(this.$v.form.gender.$dirty)
        {
          return  !this.$v.form.gender.$error
        }
        return null
      },
    },
    filters:{
      imageUrl:function(value){
        return '/storage/stars/'+value
      }
    }
  }
</script>

<style>

</style>
