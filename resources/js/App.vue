<template>
    <div id="app">
        <NavBar></NavBar>
        <div class="container-fluid">
            Mais um teste
            <router-link to="/">Inicial</router-link>
            <router-link to="/enquete">Enquete</router-link>
            <router-link to="/home">Home</router-link>
            <div class="row">
                <div class="container">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavBar from "./components/NavBar";
import Home from './components/Home'
export default {
    components: {NavBar, Home}
}
</script>

<style scoped>

</style>
