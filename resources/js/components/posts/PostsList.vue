<template>
<section>
    <div class="card" style="width: 18rem;">
  <img src="" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
          // console.log(res);
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