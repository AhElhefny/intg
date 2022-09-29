import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path:'/',
        name:'home',
        component: () => import('./components/home.vue')
    },
    {
        path:'/posts',
        name:'posts',
        component: () => import('./components/posts.vue')
    },
    {
        path:'/register',
        name:'register',
        component: () => import('./components/register.vue')
    },
    {
        path:'/login',
        name:'login',
        component: () => import('./components/login.vue')
    },
];

const routers = createRouter({
    history:createWebHistory(),
    routes
})

export default routers;
