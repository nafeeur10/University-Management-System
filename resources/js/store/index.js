import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: () => ({
        lang: 'eng'
     }),
    mutations: { 
        changeLanguage(state, payload) {
            return state.lang = payload
        }
     },
    actions: { 
        changeLanguage(context) {
            let language = localStorage.getItem('eru-lang');
            context.commit("changeLanguage", language)
        }
     },
    getters: { 
        getLanguage(state) {
            return state.lang
        }
    }
})