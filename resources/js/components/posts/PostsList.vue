<template>
<section class="row">
    <div v-for="post in posts" :key="post.id" class="card col-4" style="width: 18rem;">
  <img src="" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{post.title}}</h5>
    <p class="card-text">{{post.content}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</section>
  
</template>

<script>
export default {
name: 'PostsList',
data (){
    return {
        posts: [],
        };
},
methods: {
    getPosts(){
        axios.get("/api/posts")
        .then((res)=>{
            this.posts = res.data.results;
        })
        .catch((err)=>{
            console.error(err);
        })
        .then(()=>{
            console.log('Chiamata terminataS');
        })
    }

},
mounted() {
    this.getPosts();
}
}
</script>

<style>

</style>