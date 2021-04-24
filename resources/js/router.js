import Vue from 'vue';
import VueRouter from "vue-router";

Vue.use(VueRouter);

//site
import indexComponent from "./views/site/index";
import newsComponent from "./views/site/news/index";
import newsSelectedComponent from "./views/site/news/news";
import propertiesComponent from "./views/site/property/index";
import propertiesSelectedComponent from "./views/site/property/property";
import contactComponent from "./views/site/contact/index";
import loginComponent from "./views/site/auth/login";
import registerComponent from "./views/site/auth/register";
import tourismComponent from "./views/site/tourism/index";
import tourismSelectedComponent from "./views/site/tourism/tourism";

import dashboard from "./views/admin/dashboard";
import usersList from "./views/admin/users/list";
import userForm from "./views/admin/users/form";

const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'site.index',
            component: indexComponent
        },
        {
            path: '/noticias',
            name: 'site.news',
            component: newsComponent
        },
        {
            path: '/noticias/1',
            name: 'site.news.selected',
            component: newsSelectedComponent
        },
        {
            path: '/imoveis',
            name: 'site.properties',
            component: propertiesComponent
        },
        {
            path: '/imoveis/1',
            name: 'site.properties.selected',
            component: propertiesSelectedComponent
        },
        {
            path: '/contato',
            name: 'site.contact',
            component: contactComponent
        },
        {
            path: '/login',
            name: 'site.login',
            component: loginComponent
        },
        {
            path: '/cadastro',
            name: 'site.register',
            component: registerComponent
        },
        {
            path: '/turismo',
            name: 'site.tourism',
            component: tourismComponent
        },
        {
            path: '/turismo/:id',
            name: 'site.tourism.selected',
            component: tourismSelectedComponent
        },

        {
            path: '/dashboard',
            name: 'admin.dashboard',
            component: dashboard,
        },
        {
            path: '/users',
            name: 'admin.users',
            component: usersList,
        },
        {
            path: '/user',
            name: 'admin.user.create',
            component: userForm,
        },
        {
            path: '/user/:id',
            name: 'admin.user.update',
            component: userForm,
        }
    ]
});

export default router;
