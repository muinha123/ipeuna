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
                                        <div class="imgcontainer">
                                            <span>Ipeúna</span><span class="text-success">ONLINE</span>
                                        </div>

                                        <div class="row container">
                                            <validation-provider vid="name" rules="required" v-slot="{ errors }">
                                                <div class="form-group col-md-12">
                                                    <label for="name"><b>Nome</b></label>
                                                    <input :class="errors[0] ? 'error' : ''" v-model="form.name" class="form-control" id="name" type="text" placeholder="Digite seu nome" name="name" required>
                                                    <span class="error">{{ errors[0] }}</span>
                                                </div>
                                            </validation-provider>

                                            <validation-provider vid="email" rules="required" v-slot="{ errors }">
                                                <div class="form-group col-md-12 mt-2">
                                                    <label for="email"><b>Email</b></label>
                                                    <input :class="errors[0] ? 'error' : ''" v-model="form.email" class="form-control" id="email" type="email" placeholder="email@email.com" name="email" required>
                                                    <span class="error">{{ errors[0] }}</span>
                                                </div>
                                            </validation-provider>

                                            <validation-provider vid="password" rules="required" v-slot="{ errors }">
                                                <div class="form-group col-md-12 mt-2">
                                                    <label for="password"><b>Senha</b></label>
                                                    <input :class="errors[0] ? 'error' : ''" v-model="form.password" class="form-control" id="password" type="password" placeholder="Entre com a senha" name="password" required>
                                                    <span class="error">{{ errors[0] }}</span>
                                                </div>
                                            </validation-provider>

                                            <div class="col-md-12 mt-4">
                                                <router-link :to="{name: 'site.login'}" class="btn btn-danger btn-submit">Voltar</router-link>
                                                <button @click.prevent="handleSubmit(save)" class="btn btn-success btn-submit" type="submit">Cadastrar</button>
                                            </div>
                                        </div>
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
    import Vue from "vue";
    import axios from "axios";
    import { ValidationProvider, ValidationObserver } from 'vee-validate';


    export default {
        data: () => ({
            form: {
                name: '',
                email: '',
                password: ''
            }
        }),
        components: {
            ValidationProvider,
            ValidationObserver
        },
        methods: {
            save: function () {
                let that = this;

                axios.post('api/site/user', this.form)
                    .then(function (resp) {
                        if (resp.status == 201) {
                            window.location.href = '/admin/dashboard';
                            return;
                        }

                        return;
                    })
                    .catch(function (error) {
                        if (error.response.data.errors) {
                            let e = error.response.data.errors;
                            that.$refs.form.setErrors(e);
                        }

                        Vue.$toast.open({
                            message: 'Aconteceu algum erro!',
                            type: 'error',
                            position: 'top-right',
                            duration: 7000
                        });
                    });
            }
        }
    }
</script>

<style scoped>
    /* Bordered form */
    form {
        border: 3px solid #f1f1f1;
    }

    .container {
        padding: 30px;
        margin: auto;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
</style>
