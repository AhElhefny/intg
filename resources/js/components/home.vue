<template>
    {{welcomeMessage}}
    <router-link to="posts">GO TO Your Posts</router-link>
    <input v-model="welcomeMessage">
    <br>
    <h1 v-for="user in users">{{user.name}}</h1>
</template>

<script>
import axios from "axios";
export default {
    name: "home",
    data(){
        return{
            welcomeMessage:'Hi MAN',
            users:[]
        }
    },
    methods:{
        getUsers(){
            axios.get('/api/user').then((data) =>{
                this.users = data.data.data
            }).catch((err) => {
                console.log(err)
            })
        }
    },
    created() {
        this.getUsers()
    }
}
</script>

<style scoped>

</style>
