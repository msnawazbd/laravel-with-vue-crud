
require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


Vue.component('contact-index', require('./components/Index.vue').default);
Vue.component('contact-create', require('./components/Create.vue').default);
Vue.component('contact-show', require('./components/Show.vue').default);

/*Vue.component('example', require('./components/Example.vue').default);
Vue.component('welcome', require('./components/Welcome.vue').default);*/

const app = new Vue({
    el: '#app',
});
