
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'Vuex';
Vue.use(Vuex);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//VueX

const store = new Vuex.Store({
    state:{
        itens:"O Curso"
    },
    mutations:{
        setItens(state,obj){
            state.itens = obj;
        }
    }
});

Vue.component('exemplo', require('./components/ExampleComponent.vue'));
Vue.component('pagina', require('./components/Pagina.vue'));
Vue.component('painel', require('./components/Painel.vue'));
Vue.component('cartao', require('./components/Cartao.vue'));
Vue.component('texto-cartao', require('./components/TextoCartao.vue'));

const app = new Vue({
    el: '#app',
    store
});
