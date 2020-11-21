<template>
    <div>
        <h1>Lista de perguntas</h1>
        <div class="container-fluid">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Respostas</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(poll, id) in polls" :key="poll.id">
                    <th scope="row">{{poll.id}}</th>
                    <td>{{poll.poll_description}}</td>
                    <td>
                        <router-link :to="`votacao/${poll.id}`">
                            <button class="btn btn-success">Fazer sua votaçao</button>
                        </router-link>
                    </td>
                </tr>
                </tbody>
            </table>
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
            })
    }
}
</script>

<style>

</style>
