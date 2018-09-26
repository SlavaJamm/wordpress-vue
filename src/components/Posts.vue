<template>
  <div class="blog-section">
    <div class="post" v-for="post in posts">
      <h1 v-html="post.title.rendered"></h1>   
      <span>{{ post.date }}</span>
      <div v-html="post.content.rendered"></div>
    </div>   
  </div>
</template>

<script>
export default {
  name: 'Posts',
  data () {
    return {
      posts: [],
      postsData: {
        rep_page: 15,
        page: 1
      }
    }
  },
  created: function(){
    this.$http.get('wp/v2/posts', {params: this.postsData}).then(response => {
      for (let post in response.data){
        this.posts.push(response.data[post])
      }
    },
    error => {
      alert(error);
    });
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
