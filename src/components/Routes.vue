<template>
  <div class="nav-bar">
    <div v-for="page in pages">
      <a :href="page.title.rendered">{{page.title.rendered}}</a>
    </div> 
  </div>
</template>

<script>
export default {
  name: 'Routes',
  data () {
    return {
      pages: []
    }
  },
  created: function(){
    this.$http.get('wp/v2/pages').then(response => {
        for (let page in response.data) {
            this.pages.push(response.data[page])
        }        
        this.pages.sort((a, b) => a.menu_order > b.menu_order)
    },
    error => {
      alert(error);
    });
  }
}
</script>
