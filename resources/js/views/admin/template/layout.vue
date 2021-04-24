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
    import Header from "./header";
    import Footer from "./footer";
    import Menu from "./menu";

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
