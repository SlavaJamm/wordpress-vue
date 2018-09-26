<template>
  <div id="app">
    <img src="./assets/logo.png">
    <div>Wordpress and Vue BLOG</div>
    <Posts/>
  </div>
</template>

<script>
import Posts from './components/Posts'

export default {
  name: 'App',
  components: {
    Posts,
  }
}
</script>

<style>
@import url(style/main.css);
</style>
