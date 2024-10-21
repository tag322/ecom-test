import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import getCookie from './functions/index'
import axios from 'axios'


const app = createApp(App)
.use(store)
.use(router)


app.config.globalProperties.getCookie = getCookie

app.config.globalProperties.$http = axios;

app.mount('#app')
