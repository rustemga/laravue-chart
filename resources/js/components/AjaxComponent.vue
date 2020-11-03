<template>
    <div class="mb-4">
        <hr>
        <h1 class="text-gray-500 text-3xl">Ajax Component</h1>
        <button
            v-on:click="update"
            class="btn-outline-info py-2 px-4 bg-blue-400"
            v-if="!is_refresh">Refresh - {{id}}
        </button>
        <Loader v-if="is_refresh"/>
        <ul>
            <AriclesItemComponent
                v-for="(article, i) in ajaxData"
                v-bind:key="article.id"
                v-bind:article="article"
            />
        </ul>
    </div>
</template>

<script>
    import Loader from "./Loader";
    import AriclesItemComponent from "./AriclesItemComponent";
    export default {
        components: {AriclesItemComponent, Loader},
        data(){
            return{
                ajaxData:[],
                is_refresh: false,
                id: 0
            }
        },
        methods: {
            update(){
                this.is_refresh = true
                axios.get('/get-json').then((response) => {
                    console.log(response)
                    this.ajaxData = response.data
                    this.is_refresh = false
                    this.id++

                });
            }
        },
        computed: {
        }
    }
</script>
