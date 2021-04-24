require('./bootstrap');

import Vue from 'vue';
import App from './views/layout';
import Routes from './router';
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
import VueSwal from 'vue-swal';

require('./utilities/validate');
Vue.use(VueSwal)
Vue.use(VueToast, {
    position: 'top-right'
});

const app = new Vue({
    el: '#main-wrapper',
    components: { App },
    router: Routes
});
