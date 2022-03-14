/*
|--------------------------------------------------------------------------
| VUE ROUTER
|--------------------------------------------------------------------------
| An instance of the vue-router that defines all the SPA front-end routes.
|
*/


import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);


// --- VIEW COMPONENTS (Lazy Load) ----------------------------------------
function lazyLoad(view){
    return() => import(`../../views/${view}.vue`)
}


// --- UTILITIES -----------------------------------------------------------
// ...


export default new VueRouter({
    mode  : 'history',
    base  : '/app',
    routes: [
        {
            path     : '/',
            name     : 'home',
            component: lazyLoad('Home')
        },
        {
            path     : '/students',
            name     : 'students',
            component: lazyLoad('Students')
        },
        {
            path     : '/groups',
            name     : 'groups',
            component: lazyLoad('Groups')
        }
    ]
});
