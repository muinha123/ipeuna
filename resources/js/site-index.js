require('./bootstrap');

import Vue from 'vue';
import App from './views/site/template/layout';
import Routes from './router';

const app = new Vue({
    el: '#siteLayoutVue',
    components: { App },
    router: Routes
});
