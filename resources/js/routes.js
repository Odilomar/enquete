import Vue from 'vue'
import Router from "vue-router";
import Enquete from "./components/Enquete";
import Home from "./components/Home";

Vue.use(Router)


export default new Router({
    routes: [
        {path: '/enquete', component: Enquete},
        {path: '/home', component: Home}
    ]
})
