
require('./bootstrap');

window.Vue = require('vue');
// import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import {routes} from './routes';

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);


const router = new VueRouter({
    routes,// short for `routes: routes`
    mode:'history'
  })
  

const app = new Vue({
    el: '#app',
    router
});
