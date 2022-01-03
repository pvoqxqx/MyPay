<template>
    <v-container class="games-table-form mx-auto">

        <loader-component
            class="games-loader"
            v-if="loading"
        ></loader-component>

        <div v-else>
            <div class="service-header mb-2">
                <h1 class="game-header my-auto"> {{ gameSlug }} </h1>

                <v-btn
                    class="ms-auto my-auto"
                    @click="back"
                >
                    Go back
                </v-btn>
            </div>


            <v-card>
                <v-tabs grow v-model="active_tab">
                    <v-tab
                        v-for="service of services"
                        :key="service.id"
                        :to="`/${gameSlug}/${service.service_name}`"
                    >
                        {{ service.service_name }}
                    </v-tab>
                </v-tabs>

                <v-tabs-items v-model="active_tab">
                    <v-tab-item
                        v-for="service of services"
                        :key="service.id"
                    >
                        <v-card flat>
                            <v-card-text>
                                {{ service.service_name }}
                            </v-card-text>
                        </v-card>
                    </v-tab-item>
                </v-tabs-items>
            </v-card>
        </div>
    </v-container>
</template>

<script>
import {mapGetters, mapActions, mapState} from 'vuex'

export default {
    name: "GamesTable",
    data() {
        return {
            gameSlug: this.$route.params['gameName'],
            serviceName: this.$route.params['serviceName'],
            active_tab: this.serviceName,
            loading: true,
        }
    },

    computed: mapState({
        services: state => state.currentServices.services
    }),
    created() {
        this.getServices().then(() => {
            this.loading = false;
        });
    },
    methods: {
        getServices() {
            return this.$store.dispatch('currentServices/GET_SERVICES_FROM_API', this.gameSlug)
        },
        back() {
            this.$store.dispatch('currentServices/SERVICES_CLEAR');

            this.gameSlug = '';
            this.serviceName = '';
            this.active_tab = '';

            // возврат на главную
            this.$router.push({name: 'all-games'});
        },
    },

    watch: {
        $route() {
            this.active_tab = this.$route.params['serviceName'];
        }
    },
}
</script>

<style scoped>

.service-header {
    display: flex;
}

.games-loader {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

</style>
