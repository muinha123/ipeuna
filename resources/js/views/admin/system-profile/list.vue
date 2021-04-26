<template>
    <div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                    <h5 class="font-medium text-uppercase mb-0">Lista de Perfis</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                    <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                        <ol class="breadcrumb mb-0 justify-content-end p-0">
                            <li class="breadcrumb-item"><router-link :to="{ name: 'admin.dashboard' }">Dashboard</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Lista de Perfis</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div style="margin: 5px 0px 35px 0px;">
                        <router-link :to="{name: 'admin.system.profile.create'}" class="btn btn-success text-white">Criar Perfil<i style="margin-left: 10px;" class="fa fa-plus"></i> </router-link>
                    </div>
                    <table id="demo-foo-row-toggler" class="table table-striped footable footable-1 breakpoint breakpoint-lg" data-toggle-column="first" style="">
                        <thead>
                        <tr class="footable-header">
                            <th>id</th>
                            <th class="text-center">Perfil</th>
                            <th class="text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-if="Object.keys(results).length === 0">
                            <td colspan="4">Não existem registros pra serem exibidos!!</td>
                        </tr>
                        <tr v-else v-for="result in results">
                            <td>{{ result.id }}</td>
                            <td class="text-center">{{ result.profile }}</td>
                            <td class="text-center">
                                <router-link :to="{ name: 'admin.system.profile.update', params: {'id': result.id} }" class="btn btn-info btn-circle btn-sm"><i class="fa fa-edit"></i> </router-link>
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
            getAll: function () {
                let that = this;

                axios.get('/api/admin/system-profile').then(function (resp) {
                    if (resp.status == 200) {
                        that.results = resp.data.results;
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
                            visible: true,
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

                    axios.delete('/api/admin/system-profile/' + id).then(resp => {
                        if (resp.status === 202) {

                            Vue.$toast.open({
                                message: 'Excluido com Sucesso!',
                                type: 'success',
                                position: 'top-right'
                            });

                            this.getAll();
                            return;
                        }

                        Vue.$toast.open({
                            message: 'Erro ao excluir!',
                            type: 'error',
                            position: 'top-right'
                        });
                    }).catch(errors => console.log(errors))
                });
            }
        },
        mounted() {
            this.getAll();
        }
    }
</script>

<style scoped>

</style>
