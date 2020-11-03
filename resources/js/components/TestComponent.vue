<template>
    <div>
    <h1 class="text-gray-500 text-3xl">TestComponent for Articles</h1>
    <ul>
        <AriclesItemComponent
            v-for="article in articles"
            v-bind:key="article.id"
            v-bind:article="article"
        />
    </ul>
    </div>

</template>
<script>
    import AriclesItemComponent from "./AriclesItemComponent";
    export default{
        components: {AriclesItemComponent},
        props:[
            'articles'
        ]
    }
</script>
