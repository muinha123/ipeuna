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

// admin
import adminDashboard from "./views/admin/dashboard";
import adminUsersList from "./views/admin/users/list";
import adminUsersForm from "./views/admin/users/form";
import adminNewsList from "./views/admin/news/list";
import adminNewsForm from "./views/admin/news/form";

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


        // Admin
        {
            path: '/admin/dashboard',
            name: 'admin.dashboard',
            component: adminDashboard,
        },
        {
            path: '/admin/users',
            name: 'admin.users',
            component: adminUsersList,
        },
        {
            path: '/admin/user',
            name: 'admin.user.create',
            component: adminUsersForm,
        },
        {
            path: '/admin/user/:id',
            name: 'admin.user.update',
            component: adminUsersForm,
        },
        {
            path: '/admin/news/list',
            name: 'admin.news',
            component: adminNewsList,
        },
        {
            path: '/admin/news',
            name: 'admin.news.create',
            component: adminNewsForm,
        },
        {
            path: '/admin/news/:id',
            name: 'admin.news.update',
            component: adminNewsForm,
        }
    ]
});

export default router;
