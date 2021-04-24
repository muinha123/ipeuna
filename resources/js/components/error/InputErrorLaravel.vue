<template>
    <div v-show="Object.keys(laravelErrors).length != 0"  id="laravelErrorDiv" class="col-12">
        <div class="alert alert-danger">
            <div v-for="error in laravelErrors">
                <ul v-for="e in error">
                    <li>{{ e }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['laravelErrors'],
        methods: {
            esconder: function () {
                setTimeout(function() {
                    $('#laravelErrorDiv').hide();
                }, 6000);
            }
        },
        mounted() {
            this.esconder();
        }
    }
</script>

<style scoped>

</style>
