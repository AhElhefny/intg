<template>
    <input type="text" placeholder="name" v-model="user.name"/><br />
    <input type="email" placeholder="email" v-model="user.email" /><br />
    <input type="password" placeholder="password" v-model="user.password"/><br />
    <input type="password" placeholder="confirm password" v-model="user.confirmation"/><br />
    <button type="button" @click.prevent="storeUser"> register</button>
</template>

<script>
import axios from "axios";

export default {
    name: "register",
    data(){
        return{
            user:{
                name:'',
                email:'',
                password:'',
                confirmation:'',
            }
    }
    },
    methods:{
        storeUser(){
            axios.post('/api/user/store',this.user).then((data)=>{
                if (data.data.msg == 'success'){
                    this.$router.push("/login")
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
