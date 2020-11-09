<template>
    <div>
        <h1 class="text-gray-500 text-3xl">Line Grafic</h1>
        <p>{{data}}</p>
        <line-chart :chart-data="data" :height="100" :option="{responsive: true, maintainAspectRation: true}"></line-chart>
        <button
            v-on:click="update"
            class="btn-outline-info py-2 px-4 bg-blue-400">
            Обновить график
        </button>
    </div>

</template>

<script>
import LineChart from './LineChart'

export default {
    components: {
        LineChart
    },
    data() {
        return {
            data: [],
        }
    },
    mounted() {
        this.update()
    },

    methods: {
        update() {
            axios.get('/get-json-for-chart').then((response) => {
                this.data = response.data
            });

        }
    }
}
</script>
