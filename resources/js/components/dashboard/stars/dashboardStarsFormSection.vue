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
      <b-form-radio v-model="$v.form.gender.$model" name="gender" value="male">Male</b-form-radio>
      <b-form-radio v-model="$v.form.gender.$model" name="gender" value="female">Female</b-form-radio>
    </b-form-group>
    <!-- Gender Section End -->
    <!-- Image Form input Section Start -->
    <b-form-group
      label="Star Image"
      label-for="image">
      <b-row>
        <b-col sm="6" cols="12">
          <b-form-input
            id="image"
            name="image"
            v-model="$v.form.image.$model"
            placeholder="Star Image"
            :state="$v.form.image.$dirty ? !$v.form.image.$error : null"
            aria-describedby="image-feedback"
          ></b-form-input>
          <b-form-invalid-feedback id="image-feedback">
            {{fromError.image}}
          </b-form-invalid-feedback>
        </b-col>
        <b-col sm="6" cols="12">

          <b-img  blank blank-color="#ccc" width="64" alt="placeholder" v-if="!$v.form.image.$model"></b-img>
          <b-img :src="$v.form.image.$model" fluid alt="Star Image" v-if="$v.form.image.$model"></b-img>
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

  export default {
    mixins: [validationMixin],
    props:['errors'],
    mounted(){
      console.log(this.$v)
    },
    data() {
      return {
        form: {
          name: null,
          aliasName: null,
          image:null,
          gender:null,
        },
        fromError:{
          name:'This is a required field and must be between 2 and 10',
          aliasName:'This is a required field and must be between 3 and 50',
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
          required,
          minLength: minLength(3),
          maxLength: maxLength(30)
        },
        name: {
          required,
          minLength: minLength(3),
          maxLength: maxLength(30)
        },
        image:{
          required,
          url
        },
        gender:{
          required
        }
      }
    },
    computed:{
      nameError:function(){
        if(this.$v.form.name.$dirty){
          return  !this.$v.form.name.$error
        }

        if(this.errors.name){
          this.fromError.name = this.errors.name[0]
          return false
        }
        return null
      },
      aliaError:function(){
        if(this.$v.form.aliasName.$dirty){
          return  !this.$v.form.aliasName.$error
        }

        if(this.errors.alias){
          this.fromError.aliasName = this.errors.alias[0]
          return false
        }
        return null
      }
    }
  }
</script>

<style>

</style>
