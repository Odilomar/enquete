import Vue from 'vue'
import Router from "vue-router";
import Enquete from "./components/enquete/Enquete";
import Home from "./components/Home";
import Option from "./components/enquete/Option";
import Votacao from "./components/enquete/Votacao";
import Result from "./components/enquete/Result";

Vue.use(Router)


export default new Router({
    routes: [
        {path: '/enquete', component: Enquete},
        {path: '/', component: Home},
        {path: '/poll/option/:id', component: Option},
        {path: '/votacao/:id', component: Votacao},
        {path: '/resultado', component: Result}
    ]
})
