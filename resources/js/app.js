require('./bootstrap');
window.Vue = require('vue').default;


Vue.component('modal-component', require('./components/Modal.vue').default);
Vue.component('input-component', require('./components/Input.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);

const app = new Vue({
  el: '#app',
});

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    Vue.use(plugin)

    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})




