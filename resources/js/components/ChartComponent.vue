<template>
    <div class="small">
        <line-chart :chart-data="datacollection"></line-chart>
        <button @click="fillData()">Randomize</button>
    </div>
</template>
<script>
import LineChart from './LineChart.js'
import { Line, mixins } from 'vue-chartjs'
const { reactiveProp } = mixins

export default {
    components: {
        LineChart
    },
    data(){
        return{
            data:[],
        }
    },
    extends: Line,
    mixins: [reactiveProp],
    props: ['options'],
    mounted() {
// this.chartData is created in the mixin.
// If you want to pass options please create a local options object
        this.renderChart(this.chartData, this.options)
    }
}
</script>

