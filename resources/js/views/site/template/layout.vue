<template>
    <div>
        <headerComponent>
            <menuComponent></menuComponent>
        </headerComponent>

        <router-view></router-view>

        <footerComponent></footerComponent>
    </div>
</template>

<script>
    import headerComponent from './header';
    import footerComponent from './footer';
    import menuComponent from "./menu";

    export default {
        components: {
            headerComponent,
            footerComponent,
            menuComponent
        }
    }
</script>

<style scoped>

</style>
