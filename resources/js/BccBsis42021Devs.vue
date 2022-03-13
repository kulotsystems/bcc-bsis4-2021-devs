<template>
    <v-app>
        <template v-if="this.$store.getters.hasData">
            <navigation></navigation>
            <v-main>
                <div class="pa-3">
                    <transition name="slide" mode="out-in">
                        <router-view></router-view>
                    </transition>
                </div>
            </v-main>
        </template>
        <template v-else>
            <v-container v-if="error !== ''" fill-height fluid>
                <v-row align="center" justify="center">
                    <v-col align="center">
                        <p class="error--text">{{ error }}</p>
                    </v-col>
                </v-row>
            </v-container>
            <v-container v-else fill-height fluid>
                <v-row align="center" justify="center">
                    <v-col align="center">
                        <v-progress-circular
                            :size="70"
                            :width="7"
                            color="primary lighten-2"
                            indeterminate
                        ></v-progress-circular>
                    </v-col>
                </v-row>
            </v-container>
        </template>
    </v-app>
</template>

<script>
    export default {
        name: 'BccBsis42021Devs',
        components: {
            'navigation': () => import('./components/Navigation')
        },
        data() {
            return {
                error: ''
            }
        },
        methods : {},
        computed: {},
        beforeCreate() {
            axios.default.get('/api').then(response => {
                this.$store.commit('setPopulation', response.data);
            }).catch(error => {
                this.error = error;
            });
        }
    }
</script>

<style scoped>
    .slide-enter-active,
    .slide-leave-active {
        transition: opacity 0.2s, transform 0.2s;
    }
    .slide-enter,
    .slide-leave-to {
        opacity: 0;
        transform: translateX(2%);
    }
</style>
