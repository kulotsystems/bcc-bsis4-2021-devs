/*
|--------------------------------------------------------------------------
| APP ENTRY POINT
|--------------------------------------------------------------------------
| The entry script for the Single Page Application (SPA)
|
*/


import('./bootstrap');
import Vue from 'vue';


// --- IMPORTS -----------------------------------------------------------
const BccBsis42021Devs = () => import('./BccBsis42021Devs.vue');
import router  from './plugins/vue-router';
import store   from './plugins/vuex-store';
import vuetify from './plugins/vuetify'


// --- APP INSTANCE ------------------------------------------------------
const app = new Vue({
    el     : '#app',
    router : router,
    store  : store,
    vuetify: vuetify,
    render : h => h(BccBsis42021Devs)
});
