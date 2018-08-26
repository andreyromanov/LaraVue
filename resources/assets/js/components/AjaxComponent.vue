<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <button @click="update" class="btn btn-success" v-if="!is_refresh">Count - {{id}} ...</button>
                <span class="badge badge-primary" v-if="is_refresh">Refreshing ...</span>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Url</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  v-for="url in urldata">
                            <td>{{url.title}}</td>
                            <td>{{url.url}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                urldata: [],
                is_refresh: false,
                id: 0
            }
        },

        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                axios.get('/start/get-json').then((response)=>{
                    console.log(response)
                    this.urldata = response.data
                    this.is_refresh = false
                    this.id++
                });

                
            }
        }
    }
</script>
