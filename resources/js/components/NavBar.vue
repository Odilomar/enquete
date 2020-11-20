<template>
    <div>
        <header class="cabecalho">
            <div class="logo">
                <router-link to="/">
                    <img :src="imagem.url" :alt="imagem.titulo" />
                </router-link>
            </div>
            <aside class="autenticacao botao">
                <router-link to="/enquete" class="destaque">Enquete</router-link>
            </aside>
        </header>
    </div>
</template>

<script>

export default {
    data() {
        return {
            imagem: {
                url: 'http://localhost:8000/img/logo.jpg',
                titulo: 'Logo do sistema',
            },
        }
    }
}
</script>

<style scoped>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    background-color: lightgray;
}
.cabecalho {
    background: whitesmoke;
    border-bottom: solid 5px #777777;
    height: 80px;
    box-sizing: content-box;
}

.logo {
    display: inline-block;
    height: 80px;
    padding: 15px;
}

.logo img {
    height: 100%;
}

.autenticacao {
    float: right;
    height: 80px;
    padding: 25px;
}

.autenticacao a {
    text-decoration: none;
    font-size: 1.3em;
    padding: 15px;
}

.botao a:hover {
    background-color: #777777;
    color: whitesmoke;
    border-radius: 40px;
}

.destaque {
    background-color: darkmagenta;
    color: whitesmoke;
    border-radius: 40px;
    padding: 10px 25px;
    margin: 10px;
}


</style>
