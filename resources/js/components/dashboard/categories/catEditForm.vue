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
      <b-form-group
      label="Category Image"
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

  export default {
    mixins: [validationMixin],
    props:['errors', 'cat'],
    mounted(){
      console.log(this.$v.form)
      this.$v.form.name.$model = this.cat.name
      this.$v.form.description.$model = this.cat.description
      this.$v.form.image.$model = this.cat.photos[0].url
    },
    data() {
      return {
        form: {
          name: null,
          description: null,
          image:null,
          file:null,
        },
        fromError:{
          name:'This is a required field and must be between 3 and 20',
          description:'This is a required field and must be between 3 and 50',
          image:'This is required field and must be valid URL'
        }
      }
    },
    methods:{

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
        image:{
          required,
          // url
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
        if (this.errors.description) {
          this.fromError.description = this.errors.description[0]
          return false
        } else if(this.$v.form.description.$dirty)
        {
          return  !this.$v.form.description.$error
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
    },
    filters:{
      imageUrl:function(value){
        return '/storage/categories/'+value
      }
    }
  }
</script>

<style>

</style>
