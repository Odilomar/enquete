<template>
    <div>
        <h1>Lista de perguntas</h1>
        <div class="container-fluid">
            <ul class="list-group">
                <li class="list-group-item" v-for="(poll, id) in polls" :key="poll.id">{{poll.poll_description}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            polls: [],
        }
    },
    created() {
        window.axios.get('http://localhost:8000/api/poll')
            .then(resp => {
                this.polls = resp.data
                console.log(resp.data)
            })

    }
}
</script>

<style>

</style>
