/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var globals = require('./config');
window.Vue = require('vue');
import moment from 'moment';
import CKEditor from '@ckeditor/ckeditor5-vue';
import {Form, HasError, AlertError} from 'vform';
import Gate from './Gate';
Vue.prototype.$gate=new Gate(window.user);

import VueProgressBar from 'vue-progressbar';
import VueRouter from 'vue-router';
import swal from 'sweetalert2';
import Popper from 'popper.js';
window.Popper = Popper;
window.Form = Form;
window.GloabalUrl=globals.config.base_url;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('pagination', require('laravel-vue-pagination'));


Vue.use(VueRouter);
Vue.use(CKEditor);
let routes = [
    {path: globals.config.base_url + '/dashboard', component: require('./components/Dashboard.vue').default},
    {path: globals.config.base_url + '/developer', component: require('./components/Developer.vue').default},
    {path: globals.config.base_url + '/profile', component: require('./components/Profile.vue').default},
    {path: globals.config.base_url + '/users', component: require('./components/Users.vue').default},
    {path: globals.config.base_url + '/category-post', component: require('./components/Category/CategoryPost/Category.vue').default},
    {path: globals.config.base_url + '/category-post/insert-or-update', component: require('./components/Category/CategoryPost/InsertUpdate.vue').default},
    // {path: globals.config.base_url + '*', component: require('./components/NotFound.vue').default}
]
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})
Vue.filter('upText', function (text) {
    return text.charAt(0).toUpperCase() + text.slice(1)
});
Vue.filter('myDate', function (created) {
    return moment(created).format('MMMM Do YYYY')
});

window.Fire=new Vue();
const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'top',
    inverse: false
}

Vue.use(VueProgressBar, options)

window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.toast = toast;

window.fire = new Vue();
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);
Vue.component(
    'not-found',
    require('./components/NotFound.vue').default
);

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router,
    data:{
        search:''
    },
    methods:{
        searchit:_.debounce(()=>{
            Fire.$emit('searching');
        },2000)
    }
});
