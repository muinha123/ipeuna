<template>
    <div>
        <!-- ======= Header/Navbar ======= -->
        <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
            <div class="container">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <router-link class="navbar-brand text-brand" :to="{name:'site.index'}">Ipeúna<span class="color-b">ONLINE</span></router-link>

                <slot></slot>

            </div>
        </nav><!-- End Header/Navbar -->
    </div>
</template>

<script>
    export default {
    }
</script>

<style scoped>

</style>
