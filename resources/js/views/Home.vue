<template>
    <div>
        <h1 align="center" class="my-3 primary--text">HOME</h1>
        <v-container>
            <v-tabs v-model="tab" grow class="mb-5 px-1">
                <v-tab>
                    <v-badge
                        color="grey"
                        :content="this.$store.getters.students.length"
                    >
                        <span class="mr-1">STUDENTS</span>
                    </v-badge>
                </v-tab>
                <v-tab>
                    <v-badge
                        color="grey"
                        :content="this.$store.getters.groups.length"
                    >
                        <span class="mr-1">GROUPS</span>
                    </v-badge>
                </v-tab>
            </v-tabs>
            <v-tabs-items v-model="tab">
                <v-tab-item class="pa-0">
                    <students fromHome="true"></students>
                </v-tab-item>
                <v-tab-item class="pa-0">
                    <groups fromHome="true"></groups>
                </v-tab-item>
            </v-tabs-items>
        </v-container>
    </div>
</template>

<script>
    export default {
        name: 'Home',
        components: {
            'students': () => import('./Students.vue'),
            'groups'  : () => import('./Groups.vue')
        },
        data() {
            return {
                tab: 1
            }
        },
        methods : {},
        computed: {},
        mounted() {
            document.title = 'HOME | ' + this.$store.state.app.name
        }
    }
</script>

<style scoped>

</style>
