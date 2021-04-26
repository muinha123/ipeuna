<template>
    <div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                    <h5 class="font-medium text-uppercase mb-0">Criar Turismo</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                    <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                        <ol class="breadcrumb mb-0 justify-content-end p-0">
                            <li class="breadcrumb-item"><router-link :to="{name: 'admin.dashboard'}">Dashboard</router-link></li>
                            <li class="breadcrumb-item active"><router-link :to="{name: 'admin.dashboard'}">Lista de Turismo</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Criar Turismo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">

            <ul class="nav nav-tabs manage-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#dataBasic" role="tab">
                        <span class="hidden-sm-up">
                            <h4><i class="ti-user"></i></h4>
                        </span>
                        <span class="d-none d-md-block">Dados Básicos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#dataLocale" role="tab">
                        <span class="hidden-sm-up">
                            <h4><i class="fas fa-building"></i></h4>
                        </span>
                        <span class="d-none d-md-block">Dados Complementares</span>
                    </a>
                </li>
            </ul>

            <ValidationObserver ref="form" v-slot="{ handleSubmit }">
                <form id="form_admin_create_users" enctype="multipart/form-data" class="form pt-3">
                    <div class="tab-content">
                        <div class="tab-pane active" id="dataBasic" role="tabpanel">
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
                                            <span>Carregar Imagem Principal</span>
                                            <input style="width: 100%; white-space: normal;" @change="handleFileChange" :class="errors[0] ? 'error' : ''" name="image" id="image" type="file" class="upload">
                                        </div>
                                        <span class="error">{{ errors[0] }}</span>
                                    </validation-provider>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <div class="form-group">
                                            <label for="name">Nome do Local*</label>
                                            <input v-model="result.name" :class="errors[0] ? 'error' : ''" id="name" name="name" type="text" class="form-control" placeholder="Digite o nome do local">
                                            <span class="error">{{ errors[0] }}</span>
                                        </div>
                                    </validation-provider>
                                    <validation-provider v-slot="{ errors }">
                                        <div class="form-group">
                                            <label for="descryption">Descrição</label>
                                            <textarea rows="5" v-model="result.descryption" :class="errors[0] ? 'error' : ''" id="descryption" name="descryption" class="form-control" placeholder="Digite a descrição"></textarea>
                                            <span class="error">{{ errors[0] }}</span>
                                        </div>
                                    </validation-provider>
                                    <validation-provider v-slot="{ errors }">
                                        <div class="form-group">
                                            <label for="ease">Facilidades <span class="text-info">(Separe as facilidades por vigula, veja no exemplo abaixo)</span></label>
                                            <input v-model="result.ease" :class="errors[0] ? 'error' : ''" id="ease" name="ease" type="text" class="form-control" placeholder="facilidade 1, facilidade 2, facilidade 3">
                                            <span class="error">{{ errors[0] }}</span>
                                        </div>
                                    </validation-provider>
                                    <validation-provider v-slot="{ errors }">
                                        <div class="form-group">
                                            <label for="video">Video do Local</label>
                                            <input v-model="result.video" :class="errors[0] ? 'error' : ''" id="video" name="video" type="text" class="form-control" placeholder="coloque o link do seu video">
                                            <span class="error">{{ errors[0] }}</span>
                                        </div>
                                    </validation-provider>
                                    <validation-provider v-slot="{ errors }">
                                        <div class="form-group">
                                            <label for="localization">Localização* <span class="text-info">(Coloque o link do google maps filtrado)</span></label>
                                            <input v-model="result.localization" :class="errors[0] ? 'error' : ''" id="localization" name="localization" type="text" class="form-control" placeholder="Coloque o link">
                                            <span class="error">{{ errors[0] }}</span>
                                        </div>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="dataLocale" role="tabpanel">
                            <div class="row">
                                <input-error-laravel :laravelErrors="errors"></input-error-laravel>
                                <div class="col-md-6">
                                    <validation-provider rules="required" ref="provider" v-slot="{ validate, errors }">
                                        <div class="form-group">
                                            <label for="city">Cidade*</label>
                                            <input v-model="result.city" :class="errors[0] ? 'error' : ''" id="city" name="city" type="text" class="form-control" placeholder="Coloque a cídade">
                                            <span class="error">{{ errors[0] }}</span>
                                        </div>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 form-group mt-3">
                        <router-link :to="{name: 'admin.users'}" class="btn btn-dark">Cancelar</router-link>
                        <button type="submit" class="btn btn-success mr-2" @click.prevent="handleSubmit(save)">Cadastrar</button>
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
                image: {},
                id: ''
            },
            systemProfile: {},
            errors: {}
        }),
        methods: {
            get: function () {
                axios.get('/api/admin/user/' + this.$route.params.id).then(resp => {
                    if (resp.status === 200) {
                        this.users = resp.data.results;
                    }
                }).catch(errors => console.log(errors));
            },
            getAllSystemProfile: function () {
                axios.get('/api/admin/system-profile').then(resp => {
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
                    url: this.users.id ? '/api/admin/user/' + this.users.id + '?_method=PUT' : '/api/admin/user/',
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
