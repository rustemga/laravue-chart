<template>
    <div>
        <h1 class="text-gray-500 text-3xl">Socket</h1>
        <p>{{data}}</p>
        <line-chart :chart-data="data" :height="100" :option="{responsive: true, maintainAspectRation: true}"></line-chart>
        <input type="checkbox" v-model="realtime">realtime
        <input type="text" v-model="label">
        <input type="text" v-model="sale">
        <button class="btn-outline-info py-2 px-4 bg-blue-400" @click="sendData">Update</button>
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
            realtime: false,
            label: "",
            sale: 500,
        }
    },
    mounted() {
        let socket = io('http://localhost:3000');
        socket.on('socket-action-chanel:App\\Events\\NewEvent', function (data){
            this.data = data.result;
        }.bind(this));
        this.update();
    },

    methods: {
        update() {
            axios.get('/get-socket-chart').then((response) => {
                this.data = response.data
            });

        },
        sendData(){
            axios({
                method: 'get',
                url: '/get-socket-chart',
                params: {
                    label: this.label,
                    sale: this.sale,
                    realtime: this.realtime
                }
            }).then((response) => {
                this.data = response.data
            });
        }
    }
}
</script>
