<template>
<main>
    <router-view></router-view>
</main>
</template>

<script>
import PostsList from "./posts/PostsList.vue";
    export default {
        name: "ExampleComponent",
        components:{
            PostsList,
        },
    };

</script>
