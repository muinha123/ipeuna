<template>
    <div>
        <header-app></header-app>
        <menu-app></menu-app>
        <div class="page-wrapper">
            <div class="page-content container-fluid">
                <router-view></router-view>

                <footer></footer>
            </div>
        </div>
    </div>
</template>

<script>
    import Header from "./layout/header";
    import Footer from "./layout/footer";
    import Menu from "./layout/menu";

    export default {
        components: {
            'header-app': Header,
            'footer-app': Footer,
            'menu-app': Menu
        }
    }
</script>

<style scoped>

</style>
