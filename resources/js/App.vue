<template>
    <div id="app">
        <NavBar></NavBar>
        <div class="row">
            <div class="container-fluid">
                <router-view></router-view>
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
