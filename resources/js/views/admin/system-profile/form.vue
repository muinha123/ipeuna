<template>
    <div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                    <h5 class="font-medium text-uppercase mb-0">Criar Perfil</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                    <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                        <ol class="breadcrumb mb-0 justify-content-end p-0">
                            <li class="breadcrumb-item"><router-link :to="{name: 'admin.dashboard'}">Dashboard</router-link></li>
                            <li class="breadcrumb-item active"><router-link :to="{name: 'admin.system.profile'}">Lista de Perfis</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Criar Perfil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">
            <ValidationObserver ref="form" v-slot="{ handleSubmit }">
                <form id="form_admin_create_users" enctype="multipart/form-data" class="form pt-3">
                    <div class="row">
                        <input-error-laravel :laravelErrors="errors"></input-error-laravel>
                        <div class="col-md-12 mt-3">
                            <validation-provider rules="required" v-slot="{ errors }">
                                <div class="form-group">
                                    <label for="profile"><strong>Perfil</strong></label>
                                    <input type="text" v-model="result.profile" :class="errors[0] ? 'error' : ''" id="profile" name="profile" class="form-control" placeholder="Digite o perfil">
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
                        </div>
                        <div class="col-md-12 form-group mt-3">
                            <router-link :to="{name: 'admin.system.profile'}" class="btn btn-dark">Cancelar</router-link>
                            <button type="submit" class="btn btn-success mr-2" @click.prevent="handleSubmit(save)">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </ValidationObserver>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue';
    import { ValidationProvider, ValidationObserver } from 'vee-validate';
    import InputErrorLaravel from '../../../components/error/InputErrorLaravel';

    export default {
        components: {
            ValidationProvider,
            InputErrorLaravel,
            ValidationObserver
        },
        data: () => ({
            result: {
                id: ''
            },
            errors: {}
        }),
        methods: {
            get: function () {
                axios.get('/api/admin/system-profile/' + this.$route.params.id).then(resp => {
                    if (resp.status === 200) {
                        this.result = resp.data.results;
                    }
                }).catch(errors => console.log(errors));
            },
            save: function () {
                let that = this;

                axios({
                    method: 'post',
                    url: this.result.id ? '/api/admin/system-profile/' + this.result.id + '?_method=PUT' : '/api/admin/system-profile',
                    data: this.result
                }).then(function (resp) {
                    if (resp.status < 300) {
                        that.$router.go(-1);
                        Vue.$toast.open({
                            message: 'Dados Salvos Com Sucesso!',
                            type: 'success',
                            position: 'top-right'
                        });

                        return;
                    }

                    Vue.$toast.open({
                        message: 'Erro ao Salvar os Dados!',
                        type: 'error',
                        position: 'top-right'
                    });

                    return;
                }).catch(errors => {
                    if (errors.response.status == 422) {
                        that.errors = errors.response.data.errors;
                    }
                    Vue.$toast.open({
                        message: 'Aconteceu Algum Problema :(',
                        type: 'error',
                        position: 'top-right'
                    });
                });
            }
        },
        mounted() {
            if (this.$route.params.id) {
                this.get();
            }
        }
    }
</script>

<style scoped>
    .card {
        padding: 20px;
    }
</style>
