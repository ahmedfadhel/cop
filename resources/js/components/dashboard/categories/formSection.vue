<template>
  <div>
    <!-- Name Form input Section Start -->
    <b-form-group id="example-input-group-1" label="Category" label-for="name">
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

    <!-- Decription Form input Section Start -->
    <b-form-group id="example-input-group-2" label="Category Description" label-for="description">
      <b-form-textarea
        id="description"
        name="description"
        v-model="$v.form.description.$model"
        placeholder="Enter something..."
        :state="descriptionError"
        aria-describedby="description-feedback"
        rows="3"
        max-rows="6"
      ></b-form-textarea>

      <b-form-invalid-feedback id="description-feedback">
        {{fromError.description}}
      </b-form-invalid-feedback>
    </b-form-group>
    <!-- Decription Form input Section End -->

    <!-- Image Form input Section Start -->
    <!-- <b-form-group id="example-input-group-2" label="Category Image" label-for="image">
      <b-row>
        <b-col sm="6" cols="12">
          <b-form-input
            id="image"
            name="image"
            v-model="$v.form.image.$model"
            placeholder="Category Image"
            :state="$v.form.image.$dirty ? !$v.form.image.$error : null"
            aria-describedby="image-feedback"
          ></b-form-input>
          <b-form-invalid-feedback id="image-feedback">
            {{fromError.image}}
          </b-form-invalid-feedback>
        </b-col>
        <b-col sm="6" cols="12">

          <b-img  blank blank-color="#ccc" width="64" alt="placeholder" v-if="!$v.form.image.$model"></b-img>
          <b-img :src="$v.form.image.$model" fluid alt="Category Image" v-if="$v.form.image.$model"></b-img>
        </b-col>
      </b-row>
    </b-form-group> -->
     <b-form-group
      label="Category Image"
      label-for="image"
    >
      <b-row>
        <b-col sm="6" cols="12">
          <b-form-file
            id="image"
            v-model="form.file"
            placeholder="Choose a file..."
            drop-placeholder="Drop file here..."
            name="image"
            @change="onFileChange"
          ></b-form-file>
        </b-col>
        <b-col sm="6" cols="12">
          <b-img
            v-if="url"
            :src="url"
            fluid alt="Video Image"
          >

          </b-img>
        </b-col>
      </b-row>
    </b-form-group>
    <!-- Image Form input Section End -->

    <b-button type="submit"  variant="outline-primary" :disabled="$v.form.$invalid">Save</b-button>
  </div>
</template>

<script>
import { validationMixin } from 'vuelidate'
  import { required, minLength,maxLength } from 'vuelidate/lib/validators'

  export default {
    mixins: [validationMixin],
    props:['errors'],
    mounted(){
      console.log(this.errors)
    },
    data() {
      return {
        url:null,
        form: {
          name: null,
          description: null,
        },
        fromError:{
          name:'This is a required field and must be between 3 and 20',
          description:'This is a required field and must be between 3 and 50',
        }
      }
    },
    methods:{
      checkErrors(){
        this.$v.form.name.$error = false
      },
      onFileChange(e){
        const file = e.target.files[0];
        this.url = URL.createObjectURL(file);
      }
    },
    validations: {
      form: {
        description: {
          required,
          minLength: minLength(3),

        },
        name: {
          required,
          minLength: minLength(3),
          maxLength: maxLength(20)
        },

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
      descriptionError:function(){
        if(this.$v.form.description.$dirty){
          return  !this.$v.form.description.$error
        }

        if(this.errors.description){
          this.fromError.description = this.errors.description[0]
          return false
        }
        return null
      },
    },

  }
</script>

<style>

</style>
