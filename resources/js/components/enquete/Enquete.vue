<template>
    <div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="container-fluid">
                    <form @submit.prevent="store()" enctype="multipart/form-data">
                        <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1">
                                <label class="sr-only" for="inlineFormInputName">Titulo</label>
                                <input type="text" class="form-control" id="inlineFormInputName" required v-model="poll.poll_description" placeholder="Informe o titulo">
                            </div>
                            <div class="col-auto my-1">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="container-fluid">
                        <pollList></pollList>
                    </div>
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</template>

<script>

import Poll from "../../model/Poll";
import PollList from "./PollList";
export default {
    components: {PollList},
    data() {
        return {
            poll: new Poll(),
        }
    },
    methods: {
        store() {
            window.axios.post('http://localhost:8000/api/poll', this.poll)
                .then( () => {
                    this.poll = new Poll(), err => console.log(err)
                })
        },
    }
}
</script>

<style>

</style>
