<template>
    <v-container class="grey lighten-5" :class="{'loading': loading}">

        <loader-component
            class="games-loader"
            v-if="loading"
        ></loader-component>

        <div v-else>
            <v-row
                class="mx-auto"
                style="justify-content: center;"
            >
                <v-col
                    v-for="game in games"
                    :key="game.id"
                    v-if="game.services.length"
                    cols="12"
                    xl="3"
                    lg="6"
                    md="6"
                    sm="12"
                    xs="1"
                >
                    <v-card
                        class="m-2"
                        elevation="2"
                        loading
                    >
                        <v-card-title>
                            {{ game.name | uppercase }}
                        </v-card-title>

                        <v-card-actions
                            style="justify-content: center;"
                        >
                            <div v-for="service in game.services">
                                <router-link
                                    class="link"
                                    :to="{path: `/${game.slug}/${service.service_name}`}"
                                >
                                    <v-btn
                                        class="m-1 text-decoration-none"
                                        outlined
                                        target="_blank"
                                    >
                                        {{ service.service_name | uppercase }}
                                    </v-btn>
                                </router-link>
                            </div>
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>
        </div>
    </v-container>
</template>

<script>
import {mapState, mapActions, mapMutations, mapGetters} from 'vuex'

export default {
    data() {
        return {
            name: "GamesComponent",
            loading: true,
        }
    },
    computed: mapState({
        games: state => state.gamesWithServices.games
    }),
    created() {
        this.getGames().then(() => {
            this.loading = false;
        });
    },
    methods: {
        getGames() {
            return this.$store.dispatch('gamesWithServices/GET_GAMES_FROM_API');
        }
    },
    filters: {
        uppercase(value) {
            return value.toUpperCase();
        }
    }
}
</script>

<style scoped>

.link {
    text-decoration: none;
    color: inherit;
}

.games-loader {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

</style>
