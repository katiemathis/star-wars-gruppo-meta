import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import AdminHome from './pages/AdminHome';
import GuestHome from './pages/GuestHome';


const router = new VueRouter({
    mode: "history",

    routes: [
        {
            path: '/',
            name: 'guesthome',
            component: GuestHome
        },
        {
            path: '/admin-home',
            name: 'adminhome',
            component: AdminHome
        }


    ]
});

export default router
