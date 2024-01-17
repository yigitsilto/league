import {createApp} from 'vue'
import 'tailwindcss/tailwind.css';
import router from "./router/index.js";

import App from './App.vue'

import axios from 'axios'

axios.defaults.baseURL = 'http://localhost/api/';

createApp(App).use(router).mount("#app")

