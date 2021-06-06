require('./bootstrap');
import Vue from 'vue'
import App from './App.vue'
import router from './routes.js'

Vue.config.devtools = true

// const app = new Vue({
//   el: '#app',
//   components: { App },
//   template: '<App/>',
//   router,
//   data: {
//     currentRoute: window.location.pathname,
//   }
// });

new Vue({
  router,
  render: h => h(App),
  data: {
    currentRoute: window.location.pathname,
  }
}).$mount('#app');
