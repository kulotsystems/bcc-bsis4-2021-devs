/*
|--------------------------------------------------------------------------
| VUEX STORE
|--------------------------------------------------------------------------
| An instance of the vuex-store that serves as the SPA centralized storage
|
*/


import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);


export default new Vuex.Store({
    state: {
        app: {
            name      : 'BCC-BSIS4-2021-DEVS',
            population: null
        }
    },

    getters: {
        hasData(state) {
            return state.app.population !== null
        },

        appName(state) {
            return state.app.name;
        },

        students(state) {
            return Object.values(state.app.population.students);
        },

        studentsObj(state) {
            return state.app.population.students;
        },

        groups(state) {
            return Object.values(state.app.population.groups);
        },

        groupsObj(state) {
            return state.app.population.groups;
        },
    },

    mutations: {
        setPopulation(state, data) {
            // add show_desc property to every group
            for (let key in data.groups) {
                data.groups[key].show_desc = false;
            }

            // relate each student to group
            for(let key in data.students) {
                data.students[key].group.group_name = data.groups[data.students[key].group.group_id].name;
            }

            state.app.population = data;
        }
    }
});




