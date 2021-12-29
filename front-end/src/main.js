import Vue from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
import axios from 'axios';

Vue.config.productionTip = false;

Vue.filter('capitalize', function (value) {
  if (!value) return ''
  value = value.toString()
  return value.charAt(0).toUpperCase() + value.slice(1)
})

axios.defaults.baseURL = process.env.VUE_APP_API_BASE_URL ?? 'http://localhost:8000';

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app');

