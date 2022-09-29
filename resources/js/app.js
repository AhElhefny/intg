import './bootstrap';
import routers from "./router";
import { createApp } from 'vue';
import app from './components/app.vue'

createApp(app).use(routers).mount('#app');
