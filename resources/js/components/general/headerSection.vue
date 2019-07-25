<template>
    <b-navbar toggleable="sm" variant="info">
      <div class="container">
        <b-navbar-brand href="/">
          <img src="/images/logo2.png" alt="Pornezium.com">
        </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="ml-auto">
          <b-nav-item to="/" active-class="active" exact>Videos</b-nav-item>
          <b-nav-item to="/pornstars" active-class="active" >Pornstars</b-nav-item>
          <b-nav-item to="/category" active-class="active" exact>Category</b-nav-item>
          <b-nav-item to="/tags" active-class="active" exact>Tags</b-nav-item>
        </b-navbar-nav>
      </b-collapse>
      </div>
    </b-navbar>
</template>

<script>
export default {

}
</script>
