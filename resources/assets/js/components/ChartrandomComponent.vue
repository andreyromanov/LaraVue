<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <line-chart :chart-data="data" :height="200" :options="{responsive: true, maintainAspectRation: true}"></line-chart>
                <button @click="update">Update</button>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'
    
    export default {
        components: {
            LineChart
        },

        data: function() {
            return {
                data: [],
            }
        },

        mounted() {
            this.update()
        },
        
        methods: {
            update: function() {
                axios.get('/start/random-chart').then((response)=>{
                    this.data = response.data
                });

                
            }
        }
    }
</script>
