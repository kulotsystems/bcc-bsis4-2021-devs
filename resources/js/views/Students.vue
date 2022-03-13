<template>
    <div>
        <h1 align="center" class="my-3 primary--text" v-if="!fromHome">
            <v-badge
                color="#534689"
                :content="this.$store.getters.students.length"
            >
                STUDENTS
            </v-badge>
        </h1>
        <v-container :class="{ 'pa-1': fromHome }">
            <v-data-table
                :headers="tableHeaders"
                :items="this.$store.getters.students"
                :hide-default-footer="true"
                mobile-breakpoint="0"
                disable-pagination
            >
                <template v-slot:item="{item, index}">
                    <tr>
                        <td>{{index + 1}}.</td>
                        <td class="text-uppercase">
                            {{ item.last_name }},
                            {{ item.first_name }}
                            <template v-if="item.middle_name !== ''">
                                {{ item.middle_name.substr(0, 1) }}.
                            </template>
                            <template v-if="item.extension !== ''">
                                {{ item.extension }}
                            </template>
                        </td>
                        <td class="text-uppercase">
                            {{item.group ? item.group.group_name : '' }}
                        </td>
                    </tr>
                </template>
            </v-data-table>
        </v-container>
    </div>
</template>

<script>
    export default {
        name: 'Students',
        components: {},
        data() {
            return {
                tableHeaders: [
                    {
                        text: '',
                    },
                    {
                        text : 'NAME',
                        value: 'last_name'
                    },
                    {
                        text : 'GROUP',
                        value: 'group.group_name'
                    }
                ]
            }
        },
        computed: {},
        methods : {},
        props   : {
            fromHome: false
        },
        mounted() {
            document.title = 'STUDENTS | ' + this.$store.state.app.name
        }
    }
</script>

<style scoped>

</style>
