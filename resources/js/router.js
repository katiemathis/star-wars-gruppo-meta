import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import Planets from './pages/Planets';


const router = new VueRouter({
    mode: "history",

    routes: [
        {
            path: '/pianeti-home',
            name: 'pianeti-home',
            component: Home
        },
        {
            path: '/pianeti',
            name: 'pianeti',
            component: Planets
        },

    ]
});

export default router
