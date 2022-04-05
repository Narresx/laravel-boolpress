<template>
<div class="container">
    <h3>Dettaglio Post</h3>
<div class="card col-4" style="width: 18rem;">
            <img src="" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">{{post.title}}</h5>
        <p class="card-text">{{post.content}}</p>
        <router-link :to="{name:'post-detail', params: {id: post.id }}" class="btn btn-primary">Details</router-link>
    </div>
</div>
</div>
</template>

<script>
export default {
name:"PostDetailPage",
methods: {
    getPost(){
        axios.get("/api/posts/" + this.route.results.id)
        .then((res)=>{
            this.posts = res.data.results;
        })
        .catch((err)=>{
            console.error(err);
        })
        .then(()=>{
            console.log('Chiamata terminata');
        })
    }

},
mounted() {
    this.getPost();
},
}
</script>

<style>

</style>