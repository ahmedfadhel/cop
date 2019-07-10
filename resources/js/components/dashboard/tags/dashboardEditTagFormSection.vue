<template>
  <div>
    <!-- Name Form input Section Start -->
    <b-form-group id="example-input-group-1" label="Tags" label-for="name">
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
    <b-form-group id="example-input-group-2" label="Tags Description" label-for="description">
      <b-form-textarea
        id="description"
        name="description"
        v-model="$v.form.description.$model"
        placeholder="Enter Tag Description..."
        :state="descriptionError"
        aria-describedby="description-feedback"
        rows="3"
        max-rows="10"
      ></b-form-textarea>

      <b-form-invalid-feedback id="description-feedback">
        {{fromError.description}}
      </b-form-invalid-feedback>
    </b-form-group>
    <!-- Decription Form input Section End -->


    <b-button type="submit"  variant="outline-primary" :disabled="$v.form.$invalid">Save</b-button>
  </div>
</template>

<script>
import { validationMixin } from 'vuelidate'
  import { required, minLength,maxLength,url } from 'vuelidate/lib/validators'

  export default {
    mixins: [validationMixin],
    props:['errors','tag'],
     mounted(){
       console.log(this.errors)
      this.$v.form.name.$model = this.tag.name
      this.$v.form.description.$model = this.tag.description
    },
    data() {
      return {
        form: {
          name: null,
          description: null,
        },
        fromError:{
          name:'This is a required field and must be between 2 and 10',
          description:'This is a required field and must be between 3 and 50',
        }
      }
    },
    methods:{
      checkErrors(){
        this.$v.form.name.$error = false
      }
    },
    validations: {
      form: {
        description: {
          required,
          minLength: minLength(3),
          maxLength: maxLength(50)
        },
        name: {
          required,
          minLength: minLength(2),
          maxLength: maxLength(20)
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
      descriptionError:function(){
        //
        if (this.errors.description) {
          this.fromError.description = this.errors.description[0]
          return false
        } else if(this.$v.form.description.$dirty)
        {
          return  !this.$v.form.description.$error
        }
        return null
      }
    }
  }
</script>

<style>

</style>
