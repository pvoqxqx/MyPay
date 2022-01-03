export default {
    namespaced: true,

    actions: {
        GET_GAMES_FROM_API({commit}) {
            return axios.get('/api/games_with_services')
                .then((response) => {
                    commit('SET_GAMES_TO_STATE', response.data);
                    return response.data;
                })
                .catch((error) => {
                    console.log(error);
                    return error;
                });
        }
    },
    mutations: {
        SET_GAMES_TO_STATE: (state, games) => {
            state.games = games;
        },
    },
    state: {
        games: [],
        currentGameInfo: [],
    },
    getters: {
        getGames: state => {
            return state.games;
        },
    },
}
