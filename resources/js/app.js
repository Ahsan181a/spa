import Vue from 'vue'
require('./bootstrap');
import routes from './router/index';
 Vue.component('app-header', require('./components/Header.vue').default);
const app = new Vue({
    el: '#app',
    router:routes,
});

