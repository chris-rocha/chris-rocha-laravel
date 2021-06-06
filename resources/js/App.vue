<template>
  <div id="app">
<header id="header" class="landing-max-width">
  <div class="container">
    <h1>Chris Rocha</h1>
    <ul class="menu">
      <li v-for="(route, i) in routes" :key="i"><router-link :to="{name:route.name}">{{ route.name }}</router-link></li>
    </ul>
  </div>
</header>

<main id="content" role="main" class="landing-max-width">
<div class="container">
<transition appear name="animate" mode="out-in">
    <router-view/>
</transition>
</div>
</main>

<footer id="footer" class="landing-max-width">
  <div class="container">
      <hr />
      <ul class="footer-menu clearfix">
      <li v-for="(route, i) in routes" :key="i"><router-link :to="{name:route.name}">{{ route.name }}</router-link></li>
      </ul>
      <p class="legal">© {{ currentYear }} chrisrocha.com</p>
  </div> <!--close sitewrap-->
</footer> <!--close footer-->

    </div>
</template>

<script>
const d = new Date();
const n = d.getFullYear();

export default {
  name: 'App',
  data: function() {
    return {
    //   pageData: Settings,
      currentYear: n
    }
  },
  computed: {
      routes() {
          return this.$router.options.routes.filter(route => route.name != 'NotFound');
      }
  }
}
</script>
