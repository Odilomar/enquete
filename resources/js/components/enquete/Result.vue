<template>
    <div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="text-center">
                    <h1>Resultado das pesquisas</h1>
                </div>
                <div class="container-fluid " v-for="(poll, id) in polls" :key="poll.id">
                    <hr>
                    <div>
                        <h2>{{poll.poll_description}}</h2>
                    </div>
                    <div class="container-fluid">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Respostas</th>
                                <th scope="col">Quantidade votada</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(option, id) in poll.options" :key="option.id">
                                <th scope="row">{{option.id}}</th>
                                <td>{{option.option_description}}</td>
                                <td class="text-center">{{option.amount}}</td>
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
            polls: []
        }
    },
    methods: {

        index() {
            window.axios.get('http://localhost:8000/api/polls')
                .then(resp => {
                    this.polls = resp.data
                })
        }
    },

    created() {
        this.index()
    }
}
</script>

<style>

</style>
