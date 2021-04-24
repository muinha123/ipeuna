<template>
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <span class="db"><img src="/assets/images/logos/logo-icon.png" alt="logo" /></span>
                    <h5 class="font-medium mb-3">Fazer o login no site</h5>
                </div>
                <div class="row">
                    <input-error-laravel :laravelErrors="errors"></input-error-laravel>
                    <div class="col-12">
                        <ValidationObserver ref="form" v-slot="{ handleSubmit }">
                        <form class="form-horizontal mt-3" action="">
                            <validation-provider rules="required|email" v-slot="{ errors }">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input name="email" :class="errors[0] ? 'error' : ''" v-model="params.email" type="text" class="form-control form-control-lg" placeholder="Digite seu email" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <span class="error">{{ errors[0] }}</span>
                            </validation-provider>
                            <validation-provider rules="required" v-slot="{ errors }">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input name="password" :class="errors[0] ? 'error' : ''" v-model="params.password" type="password" class="form-control form-control-lg" placeholder="Senha" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                <span class="error">{{ errors[0] }}</span>
                            </validation-provider>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Lembrar-me</label>
                                        <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock mr-1"></i> Perdeu o password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="col-xs-12 pb-3">
                                    <button class="btn btn-block btn-lg btn-info" type="submit" @click.prevent="handleSubmit(login)">Entrar</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                                    <div class="social">
                                        <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Logar com o Facebook"> <i aria-hidden="true" class="fab  fa-facebook"></i> </a>
                                        <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Logar com o Google"> <i aria-hidden="true" class="fab  fa-google-plus"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-2">
                                <div class="col-sm-12 text-center">
                                    Não possui uma conta? <a href="authentication-register1.html" class="text-info ml-1"><b>Cadastre-se</b></a>
                                </div>
                            </div>
                        </form>
                        </ValidationObserver>
                    </div>
                </div>
            </div>
            <div id="recoverform">
                <div class="logo">
                    <span class="db"><img src="assets/images/logos/logo-icon.png" alt="logo" /></span>
                    <h5 class="font-medium mb-3">Recuperar a Senha</h5>
                    <span>Coloque seu Email, para que assim enviamos as instruções!</span>
                </div>
                <div class="row mt-3">
                    <!-- Form -->
                    <form class="col-12" action="index.html">
                        <!-- email -->
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="email" required="" placeholder="email@email.com">
                            </div>
                        </div>
                        <!-- pwd -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Resetar</button>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-block btn-lg btn-info" @click.prevent="back">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Vue from 'vue';
    import VueToast from 'vue-toast-notification';
    import 'vue-toast-notification/dist/theme-sugar.css';
    import axios from 'axios';
    import { ValidationProvider, ValidationObserver } from 'vee-validate';
    import InputErrorLaravel from '../components/error/InputErrorLaravel';

    axios.defaults.withCredentials = true;
    Vue.use(VueToast);

    export default {
        components: {
            ValidationProvider,
            InputErrorLaravel,
            ValidationObserver
        },
        data: () => ({
            params: {
                email: '',
                password: '',
                remember: true
            },
            errors: {}
        }),
        methods: {
            login: function () {
                let that = this;

                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/api/login', {
                        email: this.params.email,
                        password: this.params.password
                    }).then(function (resp) {
                        if (resp.status === 200) {
                            window.location.href = '/dashboard';
                            return;
                        }
                    }).catch(function (error) {
                        that.params.password = "";
                        if (error.response.status == 422) {
                            that.errors = error.response.data.errors;
                        }
                        Vue.$toast.open({
                            message: 'Dados de acesso inválidos!',
                            type: 'error',
                            position: 'top-right',
                            duration: 7000
                        });
                    })
                });
            },
            back: function () {
                window.location.href="/login";
            }
        }
    }
</script>

<style scoped>

</style>
