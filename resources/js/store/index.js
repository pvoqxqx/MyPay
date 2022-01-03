import Vue from "vue"
import Vuex from "vuex"
import currentServices from "./modules/currentServices";
import gamesWithServices from "./modules/gamesWithServices"

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        gamesWithServices,
        currentServices
    }
})
