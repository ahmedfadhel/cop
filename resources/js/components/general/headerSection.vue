<template>
    <b-navbar toggleable="md" variant="info">
      <div class="container">
        <b-navbar-brand href="/">
          <img src="/images/logo2.png" alt="Pornezium.com">
        </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="ml-auto">
          <b-nav-item href="/" active-class="active">Videos</b-nav-item>
          <b-nav-item href="/pornstars" active-class="active">Pornstars</b-nav-item>
          <b-nav-item href="/albums" active-class="active">Photos</b-nav-item>
          <b-nav-item href="/category" active-class="active">Category</b-nav-item>
          <b-nav-item href="/tags" active-class="active">Tags</b-nav-item>
        </b-navbar-nav>
      </b-collapse>
      </div>
    </b-navbar>
</template>

<script>
export default {
  mounted() {
    switch (window.location.href.split('/')[3]) {
      case '':
        document.querySelectorAll('.nav-link')[0].classList.add('active')
        break;
      case 'videos':
        document.querySelectorAll('.nav-link')[0].classList.add('active')
        break;
      case 'pornstars':
        document.querySelectorAll('.nav-link')[1].classList.add('active')
        break;
      case 'albums':
        document.querySelectorAll('.nav-link')[2].classList.add('active')
        break;
      case 'category':
        document.querySelectorAll('.nav-link')[3].classList.add('active')
        break;
      case 'tags':
        document.querySelectorAll('.nav-link')[4].classList.add('active')
        break;
      default:
        break;
    }
  },
}
</script>
