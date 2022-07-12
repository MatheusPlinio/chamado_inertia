require('./bootstrap');
window.Vue = require('vue').default;


Vue.component('modal-component', require('./components/Home/Modal.vue').default);
Vue.component('input-component', require('./components/Home/Input.vue').default);
Vue.component('footer-component', require('./components/Home/Footer.vue').default);
Vue.component('pagination-component', require('./components/Pagination.vue').default);

const app = new Vue({
  el: '#app',
});

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    Vue
      .use(plugin)
      .mixin({ methods: { route } })

    new Vue({
      render: h => h(App, props),
    }).$mount(el)
    InertiaProgress.init()
  },
})




