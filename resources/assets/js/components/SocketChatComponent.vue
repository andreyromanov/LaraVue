<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea rows="6" readonly class="form-control">{{dataMessages.join('\n')}}</textarea>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" v-model="message">
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary" @click="sendMessage">Send</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data: function() {
            return {
               dataMessages: [],
               message: "",
           }
       },

       mounted() {
        var socket = io('http://localhost:3000');
        socket.on("news-action:App\\Events\\NewMessage", function(data){
            this.dataMessages.push(data.message);
        }.bind(this));
    },

    methods: {
        sendMessage: function() {
            axios({
                method: 'get',
                url: '/start/send-message',
                params: { message: this.message}
            }).then((response)=>{
                this.message = "";
            });
        }
    }
}
</script>
