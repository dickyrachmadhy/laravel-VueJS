require('./bootstrap'); 
window.Vue = require('vue').default;
 
import Vue from 'vue';
import VueRouter from 'vue-router'; 
import UserComponent from './components/Data/UserComponent.vue';
import LevelComponent from './components/Data/LevelComponent.vue';
Vue.use(VueRouter) 

let routes =[
    {path: '/users', component:UserComponent, name:'UserPage'},
    {path: '/level', component:LevelComponent,name:'LevelPage'},
    ]

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({
    routes
});

const app = new Vue({
    el: '#app',
    router
});
