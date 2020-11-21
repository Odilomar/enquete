<template>
    <div>
        <header class="cabecalho">
            <div class="logo">
                <router-link to="/">
                    <img :src="imagem.url" :alt="imagem.titulo" />
                </router-link>
            </div>

            <nav class="menu">
                <ul>
                    <li>
                        <router-link to="/">Lista de enquete</router-link>
                    </li>
                    <li>
                        <router-link to="/enquete">Criar enquete</router-link>
                    </li>
                    <li>
                        <router-link to=/resultado>Resultados das enquetes</router-link>
                    </li>
                </ul>
            </nav>
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

.menu {
    display: inline-block;
    vertical-align: top;
    height: 80px;
    padding: 25px;
}

.menu ul {
    margin: 0;
    padding: 0;
}

.menu li {
    display: inline-block;
}

.menu a {
    text-decoration: none;
    color: #777777;
    font-size: 1.3rem;
    padding: 15px;
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

</style>
