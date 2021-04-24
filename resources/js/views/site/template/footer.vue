<template>
    <div>
        <!-- ======= Footer ======= -->
        <section class="section-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="widget-a">
                            <div class="w-header-a">
                                <h3 class="w-title-a text-brand">Ipeúna<span class="text-success">ONLINE</span></h3>
                            </div>
                            <div class="w-body-a">
                                <p class="w-text-a color-text-a">
                                    Entre em contato com as informações abaixo, caso queira nos ajudar, dando sugestões, ou caso queira ser nosso patrocinador!
                                </p>
                            </div>
                            <div class="w-footer-a">
                                <ul class="list-unstyled">
                                    <li class="color-a">
                                        <span class="color-text-a">Email: </span> muinha123@gmail.com
                                    </li>
                                    <li class="color-a">
                                        <span class="color-text-a">Telefone: </span> (19) 99817-5324
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 section-md-t3">
                        <div class="widget-a">
                            <div class="w-header-a">
                                <h3 class="w-title-a text-brand">Acesso Rápido</h3>
                            </div>
                            <div class="w-body-a">
                                <div class="w-body-a">
                                    <ul class="list-unstyled">
                                        <li class="item-list-a">
                                            <i class="bi bi-chevron-right"></i> <a href="#">Noticias</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="bi bi-chevron-right"></i> <a href="#">Turismo</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="bi bi-chevron-right"></i> <a href="#">Imóveis</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="bi bi-chevron-right"></i> <a href="#">Contato</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="bi bi-chevron-right"></i> <a href="#">Login</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="bi bi-chevron-right"></i> <a href="#">Vagas de Empregos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 section-md-t3">
                        <div class="widget-a">
                            <div class="w-header-a">
                                <h3 class="w-title-a text-brand">Forma de Nos ajudar</h3>
                            </div>
                            <div class="w-body-a">
                                <ul class="list-unstyled">
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Compartilhe as Noticias</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Seja um Patrocinador</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Compartilhe os Locais de Turismo</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Compartilhe o site</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Faça uma doação</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Interagir Com as postagens</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="nav-footer">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <router-link :to="{name: 'site.index'}">Inicio</router-link>
                                </li>
                                <li class="list-inline-item">
                                    <router-link :to="{name: 'site.news'}">Noticias</router-link>
                                </li>
                                <li class="list-inline-item">
                                    <router-link :to="{name: 'site.tourism'}">Turismo</router-link>
                                </li>
                                <li class="list-inline-item">
                                    <router-link :to="{name: 'site.properties'}">Imóveis</router-link>
                                </li>
                                <li class="list-inline-item">
                                    <router-link :to="{name: 'site.contact'}">Contato</router-link>
                                </li>
                            </ul>
                        </nav>
                        <div class="socials-a">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="bi bi-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="bi bi-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="bi bi-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="copyright-footer">
                            <p class="copyright color-text-a">
                                &copy; Copyright
                                <span class="color-a">Samuel Sanches</span> Todos Direitos Reservados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- End  Footer -->
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>

</style>
