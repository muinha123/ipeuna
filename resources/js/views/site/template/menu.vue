<template>
    <div>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <router-link :to="{name: 'site.index'}" class="nav-link ">Inicio</router-link>
                </li>

                <li class="nav-item">
                    <router-link :to="{name: 'site.news'}" class="nav-link ">Noticias</router-link>
                </li>

                <li class="nav-item">
                    <router-link :to="{name: 'site.tourism'}" class="nav-link ">Turismo</router-link>
                </li>

                <li class="nav-item">
                    <router-link :to="{name: 'site.properties'}" class="nav-link ">Imóveis</router-link>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais Paginas</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="">Vagas de Empregos</a>
                        <a class="dropdown-item " href="">Ache um Comércio</a>
                    </div>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'site.contact'}" class="nav-link " href="">Contato</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'site.login'}" class="btn btn-success btn-lg">Entrar</router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>

</style>
