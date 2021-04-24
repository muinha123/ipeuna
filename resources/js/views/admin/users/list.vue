<template>
    <div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                    <h5 class="font-medium text-uppercase mb-0">Lista de Usuarios</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                    <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                        <ol class="breadcrumb mb-0 justify-content-end p-0">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lista de Usuarios</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div style="margin: 5px 0px 35px 0px;">
                        <router-link :to="{name: 'admin.user.create'}" class="btn btn-success text-white">Criar Usuário<i style="margin-left: 10px;" class="fa fa-plus"></i> </router-link>
                    </div>
                    <table id="demo-foo-row-toggler" class="table table-striped footable footable-1 breakpoint breakpoint-lg" data-toggle-column="first" style="">
                        <thead>
                            <tr class="footable-header">
                                <th>Nome</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Perfil Do Sístema</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="Object.keys(results).length === 0">
                                <td colspan="4">Não existem registros pra serem exibidos!!</td>
                            </tr>
                            <tr v-else v-for="result in results">
                                <td >
                                    <a href="">
                                        <img src="/imagens/user-perfil-padrao.jpeg" alt="user" width="40" class="rounded-circle">
                                        {{ result.name }}
                                    </a>
                                </td>
                                <td  class="text-center">{{ result.email }}</td>
                                <td  class="text-center">{{ result.profile }}</td>
                                <td class="text-center">
                                    <router-link :to="{ name: 'admin.user.update', params: {'id': result.id} }" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-user"></i> </router-link>
                                    <router-link :to="{ name: 'admin.user.update', params: {'id': result.id} }" class="btn btn-info btn-circle btn-sm"><i class="fa fa-edit"></i> </router-link>
                                    <button @click.prevent="remove(result.id)" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue';

    export default {
        data: () => ({
            results: {}
        }),
        methods: {
            get: function () {
                let that = this;

                axios.get('/api/users').then(function (resp) {
                    if (resp.status == 200) {
                        that.results = resp.data.results.data;
                    }

                }).catch(error => console.log(error))
            },
            remove: function (id) {
                this.$swal({
                    title: "Tem certeza ?",
                    text: "Após confirmar, o dado sera excluido !",
                    icon: "warning",
                    buttons: {
                        confirm: {
                            text: "Confirmar",
                            value: true,
                            visible: true
                        },
                        cancel: {
                            text: "Cancelar",
                            value: false,
                            visible: true
                        }
                    }
                }).then(resp => {
                    if (resp === false){
                        return;
                    }

                    axios.delete('/api/user/' + id).then(resp => {
                        if (resp.status === 202) {
                            this.get();

                            Vue.$toast.open({
                                message: 'Excluido com Sucesso!',
                                type: 'success',
                            });

                            return;
                        }

                        Vue.$toast.open({
                            message: 'Erro ao excluir!',
                            type: 'error',
                        });
                    }).catch(errors => console.log(errors))
                });
            }
        },
        mounted() {
            this.get();
        }
    }
</script>

<style scoped>

</style>
