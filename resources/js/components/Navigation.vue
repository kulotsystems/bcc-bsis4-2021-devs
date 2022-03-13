<template>
    <nav>
        <v-navigation-drawer app v-model="drawer.opened" class="primary lighten-2">
            <v-toolbar class="primary lighten-2">
                <v-app-bar-nav-icon v-on:click="drawer.opened = false" v-show="drawer.opened" class="white--text"></v-app-bar-nav-icon>
                <v-app-bar-title class="white--text">
                    {{ $store.getters.appName }}
                </v-app-bar-title>
            </v-toolbar>

            <v-layout column align-center>
                <v-flex class="my-5">
                    <v-avatar size="100">
                        <img :src="logo" alt="">
                    </v-avatar>
                </v-flex>
            </v-layout>

            <v-list>
                <v-list-item router to="/" class="py-2">
                    <v-list-item-action>
                        <v-icon class="white--text">home</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title class="white--text">HOME</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item router to="/students" class="py-2">
                    <v-list-item-action>
                        <v-icon class="white--text">people</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title class="white--text">STUDENTS</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item router to="/groups" class="py-2">
                    <v-list-item-action>
                        <v-icon class="white--text">groups</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title class="white--text">GROUPS</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar app class="primary lighten-2 white--text">
            <v-app-bar-nav-icon v-on:click="drawer.opened = true" v-show="!drawer.opened" class="white--text"></v-app-bar-nav-icon>
            <v-app-bar-title v-show="!drawer.opened">
                {{ $store.getters.appName }}
            </v-app-bar-title>
            <v-spacer></v-spacer>
            <v-menu offset-y transition="slide-y-transition">
                <template v-slot:activator="{ on, attrs }">
                    <v-btn icon text color="grey" v-bind="attrs" v-on="on">
                        <v-icon>more_vert</v-icon>
                    </v-btn>
                </template>
                <v-list>
                    <v-list-item router to="/">
                        <v-list-item-title>
                            <v-icon left>home</v-icon>
                            <span>HOME</span>
                        </v-list-item-title>
                    </v-list-item>
                    <v-list-item router to="/students">
                        <v-list-item-title>
                            <v-icon left>people</v-icon>
                            <span>STUDENTS</span>
                        </v-list-item-title>
                    </v-list-item>
                    <v-list-item router to="/groups">
                        <v-list-item-title>
                            <v-icon left>groups</v-icon>
                            <span>GROUPS</span>
                        </v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>
        </v-app-bar>
    </nav>
</template>

<script>
    import favicon from '../assets/img/favicon.png';

    export default {
        name: 'Navigation',
        components: {},
        data() {
            return {
                logo  : favicon,
                drawer: {
                    opened: false
                }
            }
        },
        methods : {},
        computed: {}
    }
</script>

<style scoped>

</style>
