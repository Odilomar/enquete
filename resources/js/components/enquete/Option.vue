<template>
    <div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="text-center">
                    <h1>Registrar opções da pergunta <strong>{{poll_show.id}} {{poll_show.poll_description}}</strong></h1>
                </div>
                <div class="container-fluid">
                    <form @submit.prevent="store()" enctype="multipart/form-data">
                        <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1">
                                <label class="sr-only" for="inlineFormInputName">Titulo</label>
                                <input type="text" class="form-control" id="inlineFormInputName"
                                       required v-model="option.option_description" placeholder="Informe a respostas">
                            </div>
                            <div class="col-auto my-1">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                    <hr>
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
                            <tr v-for="(option, id) in options" :key="option.id">
                                <th scope="row">{{option.id}}</th>
                                <td>{{option.option_description}}</td>
                                <td>
                                    <button class="btn btn-danger white" @click="destroy(option.id)">Excluir</button>
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
        store() {
            window.axios.post('http://localhost:8000/api/option', this.option)
                .then( () => {
                    this.option.option_description = ''
                    this.poll_id = this.$route.params.id
                        , err => console.log(err)
                    this.index()
                })
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
        destroy(id) {
            window.axios.delete(`http://localhost:8000/api/option/${id}`)
                .then(() => this.index())
        }
    },

    created() {
        this.index()
        this.showPoll()
    }
}
</script>

<style>

</style>
