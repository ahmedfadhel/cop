<template>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">

      <img
          src="images/404page.png"
          class="img-fluid mb-4"
          center

        />
      </div>
    </div >
  </div>
</template>

<script>
export default {
  mounted() {
    this.showCom()
  },
  methods: {
    showCom(){
        this.appear = true;
        let ele = document.querySelector('.loader')
        if(ele){
          ele.parentNode.removeChild(ele)
        }
      }
  },

}
</script>

<style scoped lang="scss">

</style>
