import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import Planets from './pages/Planets';
import FilteredPlanets from './pages/FilteredPlanets';


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
        {
            path: '/filtered-planets',
            name: 'filtered-planets',
            component: FilteredPlanets,
            props: true,
        },


    ]
});

export default router
