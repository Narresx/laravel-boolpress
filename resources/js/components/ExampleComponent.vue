<template>
<main>
    <div class="container mx-auto">
        <PostsList />
    </div>
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
