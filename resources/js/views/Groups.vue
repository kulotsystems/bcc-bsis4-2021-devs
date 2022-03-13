<template>
    <div>
        <h1 align="center" class="my-3 primary--text" v-if="!fromHome">
            <v-badge
                color="#534689"
                :content="this.$store.getters.groups.length"
            >
                GROUPS
            </v-badge>
        </h1>
        <v-container :class="{ 'pa-1': fromHome }">
            <v-card v-for="(group, index) in this.$store.getters.groups" :key="group.name" class="mb-5">
                <v-card-title class="primary lighten-3 white--text justify-center pa-2">
                    <div class="flex-grow-1 d-flex">
                        <v-badge
                            color="#534689"
                            class="ma-1"
                            :content="index + 1"
                            left
                            bordered
                        >
                        </v-badge>
                        <h3 class="font-weight-thin flex-grow-1 text-center">
                            {{ group.name }}
                        </h3>
                    </div>
                </v-card-title>
                <v-card-subtitle>
                    <div class="px-sm-3 pt-3 mt-4 primary--text lighten-10 subtitle-1">
                        <h4 class="subtitle-1 font-weight-medium">PROJECT:</h4>
                        <span class="headline">{{ group.project }}</span>
                    </div>
                    <div class="px-sm-3 pt-4 primary--text subtitle-1">
                        <h4 class="subtitle-1 font-weight-medium">MEMBERS:</h4>
                        <v-data-table
                            :headers="tableHeaders"
                            :items="normalizeStudents(group.students)"
                            :hide-default-header="true"
                            :hide-default-footer="true"
                            mobile-breakpoint="0"
                            disable-pagination
                        >
                            <template v-slot:item="{ item, index }">
                                <tr>
                                    <td>{{ index + 1 }}.</td>
                                    <td class="text-uppercase">
                                        {{ $store.getters.studentsObj[item.student_id].last_name }},
                                        {{ $store.getters.studentsObj[item.student_id].first_name }}
                                        <template v-if="$store.getters.studentsObj[item.student_id].middle_name !== ''">
                                            {{ $store.getters.studentsObj[item.student_id].middle_name.substr(0, 1) }}.
                                        </template>
                                        <template v-if="$store.getters.studentsObj[item.student_id].extension !== ''">
                                            {{ $store.getters.studentsObj[item.student_id].extension }}
                                        </template>
                                    </td>
                                    <td align="right">
                                        <span v-for="role in item.roles" :key="role">
                                            <v-tooltip left>
                                                <template v-slot:activator="{ on, attrs }">
                                                    <v-chip
                                                        :color="role.toString().toLowerCase() == 'leader' ? 'red' : ( role.toString().toLowerCase() === 'developer' ? 'blue' : 'green')"
                                                        class="white--text ma-1"
                                                        v-bind="attrs"
                                                        v-on="on"
                                                    >
                                                        <span class="text-uppercase">{{ role.substr(0, 1) }}</span>
                                                    </v-chip>
                                                </template>
                                                <span class="text-uppercase">{{ role }}</span>
                                            </v-tooltip>
                                        </span>
                                    </td>
                                </tr>
                            </template>
                        </v-data-table>
                    </div>
                </v-card-subtitle>

                <v-card-actions class="justify-center">
                    <v-btn @click="group.show_desc = !group.show_desc" text block>
                        <span left>{{ group.show_desc ? 'READ LESS' : 'READ MORE' }}</span>
                        <v-icon right>{{ group.show_desc ? 'expand_less' : 'expand_more' }}</v-icon>
                    </v-btn>
                </v-card-actions>

                <v-expand-transition>
                    <div v-show="group.show_desc" class="caption">
                        <v-divider></v-divider>
                        <div class="pa-6" style="text-align: justify">
                            {{ group.description }}
                        </div>
                    </div>
                </v-expand-transition>
            </v-card>
        </v-container>
    </div>
</template>

<script>
    export default {
        name: 'Groups',
        components: {},
        data() {
            return {
                tableHeaders: [
                    {
                        text: '',
                    },
                    {
                        text : 'STUDENT',
                    },
                    {
                        text : 'ROLES',
                    }
                ]
            }
        },
        props: {
            fromHome: false
        },
        computed: {},
        methods : {
            // remove redundant students due to multiple roles
            normalizeStudents(students) {
                let normalized = {};
                for(let i=0; i<students.length; i++) {
                    let student = students[i];
                    if(normalized[student.student_id] === undefined) {
                        // insert
                        normalized[student.student_id] = {
                            student_id: student.student_id,
                            roles     : [student.role]
                        }
                    }
                    else {
                        // update : append role
                        normalized[student.student_id].roles.push(student.role)
                    }
                }
                return Object.values(normalized);
            }
        },
        mounted() {
            document.title = 'GROUPS | ' + this.$store.state.app.name
        }
    }
</script>

<style scoped>

</style>
