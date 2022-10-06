<template>
    <div class="index">
        <h5>data: {{info}}</h5>
        <h5>update: {{msg}}</h5> 
       <br>
       <button class="btn btn-primary m-1" @click="send();" style="width: 200px;">Send</button>
    </div>
</template>
<script>
import axios from "axios"
export default {
    data() {
        return {
            msg: "ni update",
            info: "ni data"
        }
    },
  mounted () {
    axios
      .get('/testget')
      .then(response => {
        this.info = response.data;
        console.log(response.data);
      })
  },
  methods: {
      send(){
        let Data = JSON.stringify({
            post_id : 54
        });
        axios.patch('/push',Data,{
            headers:{"Content-Type":"application/json"}
        }).then(response => {
            this.msg = response.data.created_at
            alert("new : " + response.data.created_at);
        });
      }
  }
}
</script>
<style>
    .index{
        width: 100%;
        height: 50vh;
        display: grid;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    .index h5{
        color: rgb(128, 0, 87);
    }
</style>