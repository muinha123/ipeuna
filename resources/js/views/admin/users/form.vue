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
                            <li class="breadcrumb-item"><router-link :to="{name: 'admin.dashboard'}">Dashboard</router-link></li>
                            <li class="breadcrumb-item active"><router-link :to="{name: 'admin.dashboard'}">Lista de Usuarios</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Criar Usuario</li>
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
                        <div class="col-md-6 text-center">
                            <validation-provider rules="image" ref="provider" v-slot="{ validate, errors }">
                                <div class="el-element-overlay">
                                    <div class="el-card-item">
                                        <img id="image_user" style="height: 400px;" class="img-thumbnail" src="/imagens/user-perfil-padrao.jpeg" alt="user">
                                    </div>
                                </div>
                                <div style="width: 100%; word-wrap: break-word;" class="btn btn-info waves-effect waves-light">
                                    <span>Carregar Imagem Perfil</span>
                                    <input style="width: 100%; white-space: normal;" @change="handleFileChange" :class="errors[0] ? 'error' : ''" name="image" id="image" type="file" class="upload">
                                </div>
                                <span class="error">{{ errors[0] }}</span>
                            </validation-provider>
                        </div>
                        <div class="col-md-6 mt-3">
                            <validation-provider rules="required" v-slot="{ errors }">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input v-model="users.name" :class="errors[0] ? 'error' : ''" id="name" name="name" type="text" class="form-control" placeholder="Digite seu nome">
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
                            <validation-provider rules="required|email" v-slot="{ errors }">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input v-model="users.email" :class="errors[0] ? 'error' : ''" id="email" name="email" type="email" class="form-control" placeholder="Digite seu e-mail">
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
                            <validation-provider rules="required" v-slot="{ errors }">
                                <div class="form-group">
                                    <label for="system_profile">Perfil do Sístema</label>
                                    <select v-model="users.system_profile_id" class="form-control" name="system_profile_id" id="system_profile">
                                        <option :value="sp.id" v-for="sp in systemProfile">{{ sp.profile }}</option>
                                    </select>
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
                            <validation-provider v-if="!users.id" rules="required" v-slot="{ errors }">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input v-model="users.password" :class="errors[0] ? 'error' : ''" id="password" name="password" type="password" class="form-control" placeholder="Digite seu password">
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
                            <div v-else class="form-group">
                                <label for="password">Password</label>
                                <input v-model="users.password" name="password" type="password" class="form-control" placeholder="**************">
                            </div>
                        </div>
                        <div class="col-md-12 form-group mt-3">
                            <router-link :to="{name: 'admin.users'}" class="btn btn-dark">Cancelar</router-link>
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
            users: {
                image: {},
                id: ''
            },
            systemProfile: {},
            errors: {}
        }),
        methods: {
            get: function () {
                axios.get('/api/user/' + this.$route.params.id).then(resp => {
                    if (resp.status === 200) {
                        this.users = resp.data.results;
                    }
                }).catch(errors => console.log(errors));
            },
            getAllSystemProfile: function () {
                axios.get('/api/system/profile/').then(resp => {
                    if (resp.status === 200) {
                        this.systemProfile = resp.data.results;
                    }
                }).catch(errors => console.log(errors));
            },
            async handleFileChange(e) {
                const { valid } = await this.$refs.provider.validate(e);

                if (valid) {
                    this.users.image = e.target.files[0];
                    const fileReader = new FileReader();
                    fileReader.onloadend = function () {
                        $('#image_user').attr('src', fileReader.result);
                    }

                    fileReader.readAsDataURL(e.target.files[0]);
                    console.log('Uploaded the file...');
                }
            },
            save: function () {
                let that = this;
                let bodyFormData = new FormData();

                $.each(this.users, function (key, value) {
                    bodyFormData.append(key, value);
                });

                axios({
                    method: 'post',
                    url: this.users.id ? '/api/user/' + this.users.id + '?_method=PUT' : '/api/user/',
                    data: bodyFormData,
                    headers: {'Content-Type': 'multipart/form-data' }
                }).then(function (resp) {
                    if (resp.status < 300) {
                        that.$router.go(-1);
                        Vue.$toast.open({
                            message: 'Dados Salvos Com Sucesso!',
                            type: 'success',
                        });

                        return;
                    }

                    Vue.$toast.open({
                        message: 'Erro ao Salvar os Dados!',
                        type: 'error',
                    });

                    return;
                }).catch(errors => {
                    if (errors.response.status == 422) {
                        that.errors = errors.response.data.errors;
                    }
                    Vue.$toast.open({
                        message: 'Dados de acesso inválidos!',
                        type: 'error',
                    });
                });
            }
        },
        mounted() {
            if (this.$route.params.id) {
                this.get();
            }

            this.getAllSystemProfile();
        }
    }
</script>

<style scoped>

</style>
