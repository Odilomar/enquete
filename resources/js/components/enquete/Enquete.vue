<template>
    <div>
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
    </div>
</template>

<script>

import Poll from "../../model/Poll";

export default {
    data() {
        return {
            poll: new Poll()
        }
    },
    methods: {
        store() {

        }
    }
}
</script>

<style>

</style>
