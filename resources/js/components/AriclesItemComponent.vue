<template>
<li>{{article.title}}
    <p class="text-xs w-1/2 text-center m-auto">{{article.body}}</p>
</li>
</template>
<script>
    export default{
        props:['article']
    }
</script>
