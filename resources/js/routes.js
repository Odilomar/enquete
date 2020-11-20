import Vue from 'vue'
import Router from "vue-router";
import Enquete from "./components/enquete/Enquete";
import Home from "./components/Home";

Vue.use(Router)


export default new Router({
    routes: [
        {path: '/enquete', component: Enquete},
        {path: '/', component: Home}
    ]
})
