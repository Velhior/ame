require('./bootstrap');
require('./custom');
window.Vue = require('vue');
import Buefy from 'buefy'
Vue.use(Buefy);
import VueAwesomeSwiper from 'vue-awesome-swiper'
Vue.use(VueAwesomeSwiper);
var app = new Vue({ el: '#app', });
// Vue.component('example', require('./components/Example.vue'));


