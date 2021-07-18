<template>
    <main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Formulario de Login</h1>
                            <span class="color-text-a">
                                Não é cadastrado ainda no site?
                            </span>
                            <p class="mt-1">
                            <span class="color-text-a">
                                Faça o cadastro, você tera acesso a todo tipo de funcionalidade que o site tem a oferecer!!
                            </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <router-link :to="{name: 'site.index'}">Inicio</router-link>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Entrar
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Contact Single ======= -->
        <section style="margin-top: -130px;" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 section-t8">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card">
                                    <ValidationObserver ref="form" v-slot="{ handleSubmit }">
                                        <form action="">
                                            <div class="imgcontainer">
                                                <span>Ipeúna</span><span class="text-success">ONLINE</span>
                                            </div>

                                            <div class="row container">
                                                <validation-provider vid="email" rules="required|email" v-slot="{ errors }">
                                                    <div class="form-group col-md-12">
                                                        <label for="email"><b>Email</b></label>
                                                        <input id="email" name="email" :class="errors[0] ? 'error' : ''" v-model="params.email" type="text" class="form-control form-control-lg" placeholder="Digite seu email" aria-label="Username" aria-describedby="basic-addon1">
                                                        <span class="error">{{ errors[0] }}</span>
                                                    </div>
                                                </validation-provider>
                                                <validation-provider vid="password" v-slot="{ errors }">
                                                    <div class="form-group col-md-12 mt-4">
                                                        <label for="password"><b>Senha</b></label>
                                                        <input :class="errors[0] ? 'error' : ''" v-model="params.password" class="form-control form-control-lg" id="password" type="password" placeholder="Entre com a senha" name="password">
                                                        <span class="error">{{ errors[0] }}</span>
                                                    </div>
                                                </validation-provider>

                                                <div class="col-md-12 mt-4">
                                                    <button @click.prevent="handleSubmit(login)" class="btn btn-success btn-submit" type="submit">Entrar</button>
                                                    <router-link :to="{name: 'site.register'}" class="btn btn-primary btn-submit mt-1">Cadastre-se</router-link>
                                                </div>

                                                <div class="col-md-12 mt-4">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label>
                                                                <input type="checkbox" checked="checked" name="remember"> Lembrar-me
                                                            </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span>Perdeu a <a href="#">Senha?</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </ValidationObserver>
                                </div>
                            </div>
                            <div class="col-md-5 section-md-t3">
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-envelope"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Informações pra Contato</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">Email.
                                                <span class="color-a">muinha123@gmail.com</span>
                                            </p>
                                            <p class="mb-1">Phone.
                                                <span class="color-a">(19) 99817-5324</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-geo-alt"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Localização</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">
                                                Minha casa no momento
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-share"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Redes Sociais</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <div class="socials-footer">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Single-->
    </main>
</template>

<script>
    import Vue from 'vue';
    import VueToast from 'vue-toast-notification';
    import 'vue-toast-notification/dist/theme-sugar.css';
    import axios from 'axios';
    import { ValidationProvider, ValidationObserver } from 'vee-validate';
    import InputErrorLaravel from '../../../components/error/InputErrorLaravel';

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
                            window.location.href = '/admin/dashboard';
                            return;
                        }
                    }).catch(function (error) {
                        if (error.response.data.errors) {
                            let e = error.response.data.errors;
                            that.$refs.form.setErrors(e);
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
    /* Bordered form */
    form {
        border: 3px solid #f1f1f1;
    }

    .btn{
        width: 100%;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    .container {
        padding: 30px;
        margin: auto;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
    }
</style>
