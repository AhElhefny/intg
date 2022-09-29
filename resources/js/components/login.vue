<template>
<input type="text" placeholder="email" v-model="user.email" /><br />
    <input type="password" placeholder="password" v-model="user.password"><br />
    <button type="button" @click.prevent="userLogin"> login </button>
</template>

<script>
import axios from "axios";

export default {
    name: "login",
    data(){
        return{
          user:{
              email:'',
              password:''
          }
        }
    },
    methods:{
        userLogin(){
            axios.post('/api/user/login',this.user);
        }
    }
}
</script>

<style scoped>

</style>
