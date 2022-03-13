/*
|--------------------------------------------------------------------------
| VUETIFY
|--------------------------------------------------------------------------
| An instance of the User Interface Framework for the SPA
|
*/

import '@fontsource/roboto';
import 'material-design-icons-iconfont/dist/material-design-icons.css';
import 'vuetify/dist/vuetify.min.css';

import Vue from 'vue';
import Vuetify from 'vuetify';
Vue.use(Vuetify);


export default new Vuetify({
    icons: {
        iconfont: 'mdiSvg',
    },
    theme: {
        themes: {
            light: {
                primary: '#04033f'
            }
        }
    }
});


