<template>
    <div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                    <h5 class="font-medium text-uppercase mb-0">Criar Notícia</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                    <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                        <ol class="breadcrumb mb-0 justify-content-end p-0">
                            <li class="breadcrumb-item"><router-link :to="{name: 'admin.dashboard'}">Dashboard</router-link></li>
                            <li class="breadcrumb-item active"><router-link :to="{name: 'admin.news.list'}">Lista de Notícias</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Criar Notícia</li>
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
                                        <img id="image_news" style="height: 400px;" class="img-thumbnail" src="/imagens/notfound.png" alt="user">
                                    </div>
                                </div>
                                <div style="width: 100%; word-wrap: break-word;" class="btn btn-info waves-effect waves-light">
                                    <span>Carregar Imagem Principal</span>
                                    <input style="width: 100%; white-space: normal;" @change="handleFileChange" :class="errors[0] ? 'error' : ''" name="main_image" id="main_image" type="file" class="upload">
                                </div>
                                <span class="error">{{ errors[0] }}</span>
                            </validation-provider>
                        </div>
                        <div class="col-md-6 mt-3">
                            <validation-provider rules="required" v-slot="{ errors }">
                                <div class="form-group">
                                    <label for="title"><strong>Título</strong></label>
                                    <textarea rows="7" v-model="news.title" :class="errors[0] ? 'error' : ''" id="title" name="title" class="form-control" placeholder="Digite o título"></textarea>
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
                            <validation-provider rules="required|email" v-slot="{ errors }">
                                <div class="form-group">
                                    <label for="subtitle"><strong>Sub-Título</strong></label>
                                    <textarea rows="7" v-model="news.subtitle" :class="errors[0] ? 'error' : ''" id="subtitle" name="subtitle" class="form-control" placeholder="Digite o Sub-Título"></textarea>
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
                            <validation-provider rules="required" v-slot="{ errors }">
                                <div class="form-group">
                                    <label for="category"><strong>Categoria</strong></label>
                                    <select v-model="news.category" class="form-control" name="category" id="category">
                                        <option :value="news.category" v-for="sp in systemProfile">{{ sp.profile }}</option>
                                    </select>
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
                        </div>
                        <div class="col-md-12">
                            <validation-provider rules="required|email" v-slot="{ errors }">
                                <div class="form-group col-md-12">
                                    <label for="descryption"><strong>Descrição da noticia</strong></label>
                                    <textarea rows="10" v-model="news.descryption" :class="errors[0] ? 'error' : ''" id="descryption" name="descryption" class="form-control" placeholder="Digite a descrição da notícia"></textarea>
                                    <span class="error">{{ errors[0] }}</span>
                                </div>
                            </validation-provider>
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
            news: {
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
                        this.news = resp.data.results;
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
                    this.news.image = e.target.files[0];
                    const fileReader = new FileReader();
                    fileReader.onloadend = function () {
                        $('#image_news').attr('src', fileReader.result);
                    }

                    fileReader.readAsDataURL(e.target.files[0]);
                    console.log('Uploaded the file...');
                }
            },
            save: function () {
                let that = this;
                let bodyFormData = new FormData();

                $.each(this.news, function (key, value) {
                    bodyFormData.append(key, value);
                });

                axios({
                    method: 'post',
                    url: this.news.id ? '/api/user/' + this.users.id + '?_method=PUT' : '/api/user/',
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
    .card {
        padding: 20px;
        background: #393c4a;
    }
    .card label {
        color: white;
    }
</style>
