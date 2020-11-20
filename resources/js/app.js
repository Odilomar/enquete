require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import axios from 'axios'
import App from './App.vue'
import router from './routes'

const app = new Vue({
    router,
    render: h => h(App),
}).$mount('#app');
