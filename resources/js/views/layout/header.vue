<template>
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <router-link class="navbar-brand d-block d-md-none" :to="{name: 'admin.dashboard'}">
                    <b class="logo-icon">
                        <img src="assets/images/logos/logo-icon.png" alt="homepage" class="dark-logo" />
                        <img src="assets/images/logos/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <span class="logo-text">
                         <img src="assets/images/logos/logo-text.png" alt="homepage" class="dark-logo" />
                         <img src="assets/images/logos/logo-light-text.png" class="light-logo" alt="homepage" />
                    </span>
                </router-link>
                <div class="d-none d-md-block text-center">
                    <a class="sidebartoggler waves-effect waves-light d-flex align-items-center side-start" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu"></i>
                        <span class="navigation-text ml-3"> MENU</span>
                    </a>
                </div>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item border-right">
                        <router-link class="nav-link navbar-brand d-none d-md-block" :to="{name: 'admin.dashboard'}">
                            <b class="logo-icon">
                                <img src="assets/images/logos/logo-icon.png" alt="homepage" class="dark-logo" />
                                <img src="assets/images/logos/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <span class="logo-text">
                                 <img src="assets/images/logos/logo-text.png" alt="homepage" class="dark-logo" />
                                 <img src="assets/images/logos/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </router-link>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item search-box">
                        <form class="app-search d-none d-lg-block">
                            <input type="text" class="form-control" placeholder="Search...">
                            <a href="" class="active"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/imagens/user-perfil-padrao.jpeg" alt="user" class="rounded-circle" width="31">
                            <span class="ml-2 user-text font-medium">Steve</span><span class="fas fa-angle-down ml-2 user-text"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                <div class=""><img src="/imagens/user-perfil-padrao.jpeg" alt="user" class="rounded" width="80"></div>
                                <div class="ml-2">
                                    <h4 class="mb-0">Steave Jobs</h4>
                                    <p class=" mb-0 text-muted">varun@gmail.com</p>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">Editar Conta</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)" @click.prevent="logout"><i class="fa fa-power-off mr-1 ml-1"></i> Sair </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        methods: {
            logout: function () {
                axios.post('/logout').then(function (resp) {
                    console.log(resp);
                    if (resp.status === 200) {
                        window.location.href="/login";
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>
