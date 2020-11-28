<template>
    <div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="text-center">
                    <h1>Faça sua Votação </h1>
                    <h2><strong>{{poll_show.poll_description}}</strong></h2>
                </div>
                <div class="container-fluid">

                    <hr>
                    <div class="container-fluid">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Respostas</th>
                                <th scope="col">Quantidade votada</th>
                                <th scope="col">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(option, id) in options" :key="option.id">
                                <th scope="row">{{option.id}}</th>
                                <td>{{option.option_description}}</td>
                                <td class="text-center">{{option.amount}}</td>
                                <td>
                                    <button class="btn btn-success white" @click="votacao(option.id)">Registrar seu voto</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            option: {
                option_description: '',
                poll_id: this.$route.params.id
            },
            options: [],
            poll_id: this.$route.params.id,
            poll_show: []
        }
    },
    methods: {

        views() {
            window.axios.get(`api/poll/${this.poll_id}`).then()
        },
        index() {
            window.axios.get(`api/options/${this.poll_id}`)
                .then(resp => {
                    this.options = resp.data
                })
        },
        showPoll() {
            window.axios.get(`http://localhost:8000/api/poll/${this.poll_id}`)
                .then(resp => {
                    this.poll_show = resp.data
                })
        },
        votacao(id) {
            console.log(id)
            window.axios.get(`http://localhost:8000/api/votacao/${id}`)
                .then(
                    () => this.index()
                )
        }
    },

    created() {
        this.index()
        this.showPoll()
        this.views()
    }
}
</script>

<style scope>

</style>
