<template>
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <router-link class="sidebar-link" :to="{name: 'admin.dashboard'}">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu"> Inicio </span>
                        </router-link>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-account-multiple"></i>
                            <span class="hide-menu">Usuários</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <router-link class="sidebar-link" :to="{name: 'admin.users'}">
                                    <i class="fas fa-users"></i>
                                    <span class="hide-menu"> Lista de Usuários </span>
                                </router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link :to="{name: 'admin.user.create'}" class="sidebar-link">
                                    <i class="mdi mdi-account-plus"></i>
                                    <span class="hide-menu"> Criar Usuário </span>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fab fa-product-hunt"></i>
                            <span class="hide-menu">Produtos</span>
                            <span class="badge badge-inverse badge-pill ml-auto mr-3 font-medium px-2 py-1">6</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="index.html" class="sidebar-link">
                                    <i class="fab fa-product-hunt"></i>
                                    <span class="hide-menu"> Lista de Produtos </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="index.html" class="sidebar-link">
                                    <i class="fas fa-plus"></i>
                                    <span class="hide-menu"> Criar Produto </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</template>

<script>
    export default {

    }
</script>

<style scoped>

</style>
