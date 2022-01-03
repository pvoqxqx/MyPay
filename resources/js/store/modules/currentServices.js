export default {
    namespaced: true,

    actions: {
        GET_SERVICES_FROM_API({commit}, gameSlug) {
            return axios.get('/api/services/'+gameSlug)
                .then((response) => {
                    commit('SET_SERVICES_TO_STATE', response.data);
                    return response.data;
                })
                .catch((error) => {
                    console.log(error);
                    return error;
                });
        },
        SERVICES_CLEAR({commit}) {
            commit('SET_SERVICES_TO_STATE', null);
        }
    },
    mutations: {
        SET_SERVICES_TO_STATE: (state, dataServices) => {
            state.services = dataServices;
        },
    },
    state: {
        services: [],
    },
    getters: {
        getServices: state => {
            return state.services;
        },
    },
}
