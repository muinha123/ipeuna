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
                            <i class="mdi mdi-newspaper"></i>
                            <span class="hide-menu">Noticias</span>
                            <span class="badge badge-inverse badge-pill ml-auto mr-3 font-medium px-2 py-1">6</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link :to="{name: 'admin.news'}" class="sidebar-link">
                                    <i class="mdi mdi-newspaper"></i>
                                    <span class="hide-menu"> Lista de Noticias </span>
                                </router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link :to="{name: 'admin.news.create'}" class="sidebar-link">
                                    <i class="fas fa-plus"></i>
                                    <span class="hide-menu"> Criar Noticia </span>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-tree"></i>
                            <span class="hide-menu">Turismo</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link :to="{name: 'admin.tourism'}" class="sidebar-link">
                                    <i class="fab fa-pagelines"></i>
                                    <span class="hide-menu"> Listagem de Turismo </span>
                                </router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link :to="{name: 'admin.tourism.create'}" class="sidebar-link">
                                    <i class="fas fa-plus"></i>
                                    <span class="hide-menu"> Criar Turismo </span>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-settings"></i>
                            <span class="hide-menu">Configurações</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link :to="{name: 'admin.system.profile'}" class="sidebar-link">
                                    <i class="mdi mdi-format-list-bulleted"></i>
                                    <span class="hide-menu"> Lista de Perfis do Sistema </span>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a style="cursor: pointer" @click.prevent="siteIndex" class="sidebar-link">
                            <i class="mdi mdi-backburger"></i>
                            <span class="hide-menu"> Voltar ao Site </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</template>

<script>
    export default {
        methods: {
            siteIndex: function () {
                window.location.href = '/';
            }
        }
    }
</script>

<style scoped>

</style>
